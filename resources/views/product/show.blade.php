@extends('main.common') 
    @section('main-content')
        <div class="text-start ms-5">
            <div class="row mb-4">
                <div class="col-6">
                    <h3 class="d-inline">Displaying Product Item</h3>
                </div>
                <div class="col-6 text-end">
                    <a href="{{route('products.index')}}" class="btn btn-success">Back</a>
                </div>
            </div>
            <p><b>Product id:</b> {{$product->id}}</p> 
            <p><b>Product Name:</b> {{$product->name}}</p>      
            <p><b>Product Price:</b> {{$product->price}}</p>
            <p><b>Product Status:</b> ${{$product->status}}</p>
        </div>
    @endsection
