<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Layer;

class layerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layer.index', ['layers' => layer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        return view('layer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
	    
	$validated = $request->validate();
	dd($validated);
	//$layer = Layer::create([
	//	'ID' => 53,
	//	'Name' => 'Layer',
	//	'Position' => 10,
	//]);

	Layer::create($request->all());

        //$layer->save();

	/*
	// Insert
        $layer = new Layer;
        
        $layer->Name = $request->Name;
        $layer->Position = $request->Position;

        $layer->save();

        // Redirect
        //Session::flash('message', 'Successfully created layer!');
	 */
	return redirect()->route('layer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
	    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	 //return view('products.edit', compact('layer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
	$validated = $request->validate();
	$layer->update($request->all());
	return redirect()->route('layer.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $layer->delete();
	    return redirect()->route('layer.index');
    }
}
