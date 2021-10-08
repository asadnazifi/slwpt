<?php

namespace App\Http\Controllers\Admin;
use App\Models\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function index()
    {
        $payments=Payment::all();
        return view('admin.payment.index',compact('payments'));
    }



    public function create()
    {
        
    }



    public function store()
    {
        
    }



    public function delete()
    {
        
    }



    public function update()
    {
        
    }



    

    public function edit()
    {
        
    }



    

    public function file()
    {
        
    }



    

    public function synfile()
    {
        
    }



    
}
