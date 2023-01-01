<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function index()
    {
        return Product::get();
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|unique:Products,name',
            'price' => 'required',
            'status' => 'required' 
        ]);

        if(!empty($validation)){
            Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'status' => $request->status
                ]);
                return "record inserted";
        }
        else{
            return $validation;
        }
    }

    public function delete($id)
    {
        $product = Product::findorfail($id);
        $product->delete();
        return "Record deleted";
    }
}
