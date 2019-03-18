<?php


Route::get('/', 'PagesController@index')->name('pages.index');

Route::get('about', 'PagesController@about')->name('pages.about');

Route::get('contact', 'ContactController@showForm')->name('contact.show');

Route::post('contact', 'ContactController@sendEmail')->name('contact.send');