<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        //$customers =Customer::all();
        $ActiveCustomers = Customer::active()->get();
        $InactiveCustomers = Customer::inactive()->get();
        return view('internals.customers',compact('ActiveCustomers','InactiveCustomers'));
    }

    public function store()
    {
        $data = request()->validate([

            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required'

        ]);

        Customer::create($data);
        return back();

    }
}
