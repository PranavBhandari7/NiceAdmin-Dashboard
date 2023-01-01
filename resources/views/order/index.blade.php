@extends('main.common')
    @section('main-content')
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Orders</h1>
            </div>
            <div class="row">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Orders List</h6>
                        <div class="text-end">
                            <a href="{{route('orders.create')}}" class="btn btn-success my-3">Create new order</a>
                        </div>
                    </div>

                    <div class="card-body">
                        @if(count($orders) > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>User Name</th>
                                        <th>Order Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>@if(!@empty($order->product))
                                                {{ $order->product->name }}
                                            @else
                                                NA
                                            @endif</td>
                                            <td>{{ $order->customer->name }}</td>
                                            <td>{{ $order->order_date }}</td>
                                            <td>
                                                <a href="{{ route('orders.edit', $order->id) }}">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                           <div>
                                There has been no orders placed yet.
                            </div> 
                        @endif
                    </div>
                </div>
            </div>

        </div>
    @endsection