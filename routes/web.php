<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/////fronent.
Route::get('/clc', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
        // Artisan::call('view:clear');
    Session::flush();
    return "Cleared!";

});
//Frontend
Route::get('/', 'Frontend\HomeController@Home');
Route::get('/changelang', 'Frontend\HomeController@ChangeLang');

Route::get('/about-us', function(){
    $data = array(
        'banner' => App\Slide::where('page',2)->first(),
    );
    return view('frontend.about-us',$data);
});

Route::get('/article', function(){
    $data = array(
        'data' => \App\Blog::paginate(6),
        'banner' => App\Slide::where('page',5)->first(),
    );
    return view('frontend.article',$data);
});


Route::get('/cart', function(){
    return view('frontend.cart');
});


Route::get('/contact', function(){
    return view('frontend.caontact');
});
Route::post('sendcontact','Frontend\CustomerController@Customersendmail');


Route::get('privacy', function(){
    return view('frontend.privacy');
});


Route::get('/detail-article/{id}', function($id){
    $data = array(
        'data' => \App\Blog::where('id_blog',$id)->first(),
        'img' => \App\Blog_gallery::where('id_blog',$id)->get(),
        'banner' => App\Slide::where('page',5)->first(),

    );
    return view('frontend.detail-article',$data);
});


Route::get('/detail-news/{id}', function($id){
    $data = array(
        'data' => \App\News::where('id_new',$id)->first(),
        'img' => \App\News_gallery::where('id_new',$id)->get(),
    );
    return view('frontend.detail-news',$data);
});


Route::get('/detail-product/{id}', function($id){
    $data = array(
        'item'  => \App\Product::where('id_product',$id)->first(),
        'imgs'  => \App\ProductGallery::where('id_product',$id)->orderby('sort')->get(),
        'review' => \App\Review::where('product_id',$id)->where('display',1)->get()
    );
    ///////////////update view
    $view  = \App\ProductView::where('id_product',$id)->first();
    if(!empty($view)){
        $view->view = $view->view + 1;
        $view->save();
    }else{
        $newView = new \App\ProductView;
        $newView->view = 1;
        $newView->id_product = $id;
        $newView->save();
    }

    return view('frontend.detail-product',$data);
});


Route::get('/userlogin', function(){
    return view('frontend.login');
});
Route::get('/forgot', function(){
    return view('frontend.forgot');
});

Route::get('/forgot', function(){
    return view('frontend.forgot');
});


Route::get('/news', function(){
    $data = array(
        'data' => \App\News::orderBy('created_at','DESC')->where('status_new',NULL)->paginate(6),
        'banner' => App\Slide::where('page',3)->first(),

    );
    // dd($data['data']);
    return view('frontend.news',$data);
});

Route::group(['middleware'=>['loginfrontend']],function(){
    Route::get('/order-history', function(){
        $data = array(
            'order'  => \App\Order::join('product_order_item','product_order.id_order','=','product_order_item.id_order')
                                    ->where('customer_id',Session::get('customer_id'))->orderby('product_order.created_at','desc')->get(),
        );
        return view('frontend.order-history',$data);
    });
    
    Route::get('/payment/{id}', function($id){
        // dd(Session::all());
            $data = array(
                'id'   => $id,
                'customer'=> App\Customer::where('customer_id',Session::get('customer_id'))->first(),
            );
        return view('frontend.payment',$data);
    });

    ////////////////////controller order
    Route::post('/storeorder','Frontend\OrderController@StoreOrder');

     ////////////////////controller payment
     Route::post('/storepayment','Frontend\PaymentController@storePayment');


     ////////////////controller review
     Route::post('/comment', 'Admin\ReviewController@comment');
});




Route::get('/product/{cat}', function($cat){
    
    if($cat == 'search'){
        $data = array(
            'search'  => Session::get('search_product'),
            'cate'  =>  'search',
            'keyword'   => Session::get('keyword'),
        );
        return view('frontend.product',$data);
    }else{
        $category =  \App\Category::where('category_name_th','like',$cat)->orwhere('category_name_en','like',$cat)->first();
     
        $product = \App\Product::where('product_display',0)->where('id_category',$category->id_category)->get();
        $data = array(
            'products'  => $product,
            'cate'       => $category
        );
        return view('frontend.product',$data);
    }
 
});

