@extends('layouts.app')
@section('content')

<div class = "container">
<div class="card">
  <div class="card-header">Change Password</div>
  <div class="card-body">

    @if(session()->has('message'))
    
     <div class="text-green-600 mb-4"> {{ session()->get('message') }} </div>

    @endif
      
      <form action="{{ route('update_password') }}" method="post">
        {!! csrf_field() !!}
        @method("PUT")

        <label>Current Password</label></br>
        <input type="password" name="current_password" id="current_password" class="form-control"></br>

        @error('current_password')
            <div class="text-red-500 mt-2 text-sm"> {{ $message }} </div>
        @enderror

        <label>New Password</label></br>
        <input type="password" name="password" id="password" class="form-control"></br>

        @error('password')
            <div class="text-red-500 mt-2 text-sm"> {{ $message }} </div>
        @enderror

        <label>Confirm New Password</label></br>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"></br>

        @error('confirm_password')
            <div class="text-red-500 mt-2 text-sm"> {{ $message }} </div>
        @enderror
        
        <input type="submit" value="Confirm" class="btn btn-success"></br>
    </form>
  </div>
</div>
</div>
 
@stop