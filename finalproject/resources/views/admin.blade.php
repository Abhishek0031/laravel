
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
<div style="margin-left:30px; display:inline-block;">
    <a href="{{route('view.blade', ['type' => 'subadmin'])}}">
        <button class="btn btn-primary showbtn">Subadmin</button>
    </a>
</div>

<div style="margin:30px">
    <a href="{{route('view.blade', ['type' => 'manager'])}}">
        <button class="btn btn-primary showbtn">manager</button>
    </a>
</div>

<div style="margin:30px">
    <a href="{{route('view.blade', ['type' => 'staff'])}}">
        <button class="btn btn-primary showbtn">staff</button>
    </a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome {{ $user->name }}</div>

                <div class="card-body">
                    Role: {{ $user->role_id }}
                    <br>
                    Email: {{ $user->email }}
                </div>
            </div>
        </div>
    </div>
</div>
{{-- {{$user}} --}}
@endsection
