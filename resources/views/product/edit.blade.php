@extends('main.common') 
    @section('main-content')
        @if ($errors->any())
            <p>Whoops! There are some errors in your input</p>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>                    
            @endforeach         
        @endif
        <div class="container text-start">
            <h4 class="text-center mt-2">Edit product item</h3>
            <a href="{{route('products.index')}}" class="btn btn-success my-3">Back</a>
            <form action="{{route('products.update',$product->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Product id</label>
                    <input type="text" class="form-control" disabled
                    value="{{$product->id}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="product_name" class="form-control"
                    value="{{$product->name}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price"
                    value={{$product->price}}>
                </div>
                <div class="mb-3">
                    <label for="">Status</label>
                    <select name="status" class="form-control">
                        <option value={{$product->status}}></option>
                        <option value="">Select Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Make Changes</button>
                </div>
            </form>
        </div>
    @endsection