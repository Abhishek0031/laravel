
@extends('layouts.app')
@section("content")
<div>
    {{-- {{$user}} --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
    
    <div class="card-body" style="background-color:rgb(253, 241, 226)">
        <div class="card-header" style="background-color:bisque; text-align:center;"><h3>Welcome {{ $user['name'] }}😎 </h3></div><br/>
    <form method="POST" action="{{route('profile')}}" enctype="multipart/form-data">
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
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user['name'] }} "  selected required autocomplete="email" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="row mb-3">
        <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

        <div class="col-md-6">
            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->userDetail['phone'] }} "  selected required autocomplete="email" autofocus>

            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="row mb-3">
        <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

        <div class="col-md-6">
            <input id="text" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $user->userDetail['address'] }} "  selected required autocomplete="address" autofocus>

            @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="file" class="col-md-4 col-form-label text-md-end">{{ __('File') }}</label>

        <div class="col-md-6">
            <input id="file" type="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ $user->userDetail['file'] }} "  selected required autocomplete="file" autofocus>

            @error('file')
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

{{-- {{$user}} --}}
@endsection
