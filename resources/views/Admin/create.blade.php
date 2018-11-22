@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dodaj nowy przedmiot</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'Admin.store']) !!}
                   @if ($errors->any())
                   <ul class="alert alert-danger">
                       @foreach($errors->all() as $error)
                       <li>{{ $error }}</li>
                       @endforeach
                   </ul>
                   @endif
                   <div class="form-group">
                       {!! Form::label('Description', "Opis:") !!}
                       {!! Form::text('Description', null, ['class'=> 'form-control']) !!}
                   </div>
                   <div class="form-group">
                       {!! Form::label('Price', "Cena:") !!}
                       {!! Form::text('Price', null, ['class'=> 'form-control']) !!}
                   </div>
                   <div class="form-group">
                       {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
                       {!! link_to(URL::previous(),'Powrót',['class'=>'btn btn-default']) !!}
                   </div>
                   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>




@endsection