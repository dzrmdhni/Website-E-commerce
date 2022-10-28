@extends('items.layout')
@section('content')
<div class="card">
  <div class="card-header">Item Detail</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Nama Item : {{ $items->item_name }}</h5>
        <p class="card-text">Kategori : {{ $items->kategori }}</p>
        <p class="card-text">Harga : {{ $items->harga }}</p>
  </div>
      
    </hr>
  
  </div>
</div>