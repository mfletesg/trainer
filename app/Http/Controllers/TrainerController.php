<?php

namespace LaraDex\Http\Controllers;

use LaraDex\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::all(); //Consultamos todos los datos con el metodo all();
        return view('trainers.index', compact('trainers')); //Compact genera un array con los datos requeridos
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasfile('avatar')) { //Checamos si es un archivo con el nonbre avatar del formulario
            $file = $request->file('avatar'); //Guardamos el archivo en una varible
            $name = time().$file->getClientOriginalName(); //Obtenemos el nombre y concatenamos la hora para que sea unico
            $file->move(public_path().'/images/', $name); //Ponemos la carpeta donde se va a guardar con el nombre
        }

        $trainer = new Trainer(); //Llamamos al modelo
        $trainer->name  = $request->input('name');  //Guardamos el el modelo el nombre
        $trainer->description  = $request->input('description');
        $trainer->avatar = $name ; //Guardamos la ruta de la imagen a la base de datos
        $trainer->save(); //Lo guardamos en la base de datos
        return 'Guardado';


        //return $request->input('name'); //Imprimimos el solo la variable
        //return $request->all(); //Obtine todo los datos del usuario
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer) //$id
    {
        //$trainer = Trainer::Where('slug', '=', $slug)->firstOrFail();
        //$trainer = Trainer::find($id); //Busca por id el registro en la base de datos
        //return $trainer;
        return view('trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('trainers.edit', compact('trainer'));
        return $trainer;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        $trainer->fill($request->except('avatar')); //Fill actualiza los datos que estamos recibiendo
        if ($request->hasfile('avatar')) { //Checamos si es un archivo con el nonbre avatar del formulario
            $file = $request->file('avatar'); //Guardamos el archivo en una varible
            $name = time().$file->getClientOriginalName(); //Obtenemos el nombre y concatenamos la hora para que sea unico
            $trainer->avatar = $name;
            $file->move(public_path().'/images/', $name); //Ponemos la carpeta donde se va a guardar con el nombre
        }

        $trainer->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
