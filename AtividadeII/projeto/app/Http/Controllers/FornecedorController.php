<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    //
    public function show(){
        $fornecedores = fornecedores::all();
        echo $fornecedores;
    }
}
