<?php

/*,'domain' => env("FRONTEND_URL", "wineapp.localhost.com")*/
Route::group([
		'as' => "system.",
		'namespace' => "System",
		'prefix' => "portal",
		],function() {

	Route::group(['middleware'=>['system.guest']],function(){
       Route::get('login/{redirect_uri?}',['as' => "login",'uses' => "AuthController@login"]);
				Route::post('login/{redirect_uri?}',['uses' => "AuthController@authenticate"]);
				Route::get('register/{redirect_uri?}',['as' => "register",'uses' => "AuthController@register"]);
				Route::post('register/{redirect_uri?}',['uses' => "AuthController@store"]);
    });
	Route::get('/data', 'AreaListController@search');
	Route::group(['middleware' => ["system.auth"]], function(){
		

		Route::get('list',['as' => "area_list",'uses' => "AreaListController@index"]);
		Route::get('lock',['as' => "lock", 'uses' => "AuthController@lock"]);
		Route::post('lock',['uses' => "AuthController@unlock"]);
		Route::get('logout',['as' => "logout",'uses' => "AuthController@destroy"]);



	



		});
	
	});

	
	

