@extends('items.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Create an Item</div>
  <div class="card-body">
      <form action="{{ url('items') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama Item</label></br>
        <input type="text" name="item_name" id="item_name" class="form-control"></br>
        
        <label>Kategori</label></br>
          <select name="kategori" id="kategori" class="form-control">
            <option value="">Pilih Kategori</option>
            <option value="Makanan">Makanan</option>
            <option value="Teknologi">Teknologi</option>
            <option value="Pakaian">Pakaian</option>
          </select>
        </br>
        
        <label>Harga</label></br>
        <input type="text" name="harga" id="harga" class="form-control"></br>

        <label>Status</label></br>
          <select name="status" id="status" class="form-control">
            <option value="aktif">Aktif</option>
            <option value="nonaktif">Non-Aktif</option>
          </select>
        </br>

        <input type="submit" value="Save" class="btn btn-success"></br>

    </form>
   
  </div>
</div>
 
@stop