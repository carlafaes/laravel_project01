<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __invoke(){
        return 'Bienvenido a la pagina principal';
    }
}
