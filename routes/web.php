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


/*Front-End Controllers*/

Route::get('/',[
	'uses'=>'FrontPageController@index',
	'as'=>'index'

]);

Route::get('/about',[
	'uses'=>'FrontPageController@about',
	'as'=>'about'

]);
Route::get('/contact',[
	'uses'=>'FrontPageController@contact',
	'as'=>'contact'

]);
Route::get('/department',[
	'uses'=>'FrontPageController@department',
	'as'=>'department'

]);
Route::get('/doctor',[
	'uses'=>'FrontPageController@doctor',
	'as'=>'doctor'

]);

Route::get('/service',[
	'uses'=>'FrontPageController@service',
	'as'=>'service'

]);

Route::get('/blog',[
	'uses'=>'FrontPageController@blog',
	'as'=>'blog'

]);

Route::get('/blog/{slug}',[
	'uses'=>'FrontPageController@singleBlog',
	'as'=>'single.blog'

]);

Route::get('/appointments',[

		'uses'=>'FrontPageController@appointCreate',
		'as'=>'appointmentCreate'
]);

/*Front-End Controllers*/


/****************************************************************************************/



/****************************************************************************************/

Route::get('/results',function(){
	$blogs = \App\Blog::where('title','like', '%' . request('query') . '%')->get();
	return view('search-results')->with('blogs',$blogs)
								 ->with('title','Search results: ' . request('query'))
								 ->with('Department',\App\Department::take(4)->get())
                                 ->with('settings',\App\SiteSetting::first())
                                 ->with('abouts',\App\About::first())
                                 ->with('query',request('query'));
});


/****************************************************************************************/
// Route::get('/results',function(){
// 	$posts = \App\Post::where('title','like', '%' . request('query') . '%')->get();
// 	return view('search_results')->with('posts',$posts)
// 								 ->with('title','Search results: ' . request('query'))
// 								 ->with('categories',\App\Category::take(4)->get())
//                                  ->with('settings',\App\Setting::first())
//                                  ->with('query',request('query'));
// });

Route::get('/new',[

	'uses'=>'PagesController@new'

]);
/****************************************************************************************/






Auth::routes();

