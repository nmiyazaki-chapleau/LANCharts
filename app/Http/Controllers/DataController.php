<?php

namespace App\Http\Controllers;

use App\Models\Layer;
use App\Models\Device;
use App\Models\Connection;
use Illuminate\Http\Request;

class DataController extends Controller
{
	public function index(){
		return view('app',
			[
				'layers' => layer::all()
			],
			[
				'devices' => device::all()
			],
			[
				'connections' => connection::all()
			]
		);
	}
}
