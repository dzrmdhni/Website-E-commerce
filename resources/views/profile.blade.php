@extends('layouts.app')
@section('content')

<div class = "container">
<div class="card">
  <div class="card-header">Edit Profile</div>
  <div class="card-body">

    @if(session()->has('message'))
    
     <div class="text-green-600 mb-4"> {{ session()->get('message') }} </div>

    @endif
      
      <form action="{{ route('update_profile') }}" method="post">
        {!! csrf_field() !!}
        @method("PUT")
        
        <label>User Name</label></br>
        <input type="text" name="user_name" id="user_name" value="{{ old('user_name', auth()->user()->user_name) }}" class="form-control"></br>

        @error('user_name')
            <div class="text-red-500 mt-2 text-sm"> {{ $message }} </div>
        @enderror
        
        <label>E-mail</label></br>
        <input type="text" name="email" id="email" value="{{ old('email', auth()->user()->email) }}" class="form-control"></br>

        @error('email')
            <div class="text-red-500 mt-2 text-sm"> {{ $message }} </div>
        @enderror

        <label>Alamat</label></br>
        <input type="text" name="alamat" id="alamat" value="{{ old('alamat', auth()->user()->alamat) }}" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
</div>
 
@stop