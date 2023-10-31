<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Controllers; use App\Models\Product; use Illuminate\Http\Request; class HomeController extends Controller { public function index() { $products = Product::all(); return view('home.index', compact('products')); } public function katalog() { $products = Product::all(); return view('home.katalog', compact('products')); } }
