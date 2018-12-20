@extends('layouts.app')

@section('content')

<div class="container">
    <div class='form-row'>
    <div class="row justify-content-center col-md-8">
   
    <table class="table table-hover">
      <tr>
          <th>ID</th>
          <th>Opis</th>
          <th>Cena</th>
          <th>Opcje</th>
      </tr>
      @foreach($przedmioty as $przedmiot)
      <tr>
          <td>{{ $przedmiot -> id }}</td>
           <td>{{ $przedmiot -> Description }}</td>
           <td>{{ $przedmiot -> Price }} zł</td>
         <td>{!! Form::open(array('route'=>['Admin.destroy',$przedmiot->id],'method'=>'DELETE')) !!}
                     
            {!! Form::button('Usuń',['class'=>'btn btn-danger','type'=>'submit']) !!}
             {!! Form::close() !!}
      </tr>
      @endforeach
        </table>
        {{$przedmioty->links() }}
     </div>
    <div class="col-md-2">
    </div>
    <div class='justify-content-center col-md-2'>
    <a class="btn btn-primary" href="{{route('Admin.create')}}">Dodaj Przedmiot</a>
    <a class="btn btn-success" href="{{url('/Confirm')}}" >Potwierdź rezerwacje</a>
    </div>
    </div>
</div>

@endsection