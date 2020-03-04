
@extends('layout')

@section('title','Customer List')


@section('content')

<div class="row">
    <div class="col-12">
        <h1>Customers</h1>
        <p><a href="customers/create" class="btn btn-primary">Add New Customer</a></p>
    </div>
</div>


@foreach ($customers as $customer)

    <div class="row">
        <div class="col-2">
            {{$customer->id}}
        </div>
        <div class="col-4">
            {{$customer->name}}
        </div>
        <div class="col-4">
            {{$customer->email}}
        </div>
        <div class="col-2">
            {{$customer->active}}
        </div>
    </div>

@endforeach



@endsection