Route::get('/product/{cat}/{subcate}', function($cat,$subcate){
    if(!empty($subcate)){
        $category =  \App\Category::where('category_name_th','like',$cat)->orwhere('category_name_en','like',$cat)->first();
        $subcategory =  \App\SubCategory::where('subcategory_name_th','like','%'.$subcate.'%')->orwhere('subcategory_name_en','like','%'.$subcate.'%')->first();
        $product = \App\Product::where('product_display',0)->where('id_category',$category->id_category)
                                                           ->where('id_subcategory', $subcategory->id_subcategory)->get();
        $data = array(
            'products'  => $product,
            'cate'       => $category,
            'subcate'   =>  $subcategory,
        );
        return view('frontend.product',$data);
    }else{
        $category =  \App\Category::where('category_name_th','like',$cat)->orwhere('category_name_en','like',$cat)->first();
        $product = \App\Product::where('product_display',0)->where('id_category',$category->id_category)->get();
        $data = array(
            'products'  => $product,
            'cate'       => $category
        );
        return view('frontend.product',$data);
    }
 
});

Route::get('/product-popular/{cat}', function($cat){

  
    $category =  \App\Category::where('category_name_th','like',$cat)->orwhere('category_name_en','like',$cat)->first();

    if($category->status == 0){

        $popular = \App\OrderItem::join('product','product_order_item.product_id','=','product.id_product')
                                    ->select('product.id_product')
                                    ->where('id_category',$category->id_category)
                                    ->groupBy('id_product')
                                    ->get();
        $data = array(
            'popular'       => $popular,
            'cate'          => $category,
        );
        
    }else{
        $popular = \App\Popular::where('id_category',$category->id_category)->get();
        $data = array(
            'popular'       => $popular,
            'cate'          => $category,
        );
        
    }
  
    return view('frontend.product',$data);

});



Route::get('/promotion', function(){
    $data = array(
        'data' => \App\Promotion::get(),
        'banner' => App\Slide::where('page',4)->first(),
        'subbanner' =>  DB::Table('subbanner')->where('subbanner_page',2)->orderBy('subbanner_sort','ASC')->get(),
    );
    return view('frontend.promotion',$data);
});

Route::get('/userregister', function(){
    $data = array(
        'province' => DB::Table('provinces')->get(),
    );
    return view('frontend.register',$data);
});
Route::get('getProvince/{id}','Frontend\GetdataController@getProvince');
Route::get('getAmphure/{id}','Frontend\GetdataController@getAmphure');
Route::get('getDistrict/{id}','Frontend\GetdataController@getDistrict');
Route::get('getSubDistrict/{id}','Frontend\GetdataController@getSubDistrict');
Route::post('customerregister','Frontend\CustomerController@CustomerRegister');
Route::get('searchproduct','Frontend\GetdataController@searchproduct');
Route::get('checkprice/{price}','Frontend\GetdataController@checkprice');

Route::get('/contact', function(){
    return view('frontend.contact');
});

Route::get('tested',function(){
    $d = Crypt::decryptString('eyJpdiI6IktISTVtZDJSdzVLRnlGSzQrYUMwV0E9PSIsInZhbHVlIjoidmR4WXBtam5VWmpcL3N1TkVseVlra2c9PSIsIm1hYyI6IjJlZWM4MGNlZjY3NjAyMWQ4NDg2OGNhNzI1NzA2NzMzYWQ5NjE3NGNjMjhjZTBhNGI2MWI3ZGJiYjA5MGViNmYifQ==');
    dd($d);
    return view('email.forgotpassword');
});
Route::get('footerd',function(){
    return view('email.footer');
});
/////////////////////////////////////////////////controller frontend

Route::get('addcart/{id}', 'Frontend\AddacartController@addCart');
Route::get('countproduct', 'Frontend\AddacartController@countproduct');
Route::get('deleteitemincart', 'Frontend\AddacartController@deleteitemincart');



