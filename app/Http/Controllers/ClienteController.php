<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Consecutivo;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Registramos el cliente:
        $cliente = new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->cedula = $request->cedula;
        $cliente->celular = $request->celular;
        $cliente->correo = $request->correo;
        $cliente->terminos = $request->terminos;
        $cliente->ciudad_id = $request->ciudad;
        $cliente->save();
        // Buscamos el consecutivo:
        $consecutivo = Consecutivo::find(1);
        $nuevoValor = $consecutivo->contador + 1;
        $consecutivo->contador = $nuevoValor;
        $consecutivo->save();
        // Si es multiplo de 5, entonces retorna ganador:
        if ($consecutivo->contador % 5 == 0) {
            $numeroClientes = Cliente::all()->count();
            $numeroAleatorio = rand(1, $numeroClientes);
            $clienteGanador = Cliente::find($numeroAleatorio);
            return response()->json([
                'ganador' => $clienteGanador,
                'cliente' => $cliente
            ]);
        } else {
            return response()->json([
                'cliente' => $cliente
            ], 200);
        }
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
        //
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
        //
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
