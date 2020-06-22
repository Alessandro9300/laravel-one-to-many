@extends('layout')

@section('section')
  <form class="" action="{{route('update_store', $task -> id)}}" method="post">
    @csrf
	  @method('post')
    <label for="name">Name</label>
    <input type="text" name="name" value="{{$task -> name}}"> <br>
    <label for="description"> description </label>
    <input type="text" name="description" value="{{$task -> description}}"> <br>
    <label for="scadenza"> scadenza </label>
    <input type="text" name="scadenza" value="{{$task -> scadenza}}"> <br>

    <select class="" name="employee_id">
      @foreach ($employees as $employee)
        <option value="{{$employee -> id}}"
          @if ($employee -> id === $task -> employee -> id)
            selected
          @endif
          >

        {{$employee -> firstname}} {{$employee -> lastname}} </option>

      @endforeach
    </select> <br>

    <input type="submit" name="" value="Conferma">
  </form>
@endsection


name
description
scadenza