////////////////////////////////////////// admin  admin admin admin////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////login with facebook and google
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->name('redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('handleProviderCallback');
//////normal login
Route::post('createcustomer/{id}/{model}', 'Auth\RegisterController@CreatedCustomer')->name('createCustomer');
Route::post('logincustomer/{model}', 'Auth\LoginController@LogIn')->name('LogIn');
Route::post('forgotpassword','Auth\ForgotPasswordController@ForgotPassword');

/////login

Route::get('logout', 'Auth\LoginController@LogOut');
// Route::post('resetpassword/{model}/{id}','Auth\ResetPasswordController@ResetPassword')->name('ResetPassword');

// Route::get('sortproduct','Admin\ProductsController@getsortproduct');
// Route::get('sortproductorder','Admin\ProductsController@sortproductorder');
// Route::get('sortreview','Admin\ProductsController@getsortreview');
// Route::get('searchproduct','Admin\ProductsController@searchproduct');

///////////////////////// ///////////////////////////////////////////backend////////////////////////////////////////////////////
Route::get('admin','Admin\UsersController@LoginAdmin');
Route::post('checkLoginadmin','Admin\UsersController@CheckLoginAdmin');

Route::group(['middleware'=>['AdminLogin:1']],function(){ 

    Route::get('/adduser', 'Admin\UsersController@AddUser');
    Route::get('/edituser/{id}', 'Admin\UsersController@EditUser');
    Route::get('/usercontent', 'Admin\UsersController@ShowUserContent');
    Route::post('/updateUser', 'Admin\UsersController@updateUser');

    Route::post('createuser', 'Admin\UsersController@CreatedUser');
    
        ////silde
    Route::get('/addslide', 'Admin\SlidesController@AddSlide');
    Route::get('/editslide/{id}', 'Admin\SlidesController@EditSlide');
    Route::get('/slidecontent', 'Admin\SlidesController@ShowSlideContent');
    Route::get('change_sortslide','Admin\SlidesController@change_sortslide');
    Route::get('change_select','Admin\SlidesController@change_select');
    Route::get('viewslide/{id}','Admin\SlidesController@ViewSlide');

    Route::post('/saveslide', 'Admin\SlidesController@SaveSlide')->name('SaveSlide');
    Route::post('/updateslide', 'Admin\SlidesController@UpdateSlide');

    //////product categoryController
    /////->categoryController1
    Route::get('/addcategory', 'Admin\categoryController@Addcategory');
    Route::get('/categorycontent', 'Admin\categoryController@ShowcategoryContent');
    Route::get('/editcategory/{id}', 'Admin\categoryController@Editcategory');
    Route::post('/savecategory', 'Admin\categoryController@Savecategory');
    Route::post('/updatecategory/{id}', 'Admin\categoryController@Updatecategory');
    Route::get('/changsortcate', 'Admin\categoryController@changsortcate');
    Route::get('/viewcategory', 'Admin\categoryController@ViewCategory');
    Route::get('/iewvcategory', 'Admin\categoryController@ViewCategory');

    /////->type2
    Route::get('/addsubcategory', 'Admin\categoryController@Addsubcategory');
    Route::get('/subcategorycontent', 'Admin\categoryController@ShowsubcategoryContent');
    Route::get('/editsubcategory/{id}', 'Admin\categoryController@Editsubcategory');
    Route::post('/savesubcategory', 'Admin\categoryController@SaveSubcategory');
    Route::post('/updatesubcategory/{id}', 'Admin\categoryController@UpdateSubcategory');
    Route::get('/getcategory', 'Admin\categoryController@Getcategory');
    Route::get('/viewsubcategory', 'Admin\categoryController@ViewSubCategory');

    /////////////banner of category
    Route::get('/addbanner', 'Admin\BannerController@Addbanner');
    Route::get('/editbanner/{id}', 'Admin\BannerController@Editbanner');
    Route::get('/bannercontent', 'Admin\BannerController@ShowbannerContent');
    Route::get('change_sortbanner','Admin\BannerController@change_sortbanner');
    Route::get('change_select','Admin\BannerController@change_select');
    Route::get('viewbanner/{id}','Admin\BannerController@Viewbanner');

    Route::post('/savebanner', 'Admin\BannerController@Savebanner');
    Route::post('/updatebanner', 'Admin\BannerController@Updatebanner');

    ///////////////product
    Route::get('/productcontent', 'Admin\ProductController@ProductContent');
    Route::get('/addproduct', 'Admin\ProductController@AddProduct');
    Route::get('/editproduct/{id}', 'Admin\ProductController@EditProduct');
    Route::post('/saveproduct', 'Admin\ProductController@SaveProduct');
    Route::post('/updateproduct/{id}', 'Admin\ProductController@UpdateProduct');
    Route::get('/getsubcate', 'Admin\ProductController@GetSubCate');
    Route::get('/displayproduct', 'Admin\ProductController@DisplayProduct');
    Route::get('/viewproduct', 'Admin\ProductController@ViewProduct');
    Route::get('/showproduct', 'Admin\ProductController@ShowProduct');
    Route::get('deleteproduct/{id}','Admin\ProductController@DeleteProduct');

    ////////////////////blog///////////////////////////
    Route::get('/addblog', 'Admin\BlogController@AddBlog');
    Route::get('/deleteblog/{id}', 'Admin\BlogController@DeleteBlog');
    Route::get('/editblog/{id}', 'Admin\BlogController@EditBlog');
    Route::get('/blogcontent', 'Admin\BlogController@ShowBlogContent');
    Route::get('/viewblog/{id}', 'Admin\BlogController@ViewBlog');
    Route::get('/detailblog/{id}', 'Admin\BlogController@DetailBlog');

    Route::get('/viewaddblog/{id}', 'Admin\BlogController@viewaddblog');


    Route::post('/saveviewblog', 'Admin\BlogController@SaveViewBlog');
    Route::post('/saveblog', 'Admin\BlogController@SaveBlog');
    Route::post('/updateblog/{id}', 'Admin\BlogController@UpdateBlog');
    Route::post('/viewupdateblog/{id}', 'Admin\BlogController@ViewUpdateBlog');
    Route::get('/viewsaveblog/{id}', 'Admin\BlogController@ViewSaveBlog');
    Route::get('/viewblogascustomer/{id}', 'Admin\BlogController@ViewBlogAscustomer');

        ////pagebanner
    Route::get('pagecontent',function(){
        return view('Admin.pagebanner.page-content');
    });
    Route::get('banner/{id}', 'Admin\PageBannerController@AddPagebanner');
    Route::post('savepagebanner', 'Admin\PageBannerController@Savepagebanner');

    Route::get('subbanner',function(){
        return view('Admin.pagebanner.sub-banner');
    });
    Route::get('editsub/{id}', 'Admin\PageBannerController@EditSubbanner');
    Route::post('savesubbanner', 'Admin\PageBannerController@SaveSubbanner');


    ////////////////////new///////////////////////////
    Route::get('/addnew', 'Admin\NewsController@Addnew');
    Route::get('/deletenew/{id}', 'Admin\NewsController@Deletenew');
    Route::get('/editnew/{id}', 'Admin\NewsController@Editnew');
    Route::get('/newcontent', 'Admin\NewsController@ShownewContent');
    Route::get('/detailnew/{id}', 'Admin\NewsController@Detailnew');
    Route::post('/savenew', 'Admin\NewsController@Savenew');
    Route::post('/updatenew/{id}', 'Admin\NewsController@Updatenew');
    Route::get('/changestatusnew', 'Admin\NewsController@ChangeStatusNew');

    ////////////////////promotion///////////////////////////
    Route::get('/addpromotion', 'Admin\PromotionController@Addpromotion');
    Route::get('/deletepromotion/{id}', 'Admin\PromotionController@Deletepromotion');
    Route::get('/editpromotion/{id}', 'Admin\PromotionController@Editpromotion');
    Route::get('/promotioncontent', 'Admin\PromotionController@ShowpromotionContent');
    // Route::get('/viewblog/{id}', 'Admin\BlogController@ViewBlog');
    Route::get('/detailpromotion/{id}', 'Admin\PromotionController@Detailpromotion');

    // Route::get('/viewaddblog/{id}', 'Admin\BlogController@viewaddblog');


    // Route::post('/saveviewblog', 'Admin\BlogController@SaveViewBlog');
    Route::post('/savepromotion', 'Admin\PromotionController@Savepromotion');
    Route::post('/updatepromotion/{id}', 'Admin\PromotionController@Updatepromotion');
    // Route::post('/viewupdateblog/{id}', 'Admin\BlogController@ViewUpdateBlog');
    // Route::get('/viewsaveblog/{id}', 'Admin\BlogController@ViewSaveBlog');
    // Route::get('/viewblogascustomer/{id}', 'Admin\BlogController@ViewBlogAscustomer');




});


Route::group(['middleware'=>['AdminLogin:1,2']],function(){ 

        Route::get('Logoutadmin','Admin\UsersController@LogoutAdmin');

                
        /////////////////////popularproduct
        Route::get('/populatproductcontent', 'Admin\PopularProductController@popularContent');
        Route::get('/editpoppularproduct/{id}', 'Admin\PopularProductController@Editpopular');
        Route::get('/selectproduct', 'Admin\PopularProductController@selectproduct');
        Route::get('/removeproduct', 'Admin\PopularProductController@removeproduct');
        Route::get('/viewpopular', 'Admin\PopularProductController@viewpopular');
        Route::get('/changedisplaypopular', 'Admin\PopularProductController@changedisplaypopular');


        ///////////////production
        Route::get('/production', 'Admin\ProductionController@productioncontent');
        Route::get('/updateproduction', 'Admin\ProductionController@updateproduction');




        ////////////////order
        Route::get('/ordercontent', 'Admin\OrderController@ShowOrder');
        Route::get('/orederdetail/{id}', 'Admin\OrderController@OrederDetail');
        Route::get('receipt','Admin\OrderController@receipt');
        Route::get('changestatus','Admin\OrderController@changestatus');
        Route::get('changeshipping','Admin\OrderController@changeshipping');

        ////review
        Route::get('/reviewcontent', 'Admin\ReviewController@ReviewContent');
        Route::get('/reviewdetail/{id}', 'Admin\ReviewController@ReviewDetail');
        Route::get('/changedisplay', 'Admin\ReviewController@changedisplay');



        ////////////////////promotionproduct///////////////////////////
        Route::get('/addpromotionproduct', 'Admin\PromotionProductController@Addpromotionproduct');
        Route::get('/editpromotionproduct/{id}', 'Admin\PromotionProductController@Editpromotionproduct');
        Route::get('/promotionproductcontent', 'Admin\PromotionProductController@ShowpromotionproductContent');
        Route::post('/savepromotionproduct', 'Admin\PromotionProductController@savepromotionproduct');
        Route::post('/updatepromotionproduct/{id}', 'Admin\PromotionProductController@updatepromotionproduct');
        Route::get('/getsecondproduct', 'Admin\PromotionProductController@getsecondproduct');

        Route::get('/addproductpromotion', 'Admin\PromotionProductController@addproductpromotion');
        Route::get('addnewsome','Admin\PromotionProductController@addnewsome');


        ////////////////////Report///////////////////////////
        Route::get('/report/{id}', 'Admin\ReportController@ReportContent');
        Route::get('/report-content', 'Admin\ReportController@ReportContent');
        Route::get('/getreport', 'Admin\ReportController@GetReport');

        Route::get('/exportPDF', 'Admin\ReportController@exportPDF');


        ////////////////////Home///////////////////////////
        Route::get('/home', 'Admin\HomeController@Home');
        Route::get('/bookingall', 'Admin\HomeController@BookingAll');




});



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//editor upload image
Route::post('summernoteupload','Admin\ContentController@SummernoteUpload');

Auth::routes();
Route::post('keep-live', 'SkoteController@live');

Route::get('template/{any}', 'HomeController@index');


/////delete
Route::get('delete/{model}/{submodel1}/{submodel2}/{id}/{fr}','Admin\ContentController@Delete')->name('Delete');

/////delete 1 table with image
Route::get('delete1table/{model}/{id}/{imagename}','Admin\ContentController@Delete1Table')->name('Delete1Table');

/////delete 2 table with image
Route::get('delete2table/{model}/{suntable}/{id}/{fr}/{imagename}','Admin\ContentController@Delete2Table')->name('Delete2Table');

/////delete 3 table with image
Route::get('delete3table/{model}/{suntable1}/{suntable2}/{id}/{fr}/{imagename}','Admin\ContentController@Delete3Table')->name('Delete2Table');


Route::get('/testmodel',function(){
    $test = \App\ArtistContent::first();
    dd($test->iframe()->first());
 });

Route::get('/table/{table}',function($table){
    dd(\DB::table($table)->get());
});

Route::get('/model/{model}',function($model){
    $model = '\\App\\'.$model;
    dd($model::get());
});




Route::get('pages-login', 'SkoteController@index');
Route::get('pages-login-2', 'SkoteController@index');
Route::get('pages-register', 'SkoteController@index');
Route::get('pages-register-2', 'SkoteController@index');
Route::get('pages-recoverpw', 'SkoteController@index');
Route::get('pages-recoverpw-2', 'SkoteController@index');
Route::get('pages-lock-screen', 'SkoteController@index');
Route::get('pages-lock-screen-2', 'SkoteController@index');
Route::get('pages-404', 'SkoteController@index');
Route::get('pages-500', 'SkoteController@index');
Route::get('pages-maintenance', 'SkoteController@index');
Route::get('pages-comingsoon', 'SkoteController@index');