<?php

namespace App\Http\Controllers;

use App\leccione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;//esto para poder borrar informacion del storage

class leccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        // esto codigo comentado carga el api rest
        // $id = 1;
        //  $Leccion = leccione::where('course_id', $id)->get()->load('course');
        //  return  $Leccion;
            $datos['videos']=leccione::paginate(20);
            return view('administrar-videos.index',$datos);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrar-videos.create');
        // return view('videoCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosVideo=request()->all();
        $datosVideo=request()->except('_token');

        if($request->hasFile('video')){
            $datosVideo['video']=$request->file('video')->store('videos','public');//guarda en la ruta carpeta storage/app/public/videos
        }

        leccione::insert($datosVideo);
        return response()->json($datosVideo);


        // $lecciones = new leccione();
    //        $lecciones->name = $request->name;
    //        $lecciones->conten = $request->conten;
    //        $lecciones->course_id = $request->course_id;           

    //        $file = $request->file;
    //         //return $file;
    //        if ($file){
    //           $path = public_path('/storage/videos');
    //           $fileName = time().'.'.$file->getClientOriginalExtension();
    //           $moved = $file -> move($path, $fileName);
    //           $lecciones->video = $fileName;
              
    //        }
    //        $lecciones->save();
    //        return redirect('videos'); 
 


    //    $imagen_name = time().$file->getClientOriginalName();
    //         \Storage::disk('users')->put($imagen_name,\File::get($file));
    //         $data = array(
    //             'code' => 200,
    //             'status' => 'success',
    //             'imagen' => $imagen_name
    //         );
 
    //    return "archivo guardado";

    //    return $request;
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
        // $lecciones = leccione::find($id);
        // return $lecciones;
        // return view('videoUpdate', compact('lecciones'));
        $video=leccione::findOrFail($id);
        return view('administrar-videos.edit',compact('video'));
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
        //  return "hellow ";
        $datosVideo=request()->except(['_token','_method']);

        if($request->hasFile('video')){

            $video=leccione::findOrFail($id);

            // Storage::delete('public/'.$video->video); //primera forma esto es con storage facade pero no funciona
            unlink(storage_path('app/public/'.$video->video)); // esta si funciona

            $datosVideo['video']=$request->file('video')->store('videos','public');//guarda en la ruta carpeta storage/app/public/videos
        }

        leccione::where('id','=',$id)->update($datosVideo);

        $video=leccione::findOrFail($id);//con estas dos lineas se observa como quedo despues del update
        return view('administrar-videos.edit',compact('video'));
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
        // $lecciones = leccione::find($id);
        // $lecciones->delete();
        leccione::destroy($id);
        return redirect('videos');
        
    }
}
