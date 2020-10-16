<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgendasModel;
use App\Models\ExamesModel;
use Illuminate\Support\Facades\Redirect;

class AgendasController extends Controller
{
    private $totalPage = 10;
    private $agendasModel;

    public function __construct(AgendasModel $agendasModel)
    {
        $this->agendasModel = $agendasModel;
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = AgendasModel::paginate($this->totalPage);
        $resul = ExamesModel::find(3);
        return view('agendas.lista', compact('results', 'resul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Agendar Paciente';
        $results = ExamesModel::all();
        return view('agendas.new-edit', compact('results', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Pega todos os dados que são carregados no formulário
        $insert = agendasModel::create($request->all());

        $insert->save();

        if( $insert)            
            return redirect('listaMensal');
        else
            return redirect()->back();        
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
        $title = 'Agendar Data e Horário';
        $results = AgendasModel::find($id);
        $results->all();
        
        return view('agendas.new-edit', compact('results', 'title'));
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
        $agenda = AgendasModel::find($id);
        $agenda->delete();
        return redirect()->back();
    }
}
