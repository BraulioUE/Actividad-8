<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conferencia;

class ConferenciaController extends Controller
{
    /**

     * @return \Illuminate\View\View
     */
    public function index()
    {
        $conferencias = Conferencia::all();

        return view('conferencias.index', compact('conferencias'));
    }
}