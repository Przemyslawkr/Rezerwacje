@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('success'))
	<div class="flash-message">
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Zarezerwuj swoją atrakcję:</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'Rezerwacja.store']) !!}
                   @if ($errors->any())
                   <ul class="alert alert-danger">
                       @foreach($errors->all() as $error)
                       <a href="index.blade.php"></a>
                       <li>{{ $error }}</li>
                       @endforeach
                   </ul>
                   @endif
                   <div class="form-group">
                       {!! Form::label('id_object', "Wybierz:") !!}
                        <select class="form-control" name="id_object">
                       @foreach($przedmioty as $przedmiot)
                            <option  value="{{$przedmiot -> id}}">{{$przedmiot -> Description}}</option>
                       @endforeach
                       </select>
                   </div>
                   <div class='form-row'>
                   <div class="form-group col-md-4">
                       {!! Form::label('Date_from', "Data od:") !!}
                       {!! Form::date('Date_from', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
                   </div>
                        <input type="hidden" id="id_user" name="id_user" value="{{$usery->id}}">
                   <div class="form-group col-md-4">
                       {!! Form::label('Date_to', "Data do:") !!}
                       {!! Form::date('Date_to', \Carbon\Carbon::tomorrow(),['class'=>'form-control']) !!}
                   </div>
                   </div>
                   <div class="form-group">
                       {!! Form::submit('Potwierdź', ['class'=>'btn btn-primary']) !!}
                       {!! link_to(URL::previous(),'Powrót',['class'=>'btn btn-default']) !!}
                   </div>
                   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection