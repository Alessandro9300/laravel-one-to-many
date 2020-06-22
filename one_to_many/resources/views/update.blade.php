@extends('layout')

@section('section')
  <form class="" action="index.html" method="post">
    @csrf
	  @method('post')
    <label> name </label>
    <input type="text" name="{{$task -> name}}" value="{{$task -> name}}"> <br>
    <label> description </label>
    <input type="text" name="{{$task -> description}}" value="{{$task -> description}}"> <br>
    <label> scadenza </label>
    <input type="text" name="{{$task -> scadenza}}" value="{{$task -> scadenza}}"> <br>

    <select class="" name="">
      @foreach ($employees as $employee)
        <option value="{{$employee -> id}}"
          @if ($employee -> id === $task -> employee -> id)
            selected
          @endif
          >

        {{$employee -> firstname}} {{$employee -> lastname}}</option>
      @endforeach
    </select>

    <input type="submit" name="" value="Conferma">
  </form>
@endsection


name
description
scadenza
