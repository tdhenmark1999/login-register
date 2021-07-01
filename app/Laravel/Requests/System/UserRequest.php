<?php namespace App\Laravel\Requests\System;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class UserRequest extends RequestManager{

	public function rules(){

		$id = $this->route('id')?:0;

		$rules = [
			'username'		=> "required|unique:user,username,{$id},id,deleted_at,NULL",
		
			'password'	=> "required|confirmed",
		
		
			'first_name' => "required",

			'last_name' => "required",
		
			

		];

		if($id != 0){
			$rules['password'] = "confirmed";
		}

		return $rules;
	}

	public function messages(){
		return [
			'required'	=> "Field is required.",
			'contact.phone'	=> "Please provide a valid PH mobile number.",
			'birthdate.date'	=> "Birthdate must be a valid date.",
			'website.url'	=> "Invalid URL format. Adding http:// or https:// is also needed.",
		];
	}
}