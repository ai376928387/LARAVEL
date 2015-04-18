<?php
//general page
Route::get('/', array('as' => 'home','uses' =>'HomeController@home'));
Route::get('/aboutus', array('as' => 'aboutus', 'uses' => 'UsersController@getAboutus'));
Route::get('/contactus', array('as' => 'contactus', 'uses' => 'UsersController@getContactus'));

/*
|User 
*/
Route::get('/user/{username}',array('as' => 'profile-user','uses' => 'ProfileController@user'));

/*
|Authenticated group
*/
Route::group(array('before'=>'auth'),function(){

	/*
	|CSRF PROTECTION GROUP
	*/
	Route::group(array('before' => 'csrf'),function(){
			/*
			|Change password (post)
			*/
			Route::post('/account/change-password',array('as' => 'account-change-password-post','uses' => 'AccountController@postChangePassword'));

	});

	/*
	|Change password (get)
	*/
	Route::get('/account/change-password',array('as' => 'account-change-password','uses' => 'AccountController@getChangePassword'));

	/*
	|Sign Out (get)
	*/

	Route::get('/account/signout',array('as' => 'account-sign-out','uses' => 'AccountController@getSignOut'));
});

/*
|unauthenticated group
*/
Route::group(array('before' => 'guest'), function() {
	/*
	|CSRF PROTECTION GROUP
	*/
	Route::group(array('before' => 'csrf'), function() {

		Route::post('/account/create', array('as' => 'account-create-post','uses' => 'AccountController@postCreate'));

		Route::post('/account/sign-in',array('as' => 'account-sign-in-post','uses' => 'AccountController@postSignIn'));

		/*Forgot password(POST)*/
		Route::post('/account/forgot-password',array('as' => 'account-forgot-password-post','uses' => 'AccountController@postForgotPassword'));
	});

	/*Forgot password(GET)*/
	Route::get('/account/forgot-password',array('as' => 'account-forgot-password','uses' => 'AccountController@getForgotPassword'));

	Route::get('/account/recover/{code}',array('as' =>'account-recover','uses' => 'AccountController@getRecover'));


	/*
	|Sign in (GET)
	*/
	Route::get('/account/sign-in',array('as' => 'account-sign-in','uses' => 'AccountController@getSignIn'));


	/*
	|CREATE ACCOUNT (GET)
	*/

	Route::get('/account/create', array('as' => 'account-create','uses' => 'AccountController@getCreate'));

	Route::get('/account/activate/{code}',array('as' =>'account-activate','uses' => 'AccountController@getActivate'));
});
/*
|Admin
*/
Route::get('admin',function(){
	return View::make('admin.index'); //admin/index.blade.php
});


//it is to show the users information
Route::get('/dashboard', array('before' => 'auth', 'as' => 'dashboard', 'uses' => 'AppController@getDashboard'));
Route::get('/dashboard/users', 'AppController@getUsers');

//It is to deal with user account information page  
Route::get('/dashboard/get_account_information/{id}', array('as' => 'get_account_information', 'uses' => 'AppController@getAccountInformation'));
Route::get('/dashboard/edit_account_information', array('as' => 'edit_account_information', 'uses' => 'AppController@getEditAccountInformation'));
Route::post('/dashboard/edit_account_information', array('uses' => 'AppController@postEditAccountInformation'));

//It is to deal with private profile page   
Route::get('/dashboard/profile', array('as' => 'profile', 'uses' => 'AppController@getProfile'));
Route::get('/dashboard/edit_profile', array('as' => 'edit_profile', 'uses' => 'AppController@getEditProfile'));
Route::post('/dashboard/edit_profile', array('uses' => 'AppController@postEditProfile'));

//to get all product

Route::get('/dashboard/products', array('as' => 'show_all_products', 'uses' => 'AppController@getAllProducts'));

//It is browse categoty content menu
Route::get('/dashboard/users/browse/{want_to_do_type}', array('before' => 'auth', 'as' => 'want_category_content', 'uses' => 'AppController@getWantCategoryContent'));


//to change language
Route::post('/language/{language_type}', array('before' => 'csrf','as' => 'language-chooser','uses' => 'LanguageController@chooser'));








