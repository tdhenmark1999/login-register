<?php 

namespace App\Laravel\Controllers\System;

use App\Laravel\Requests\System\UserRequest;

use Illuminate\Contracts\Auth\Guard;

use App\Laravel\Models\User;


use Session, Input, Auth,Carbon,Helper;

class AuthController extends Controller{

	protected $data;

	public function __construct(Guard $auth){
		$this->auth = $auth;
	}

	public function login($redirect_uri = NULL){
		
		return view('system.auth.login');
	}

	public function register($redirect_uri = NULL){
		
		return view('system.auth.register');
	}

	public function store(UserRequest $request){

		$new_user = new User;
		$new_user->fill($request->only('first_name','middle_name','last_name','username'));
		// dd($request->get('area'));
		
		
		$new_user->status = "active";
		$new_user->password = bcrypt($request->get('password'));
		if($new_user->save()){
			session()->flash('notification-status','success');
			session()->flash('notification-msg',"Your account is still pending. Wait for admin's approval.");
			return redirect()->route('system.login');
		}else{
			session()->flash('notification-status','success');
			session()->flash('notification-msg','Successfully registered.');
			goto callback;
		}

		callback:
		return redirect()->route('system.auth.login');
	}


	public function authenticate($redirect_uri = NULL){
		try{
			$this->data['page_title'] = " :: Login";
			$username = Input::get('username');
			$password = Input::get('password');
			$remember_me = Input::get('remember_me',0);
			$field = filter_var($username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';	

			$user = User::where($field,$username)->first();
		
			if(!$user || $user->status =='pending'){

				session()->flash('notification-status', "error");
				session()->flash('notification-msg', "Invalid username/password or your account is still pending.");
				return redirect()->back();
			}

			if($this->auth->attempt([$field => $username,'password' => $password], $remember_me)){
				session()->flash('notification-status','success');
				session()->flash('notification-title',"It's nice to be back");
				session()->flash('notification-msg',"Welcome {$this->auth->user()->name}!");
				$this->auth->user()->save();
				if($redirect_uri AND session()->has($redirect_uri)){
					return redirect( session()->get($redirect_uri) );
				}


			
				return redirect()->route('system.area_list');
			}	

			session()->flash('notification-status','failed');
			session()->flash('notification-msg','Wrong username or password.');
			return redirect()->back();

		}catch(Exception $e){
			abort(500);
		}
	}
public function destroy(){
		$this->auth->logout();
		session()->flash('notification-status','success');
		session()->flash('notification-msg','You are now signed off.');
		return redirect()->route('system.login');
	}

}