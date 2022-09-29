<?php

namespace App\Http\Controllers;

use App\Models\Investigador;
use Illuminate\Http\Request;

class InvestigadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['investigadors']=Investigador::paginate(5);
        return view('investigador.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('investigador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosInvestigador = request()->all();
        $campos=[
            'Nombres'=>'required|string|max:100',
            'Apellidos'=>'required|string|max:100',
            'NumeroIdentificacion'=>'required|string|max:100',
            'Telefono'=>'required|string|max:100',
            'CorreoInstitucional'=>'required|email',
        ];
        $mensaje=[
                'required'=>'El :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosInvestigador = request()->except('_token');
        Investigador::insert($datosInvestigador);

        //return response()->json($datosInvestigador);
        return redirect('investigador')->with('mensaje','Investigador agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Investigador  $investigador
     * @return \Illuminate\Http\Response
     */
    public function show(Investigador $investigador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investigador  $investigador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $investigador=Investigador::findOrFail($id);
        return view('investigador.edit', compact('investigador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Investigador  $investigador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'Nombres'=>'required|string|max:100',
            'Apellidos'=>'required|string|max:100',
            'NumeroIdentificacion'=>'required|string|max:100',
            'Telefono'=>'required|string|max:100',
            'CorreoInstitucional'=>'required|email',
        ];
        $mensaje=[
                'required'=>'El :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        //
        $datosInvestigador = request()->except(['_token', '_method']);
        Investigador::where('id','=',$id)->update($datosInvestigador);

        $investigador=Investigador::findOrFail($id);
        return view('investigador.edit', compact('investigador'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investigador  $investigador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Investigador::destroy($id);
        return redirect('investigador')->with('mensaje','Investigador borrado');

    }
}
