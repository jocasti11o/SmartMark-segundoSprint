<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\carrito;
use App\Item;

class carritoController extends Controller
{
    public function index()
    {
        $carrito = Carrito::all();
        return view('carrito.index', compact('carrito'));
    }

    public function create()
    {
        $items = Item::all();
        return view('cart.create', compact('items'));
    }

    public function store(Request $request)
    {
        $carrito = new carrito();
        $carrito->item_id = $request->input('item_id');
        $carrito->save();
        return redirect()->route('carrito.index')->with('success', 'Item agregado al carrito de compras.');
    }

    public function edit($id)
    {
        $carrito = Carrito::findOrFail($id);
        return view('carrito.edit', compact('carrito'));
    }

    public function update(Request $request, $id)
    {
        $carrito = Carrito::findOrFail($id);
        $carrito->item_id = $request->input('item_id');
        $carrito->save();
        return redirect()->route('carrito.index')->with('success', 'Carrito de compras actualizado.');
    }

    public function destroy($id)
    {
        $carrito = carrito::findOrFail($id);
        $carrito->delete();
        return redirect()->route('carrito.index')->with('success', 'Item eliminado del carrito de compras.');
    }
}