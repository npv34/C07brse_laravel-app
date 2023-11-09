@extends('layouts.master')
@section('content')
    <section class="mb-4">
        <div class="card">
            <div class="card-header py-3">
                <h5 class="mb-0">
                    <strong>Profile: {{ session()->get('username') }}</strong>
                </h5>
            </div>
            <div class="card-body">

            </div>
        </div>
    </section>

@endsection
