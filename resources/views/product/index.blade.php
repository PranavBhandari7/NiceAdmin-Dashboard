@extends('main.common') 
    @section('main-content')
    <div class="container text-start">
        <a href="{{route('products.create')}}" class="btn btn-success my-3">Create New Product</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered text-center">
        <thead class="bg-primary text-light">
            <tr>
                <th>No</th>
                <th>Product ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Status</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <?php $i = 0; ?>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>${{ $product->price }}</td>
                <td>{{ $product->status }}</td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('products.show', $product->id) }}">Show</a>

                        <a class="btn btn-success" href="{{ route('products.edit', $product->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endsection