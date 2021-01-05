<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OwnerInfo;


class OwnerInfoController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        $ownerInfo = OwnerInfo::latest()->get();
        return view('product.ownerInfo.manage',compact('ownerInfo'));
    }


    /**
     * Show the form for creating a new resource. 
     */
    public function create()
    {
        return view('product.ownerInfo.create');
    }

    /**
     * Store a newly created resource in storage. 
     */
    public function store()
    {
        OwnerInfo::create(request()->validate([
            'name'      => 'required',
            'position'  => 'required',
            'details'   => 'required'
        ]));
    
        return redirect(route('ownerInfo.manage'));
    }

    /**
     * Display the specified resource. 
     */
    public function show(OwnerInfo $show)
    {
        return view('product.ownerInfo.show',compact('show'));
        
    }

    /**
     * Show the form for editing the specified resource. 
     */
    public function edit(OwnerInfo $edit)
    {
        return view('product.ownerInfo.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage. 
     */
    public function update(OwnerInfo $id)
    {
        $id->update(request()->validate([
            'name'      => 'required',
            'position'  => 'required',
            'details'   => 'required'
        ]));
        
        return redirect(route('ownerInfo.manage'));
    }
    /**
     * Remove the specified resource from storage. 
     */
    public function destroy()
    {
        return view('welcome');
    }
}
