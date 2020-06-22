@extends('layouts.main_layout')

@section('main')
  <div class="">
    <h1>UPDATE</h1>
    <form action="{{ route('update', $task['id']) }}" method="post">
      @csrf
      @method('POST')

        <label for="name">NAME</label>
        <input type="text" name='name' value="{{ $task['name'] }}"> <br>

        <label for="description">DESCRIPTION</label>
        <input type="text" name='description' value="{{ $task['description'] }}"> <br>

        <label for="deadline">DEADLINE</label>
        <input type="text" name='deadline' value="{{ $task['deadline'] }}"> <br>

        <label for="employee_id">EMPLOYEE</label>
        <select name="employee_id">
          @foreach($employees as $employee)
          <option value="{{$employee['id']}}"
          @if ($employee['id'] == $task['employee']['id'])
          selected
          @endif
          >
            {{ $employee['firstname'] }}
            {{ $employee['lastname'] }}

            </option>
            @endforeach
        </select> <br>

        <button type="submit" name="submit" value="update">UPDATE</button>

      </form>
  </div>

@endsection
