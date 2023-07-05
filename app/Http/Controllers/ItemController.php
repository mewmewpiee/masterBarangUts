<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Item;
use App\Models\Unit;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'List Item';

        // ELOQUENT
        $items = Item::all();
        return view('item.index', compact('pageTitle', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Item';

        // ELOQUENT
        $units = Unit::all();
        return view('item.create', compact('pageTitle', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :Attribute dengan angka',
            'unique' => ':Attribute sudah ada'
        ];

        $validator = Validator::make($request->all(), [
            'itemCode' => 'required|unique:items,item_code',
            'itemName' => 'required',
            'itemPrice' => 'required|numeric',
            'itemDescription' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ELOQUENT
        $item = new Item;
        $item->item_code = $request->itemCode;
        $item->item_name = $request->itemName;
        $item->item_price = $request->itemPrice;
        $item->item_description = $request->itemDescription;
        $item->unit_id = $request->unit;
        $item->save();
        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Item';

        // ELOQUENT
        $units = Unit::all();
        $item = Item::find($id);
        return view('item.edit', compact('pageTitle', 'units', 'item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :Attribute dengan angka',
            'unique' => ':Attribute sudah ada'
        ];
        $validator = Validator::make($request->all(), [
            'itemCode' => 'required|unique:items,item_code,' .$id,
            'itemName' => 'required',
            'itemPrice' => 'required|numeric',
            'itemDescription' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $item = Item::find($id);
        $item->item_code = $request->itemCode;
        $item->item_name = $request->itemName;
        $item->item_price = $request->itemPrice;
        $item->item_Description = $request->itemDescription;
        $item->unit_id = $request->unit;
        $item->save();

        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Item::find($id)->delete();
        return redirect()->route('items.index');
    }
}
