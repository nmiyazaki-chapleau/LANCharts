<?php

namespace App\Http\Controllers;

use App\Models\Layer;
use Illuminate\Http\Request;

class LayerController extends Controller
{
	public function index(){
		return view('app', [
			'layers' => layer::all()
		]);
	}
}
