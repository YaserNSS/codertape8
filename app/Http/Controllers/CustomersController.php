<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Company;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        //$customers =Customer::all();
        $ActiveCustomers = Customer::active()->get();
        $InactiveCustomers = Customer::inactive()->get();
        $companies = Company::all();
        return view('internals.customers',compact('ActiveCustomers','InactiveCustomers','companies'));
    }

    public function store()
    {
        $data = request()->validate([

            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',

        ]);

        Customer::create($data);
        return back();

    }
}
