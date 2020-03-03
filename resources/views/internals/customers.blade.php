
@extends('layout')

@section('title','Customer List')


@section('content')

<div class="row">
    <div class="col-12">
        <h1>Customers</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
            <form action="customers" method="POST">

                    <div class="form-group pb-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control">
                    </div>
                    <div>{{$errors->first('name')}}</div>

                    <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{old('email')}}" class="form-control">
                    </div>
                    <div>{{$errors->first('email')}}</div>

                    <button type="submit" class="btn btn-primary">Add Customer</button>
                    @csrf
            </form>
    </div>
</div>

<hr>


<div class="row">
    <div class="col-12">
        <ul>
            @foreach ($customers as $customer)
                <li>{{$customer->name}} <span class="text-muted">({{$customer->email}})</span></li>
            @endforeach
        </ul>
    </div>
</div>
@endsection

