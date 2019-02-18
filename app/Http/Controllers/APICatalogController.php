<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class APICatalogController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return response()->json(Movie::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $m1 = new Movie;
            $m1->title = $request->input('title');
            $m1->year = $request->input('year');
            $m1->director = $request->input('director');
            $m1->poster = $request->input('poster');               
            $m1->synopsis = $request->input('synopsis');  
            $m1->rented = $request->input('rented', false);
            $m1->save();
            return response()->json(['error'=>false, 'msg'=>'La película se ha creado correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return response()->json(Movie::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $m2 = Movie::findOrFail($id);
            $m2->title = $request->input('title');
            $m2->year = $request->input('year');
            $m2->director = $request->input('director');
            $m2->poster = $request->input('poster');               
            $m2->synopsis = $request->input('synopsis');  
            $m2->rented = $request->input('rented', false);
            $m2->save();
            return response()->json(['error'=>false, 'msg'=>'La película se ha modificado correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $m1 = Movie::findOrFail($id);
        $m1->delete();
        return response()->json(['error'=>false, 'msg'=>'La película se ha eliminado correctamente']);
    }

    public function putRent($id) {
        $m = Movie::findOrFail($id);
        $m->rented = true;
        $m->save();
        return response()->json(['error' => false,
                    'msg' => 'La película se ha marcado como alquilada']);
    }
    
    public function putReturn($id) {
        $m = Movie::findOrFail($id);
        $m->rented = false;
        $m->save();
        return response()->json(['error' => false,
                    'msg' => 'La película se ha marcado como devuelta']);
    }

}
