<?php

namespace App\Http\Controllers\Empresa;

use App\Empresa;
use App\Moneda;
use App\Pais;
use App\Rubro;
use App\ZonaHoraria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmpresaController extends Controller
{
    public $rubros;
    public $paises;
    public $zonas_horarias;
    public $monedas;
    public $empresas;

    /**
     * EmpresaController constructor.
     */
    public function __construct()
    {
        $this->rubros = Rubro::getSelect();
        $this->paises = Pais::getSelect();
        $this->zonas_horarias = ZonaHoraria::getSelect();
        $this->monedas = Moneda::getSelect();
        $this->empresas = Empresa::all();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empresa.list')->with('empresas', $this->empresas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create')
            ->with('rubros', $this->rubros)
            ->with('paises', $this->paises)
            ->with('zonas_horarias', $this->zonas_horarias)
            ->with('monedas', $this->monedas);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
