

@extends('layouts.app')

@section('content')
<style>
    .showbtn:hover{
        background-color: rgb(4, 207, 139);
        border: none;
    }
</style>
<div>
    {{-- <!-- Life is available only in the present moment. - Thich Nhat Hanh --> --}}
    <center><h1>List view of {{$role}}</h1></center>
    {{-- {{$role}} --}}

    <div style="margin:30px">
        <a  href="{{route('add', ['type' => $role])}}">
            <button class="btn btn-primary showbtn">Add {{$role}}</button>
        </a>
    </div>
</div>
@endsection

