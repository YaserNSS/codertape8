
@extends('layout')

@section('content')
<h1>Customers</h1>

<form action="customers" class="pb-5" method="POST">
    <div class="input-group">
        <input type="text" name="name" id="">
    </div>
    <button type="submit">Add Customer</button>
    @csrf
</form>


<ul>
    @foreach ($customers as $customer)
        <li>{{$customer->name}}</li>
    @endforeach
</ul>
@endsection

