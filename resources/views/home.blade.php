@extends('layouts.main_layout')
@section('main')

<h1>Tasks</h1>

<ul>

  @foreach($tasks as $task)
  <li>

    name: <a href="{{route('show', $task['id'])}}">{{$task['name']}}</a> <br>

  </li>

</ul>
  @endforeach

@endsection