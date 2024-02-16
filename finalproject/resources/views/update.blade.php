{{$user}}

@extends('layouts.app')
@section('content')
<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Register </div>
    
                    <div class="card-body">
                        <form method="POST" action="{{route('update_details')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}"  required autocomplete="name" autofocus>
    
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
                                    <input id="email" readonly type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}"  required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" name="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                          <div class="row mb-3">
                                <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>
    
                                <div class="col-md-6">
                                    <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value=""  required autocomplete="phone" autofocus>
    
                                    @error('phone')
                                        <span class="invalid-feedback" name="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> 


                            <div class="row mb-3">
                                <label for="file" class="col-md-4 col-form-label text-md-end">{{ __('image') }}</label>
    
                                <div class="col-md-6">
                                    <input id="file" type="file" class="form-control @error('file') is-invalid @enderror" name="file" value=""  required autocomplete="file" autofocus>
    
                                    @error('file')
                                        <span class="invalid-feedback" name="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> 


                            <div class="row mb-3">
                                <label for="file" class="col-md-4 col-form-label text-md-end">{{ __('image') }}</label>
    
                                <div class="col-md-6">
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="" disabled></option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>

                                    </select>
    
                                    @error('file')
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
   
</div>
@endsection

