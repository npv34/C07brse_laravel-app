@extends('layouts.master')
@section('content')
    <section class="mb-4">
        <div class="card">
            <div class="card-header text-center py-3">
                <h5 class="mb-0 text-center">
                    <strong>Customer Detail: {{ $customer->customerName }}</strong>
                </h5>
                <p>Phone: {{ $customer->phone }}</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <h3>Order History (total: {{ $customer->orders->count() }})</h3>
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Order Date</th>
                            <th scope="col">Required Date</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($customer->orders as $key =>  $order)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $order->orderNumber }}</td>
                                <td>{{ $order->orderDate }}</td>
                                <td>{{ $order->requiredDate }}</td>
                                <td>{{ $order->status }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No data</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
