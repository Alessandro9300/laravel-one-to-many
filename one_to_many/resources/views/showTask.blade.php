@extends('layout')

@section('section')
  {{$task -> name }} <br>
  {{$task -> description }} <br>
  {{$task -> scadenza }} <br>
  {{$task -> employee -> firstname}} {{$task -> employee -> lastname}} <br>

  <a href="{{route('update', $task -> id)}}">Edit Me</a>
@endsection
