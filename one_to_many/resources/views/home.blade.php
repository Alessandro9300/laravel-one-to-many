@extends('layout')

@section('section')

  @foreach ($tasks as $task)



    Mansione: <a href="{{route('task', $task -> id)}}"> {{$task -> name}} </a> . Svolta da:   <a href="{{route('employee', $task -> id)}}">
        {{$task -> employee -> firstname}} {{$task -> employee -> lastname}}
      </a>  <br>


  @endforeach


@endsection
