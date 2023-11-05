@extends('layouts.master')
@section('content')

    <section class="mb-4">
        <div class="card">
            <div class="card-header text-center py-3">
                <h5 class="mb-0 text-center">
                    <strong>List Order</strong>
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ route('orders.filter') }}" method="get">
                        @csrf
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <select class="form-select" name="order-status">
                                <option value="0">Chose status order</option>
                                <option value="Shipped" {{ request()->get('order-status') == 'Shipped' ? 'selected': ''}}>Shipped</option>
                                <option value="Shipping" {{ request()->get('order-status') == 'Shipping' ? 'selected': ''}}>Shipping</option>
                                <option value="Cancel" {{ request()->get('order-status') == 'Cancel' ? 'selected': ''}}>Cancel</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-2">
                            <button class="btn btn-info">Filter</button>
                        </div>
                    </div>
                    </form>
                    <table class="table table-hover text-nowrap mt-3">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Customer Number</th>
                            <th scope="col">Order Date</th>
                            <th scope="col">Required Date</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $key =>  $order)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $order->orderNumber }}</td>
                                <td><a href="{{ route('customers.detail', $order->customer->customerNumber) }}">{{ $order->customer->customerName }}</a></td>
                                <td>{{ $order->orderDate }}</td>
                                <td>{{ $order->requiredDate }}</td>
                                <td>{{ $order->status }}</td>
                                <td><a href="" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $orders->links('pagination.custom') }}
                </div>
            </div>
        </div>
    </section>
@endsection
