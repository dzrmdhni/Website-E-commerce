@extends('layouts.app')
@section('content')
<div class="container">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>E-Commerce</h2>
                            <a href="{{ url('/items') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Upload an item</a>
                        @if(auth()->user()->isAdmin())
                            <a href="{{ url('/users') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Users List</a>
                        @endif
                    </div>
                    
                    <div class="card-body">
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Item</th>
                                        <th>Kategori</th>
                                        <th>Harga</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                            @foreach($items as $item)
                                @if($item->isActive())
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->item_name }}</td>
                                        <td>{{ $item->kategori }}</td>
                                        <td>{{ $item->harga }}</td>
                                        <td>
                                            <a href="{{ url('/items/' . $item->item_id) }}" title="View Item"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
