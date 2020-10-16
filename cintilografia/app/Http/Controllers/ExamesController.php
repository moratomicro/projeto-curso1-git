<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamesModel;

class ExamesController extends Controller
{
    private $totalPage = 10;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = ExamesModel::paginate($this->totalPage);
        return view('exames.index', compact('results'));
    }    
}