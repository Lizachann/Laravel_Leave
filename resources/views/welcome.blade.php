@extends('layouts.layout')


@section('content')

<div class="flex justify-center">
<div class="mt-60 ">

    <h1 class="text-4xl"> Pizza List </h1>

    {{-- <p>{{ $name }}</p> --}}

    {{-- @foreach($pizzas as $pizza)
    <div class="">
        {{ $loop->index}} {{$pizza['type']}} - {{$pizza['base']}}
        @if($loop -> first )
        <span>- first in the loop</span>
        @endif
        @if($loop->last)
        <span>last in loop</span>
        @endif
    </div>
    @endforeach --}}
    @forelse($employees as $employee)
    @if($employee->emp_id == 2)

    {{$employee->FirstName}}
    @endif

    @endforeach
<br>
    @forelse($leaves as $leave)
    @if($leave->id == 94)

    {{$leave->WorkCovered}}
    @endif

    @endforeach

    <br>

    @forelse($departments as $department)
    @if($department->id == 5)

    {{$department->DepartmentName}}
    @endif

    @endforeach




</div>

  


</div>