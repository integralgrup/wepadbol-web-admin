<?php
//insert Admin/MenuController
namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\Route;



// Login route
Route::get('/admin/login', 'App\Http\Controllers\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'App\Http\Controllers\Admin\LoginController@login')->name('admin.login.submit');
Route::get('/admin/logout', 'App\Http\Controllers\Admin\LoginController@logout')->name('admin.logout');

//Project Admin Routes

// Wrap all admin routes with Auth middleware
Route::middleware(['auth'])->group(function () {

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard'); 

// admin/menu route to menu controller index function
Route::get('/admin/menu', 'App\Http\Controllers\Admin\MenuController@index')->name('admin.menu');
Route ::get('/admin/menu/create', 'App\Http\Controllers\Admin\MenuController@create')->name('admin.menu.create');
Route::post('/admin/menu/store', 'App\Http\Controllers\Admin\MenuController@store')->name('admin.menu.store');
Route::get('/admin/menu/{id}/edit', 'App\Http\Controllers\Admin\MenuController@edit')->name('admin.menu.edit');
//Route::put('/admin/menu/{id}', 'App\Http\Controllers\Admin\MenuController@update')->name('admin.menu.update');
Route::delete('/admin/menu/{id}', 'App\Http\Controllers\Admin\MenuController@destroy')->name('admin.menu.destroy');

// admin/language route to language controller index function
Route::get('/admin/language', 'App\Http\Controllers\Admin\LanguageController@index')->name('admin.language');
Route::get('/admin/language/create', 'App\Http\Controllers\Admin\LanguageController@create')->name('admin.language.create');
Route::post('/admin/language/store', 'App\Http\Controllers\Admin\LanguageController@store')->name('admin.language.store');
Route::get('/admin/language/{id}/edit', 'App\Http\Controllers\Admin\LanguageController@edit')->name('admin.language.edit');
Route::put('/admin/language/{id}', 'App\Http\Controllers\Admin\LanguageController@update')->name('admin.language.update');
Route::delete('/admin/language/{id}', 'App\Http\Controllers\Admin\LanguageController@destroy')->name('admin.language.destroy');

// admin/about route to about controller index function
Route::get('/admin/about', 'App\Http\Controllers\Admin\AboutController@index')->name('admin.about');
Route::get('/admin/about/create', 'App\Http\Controllers\Admin\AboutController@create')->name('admin.about.create');
Route::post('/admin/about/store', 'App\Http\Controllers\Admin\AboutController@store')->name('admin.about.store');
Route::get('/admin/about/edit', 'App\Http\Controllers\Admin\AboutController@edit')->name('admin.about.edit');
//Route::put('/admin/about/{id}', 'App\Http\Controllers\Admin\AboutController@update')->name('admin.about.update');
Route::delete('/admin/about/{id}', 'App\Http\Controllers\Admin\AboutController@destroy')->name('admin.about.destroy');

// admin/about/how_we_do route to how_we_do controller index function
Route::get('/admin/about/how_we_do', 'App\Http\Controllers\Admin\AboutController@howWeDoIndex')->name('admin.about.how_we_do');
Route::get('/admin/about/how_we_do/create', 'App\Http\Controllers\Admin\AboutController@howWeDoCreate')->name('admin.about.how_we_do.create');
Route::post('/admin/about/how_we_do/store', 'App\Http\Controllers\Admin\AboutController@howWeDoStore')->name('admin.about.how_we_do.store');
Route::get('/admin/about/how_we_do/{id}/edit', 'App\Http\Controllers\Admin\AboutController@howWeDoEdit')->name('admin.about.how_we_do.edit');
Route::post('/admin/about/how_we_do', 'App\Http\Controllers\Admin\AboutController@howWeDoUpdate')->name('admin.about.how_we_do.update');
Route::delete('/admin/about/how_we_do/{id}', 'App\Http\Controllers\Admin\AboutController@howWeDoDestroy')->name('admin.about.how_we_do.destroy');

// admin/about/what_we_do route to what_we_do controller index function
Route::get('/admin/about/what_we_do', 'App\Http\Controllers\Admin\AboutController@whatWeDoIndex')->name('admin.about.what_we_do');
Route::get('/admin/about/what_we_do/create', 'App\Http\Controllers\Admin\AboutController@whatWeDoCreate')->name('admin.about.what_we_do.create');
Route::post('/admin/about/what_we_do/store', 'App\Http\Controllers\Admin\AboutController@whatWeDoStore')->name('admin.about.what_we_do.store');
Route::get('/admin/about/what_we_do/{id}/edit', 'App\Http\Controllers\Admin\AboutController@whatWeDoEdit')->name('admin.about.what_we_do.edit');
Route::post('/admin/about/what_we_do', 'App\Http\Controllers\Admin\AboutController@whatWeDoUpdate')->name('admin.about.what_we_do.update');
Route::delete('/admin/about/what_we_do/{id}', 'App\Http\Controllers\Admin\AboutController@whatWeDoDestroy')->name('admin.about.what_we_do.destroy');

// admin/about/certificates routes
Route::get('/admin/about/certificates', 'App\Http\Controllers\Admin\AboutController@certificatesIndex')->name('admin.about.certificates');
Route::get('/admin/about/certificates/create', 'App\Http\Controllers\Admin\AboutController@certificatesCreate')->name('admin.about.certificates.create');
Route::post('/admin/about/certificates/store', 'App\Http\Controllers\Admin\AboutController@certificatesStore')->name('admin.about.certificates.store');
Route::get('/admin/about/certificates/{id}/edit', 'App\Http\Controllers\Admin\AboutController@certificatesEdit')->name('admin.about.certificates.edit');
Route::post('/admin/about/certificates', 'App\Http\Controllers\Admin\AboutController@certificatesUpdate')->name('admin.about.certificates.update');
Route::delete('/admin/about/certificates/{id}', 'App\Http\Controllers\Admin\AboutController@certificatesDestroy')->name('admin.about.certificates.destroy');

// admin/about/politics urls
Route::get('/admin/about/politics', 'App\Http\Controllers\Admin\AboutController@politicsIndex')->name('admin.about.politics');
Route::get('/admin/about/politics/create', 'App\Http\Controllers\Admin\AboutController@politicsCreate')->name('admin.about.politics.create');
Route::post('/admin/about/politics/store', 'App\Http\Controllers\Admin\AboutController@politicsStore')->name('admin.about.politics.store');
Route::get('/admin/about/politics/{id}/edit', 'App\Http\Controllers\Admin\AboutController@politicsEdit')->name('admin.about.politics.edit');
Route::post('/admin/about/politics', 'App\Http\Controllers\Admin\AboutController@politicsUpdate')->name('admin.about.politics.update');
Route::delete('/admin/about/politics/{id}', 'App\Http\Controllers\Admin\AboutController@politicsDestroy')->name('admin.about.politics.destroy');

// blog routes
Route::get('/admin/blog', 'App\Http\Controllers\Admin\BlogController@index')->name('admin.blog');
Route::get('/admin/blog/create', 'App\Http\Controllers\Admin\BlogController@create')->name('admin.blog.create');
Route::post('/admin/blog/store', 'App\Http\Controllers\Admin\BlogController@store')->name('admin.blog.store');
Route::get('/admin/blog/{id}/edit', 'App\Http\Controllers\Admin\BlogController@edit')->name('admin.blog.edit');
//Route::post('/admin/blog/{id}', 'App\Http\Controllers\Admin\BlogController@update')->name('admin.blog.update');
Route::delete('/admin/blog/{id}', 'App\Http\Controllers\Admin\BlogController@destroy')->name('admin.blog.destroy');

// blog slider routes
Route::get('/admin/blog/{id}/slider', 'App\Http\Controllers\Admin\BlogController@sliderIndex')->name('admin.blog.slider.index');
Route::get('/admin/blog/{id}/slider/create', 'App\Http\Controllers\Admin\BlogController@sliderCreate')->name('admin.blog.slider.create');
Route::post('/admin/blog/{id}/slider/store', 'App\Http\Controllers\Admin\BlogController@sliderStore')->name('admin.blog.slider.store');
Route::get('/admin/blog/{id}/slider/{sliderId}/edit', 'App\Http\Controllers\Admin\BlogController@sliderEdit')->name('admin.blog.slider.edit');
//Route::post('/admin/blog/{id}/slider/{sliderId}', 'App\Http\Controllers\Admin\BlogController@update')->name('admin.blog.slider.update');
Route::delete('/admin/blog/{id}/slider/{sliderId}', 'App\Http\Controllers\Admin\BlogController@sliderDestroy')->name('admin.blog.slider.destroy');

// Brand routes
Route::get('/admin/brand', 'App\Http\Controllers\Admin\BrandController@index')->name('admin.brand');
Route::get('/admin/brand/create', 'App\Http\Controllers\Admin\BrandController@create')->name('admin.brand.create');
Route::post('/admin/brand/store', 'App\Http\Controllers\Admin\BrandController@store')->name('admin.brand.store');
Route::get('/admin/brand/{id}/edit', 'App\Http\Controllers\Admin\BrandController@edit')->name('admin.brand.edit');
Route::delete('/admin/brand/{id}', 'App\Http\Controllers\Admin\BrandController@destroy')->name('admin.brand.destroy');

// Brand slider1 routes
Route::get('/admin/brand/{id}/slider1', 'App\Http\Controllers\Admin\BrandController@slider1Index')->name('admin.brand.slider1.index');
Route::get('/admin/brand/{id}/slider1/create', 'App\Http\Controllers\Admin\BrandController@slider1Create')->name('admin.brand.slider1.create');
Route::post('/admin/brand/{id}/slider1/store', 'App\Http\Controllers\Admin\BrandController@slider1Store')->name('admin.brand.slider1.store');
Route::get('/admin/brand/{id}/slider1/{sliderId}/edit', 'App\Http\Controllers\Admin\BrandController@slider1Edit')->name('admin.brand.slider1.edit');
Route::delete('/admin/brand/{id}/slider1/{sliderId}', 'App\Http\Controllers\Admin\BrandController@slider1Destroy')->name('admin.brand.slider1.destroy');

// Brand slider2 routes
Route::get('/admin/brand/{id}/slider2', 'App\Http\Controllers\Admin\BrandController@slider2Index')->name('admin.brand.slider2.index');
Route::get('/admin/brand/{id}/slider2/create', 'App\Http\Controllers\Admin\BrandController@slider2Create')->name('admin.brand.slider2.create');
Route::post('/admin/brand/{id}/slider2/store', 'App\Http\Controllers\Admin\BrandController@slider2Store')->name('admin.brand.slider2.store');
Route::get('/admin/brand/{id}/slider2/{sliderId}/edit', 'App\Http\Controllers\Admin\BrandController@slider2Edit')->name('admin.brand.slider2.edit');
Route::delete('/admin/brand/{id}/slider2/{sliderId}', 'App\Http\Controllers\Admin\BrandController@slider2Destroy')->name('admin.brand.slider2.destroy');

// Slider Routes
Route::get('/admin/slider', 'App\Http\Controllers\Admin\SliderController@index')->name('admin.slider.index');
Route::get('/admin/slider/create', 'App\Http\Controllers\Admin\SliderController@create')->name('admin.slider.create');
Route::post('/admin/slider/store', 'App\Http\Controllers\Admin\SliderController@store')->name('admin.slider.store');
Route::get('/admin/slider/{sliderId}/edit', 'App\Http\Controllers\Admin\SliderController@edit')->name('admin.slider.edit');
Route::delete('/admin/slider/{sliderId}', 'App\Http\Controllers\Admin\SliderController@destroy')->name('admin.slider.destroy');

// Product routes
Route::get('/admin/product', 'App\Http\Controllers\Admin\ProductController@index')->name('admin.product.index');
Route::get('/admin/product/create', 'App\Http\Controllers\Admin\ProductController@create')->name('admin.product.create');
Route::post('/admin/product/store', 'App\Http\Controllers\Admin\ProductController@store')->name('admin.product.store');
Route::get('/admin/product/{id}/edit', 'App\Http\Controllers\Admin\ProductController@edit')->name('admin.product.edit');
Route::delete('/admin/product/{id}', 'App\Http\Controllers\Admin\ProductController@destroy')->name('admin.product.destroy');

// Product images routes
Route::get('/admin/product/{id}/images', 'App\Http\Controllers\Admin\ProductController@imagesIndex')->name('admin.product.images.index');
Route::get('/admin/product/{id}/images/create', 'App\Http\Controllers\Admin\ProductController@imagesCreate')->name('admin.product.images.create');
Route::post('/admin/product/{id}/images/store', 'App\Http\Controllers\Admin\ProductController@imagesStore')->name('admin.product.images.store');
Route::get('/admin/product/{id}/images/{imageId}/edit', 'App\Http\Controllers\Admin\ProductController@imagesEdit')->name('admin.product.images.edit');
Route::delete('/admin/product/{id}/images/{imageId}', 'App\Http\Controllers\Admin\ProductController@imagesDestroy')->name('admin.product.images.destroy');  

// Product gallery routes
Route::get('/admin/product/{id}/gallery', 'App\Http\Controllers\Admin\ProductController@galleryIndex')->name('admin.product.gallery.index');
Route::get('/admin/product/{id}/gallery/create', 'App\Http\Controllers\Admin\ProductController@galleryCreate')->name('admin.product.gallery.create');
Route::post('/admin/product/{id}/gallery/store', 'App\Http\Controllers\Admin\ProductController@galleryStore')->name('admin.product.gallery.store');
Route::get('/admin/product/{id}/gallery/{imageId}/edit', 'App\Http\Controllers\Admin\ProductController@galleryEdit')->name('admin.product.gallery.edit');
Route::delete('/admin/product/{id}/gallery/{imageId}', 'App\Http\Controllers\Admin\ProductController@galleryDestroy')->name('admin.product.gallery.destroy');

// Product FAQ routes
Route::get('/admin/product/{id}/faq', 'App\Http\Controllers\Admin\ProductController@faqIndex')->name('admin.product.faq.index');
Route::get('/admin/product/{id}/faq/create', 'App\Http\Controllers\Admin\ProductController@faqCreate')->name('admin.product.faq.create');
Route::post('/admin/product/{id}/faq/store', 'App\Http\Controllers\Admin\ProductController@faqStore')->name('admin.product.faq.store');
Route::get('/admin/product/{id}/faq/{faqId}/edit', 'App\Http\Controllers\Admin\ProductController@faqEdit')->name('admin.product.faq.edit');
Route::delete('/admin/product/{id}/faq/{faqId}', 'App\Http\Controllers\Admin\ProductController@faqDestroy')->name('admin.product.faq.destroy');

// Product Types routes
Route::get('/admin/product/{id}/product-type', 'App\Http\Controllers\Admin\ProductController@typeIndex')->name('admin.product.type.index');
Route::get('/admin/product/{id}/product-type/create', 'App\Http\Controllers\Admin\ProductController@typeCreate')->name('admin.product.type.create');
Route::post('/admin/product/{id}/product-type/store', 'App\Http\Controllers\Admin\ProductController@typeStore')->name('admin.product.type.store');
Route::get('/admin/product/{id}/product-type/{typeId}/edit', 'App\Http\Controllers\Admin\ProductController@typeEdit')->name('admin.product.type.edit');
Route::delete('/admin/product/{id}/product-type/{typeId}', 'App\Http\Controllers\Admin\ProductController@typeDestroy')->name('admin.product.type.destroy');

// Office routes
Route::get('/admin/office', 'App\Http\Controllers\Admin\OfficeController@index')->name('admin.office.index');
Route::get('/admin/office/create', 'App\Http\Controllers\Admin\OfficeController@create')->name('admin.office.create');
Route::post('/admin/office/store', 'App\Http\Controllers\Admin\OfficeController@store')->name('admin.office.store');
Route::get('/admin/office/{office}/edit', 'App\Http\Controllers\Admin\OfficeController@edit')->name('admin.office.edit');
Route::delete('/admin/office/{office}', 'App\Http\Controllers\Admin\OfficeController@destroy')->name('admin.office.destroy');

// Page routes
Route::get('/admin/page', 'App\Http\Controllers\Admin\PageController@index')->name('admin.page.index');
Route::get('/admin/page/create', 'App\Http\Controllers\Admin\PageController@create')->name('admin.page.create');
Route::post('/admin/page/store', 'App\Http\Controllers\Admin\PageController@store')->name('admin.page.store');
Route::get('/admin/page/{id}/edit', 'App\Http\Controllers\Admin\PageController@edit')->name('admin.page.edit');
Route::delete('/admin/page/{id}', 'App\Http\Controllers\Admin\PageController@destroy')->name('admin.page.destroy');

// Static Text routes
Route::get('/admin/static-text', 'App\Http\Controllers\Admin\StaticTextController@index')->name('admin.static_text.index');
Route::get('/admin/static-text/create', 'App\Http\Controllers\Admin\StaticTextController@create')->name('admin.static_text.create');
Route::post('/admin/static-text/store', 'App\Http\Controllers\Admin\StaticTextController@store')->name('admin.static_text.store');
Route::get('/admin/static-text/{id}/edit', 'App\Http\Controllers\Admin\StaticTextController@edit')->name('admin.static_text.edit');
Route::delete('/admin/static-text/{id}', 'App\Http\Controllers\Admin\StaticTextController@destroy')->name('admin.static_text.destroy');

// FooterInfo routes
Route::get('/admin/footer-info', 'App\Http\Controllers\Admin\FooterInfoController@index')->name('admin.footer_info.index');
Route::get('/admin/footer-info/create', 'App\Http\Controllers\Admin\FooterInfoController@create')->name('admin.footer_info.create');
Route::post('/admin/footer-info/store', 'App\Http\Controllers\Admin\FooterInfoController@store')->name('admin.footer_info.store');
Route::get('/admin/footer-info/{id}/edit', 'App\Http\Controllers\Admin\FooterInfoController@edit')->name('admin.footer_info.edit');
Route::delete('/admin/footer-info/{id}', 'App\Http\Controllers\Admin\FooterInfoController@destroy')->name('admin.footer_info.destroy');

// Club routes
Route::get('/admin/club', 'App\Http\Controllers\Admin\ClubController@index')->name('admin.club.index');
Route::get('/admin/club/create', 'App\Http\Controllers\Admin\ClubController@create')->name('admin.club.create');
Route::post('/admin/club/store', 'App\Http\Controllers\Admin\ClubController@store')->name('admin.club.store');
Route::get('/admin/club/{id}/edit', 'App\Http\Controllers\Admin\ClubController@edit')->name('admin.club.edit');
Route::delete('/admin/club/{id}', 'App\Http\Controllers\Admin\ClubController@destroy')->name('admin.club.destroy');

// Club Slider 1 routes
Route::get('/admin/club/{id}/slider1', 'App\Http\Controllers\Admin\ClubController@slider1Index')->name('admin.club.slider1.index');
Route::get('/admin/club/{id}/slider1/create', 'App\Http\Controllers\Admin\ClubController@slider1Create')->name('admin.club.slider1.create');
Route::post('/admin/club/{id}/slider1/store', 'App\Http\Controllers\Admin\ClubController@slider1Store')->name('admin.club.slider1.store');
Route::get('/admin/club/{id}/slider1/{sliderId}/edit', 'App\Http\Controllers\Admin\ClubController@slider1Edit')->name('admin.club.slider1.edit');
Route::delete('/admin/club/{id}/slider1/{sliderId}', 'App\Http\Controllers\Admin\ClubController@slider1Destroy')->name('admin.club.slider1.destroy');

}); // End of Auth middleware group
//Project Front End routes
//Home route
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('{slug}/{slug2?}', 'App\Http\Controllers\HomeController@route')->name('page.route');