Route::group(['prefix' => 'admin','middleware'=>'auth'],function(){

	Route::get('/home', [

		'uses'=>'HomeController@index',
		'as'=>'home'
	]);


/************************************
	Appoinment start
************************************/

Route::post('appointments/store',[

		'uses'=>'AppointmentsController@store',
		'as'=>'appointments.store'
]);
Route::get('/appointments',[

	'uses'=>'AppointmentsController@index',
	'as'=>'appointments'
]);

Route::post('/appointments/update/{id}',[

	'uses'=>'AppointmentsController@update',
	'as'=>'appointments.update'
]);



/************************************
	Appoinment end
************************************/


/************************************
	Contact start
************************************/

Route::post('contacts/store',[

		'uses'=>'ContactsController@store',
		'as'=>'contacts.store'
]);
Route::get('/contacts',[

	'uses'=>'ContactsController@index',
	'as'=>'contacts'
]);

Route::post('/contacts/update/{id}',[

	'uses'=>'ContactsController@update',
	'as'=>'contacts.update'
]);



/************************************
	Contact end
************************************/



/************************************
	Department start
************************************/
Route::get('/departments/create',[

		'uses'=>'DepartmentsController@create',
		'as'=>'departments.create'
	]);
Route::post('/departments/store',[

		'uses'=>'DepartmentsController@store',
		'as'=>'departments.store'
]);
Route::get('/departments',[

	'uses'=>'DepartmentsController@index',
	'as'=>'departments'
]);

Route::get('/departments/edit/{id}',[

	'uses'=>'DepartmentsController@edit',
	'as'=>'departments.edit'
]);

Route::post('/departments/update/{id}',[

	'uses'=>'DepartmentsController@update',
	'as'=>'departments.update'
]);

Route::get('/departments/destroy/{id}',[

	'uses'=>'DepartmentsController@destroy',
	'as'=>'departments.destroy'
]);

/************************************
	Department_end
************************************/

/************************************
	Department Service start
************************************/
Route::get('/depServices/create',[

		'uses'=>'DepServicesController@create',
		'as'=>'depServices.create'
	]);
Route::post('/depServices/store',[

		'uses'=>'DepServicesController@store',
		'as'=>'depServices.store'
]);
Route::get('/depServices',[

	'uses'=>'DepServicesController@index',
	'as'=>'depServices'
]);

Route::get('/depServices/edit/{id}',[

	'uses'=>'DepServicesController@edit',
	'as'=>'depServices.edit'
]);

Route::post('/depServices/update/{id}',[

	'uses'=>'DepServicesController@update',
	'as'=>'depServices.update'
]);

Route::get('/depServices/destroy/{id}',[

	'uses'=>'DepServicesController@destroy',
	'as'=>'depServices.destroy'
]);

/************************************
	Department_Service end
************************************/
/************************************
	Blog start
************************************/
	Route::get('/blogs/create',[

		'uses'=>'BlogsController@create',
		'as'=>'blogs.create'

	]);
	Route::get('/blogs/index',[

		'uses'=>'BlogsController@index',
		'as'=>'blogs'

	]);

	Route::post('/blogs/store',[

		'uses'=>'BlogsController@store',
		'as'=>'blogs.store'

	]);

	Route::get('/blogs/show/{id}',[

		'uses'=>'BlogsController@show',
		'as'=>'blogs.show'
	]);

	Route::get('/blogs/edit/{id}',[

		'uses'=>'BlogsController@edit',
		'as'=>'blogs.edit'
	]);

	Route::post('/blogs/update/{id}',[

		'uses'=>'BlogsController@update',
		'as'=>'blogs.update'
	]);

	Route::get('/blogs/destroy/{id}',[

		'uses'=>'BlogsController@destroy',
		'as'=>'blogs.destroy'
	]);

/************************************
	Blog end
************************************/



/************************************
	Slider start
************************************/
	Route::get('/sliders/create',[

		'uses'=>'SlidersController@create',
		'as'=>'sliders.create'

	]);
	Route::get('/sliders/index',[

		'uses'=>'SlidersController@index',
		'as'=>'sliders'

	]);

	Route::post('/sliders/store',[

		'uses'=>'SlidersController@store',
		'as'=>'sliders.store'

	]);

	Route::get('/sliders/show/{id}',[

		'uses'=>'SlidersController@show',
		'as'=>'sliders.show'
	]);

	Route::get('/sliders/edit/{id}',[

		'uses'=>'SlidersController@edit',
		'as'=>'sliders.edit'
	]);

	Route::post('/sliders/update/{id}',[

		'uses'=>'SlidersController@update',
		'as'=>'sliders.update'
	]);

	Route::get('/sliders/destroy/{id}',[

		'uses'=>'SlidersController@destroy',
		'as'=>'sliders.destroy'
	]);

/************************************
	Slider end
************************************/



/************************************
	Doctors start
************************************/
Route::get('/doctors/create',[

		'uses'=>'DoctorsController@create',
		'as'=>'doctors.create'
	]);
Route::post('/doctors/store',[

		'uses'=>'DoctorsController@store',
		'as'=>'doctors.store'
]);
Route::get('/doctors',[

	'uses'=>'DoctorsController@index',
	'as'=>'doctors'
]);

Route::get('/doctors/edit/{id}',[

	'uses'=>'DoctorsController@edit',
	'as'=>'doctors.edit'
]);

Route::post('/doctors/update/{id}',[

	'uses'=>'DoctorsController@update',
	'as'=>'doctors.update'
]);

Route::get('/doctors/destroy/{id}',[

	'uses'=>'DoctorsController@destroy',
	'as'=>'doctors.destroy'
]);

/************************************
	Doctors end
************************************/



/************************************
	About start
************************************/
Route::get('/abouts',[

	'uses'=>'AboutsController@index',
	'as'=>'abouts'
]);
Route::get('/abouts/create',[

	'uses'=>'AboutsController@create',
	'as'=>'abouts.create'
]);
Route::post('/abouts/store',[

		'uses'=>'AboutsController@store',
		'as'=>'abouts.store'
]);

Route::get('/abouts/edit/{id}',[

	'uses'=>'AboutsController@edit',
	'as'=>'abouts.edit'
]);

Route::post('/abouts/update/{id}',[

	'uses'=>'AboutsController@update',
	'as'=>'abouts.update'
]);

/************************************
	About end
************************************/

/************************************
	Service start
************************************/
Route::get('/services',[

	'uses'=>'ServicesController@index',
	'as'=>'services'
]);
Route::get('/services/create',[

	'uses'=>'ServicesController@create',
	'as'=>'services.create'
]);
Route::post('/services/store',[

		'uses'=>'ServicesController@store',
		'as'=>'services.store'
]);
Route::get('/services/edit/{id}',[

	'uses'=>'ServicesController@edit',
	'as'=>'services.edit'
]);
Route::post('/services/update/{id}',[

	'uses'=>'ServicesController@update',
	'as'=>'services.update'
]);
Route::get('/services/destroy/{id}',[

	'uses'=>'ServicesController@destroy',
	'as'=>'services.destroy'
]);
/************************************
	Service end
************************************/

/************************************
	Site Setting start
************************************/
Route::get('/siteSettings',[

	'uses'=>'SiteSettingsController@index',
	'as'=>'siteSettings'
]);
// Route::get('/siteSettings/create',[

// 	'uses'=>'SiteSettingsController@create',
// 	'as'=>'siteSettings.create'
// ]);
// Route::post('/siteSettings/store',[

// 		'uses'=>'SiteSettingsController@store',
// 		'as'=>'siteSettings.store'
// ]);
// Route::get('/siteSettings/edit/{id}',[

// 	'uses'=>'SiteSettingsController@edit',
// 	'as'=>'siteSettings.edit'
// ]);
Route::post('/siteSettings/update',[

	'uses'=>'SiteSettingsController@update',
	'as'=>'siteSettings.update'
]);
// Route::get('/siteSettings/destroy/{id}',[

// 	'uses'=>'SiteSettingsController@destroy',
// 	'as'=>'siteSettings.destroy'
// ]);
/************************************
	Site Setting end
************************************/

	//users .....Route
	Route::get('/users',[

		'uses'=>'UsersController@index',
		'as'=>'users'
	]);

	Route::get('/users/create',[

		'uses'=>'UsersController@create',
		'as'=>'users.create'
	]);

	Route::post('/users/store',[

		'uses'=>'UsersController@store',
		'as'=>'users.store'
	]);

	Route::get('/users/admin/{id}',[

		'uses'=>'UsersController@admin',
		'as'=>'users.admin'
	]);

	Route::get('/users/not_admin/{id}',[

		'uses'=>'UsersController@not_admin',
		'as'=>'users.not_admin'
	]);

	Route::get('/users/destroy/{id}',[

		'uses'=>'UsersController@destroy',
		'as'=>'users.destroy'
	]);

	Route::get('/users/profile',[

		'uses'=>'ProfilesController@index',
		'as'=>'users.profile'
	]);

	Route::post('/users/profile/update',[

		'uses'=>'ProfilesController@update',
		'as'=>'users.profile.update'
	]);

	


});


