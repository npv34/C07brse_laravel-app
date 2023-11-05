@extends('layouts.master')
@section('content')
    <section class="mb-4">
        <div class="card">
            <div class="card-header text-center py-3">
                <h5 class="mb-0 text-center">
                    <strong>Customer list</strong>
                    <a href="{{ route('customers.showFormCreate') }}" class="btn btn-success">Add new</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    {{ $customers->links('pagination.custom') }}
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">City</th>
                            <th scope="col">Country</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $key => $customer)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>
                                    <a href="{{ route('customers.detail', $customer->customerNumber) }}">{{ $customer->customerName }}</a>
                                    </td>
                                <td>{{ $customer->getAllAddress() }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->city }}</td>
                                <td>{{ $customer->country }}</td>
                                <td><a href="{{ route('customers.delete', $customer->customerNumber) }}" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                    {{ $customers->links('pagination.custom') }}
                </div>
            </div>
        </div>
    </section>
@endsection
