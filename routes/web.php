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
        // session()->forget('key');
    return "Cleared!";

});
//Frontend
Route::get('/', function(){
    $data = array(
        'data' => App\Slide::orderBy('slide_number','ASC')->get(),
    // dd( $data['data']);
        'cate'   => \App\Category::orderBy('sort')->get()
    );
    return view('frontend.index',$data);
});

Route::get('/index', function(){
    $data = array(
        'data' => App\Slide::orderBy('slide_number','ASC')->get(),
    // dd( $data['data']);
        'cate'   => \App\Category::orderBy('sort')->get()
    );
    return view('frontend.index',$data);
});

Route::get('/about-us', function(){
    return view('frontend.about-us');
});

Route::get('/article', function(){
    $data = array(
        'data' => \App\Blog::paginate(6),
    );
    return view('frontend.article',$data);
});


Route::get('/cart', function(){
    return view('frontend.cart');
});


Route::get('/contact', function(){
    return view('frontend.caontact');
});

Route::get('/privacy', function(){
    return view('frontend.index');
});


Route::get('/detail-article/{id}', function($id){
    $data = array(
        'data' => \App\Blog::where('id_blog',$id)->first(),
        'img' => \App\Blog_Gallery::where('id_blog',$id)->get(),
    );
    return view('frontend.detail-article',$data);
});


Route::get('/detail-news/{id}', function($id){
    $data = array(
        'data' => \App\News::where('id_new',$id)->first(),
        'img' => \App\News_Gallery::where('id_new',$id)->get(),
    );
    return view('frontend.detail-news',$data);
});


Route::get('/detail-product/{id}', function($id){
    $data = array(
        'item'  => \App\Product::where('id_product',$id)->first(),
        'imgs'  => \App\ProductGallery::where('id_product',$id)->orderby('sort')->get(),
        'review' => \App\Review::where('product_id',$id)->get(),
    );
    return view('frontend.detail-product',$data);
});


Route::get('/userlogin', function(){
    return view('frontend.login');
});

Route::get('/news', function(){
    $data = array(
        'data' => \App\News::paginate(6),
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
        $data = array(
            'id'   => $id,
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
    $category =  \App\Category::where('category_name_th','like',$cat)->orwhere('category_name_en','like',$cat)->first();
    $product = \App\Product::where('product_display',0)->where('id_category',$category->id_category)->get();
    $data = array(
        'products'  => $product,
        'cate'       => $category
    );
    return view('frontend.product',$data);
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
        $product = \App\Product::where('product_display',0)->where('id_category',$category->id_category)->get();
        $data = array(
            'products'  => $product,
            'cate'       => $category
        );

        return view('frontend.product',$data);

});




Route::get('/promotion', function(){
    $data = array(
        'data' => \App\Promotion::get(),
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

Route::get('/contact', function(){
    return view('frontend.contact');
});

Route::get('tested',function(){
    // Mail::send('email.register',[],function($message){
    //     $message->to('s5904062630292@email.kmutnb.ac.th')
    //             ->subject('test email')
    //             ->from('58030218@kmail.ac.th');
    // });
    return view('email.forgotpassword');
});
Route::get('footerd',function(){
    return view('email.footer');
});
/////////////////////////////////////////////////controller frontend

Route::get('addcart/{id}', 'Frontend\AddacartController@addCart');
Route::get('deleteitemincart', 'Frontend\AddacartController@deleteitemincart');



////////////////////////////////////////// admin  admin admin admin////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////login with facebook and google
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->name('redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('handleProviderCallback');
//////normal login
Route::post('createcustomer/{id}/{model}', 'Auth\RegisterController@CreatedCustomer')->name('createCustomer');
Route::post('logincustomer/{model}', 'Auth\LoginController@LogIn')->name('LogIn');
// Route::post('forgotpassword/{model}','Auth\ForgotPasswordController@ForgotPassword')->name('ForgotPassword');

/////login

Route::get('logout', 'Auth\LoginController@LogOut');
// Route::post('resetpassword/{model}/{id}','Auth\ResetPasswordController@ResetPassword')->name('ResetPassword');

// Route::get('sortproduct','Admin\ProductsController@getsortproduct');
// Route::get('sortproductorder','Admin\ProductsController@sortproductorder');
// Route::get('sortreview','Admin\ProductsController@getsortreview');
// Route::get('searchproduct','Admin\ProductsController@searchproduct');

///////////////////////// ///////////////////////////////////////////backend////////////////////////////////////////////////////
Route::get('admin','Admin\UsersController@LoginAdmin');
  
Route::get('/adduser', 'Admin\UsersController@AddUser');
Route::get('/edituser/{id}', 'Admin\UsersController@EditUser');
Route::get('/usercontent', 'Admin\UsersController@ShowUserContent');
Route::post('/updateUser', 'Admin\UsersController@updateUser');
Route::get('Logoutadmin','Admin\UsersController@LogoutAdmin');
Route::post('checkLoginadmin','Admin\UsersController@CheckLoginAdmin');
Route::post('createuser', 'Admin\UsersController@CreatedUser');


////silde
Route::get('/addslide', 'Admin\SlidesController@AddSlide');
Route::get('/editslide/{id}', 'Admin\SlidesController@EditSlide');
Route::get('/slidecontent', 'Admin\SlidesController@ShowSlideContent');
Route::get('change_sortslide','Admin\SlidesController@change_sortslide');
Route::get('change_select','Admin\SlidesController@change_select');
Route::get('viewslide/{id}','Admin\SlidesController@ViewSlide');

Route::post('/saveslide', 'Admin\SlidesController@SaveSlide')->name('SaveSlide');
Route::post('/updateslide/{id}', 'Admin\SlidesController@UpdateSlide')->name('UpdateSlide');

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



/////////////////////popularproduct
Route::get('/populatproductcontent', 'Admin\PopularProductController@popularContent');
Route::get('/editpoppularproduct/{id}', 'Admin\PopularProductController@Editpopular');
Route::get('/selectproduct', 'Admin\PopularProductController@selectproduct');

///////////////production
Route::get('/production', 'Admin\ProductionController@productioncontent');
Route::get('/updateproduction', 'Admin\ProductionController@updateproduction');

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



////////////////////new///////////////////////////
Route::get('/addnew', 'Admin\NewsController@Addnew');
Route::get('/deletenew/{id}', 'Admin\NewsController@Deletenew');
Route::get('/editnew/{id}', 'Admin\NewsController@Editnew');
Route::get('/newcontent', 'Admin\NewsController@ShownewContent');
Route::get('/detailnew/{id}', 'Admin\NewsController@Detailnew');
Route::post('/savenew', 'Admin\NewsController@Savenew');
Route::post('/updatenew/{id}', 'Admin\NewsController@Updatenew');





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


////////////////////Report///////////////////////////
Route::get('/reportcontent', 'Admin\ReportController@ReportContent');
Route::get('/getreport', 'Admin\ReportController@GetReport');

Route::get('/report1', 'Admin\ExportExcelController@Report1');
Route::get('/report2', 'Admin\ExportExcelController@Report2');
Route::get('/report3', 'Admin\ExportExcelController@Report3');
Route::get('/report4', 'Admin\ExportExcelController@Report4');
Route::get('/report5', 'Admin\ExportExcelController@Report5');

////////////////////Home///////////////////////////
Route::get('/home', 'Admin\HomeController@Home');
Route::get('/bookingall', 'Admin\HomeController@BookingAll');





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