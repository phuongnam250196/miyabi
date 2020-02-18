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

Route::get('/', 'HomeController@getIndex');
Route::post('/booking', 'HomeController@postBooking');
Route::resource('gallery', 'GalleryController')->only('index');
Route::resource('menu', 'MenuController')->only('index');
Route::get('/img', function() {
	$image_path="http://miyabibar.vn/miyabi/images/about.png";
 	 $mimes  = array(
        IMAGETYPE_GIF => "image/gif",
        IMAGETYPE_JPEG => "image/jpg",
        IMAGETYPE_PNG => "image/png",
        IMAGETYPE_SWF => "image/swf",
        IMAGETYPE_PSD => "image/psd",
        IMAGETYPE_BMP => "image/bmp",
        IMAGETYPE_TIFF_II => "image/tiff",
        IMAGETYPE_TIFF_MM => "image/tiff",
        IMAGETYPE_JPC => "image/jpc",
        IMAGETYPE_JP2 => "image/jp2",
        IMAGETYPE_JPX => "image/jpx",
        IMAGETYPE_JB2 => "image/jb2",
        IMAGETYPE_SWC => "image/swc",
        IMAGETYPE_IFF => "image/iff",
        IMAGETYPE_WBMP => "image/wbmp",
        IMAGETYPE_XBM => "image/xbm",
        IMAGETYPE_ICO => "image/ico");

    if (($image_type = exif_imagetype($image_path))
        && (array_key_exists($image_type ,$mimes)))
    {
        return $mimes[$image_type];
    }
    else
    {
        return FALSE;
    }
});

Route::group(['namespace'=>'admin'], function() {
	Route::group(['prefix'=>'login', 'middleware'=>'CheckLogin'], function() {
		Route::get('/', 'HomesController@getLogin');
		Route::post('/', 'HomesController@postLogin');
	});

	Route::group(['prefix'=>'admin', 'middleware'=>'CheckLogout'], function() {
		Route::get('/', 'HomesController@getIndex');
		Route::get('/logout', 'HomesController@getLogout');

		Route::group(['prefix'=>'profile'], function() {
			Route::get('/', 'HomesController@getProfile');
			Route::post('/', 'HomesController@postProfile');
		});

		Route::group(['prefix'=>'change-password'], function() {
			Route::get('/', 'HomesController@getChangePassword');
			Route::post('/', 'HomesController@postChangePassword');
		});

		Route::group(['prefix'=>'gallery'], function() {
		    Route::get('/', 'GalleriesController@getIndex');
		    Route::get('/add', 'GalleriesController@getAdd');
		    Route::post('/add', 'GalleriesController@postAdd');
            Route::get('/update/{id}', 'GalleriesController@getUpdate');
            Route::post('/update/{id}', 'GalleriesController@postUpdate');
		    Route::post('/upload', 'GalleriesController@upload');
		    Route::post('/del', 'GalleriesController@delGallery');
        });

        Route::group(['prefix'=>'contact'], function() {
        	Route::get('/', 'ContactsController@getContact');
        	Route::post('/', 'ContactsController@postContact');
        });

        Route::group(['prefix'=>'code'], function() {
        	Route::get('/', 'CodesController@getCode');
        	Route::post('/', 'CodesController@postCode');
        });

        Route::group(['prefix'=>'menu'], function() {
        	Route::get('/', 'MenusController@getIndex');
		    Route::post('/upload', 'MenusController@upload');
		    Route::post('/del', 'MenusController@delMenu');
        });

        Route::group(['prefix'=>'slider'], function() {
        	Route::get('/', 'SlidersController@getIndex');
		    Route::post('/upload', 'SlidersController@upload');
		    Route::post('/del', 'SlidersController@delSlider');
        });
	});
});

Route::any('{all}', function($uri){
	return View::make('frontend.404');
})->where('all', '.*');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
