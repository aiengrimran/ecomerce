<?php

namespace App\Http\Controllers;

use App\Models\Good;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProductsInRandomOrder(){
        $products= Good::inRandomOrder()->limit(15)->get();
        return view('landing', ['products'=> $products]);
    }
    // shop view
    public function index()
    {
        return view('shop', ['categories'=>Category::all(), 'products'=>Good::paginate(6)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('singleCategory', ['products'=>Good::where('category_id', $id)->paginate(3), 'categories'=>Category::get()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function productDetails($id){
        $product= Good::find($id);
        $similarProducts = Good::where('category_id', '=', $product->category_id)
        ->where('id', '!=', $product->id)->limit(4)->get();
        return view('showProducts.productDetails', ['product'=>$product, 'similarProducts' => $similarProducts]);
    }
 
}
