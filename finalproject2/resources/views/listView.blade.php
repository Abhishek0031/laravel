@extends('layouts.app')
@section('content')
    <style>
        .showbtn:hover {
            background-color: rgb(4, 207, 139);
            border: none;
        }

        .mytble {
            margin: auto;   
        }

        .conditional[data-id ="1"][data-status="manager"]{
            /* color: red; */
            display: none;
        }
        .conditional[data-id ="1"][data-status="staff"]{
            /* color: red; */
            display: none;
        }
    </style>
    <div style="display: none">
        {{$var=auth()->id();}}
    </div>
{{-- {{$var}} --}}
{{-- <div>
    
    @if ({{$var}}=='1') --}}
    
    <div class="conditional" data-id='{{$var}}' data-status='{{$role}}' >
        
        <div style="margin:30px ">
            <h3>Open</h3>
        </div>
        <div style="margin:30px">
            <a href=" {{ route('add', ['type' => $role]) }} ">
                <button class="btn btn-primary showbtn">Add {{ $role }}</button>
            </a>
        </div>
    </div>
    {{-- @endif
</div> --}}

    <div class="container">
        <div>
            <table class="table table-striped mytble">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>Role</th>
                    <th>image</th>
                    <th>phone</th>
                    <th>address</th>
                </tr>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->role_id }}</td>
                        <td>image ayegi</td>
                        <td>phone</td>
                        <td>address</td>
                    </tr>
                @endforeach
        </div>
    </div>
    {{-- {{$user}} --}}
@endsection
