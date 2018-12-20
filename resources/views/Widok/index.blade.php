@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Twoje rezerwacje</div>

                <div class="card-body">
                    <div class="container">
    <div class='form-row'>
    <div class="row justify-content-center col-md-8">
   
    <table class="table table-hover">
      <tr>
          <th>ID przedmiotu</th>
          <th style="width: 30%">Od</th>
          <th style="width: 30%">Do</th>
          <th>Potwierdzone</th>
      </tr>
      @foreach($rezerwa as $rez)
      <tr>
         <td>{{ $rez -> id_object }}</td>
         <td>{{ $rez -> Date_from }}</td>
         <td>{{ $rez -> Date_to }} </td>
         <td>{{ $rez -> Confirmed }}</tr>
      @endforeach
        </table>
        
    
</div>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection