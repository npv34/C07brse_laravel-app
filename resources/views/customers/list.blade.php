@extends('layouts.master')
@section('content')
    <section class="mb-4">
        <div class="card">
            <div class="card-header py-3 d-flex justify-content-between">
                <h5 class="mb-0">
                    <strong>{{ GoogleTranslate::trans('Customer List', app()->getLocale()) }}</strong>
                </h5>
                <a href="{{ route('customers.showFormCreate') }}" class="btn btn-success">{{ GoogleTranslate::trans('Add new', app()->getLocale()) }}</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">{{ GoogleTranslate::trans('Name', app()->getLocale()) }}</th>
                            <th scope="col">{{ GoogleTranslate::trans('Address', app()->getLocale()) }}</th>
                            <th scope="col">{{ GoogleTranslate::trans('Phone', app()->getLocale()) }}</th>
                            <th scope="col">{{ GoogleTranslate::trans('City', app()->getLocale()) }}</th>
                            <th scope="col">{{ GoogleTranslate::trans('Country', app()->getLocale()) }}</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $key => $customer)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>
                                    <a href="{{ route('customers.detail', $customer->customerNumber) }}">{{ GoogleTranslate::trans($customer->customerName, app()->getLocale()) }}</a>
                                    </td>
                                <td>{{ GoogleTranslate::trans($customer->getAllAddress(), app()->getLocale()) }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ GoogleTranslate::trans($customer->city, app()->getLocale()) }}</td>
                                <td>{{ GoogleTranslate::trans($customer->country, app()->getLocale()) }}</td>
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
