<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfirmController extends Controller
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
        $items = DB::select('select * from rezerwacjes where Confirmed = :id', ['id' => "Nie"]);
        return view('confirm.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
      //
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
    public function edit(int $id)
    {
        DB::table('rezerwacjes')->where('id', $id)->update(['Confirmed' => Tak]);
          return redirect()->route('Confirm.index');     
        
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
        
        \App\Rezerwacjes::destroy($id);
        return redirect()->route('Confirm.index');
    }
}
