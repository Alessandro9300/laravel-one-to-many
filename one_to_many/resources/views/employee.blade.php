@extends('layout')

@section('section')
  <b> firstname: {{$employee -> employee -> firstname}} </b> <br>
  <b> lastname: {{$employee -> employee -> lastname}} </b> <br>
  <b> dateOfBirth: {{$employee -> employee -> dateOfBirth}} </b> <br>
  <b> role: {{$employee -> employee -> role}} </b> <br>
@endsection
