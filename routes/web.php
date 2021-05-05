<?php

/*-----------------------USER------------------------*/

Route::get('/', 'User\IndexController@index');
Route::group(['middleware' => ['auth','verified']],function(){
Route::group(['middleware' => 'auth'],function(){
    Route::group(['prefix' => 'user'],function(){
    
Route::get('gallery', 'User\IndexController@gallery');
Route::get('photography-list', 'User\IndexController@photoList');
Route::get('photos/{id}/{slug}', 'User\IndexController@photo');
Route::get('photography-book', 'User\PhotographyBookController@index');
Route::post('photographybook-store', 'User\PhotographyBookController@store');
Route::get('photographybook-delete/{id}', 'User\PhotographyBookController@delete');
Route::get('event', 'User\IndexController@event');
Route::get('eventbook', 'User\EventBookController@index');
Route::get('eventbook-delete/{id}','User\EventBookController@delete');
Route::post('eventbook-store', 'User\EventBookController@store');
Route::get('birthday-event', 'User\IndexController@birthdayEvent');
Route::get('birthday-book', 'User\BirthdayBookController@index');
Route::get('birthday-delete/{id}', 'User\BirthdayBookController@delete');
Route::post('birthday-store', 'User\BirthdayBookController@store');
Route::get('wedding-event', 'User\IndexController@weddingEvent');
Route::get('wedding-book', 'User\WeddingBookController@index');
Route::get('wedding-delete/{id}', 'User\WeddingBookController@delete');
Route::post('wedding-store', 'User\WeddingBookController@store');
Route::get('anniversary-event', 'User\IndexController@anniversaryEvent');
Route::get('anniversary-book', 'User\AnniversaryBookController@index');
Route::get('anniversary-delete/{id}', 'User\AnniversaryBookController@delete');
Route::post('anniversary-store', 'User\AnniversaryBookController@store');
Route::get('parlourList', 'User\IndexController@parlourList');
Route::get('parlour/{id}/{slug}', 'User\IndexController@parlour');
Route::get('parlour-book', 'User\ParlourbookController@book');
Route::post('parlourbook-store', 'User\ParlourbookController@store');
Route::get('parlourbook-delete/{id}', 'User\ParlourbookController@delete');
Route::get('shopping', 'User\IndexController@shopping');
Route::get('venue', 'User\IndexController@venue');
Route::get('who-we-are', 'User\IndexController@about');
Route::get('contact', 'User\IndexController@contact');
Route::get('contact-book', 'User\ContactController@index');
Route::get('contact-delete/{id}', 'User\ContactController@delete');
Route::post('contact-store', 'User\ContactController@store');
Route::get('cake', 'User\IndexController@cake');
Route::get('Appointment','User\IndexController@appointment');
Route::get('Special-Offer','User\IndexController@offer');
Route::get('content', 'User\IndexController@content');
Route::get('event-services', 'User\IndexController@event_services');
Route::get('package/{id}', 'User\IndexController@package');




});
    
});
});

