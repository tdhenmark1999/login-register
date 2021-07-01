<?php

/*,'domain' => env("FRONTEND_URL", "wineapp.localhost.com")*/

Route::group(['as' => "frontend.",
		 'namespace' => "Frontend",
		 'middleware' => ["web"]
		],function() {


		
		Route::group(['prefix' => "/",'as' => "home."],function(){
		Route::get('/',['as' => "index",'uses' => "HomeController@index"]);
	});
		
	

});


