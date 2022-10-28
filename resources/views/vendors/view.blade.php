@extends('items.layout')
@section('content')
<div class="card">
  <div class="card-header">User Detail</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Users : {{ $users->user_name }}</h5>
        <p class="card-text">E-mail : {{ $users->email }}</p>
        <p class="card-text">Alamat : {{ $users->alamat }}</p>
  </div>
      
    </hr>
  
  </div>
</div>