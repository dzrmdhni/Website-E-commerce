<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{

    public function index()
    {
        $itemUser = Item::where('vendor_id', Auth::id())->get();
        return view ('items.index')->with('items', $itemUser);
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Item::create(array_merge($input, ['vendor_id' => Auth::id() ]));
        return redirect('items')->with('flash_message', 'Item Added!');
    }
    
    public function show($item_id)
    {
        $item = Item::find($item_id);
        return view('items.view')->with('items', $item);
    }

    public function edit($item_id)
    {
        $item = Item::find($item_id);
        return view('items.edit')->with('items', $item);
    }

    public function update(Request $request, $item_id)
    {
        $item = Item::find($item_id);
        $input = $request->all();
        $item->update($input);
        return redirect('items')->with('flash_message', 'Item Updated!'); 
    }

    public function destroy($item_id)
    {
        Item::destroy($item_id);
        return redirect('items')->with('flash_message', 'Item deleted!');  
    }
}
