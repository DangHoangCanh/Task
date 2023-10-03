<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Http\Resources\CustomerResource;
use App\Http\Resources\CustomerCollection;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //show tat ca nguoi dung
        return new CustomerCollection(customer::paginate(5));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //tao nguoi dung
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //luu nguoi dung vao db
    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
        //hien thi nguoi dung voi id nhat dinh
        return new  CustomerResource($customer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //lay ra nguoi dung mang id de update
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //cap nhat lai nguoi dung
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //xoa nguoi dung
    }
}
