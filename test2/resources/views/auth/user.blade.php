<style>
     #fileInput{
                display: none;
                }
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                  
                    {{-- <div class="card-header" style="background-color:bisque; text-align:center;"><h3>{{('User Form')}}</h3></div>   
                    <form action="{{route('profile')}}" method="post" enctype="multipart/form-data">
                            <div class="card-header"  style="background-color:bisque" ><div title="Profile pic" style="margin-left:600px; border-radius: 100%; border:2px solid rgb(250, 108, 52); display:inline-block">
                        <label for="fileInput"> 
                        <img style="border-radius: 100%;" id="imgdiv" src="{{asset('storage/'.$user->image)}}" height="75" width="75"alt="">
                        </label>
                        <input id="fileInput"name ="fileInput" type="file">
                        @csrf
                        </div>
                        </form>
                    <br/> <h4><div style="margin-left:16px;">{{$user->name}}</div></h4> </div> --}}

                <div class="card-body" style="background-color:rgb(253, 241, 226)">
                        <form method="POST" action="{{route('user_ins',['id'=>$user->id])}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user['email'] }} " readonly disabled selected required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  value="{{$user['name']}}" " required autocomplete="email" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('Address') is-invalid @enderror" name="address"  value="{{$user_dt['address']}}" " required autocomplete="email" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phno" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phno" type="number" class="form-control @error('Address') is-invalid @enderror" name="phno"  value="{{$user_dt['phone_number']}}" " required autocomplete="email" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="img" class="col-md-4 col-form-label text-md-end">{{ __('Profile Image') }}</label>

                            <div class="col-md-6">
                                <input id="img" type="file" class="form-control @error('password') is-invalid @enderror" name="img" required autocomplete="current-password" value="{{$user['image']}}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>  
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- {{$user_dt}} --}}
@endsection



{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}

<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
    integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer">

</script>
<script>
    // $(document).ready(function(){
    //     $("#fileInput").change(function(){ 
    //         formdata=new FormData();
    //         file = $('#fileInput')[0].files[0];  
    //         formdata.append('img', file);
    //         $.ajax({
    //             url: "/profile",
    //             type: "POST",
    //             contentType:false,
    //             processData:false,
    //             data: formdata,
    //             dataType: "json",   
    //             headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Add CSRF token for Laravel
    //         },
    //             success:function(response){
    //             console.log("in success")
    //             console.log(response)
    //             $('#imgdiv').attr('src','Storage/'+response)
    //                 alert("updated profile")
    //             },   
    //         });
    //     })
    // })

//-----using fetch-----

    $(document).ready(function(){
        $("#fileInput").change(function(){ 
            formdata=new FormData();
            file = $('#fileInput')[0].files[0];  
            var url="/profile";
            formdata.append('img', file);
            // let userData = JSON.stringify(formdata);
            fetch(url, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Add CSRF token for Laravel
            },
             body: formdata,
            })
            .then(response => response.json())
            .then(response => {
            console.log(response);
            $('#imgdiv').attr('src','Storage/'+response)
             alert("Profile update Successfully!!!")
})
.catch(error => {
    console.error(error);
});
            });
        })
    
    
</script>



