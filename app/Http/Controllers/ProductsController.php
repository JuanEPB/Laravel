<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as Pro;
Use Alert;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $products =Pro::paginate(5);
    //dd($products);

    return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $validateData = $request->validate([
                'name' =>  'required|string|max:50',
                'description'  =>  'required|string|min:10|max:20',
                'price'  =>  'required|numeric|min:0|max:250',
                'stock'  => 'required|numeric|min:0|max:250',
            ]);
            Pro::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'stock' => $request->stock,
            ]);
        } catch (Throwable $e){

            dd($e);

            return false;

        }

        Alert::success('Exito','El producto se creo con exito');

        return redirect()->route('products.index');
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
    public function edit($id)
    {
        $pro = Pro::find($id);//select * from products where
        $p = Pro:: where ('id', $id)->get();
        //dump($pro);
        //dd($p);
        //Alert::success('Exito','El producto se actualizo con exito');
        return view('products.update',compact('pro'));
        //dd("entra a edit $id");
    }

    /**
     * Update the specified resource in storage.
     * @param int $id
     */

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $pro = Pro::find($id);
        $pro->save();
        $pro->name = $request->name;
        $pro->description =  $request->description;
        $pro->price = $request->price;
        $pro->stock = $request->stock;

        $pro->save();

        $products =Pro::paginate(5);
        Alert::success('Exito','El producto se actualizo con exito');
        return view('products.index', compact('products'));


    }

    /**
     * Remove the specified resource from storage.

     */
    public function destroy(string $id)
    {
        $pro = Pro::find($id);
        $pro->delete();
        //dd("entra a destroy $id");
        $products =Pro::paginate(5);
        Alert::success('Exito','El producto se elimino con exito');
        return view('products.index', compact('products'));
    }

    Function Prueba(){
        $pr=Posts::find(3);
        dump($pr);
        dd($pr->comments);
    }

}
