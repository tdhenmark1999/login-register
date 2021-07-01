<?php 

namespace App\Laravel\Controllers\Frontend;


use App\Laravel\Models\Partner;
use App\Laravel\Models\Sale;
use App\Laravel\Models\Business;
use App\Laravel\Models\TransactionManager;

use Carbon,Auth;

class HomeController extends Controller{

	public function index(){
		
		return view('frontend.index');
	}

}