
@extends('layouts.app')

@section('content')

<style>
    .showbtn:hover{
        background-color: rgb(4, 207, 139);
        border: none;
    }
</style>
<div style="margin:30px">
    <h3>Open</h3>
</div>
{{-- {{$role}} --}}
<div style="margin:30px">
    <a href="{{route('update')}}">
        <button class="btn btn-primary showbtn">Update</button>
    </a>
</div>
<div style="margin:30px">
    <a href="{{route('add',['type' => $role])}}">
        <button class="btn btn-primary showbtn">add staff</button>
    </a>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div >
<table border=2 style="margin-left: 300px">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
    </tr>
    @foreach ($data as $item)
       <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>

       </tr>
    
        
    @endforeach
</div>
{{-- {{$user}} --}}
@endsection