Route::group(['middleware' => ['auth','verified']],function(){
Route::group(['middleware' => 'isadmin'],function(){
Route::group(['prefix' => 'admin'],function(){
        Route::get('dashboard', 'Admin\AdminController@dashboard') ;
        Route::get('mail', 'Admin\AdminController@mail') ;
        Route::get('photographers','Admin\PhotographyController@index');
        Route::get('photographer-create','Admin\PhotographyController@create');
        Route::get('photographer-update_page/{id}','Admin\PhotographyController@update_page');
        Route::post('photographer-store','Admin\PhotographyController@store');
        Route::post('photographer-update','Admin\PhotographyController@update');
        Route::get('photographer-delete/{id}','Admin\PhotographyController@delete');
        Route::get('photographer-views/{id}', 'Admin\PhotographyController@view');
        Route::post('photographer-images/upload','Admin\PhotographyController@photographer_images');
        Route::get('photos-delete/{id}','Admin\PhotographyController@photo_delete');
        Route::post('PhotographerService-store','Admin\PhotographyController@service_store');
        Route::get('service-delete/{id}','Admin\PhotographyController@service_delete');
        Route::get('photographerbook_off/{id}','Admin\PhotographyController@book_off');
        Route::get('photographerbook_on/{id}','Admin\PhotographyController@book_on');
        Route::get('parlours', 'Admin\ParlourController@index');
        Route::get('photo-create', 'Admin\ParlourController@create');
        Route::post('photo-store', 'Admin\ParlourController@store');
        Route::post('parlours-update', 'Admin\ParlourController@update');
        Route::get('parlours-delete/{id}', 'Admin\ParlourController@delete');
        Route::get('parlours-update_page/{id}','Admin\ParlourController@update_page');
        Route::post('parlours-store','Admin\ParlourController@store');
        Route::get('parlour-views/{id}', 'Admin\ParlourController@view');
        Route::post('parlour-images/upload','Admin\ParlourController@parlour_images');
        Route::get('parlourphoto-delete/{id}','Admin\ParlourController@photo_delete');
        Route::post('parlourservice-store','Admin\ParlourController@service_store');
        Route::get('parlourservice-delete/{id}','Admin\ParlourController@service_delete');
        Route::get('parloubook_off/{id}','Admin\ParlourController@book_off');
        Route::get('parlourbook_on/{id}','Admin\ParlourController@book_on');
       
        Route::get('offers', 'Admin\OfferController@index');
        Route::get('offer-create', 'Admin\OfferController@create');
        Route::post('offer-store', 'Admin\OfferController@store');
        Route::post('offer-update', 'Admin\OfferController@update');
        Route::get('offer-delete/{id}', 'Admin\OfferController@delete');
        Route::get('offer-update_page/{id}', 'Admin\OfferController@update_page');
        Route::get('offer-details/{id}', 'Admin\OfferController@offer_details');
        Route::post('offer-images/upload','Admin\OfferController@offer_images');
        Route::get('offerphoto-delete/{id}','Admin\OfferController@photo_delete');
        Route::post('OfferDetails-store','Admin\OfferController@details_store');
        Route::get('details-delete/{id}','Admin\OfferController@details_delete');
        Route::get('shopping','Admin\ShoppingController@index');
        Route::get('shopping-create','Admin\ShoppingController@create');
        Route::post('shopping-store', 'Admin\ShoppingController@store');
        Route::get('shopping-update_page/{id}', 'Admin\ShoppingController@update_page');
        Route::post('shopping-update', 'Admin\ShoppingController@update');
        Route::get('shopping-delete/{id}', 'Admin\ShoppingController@delete');
        Route::get('shopping-details/{id}', 'Admin\ShoppingController@shopping_details');
        Route::post('shopping-images/upload','Admin\ShoppingController@shopping_images');
        Route::get('photo-delete/{id}','Admin\ShoppingController@photo_delete');
        Route::post('shoppingdetails-store','Admin\ShoppingController@details_store');
        Route::get('shopping-details-delete/{id}','Admin\ShoppingController@details_delete');
        Route::get('venues', 'Admin\VenueController@index');
        Route::get('venue-create', 'Admin\VenueController@create');
        Route::post('venue-store', 'Admin\VenueController@store');
        Route::get('venue-update_page/{id}', 'Admin\VenueController@update_page');
        Route::post('venue-update', 'Admin\VenueController@update');
        Route::get('venue-delete/{id}', 'Admin\VenueController@delete');
        Route::get('wedding','Admin\WeddingController@index');
         Route::get('eventpage','Admin\EventPageController@index');
         Route::get('eventpage-delete/{id}', 'Admin\EventPageController@delete');
         Route::get('eventpage-create', 'Admin\EventPageController@create');
         Route::post('eventpage-store', 'Admin\EventPageController@store');
         Route::get('eventservice-views/{id}', 'Admin\EventPageController@view');
          Route::post('eventpageservice-store', 'Admin\EventPageController@service_store');
         Route::get('eventservice-delete/{id}', 'Admin\EventPageController@service_delete');
        // // Route::get('events', 'Admin\EventController@index');
        // Route::get('event-create', 'Admin\EventController@create');
        // Route::post('event-store', 'Admin\EventController@store');
        // Route::get('event-update_page/{id}', 'Admin\EventController@update_page');
        // Route::post('event-update', 'Admin\EventController@update');
      //  Route::get('event-delete/{id}','Admin\EventController@delete');
    
        /*--------------------UseType-------------------*/
        Route::get('all-user','Admin\UserController@index');
        Route::get('usertype_update/{id}','Admin\UserController@update_type');
        Route::post('user-update', 'Admin\UserController@update');
        Route::get('user-delete/{id}','Admin\UserController@delete');

        /*--------UserController--------------*/
        Route::get('venue-book', 'User\VenueBookController@index');
        Route::get('venuebook-delete/{id}', 'User\VenueBookController@delete');
        Route::post('venuebook-store', 'User\VenueBookController@store');
        Route::get('package-book', 'User\PackageController@book');
        Route::post('packagebook-store', 'User\PackageController@store');
        Route::get('packagebook-delete/{id}', 'User\PackageController@delete');

    
       
    });
    
});
});







Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('/');
