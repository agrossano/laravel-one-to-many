@extends('layouts.main_layout')

@section('main')

  <h1> TASK </h1>
  <ul>
    <li>
      TASK NAME: <p> {{$task['name']}} </p>
      DESCRIPTION: <p> {{$task['description']}} </p>
      DEADLINE: <p> {{$task['deadline']}} </p>
      EMPLOYEE: <p> {{$task['employee']['firstname']}} {{$task['employee']['lastname']}} </p>
    </li>
  </ul>
  <button type="button"><a href="{{route('edit', $task['id'])}}">EDIT</a></button> 

@endsection