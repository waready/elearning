<?php

namespace App\Http\Controllers;

use App\leccione;
use Illuminate\Http\Request;

class leccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $id = 1;
        $Leccion = leccione::where('course_id', $id)->get()->load('course');
        return  $Leccion;   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videoCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lecciones = new leccione();
           $lecciones->name = $request->name;
           $lecciones->conten = $request->conten;
           $lecciones->course_id = $request->course_id;           

           $file = $request->file;
            //return $file;
           if ($file){
              $path = public_path('/storage/videos');
              $fileName = time().'.'.$file->getClientOriginalExtension();
              $moved = $file -> move($path, $fileName);
              $lecciones->video = $fileName;
              
           }
           $lecciones->save();
           return redirect('videos'); 
 


    //    $imagen_name = time().$file->getClientOriginalName();
    //         \Storage::disk('users')->put($imagen_name,\File::get($file));
    //         $data = array(
    //             'code' => 200,
    //             'status' => 'success',
    //             'imagen' => $imagen_name
    //         );
 
       //return "archivo guardado";

       // return $request;
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
        $lecciones = leccione::find($id);
        //return $lecciones;
        return view('videoUpdate', compact('lecciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
         return "hellow ";
        
    
    }
    public function nada(){
        return "hola";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lecciones = leccione::find($id);
        $lecciones->delete();
        
    }
}
