<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
	public function index()
	{
		$mentors =Module::where('category_id',1)->get();
		$sponsors =Module::where('category_id',2)->get();
		$partners =Module::where('category_id',3)->get();
		
		return view('farno-char',compact('mentors','sponsors','partners'));
	}
}
