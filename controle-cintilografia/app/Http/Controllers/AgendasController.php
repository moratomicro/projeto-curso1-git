<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgendasModel;
use App\Models\ExamesModel;

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
        $title = 'Agenda Mensal';
        $results = AgendasModel::paginate($this->totalPage);
        $resul = ExamesModel::find($results);
        return view('agendas.agenda', compact('results', 'resul', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastro de Exames';

        return view('agendas.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = 'Cadastro de Exames';

        //Pega todos os dados que são carregados no formulário
        $dataForm = $request->except('_token');

        $insert = $this->agendasModel->insert($dataForm);

        if( $insert)
            return redirect('agenda/create', compact('title'));
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
        $results = ExamesModel::paginate($this->totalPage);
        return view('agendas.edit', compact('results'));
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
