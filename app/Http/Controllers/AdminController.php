<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $przedmioty = \App\Przedmiots::paginate(3);
        return view('admin.index', compact('przedmioty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
       \App\Przedmiots::create($request->all());
       return redirect()->route('Admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\Przedmiots $przedmiot)
    {
        
        return view('Admin.edit',compact('przedmiot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request\AdminRequest  $request
     * @param  \App\Przedmiots $przedmiot
     * @return \Illuminate\Http\Response
     */
    public function update(AdminRequest $request, \App\Przedmiots $przedmiot)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        
        \App\Przedmiots::destroy($id);
        return redirect()->route('Admin.index');
    }
}
