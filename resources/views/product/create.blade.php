@extends('main.common')
    @section('main-content')
            @if ($errors->any())
                <p>Whoops! There are some errors in your input</p>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>                    
                @endforeach         
            @endif
            <div class="container text-start">
                <h4 class="text-center mt-2">Add New Product Item</h3>
                    <div class="text-end">
                        <a href="{{route('products.index')}}" class="btn btn-success my-3">Back</a>
                    </div>
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control"
                        placeholder="Enter the product name here" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price"
                        placeholder="Enter the product price here" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Status</label>
                        <select name="status" class="form-control" required>
                            <option value="">Select Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
    @endsection