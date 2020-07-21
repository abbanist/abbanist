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

    Route::get('sizer', function(){
        return view('user.sizer');
    });

Auth::routes();

Route::match(['get','post'], '/admin', 'AdminController@login');

// User Routes
Route::get('/', 'IndexController@Index');
Route::group(['namespace' => 'User'],function(){

    Route::get('post/{post}','PostController@post')->name('id');
    Route::get('info/{info}','InfoController@info')->name('id');

    Route::get('page/{page}','PageController@page')->name('id');

    Route::post('send', 'MailController@send');
    Route::post('send-engiin-product', 'MailController@sendEngiinProduct');
    Route::post('sendContact', 'MailController@sendContact');

    // custom pages
    Route::get('contact','PageController@getContact');
    Route::get('products','PageController@getProductGrid');
    Route::get('blogs','PageController@getBlogGrid');
    
});



// Product Detail Page
Route::get('/product/{id}','ProductController@product');


// admin 
Route::group(['middleware' => ['auth']], function(){
    Route::get('/admin/dashboard', 'AdminController@dashboard');
    Route::get('/admin/settings', 'AdminController@settings');
    Route::get('/admin/check-pwd', 'AdminController@chkPassword');
    Route::match(['get','post'], '/admin/update-pwd', 'AdminController@updatePassword');
    
    // Posts route
    Route::match(['get', 'post'], '/admin/add-post',               'PostController@addPost');
    Route::match(['get', 'post'], '/admin/edit-post/{id}',         'PostController@editPost');
    Route::get(                   '/admin/view-posts',             'PostController@viewPosts');
    Route::get(                   '/admin/delete-post-image/{id}', 'PostController@deletePostImage');
    Route::get(                   '/admin/delete-post/{id}',       'PostController@deletePost');


    // product
    Route::match(['get', 'post'], '/admin/add-product',               'ProductController@addProduct');
    Route::match(['get', 'post'], '/admin/edit-product/{id}',         'ProductController@editProduct');
    Route::get(                   '/admin/view-products',             'ProductController@viewProducts');
    Route::get(                   '/admin/delete-product-image/{id}', 'ProductController@deleteProductImage');
    Route::get(                   '/admin/delete-product/{id}',       'ProductController@deleteProduct');

    Route::match(['get', 'post'], '/admin/add-images/{id}','ProductController@addImages');

    Route::get('/admin/delete-alt-image/{id}','ProductController@deleteProductAltImage');



    // Category
    Route::match(['get', 'post'], '/admin/add-category',               'CategoryController@addCategory');
    Route::match(['get', 'post'], '/admin/edit-category/{id}',         'CategoryController@editCategory');
    Route::get(                   '/admin/view-categories',             'CategoryController@viewCategories');
    Route::get(                   '/admin/delete-category/{id}',       'CategoryController@deleteCategory');
    
   
    // Pages route
    Route::match(['get', 'post'], '/admin/add-page',               'PageController@addPage');
    Route::match(['get', 'post'], '/admin/edit-page/{id}',         'PageController@editPage');
    Route::get(                   '/admin/view-pages',             'PageController@viewPages');
    Route::get(                   '/admin/delete-page-image/{id}', 'PageController@deletePageImage');
    Route::get(                   '/admin/delete-page/{id}',       'PageController@deletePage');
   
    
    // banner
    Route::match(['get', 'post'], '/admin/add-banner', 'BannerController@addBanner');
    Route::match(['get', 'post'], '/admin/edit-banner/{id}',         'BannerController@editBanner');
    Route::get(                   '/admin/view-banners',             'BannerController@viewBanners');
    Route::get(                   '/admin/delete-banner-image/{id}', 'BannerController@deleteBannerImage');
    Route::get(                   '/admin/delete-banner/{id}',       'BannerController@deleteBanner');
    
    
    // info
    Route::match(['get', 'post'], '/admin/add-info',               'InfoController@addInfo');
    Route::match(['get', 'post'], '/admin/edit-info/{id}',         'InfoController@editInfo');
    Route::get(                   '/admin/view-infos',             'InfoController@viewInfos');
    Route::get(                   '/admin/delete-info-image/{id}', 'InfoController@deleteInfoImage');
    Route::get(                   '/admin/delete-info/{id}',       'InfoController@deleteInfo');
    
    
    // Hamt
    Route::match(['get', 'post'], '/admin/add-hamt',               'HamtController@addHamt');
    Route::match(['get', 'post'], '/admin/edit-hamt/{id}',         'HamtController@editHamt');
    Route::get(                   '/admin/view-hamts',             'HamtController@viewHamts');
    Route::get(                   '/admin/delete-hamt-image/{id}', 'HamtController@deleteHamtImage');
    Route::get(                   '/admin/delete-hamt/{id}',       'HamtController@deleteHamt');


    // Menu Routes (Admin)
    Route::match(['get', 'post'], '/admin/add-menu',         'MenuController@addMenu');
    Route::match(['get', 'post'], '/admin/edit-menu/{id}',   'MenuController@editMenu');
    Route::match(['get', 'post'], '/admin/delete-menu/{id}', 'MenuController@deleteMenu');
    Route::get('/admin/view-menus',                          'MenuController@viewMenus');
    Route::get(                   '/admin/delete-menu-image/{id}', 'MenuController@deleteImage');
    

      // Mnu
    Route::match(['get', 'post'], '/admin/add-mnu',               'MnuController@addMnu');
    Route::match(['get', 'post'], '/admin/edit-mnu/{id}',         'MnuController@editMnu');
    Route::get(                   '/admin/view-mnus',             'MnuController@viewMnus');
    Route::get(                   '/admin/delete-mnu-image/{id}', 'MnuController@deleteMnuImage');
    Route::get(                   '/admin/delete-mnu/{id}',       'MnuController@deleteMnu');


    // Admin Routes
    Route::group(['namespace' => 'Admin'],function(){ 
        // frontend-setup (Admin)
        Route::match(['get', 'post'], '/admin/frontend-setup', 'FrontsetupController@Frontsetup');
        Route::get('/admin/delete-logo/', 'FrontsetupController@deleteLogo');
        Route::get('/admin/delete-favicon/', 'FrontsetupController@deleteFavicon');
        
        Route::get('/admin/delete-promo-bg/', 'FrontsetupController@deletePromoBg');

        Route::get('/admin/deletebannersidebar/', 'FrontsetupController@deletebannersidebar');
    });
    
    // Route::group(['middleware' => 'auth'], function () {
    // Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    // Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
    // list all lfm routes here...
// });

});

// homepage

Route::get('/logout', 'AdminController@logout');



Auth::routes();
