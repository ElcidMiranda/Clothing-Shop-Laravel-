<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Practice.Home');

    }
    public function men()
    {
        //$items = Items::where('Description','Tshirt/Jackets');
        //dd($items);
        return view('Practice.men',[
            'items' => Items::where('Description','=','Tshirt/Jackets')->get()
            
            

        ]);
        
    }
    public function bag()
    {
        //$items = Items::where('Description','Tshirt/Jackets');
        //dd($items);
        return view('Practice.bag',[
            'items' => Items::where('Description','=','Bag')->get()
            
            

        ]);
        
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Practice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formfiels = $request->validate([

            'Name' => 'required',
            'Description' => ['required',Rule::unique('items','Description')],
            'Price' => 'required',
            

        ]);
        if($request -> hasFile('image')){
            $formfiels['Picture'] = $request->file('image')->store('Images','public');
        }

        Items::create($formfiels);
        return redirect('/') ->with('message','ITEM SUCCESFULLY CREATED!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Items $items)

    {
        
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Items $items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Items $items)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Items $items)
    {
        //
    }
}
