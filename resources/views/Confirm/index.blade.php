@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Twoje rezerwacje
                </div>

                <div class="card-body">
                    <div class="container">
    <div class='form-row'>
    <div class="row justify-content-center col-md-8">
   
    <table class="table table-hover">
      <tr>
          <th>Id użytkownika</th>
          <th>ID przedmiotu</th>
          <th>Od</th>
          <th>Do</th>
          <th>Potwierdź</th>
          <th>Usuń</th>
      </tr>
      @foreach($items as $i)
      <tr>
         <td>{{$i -> id_user }}</td>
         <td>{{ $i -> id_object }}</td>
         <td>{{ $i -> Date_from }}</td>
         <td>{{ $i -> Date_to }} </td>
         <td>{!! Form::open(array('route'=>['Save.delete',$i->id],'method'=>'DELETE')) !!}                     
            {!! Form::button('Potwierdź',['class'=>'btn btn-success','type'=>'submit']) !!}
             {!! Form::close() !!}</td>
         <td> {!! Form::open(array('route'=>['Confirm.destroy',$i->id],'method'=>'DELETE')) !!}
                     
            {!! Form::button('Usuń',['class'=>'btn btn-danger','type'=>'submit']) !!}
             {!! Form::close() !!} </td>
      </tr>
         
      @endforeach
        </table>
    </div>
    </div>
                    </div></div></div></div>
    </div>
    
</div>

                   
     
@endsection