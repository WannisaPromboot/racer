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

//Frontend
Route::get('/', function(){
    return view('frontend.index');
});

Route::get('/about-us', function(){
    return view('frontend.about-us');
});

Route::get('/article', function(){
    return view('frontend.article');
});


Route::get('/cart', function(){
    return view('frontend.cart');
});


Route::get('/caontact', function(){
    return view('frontend.caontact');
});


Route::get('/detail-article', function(){
    return view('frontend.detail-article');
});


Route::get('/detail-news', function(){
    return view('frontend.detail-news');
});


Route::get('/detail-product', function(){
    return view('frontend.detail-product');
});


Route::get('/userlogin', function(){
    return view('frontend.login');
});

Route::get('/news', function(){
    return view('frontend.news');
});

Route::get('/order-history', function(){
    return view('frontend.order-history');
});

Route::get('/payment', function(){
    return view('frontend.payment');
});


Route::get('/product', function(){
    return view('frontend.product');
});


Route::get('/promotion', function(){
    return view('frontend.promotion');
});

Route::get('/userregister', function(){
    return view('frontend.register');
});


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
Route::post('appointment_step1/', 'Frontend\AppoinmentController@AppointmentStep1');
Route::post('rescheduleappointment/', 'Frontend\AppoinmentController@RescheduleAppointment');

Route::get('autocancle','Frontend\AppoinmentController@Autocancle');

///qrcode
Route::get('getqrcode','QrcodeController@getQrcode');
Route::get('showqrcode/{id}','QrcodeController@showQrcode');
Route::get('checkqrcode','QrcodeController@CheckQrcode');

///payment
Route::post('payment','PaymentController@StorePayment');
Route::get('checkpayment/{id}','PaymentController@CheckPayment');
Route::get('updatestatuspayment/{id}','PaymentController@UpdateStatusPayment');




////////////////////////////////////////// admin  admin admin admin////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////login with facebook and google
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->name('redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('handleProviderCallback');
//////normal login
Route::post('createcustomer/{id}/{model}', 'Auth\RegisterController@CreatedCustomer')->name('createCustomer');
Route::post('logincustomer/{model}', 'Auth\LoginController@LogIn')->name('LogIn');
// Route::post('forgotpassword/{model}','Auth\ForgotPasswordController@ForgotPassword')->name('ForgotPassword');

/////login

Route::get('logout', 'Auth\LoginController@LogOut')->name('LogOut');
// Route::post('resetpassword/{model}/{id}','Auth\ResetPasswordController@ResetPassword')->name('ResetPassword');

Route::get('getDistrictwithid/{id}','Frontend\CustomerController@getDistrictWithId');
Route::get('getAmphurewithid/{id}','Frontend\CustomerController@getAmphurewithid');

// Route::get('getSubDistrict/{id}','Frontend\CustomerController@getSubDistrict');
Route::get('getAddress','Frontend\CustomerController@getSubDistrict');
Route::get('deleteAddress/{id}','Frontend\CustomerController@deleteAddress');

Route::get('getCustomerAddress/{id}','Frontend\CustomerController@getCustomerAddress');

Route::get('selectDefaultAdress','Frontend\CustomerController@selectDefaultAdress');

/////////////get addres
Route::get('getProvince/{id}','Frontend\CustomerController@getProvince');
Route::get('getAmphure/{id}','Frontend\CustomerController@getAmphure');
Route::get('getDistrict/{id}','Frontend\CustomerController@getDistrict');
Route::get('getSubDistrict/{id}','Frontend\CustomerController@getSubDistrict');

Route::get('sortproduct','Admin\ProductsController@getsortproduct');
Route::get('sortproductorder','Admin\ProductsController@sortproductorder');
Route::get('sortreview','Admin\ProductsController@getsortreview');
Route::get('searchproduct','Admin\ProductsController@searchproduct');

///////////////////////// //////////////////////////////////////////////////////////////////
Route::get('Login_admin','Admin\UsersController@LoginAdmin');
  
Route::get('/adduser', 'Admin\UsersController@AddUser');
Route::get('/edituser/{id}', 'Admin\UsersController@EditUser');
Route::get('/usercontent', 'Admin\UsersController@ShowUserContent');
Route::post('/updateUser', 'Admin\UsersController@updateUser');
Route::get('Logoutadmin','Admin\UsersController@LogoutAdmin');
Route::get('checkLoginadmin','Admin\UsersController@CheckLoginAdmin');
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

/////->type2
Route::get('/addsubcategory', 'Admin\categoryController@Addsubcategory');
Route::get('/subcategorycontent', 'Admin\categoryController@ShowsubcategoryContent');
Route::get('/editsubcategory/{id}', 'Admin\categoryController@Editsubcategory');
Route::post('/savesubcategory', 'Admin\categoryController@SaveSubcategory');
Route::post('/updatesubcategory/{id}', 'Admin\categoryController@UpdateSubcategory');
Route::get('/getcategory', 'Admin\categoryController@Getcategory');


///////////////product
Route::get('/productcontent', 'Admin\ProductController@ProductContent');
Route::get('/addproduct', 'Admin\ProductController@AddProduct');
Route::get('/editproduct/{id}', 'Admin\ProductController@EditProduct');
Route::post('/saveproduct', 'Admin\ProductController@SaveProduct');
Route::post('/updateproduct/{id}', 'Admin\ProductController@UpdateProduct');
Route::get('/getsubcate', 'Admin\ProductController@GetSubCate');
Route::get('/displayproduct', 'Admin\ProductController@DisplayProduct');


////////////////////blog///////////////////////////
Route::get('/addblog', 'Admin\BlogController@AddBlog');
Route::get('/editblog/{id}', 'Admin\BlogController@EditBlog');
Route::get('/blogcontent', 'Admin\BlogController@ShowBlogContent');
Route::get('/viewblog/{id}', 'Admin\BlogController@ViewBlog');

Route::get('/viewaddblog/{id}', 'Admin\BlogController@viewaddblog');


Route::post('/saveviewblog', 'Admin\BlogController@SaveViewBlog');
Route::post('/saveblog', 'Admin\BlogController@SaveBlog');
Route::post('/updateblog/{id}', 'Admin\BlogController@UpdateBlog');
Route::post('/viewupdateblog/{id}', 'Admin\BlogController@ViewUpdateBlog');
Route::get('/viewsaveblog/{id}', 'Admin\BlogController@ViewSaveBlog');
Route::get('/viewblogascustomer/{id}', 'Admin\BlogController@ViewBlogAscustomer');

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
Route::post('delete/{model}/{submodel1}/{submodel2}/{id}/{fr}','Admin\ContentController@Delete')->name('Delete');

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