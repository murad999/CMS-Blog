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

Route::get('/',[
	'uses'=>'FrontEndController@index',
	'as'=>'index'

]);

Route::get('/post/{slug}',[
	'uses'=>'FrontEndController@singlePost',
	'as'=>'single.post'

]);

Route::get('/category/{id}',[

	'uses'=>'FrontEndController@getCategory',
	'as'=>'single.category'

]);

Route::get('/tag/{id}',[

	'uses'=>'FrontEndController@getTag',
	'as'=>'single.tag'

]);

Route::get('/results',function(){
	$posts = \App\Post::where('title','like', '%' . request('query') . '%')->get();
	return view('search_results')->with('posts',$posts)
								 ->with('title','Search results: ' . request('query'))
								 ->with('categories',\App\Category::take(4)->get())
                                 ->with('settings',\App\Setting::first())
                                 ->with('query',request('query'));
});


Route::get('/new',[

	'uses'=>'PagesController@new'

]);

Route::get('/todos',[

	'uses'=>'TodosController@index',
	'as'=>'todos'


]);

Route::post('/create/todos',[

	'uses'=>'TodosController@store',

]);


Route::get('/todos/delete/{id}',[

	'uses'=>'TodosController@delete',

	'as' =>'todos.delete'

]);

Route:: get('/todos/edit/{id}',[

	'uses'=>'TodosController@edit',
	'as'=>'todos.edit'

]);

Route:: post('/todos/update/{id}',[

	'uses'=>'TodosController@update',
	'as'=>'todos.update'

]);

Route::get('/todos.completed/{id}', [

	'uses'=>'TodosController@completed',
	'as'=>'todos.completed'

]);



Auth::routes();





/// blog .....route start

Route::group(['prefix' => 'admin','middleware'=>'auth'],function(){

	Route::get('/home', [

		'uses'=>'HomeController@index',
		'as'=>'home'
	]);

//////////posts route................
	Route::get('/posts/create',[

		'uses'=>'PostsController@create',
		'as'=>'posts.create'

	]);
	Route::get('/posts/index',[

		'uses'=>'PostsController@index',
		'as'=>'posts'

	]);

	Route::post('/posts/store',[

		'uses'=>'PostsController@store',
		'as'=>'posts.store'

	]);

	Route::get('/posts/show/{id}',[

		'uses'=>'PostsController@show',
		'as'=>'posts.show'
	]);

	Route::get('/posts/edit/{id}',[

		'uses'=>'PostsController@edit',
		'as'=>'posts.edit'
	]);

	Route::post('/posts/update/{id}',[

		'uses'=>'PostsController@update',
		'as'=>'posts.update'
	]);

	Route::get('/posts/destroy/{id}',[

		'uses'=>'PostsController@destroy',
		'as'=>'posts.destroy'
	]);

	Route::get('/posts/trashed',[

		'uses'=>'PostsController@trashed',
		'as'=>'posts.trashed'
	]);

	Route::get('/posts/kill/{id}',[

		'uses'=>'PostsController@kill',
		'as'=>'posts.kill'
	]);
	Route::get('/posts/restore/{id}',[

		'uses'=>'PostsController@restore',
		'as'=>'posts.restore'
	]);


	//Category route
	Route::get('/categories',[

		'uses'=>'CategoriesController@index',
		'as'=>'categories'
	]);
	Route::get('/categories/create',[

		'uses'=>'CategoriesController@create',
		'as'=>'categories.create'
	]);
	Route::post('/categories/store',[

		'uses'=>'CategoriesController@store',
		'as'=>'categories.store'
	]);

	Route::get('/categories/show/{id}',[

		'uses'=>'CategoriesController@show',
		'as'=>'categories.show'
	]);

	Route::get('/categories/edit/{id}',[

		'uses'=>'CategoriesController@edit',
		'as'=>'categories.edit'
	]);

	Route::post('/categories/update/{id}',[

		'uses'=>'CategoriesController@update',
		'as'=>'categories.update'
	]);

	Route::get('/categories/destroy/{id}',[

		'uses'=>'CategoriesController@destroy',
		'as'=>'categories.destroy'
	]);

	//Tags .....route
	
	Route::get('/tags',[
		'uses'=>'TagsController@index',
		'as'=>'tags'
	]);
	Route::get('/tags/create',[
		'uses'=>'TagsController@create',
		'as'=>'tags.create'
	]);
	Route::post('/tags/store',[
		'uses'=>'TagsController@store',
		'as'=>'tags.store'
	]);

	Route::get('/tags/edit/{id}',[
		'uses'=>'TagsController@edit',
		'as'=>'tags.edit'
	]);
	Route::post('/tags/update/{id}',[
		'uses'=>'TagsController@update',
		'as'=>'tags.update'
	]);
	Route::get('/tags/show/{id}',[
		'uses'=>'TagsController@show',
		'as'=>'tags.show'
	]);
	Route::get('/tags/destroy/{id}',[
		'uses'=>'TagsController@destroy',
		'as'=>'tags.destroy'
	]);

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

	Route::get('/settings',[

		'uses'=>'SettingsController@index',
		'as'=>'settings'
	]);

	Route::post('/settings/update',[

		'uses'=>'SettingsController@update',
		'as'=>'settings.update'
	]);
});


