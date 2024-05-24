<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Validator;
use Str;
use Auth;
class OutOfStockController extends Controller
{
    public function index(){

        $data = [
            'products' => Product::where('stock', '<=', 0)->get()->sortByDesc('id'),
            'title' => 'Products'
        ];
        return view('admin.product.index', $data);
    }

   
}
