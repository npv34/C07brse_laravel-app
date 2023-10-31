@extends('layouts.master')
@section('content')
    <style type="text/css">
        .my-active span{
            background-color: #4171c4 !important;
            color: white !important;
            border-color: #5cb85c !important;
        }
        ul.pager>li {
            display: inline-flex;
            padding: 5px;
        }
    </style>
    <section class="mb-4">
        <div class="card">
            <div class="card-header text-center py-3">
                <h5 class="mb-0 text-center">
                    <strong>List product</strong>
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    {{ $products->links('pagination.custom') }}
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Code</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Product Price</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $key =>  $product)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $product->productName }}</td>
                            <td>{{ $product->productCode }}</td>
                            <td>{{ $product->quantityInStock }}</td>
                            <td>{{ $product->buyPrice }}</td>
                            <td><a href="" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $products->links('pagination.custom') }}
                </div>
            </div>
        </div>
    </section>
@endsection
