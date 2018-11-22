@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    <a class="btn btn-primary" href="{{route('Admin.create')}}">Dodaj Przedmiot</a>
   
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
</div>

@endsection