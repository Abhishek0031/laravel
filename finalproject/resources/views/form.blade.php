    @extends('layouts.app')
    @section('content')
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register {{$role}}</div>
        
                        <div class="card-body">
                            <form method="POST" action="{{ route('create') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="parent_id" class="col-md-4 col-form-label text-md-end">{{ __('Parent Id') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="parent_id" type="text" readonly class="form-control @error('parent_id') is-invalid @enderror" name="parent_id" value="{{ $id}}"  required autocomplete="parent_id" autofocus>
        
                                        @error('parent_id')
                                            <span class="invalid-feedback" name="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                    


                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value=""  required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" name="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value=""  required autocomplete="email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" name="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" value=""  required autocomplete="password" autofocus>
        
                                        @error('password')
                                            <span class="invalid-feedback" name="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            

                                <div class="row mb-3">
                                    <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="role" type="text" readonly class="form-control @error('role') is-invalid @enderror" name="role" value="{{ $role}}"  required autocomplete="role" autofocus>
        
                                        @error('role')
                                            <span class="invalid-feedback" name="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{$role}}
        {{$id}}
    </div>
    @endsection
