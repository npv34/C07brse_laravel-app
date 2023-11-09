@extends('layouts.master')
@section('content')
    <section class="mb-4">
        <div class="card">
            <div class="card-header py-3">
                <h5 class="mb-0">
                    <strong>Add customer</strong>
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <form action="{{ route('customers.add') }}" method="post">
                            @csrf
                            <div class="form-outline mt-2">
                                <input type="text" name="customerNumber" id="customerNumber" class="form-control" />
                                <label class="form-label" for="customerNumber">customerNumber</label>
                            </div>
                            <div class="form-outline mt-2">
                                <input type="text" name="customerName" id="customerName" class="form-control" />
                                <label class="form-label" for="customerName">Name</label>
                            </div>
                            <div class="form-outline mt-2">
                                <input type="text" name="contactFirstName" id="contactFirstName" class="form-control" />
                                <label class="form-label" for="contactFirstName">Contact First Name</label>
                            </div>
                            <div class="form-outline mt-2">
                                <input type="text" name="contactLastName" id="contactLastName" class="form-control" />
                                <label class="form-label" for="contactLastName">Contact Last Name</label>
                            </div>
                            <div class="form-outline mt-2">
                                <input type="text" name="phone" id="phone" class="form-control" />
                                <label class="form-label" for="phone">Phone</label>
                            </div>
                            <div class="form-outline mt-2">
                                <input type="text" name="addressLine1" id="addressLine1" class="form-control" />
                                <label class="form-label" for="addressLine1">Address Line 1</label>
                            </div>
                            <div class="form-outline mt-2">
                                <input type="text" name="addressLine2" id="addressLine2" class="form-control" />
                                <label class="form-label" for="addressLine1">Address Line 2</label>
                            </div>
                            <div class="form-outline mt-2">
                                <input type="text" name="city" id="city" class="form-control" />
                                <label class="form-label" for="city">City</label>
                            </div>
                            <div class="form-outline mt-2">
                                <input type="text" name="state" id="state" class="form-control" />
                                <label class="form-label" for="state">State</label>
                            </div>
                            <div class="form-outline mt-2">
                                <input type="text" name="postalCode" id="postalCode" class="form-control" />
                                <label class="form-label" for="postalCode">Postal Code</label>
                            </div>
                            <div class="form-outline mt-2">
                                <input type="text" name="country" id="country" class="form-control" />
                                <label class="form-label" for="country">Country</label>
                            </div>
                            <div class="form-outline mt-2">
                                <input type="text" name="creditLimit" id="creditLimit" class="form-control" />
                                <label class="form-label" for="creditLimit">Credit Limit</label>
                            </div>
                            <div class="form-outline mt-2">
                                <select name="salesRepEmployeeNumber">
                                    @foreach($employers as $employ)
                                        <option value="{{ $employ->employeeNumber }}">{{ $employ->getFullName() }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <button class="btn btn-success" type="submit">Save</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
