<?php

namespace App\Http\Controllers;
use App\Models\Good;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function allproducts()
    {
        $categories = Category::Orderby('updated_at', 'desc')->get();
        return view('adminSection.editProducts', ['categories'=> $categories]);
    }
    public function createproduct(){
        return view('adminSection.createProduct', ['categories'=>Category::get()]);
    }
    public function admin(){
        return view('adminSection.admin');
    }
    public function searchProduct(Request $request){
        $serchfield = '%'. $request->searchProduct. '%';
        $searchChairs = Good::where('title', 'LIKE', $serchfield)
                            ->orWhere('price', 'LIKE', $serchfield)
                            ->orWhere('qty', 'LIKE', $serchfield)
                            ->OrderBy('id', 'DESC')->get();
       
        if (count($searchChairs)) {
            session()->flash('serachItem', $searchChairs);
            return redirect()->route('allProducts');
        }
        session()->flash('itemsNotFound', true);
        return redirect()->route('allProducts');
        

    }
    public  function getProductDetails($id)
    {
        $productSelected = Bed::find($id);
        return view('showProducts.productDetails', ['productSelected'=>$productSelected]);
    }
    public function store(Request $request){
        $image = $request->file('image')->store('img/product-img', 'public');

        $product=Good::create([
            'category_id'=>$request->categoryId,
            'title'=>$request->title,
            'price'=>$request->price,
            'qty'=> $request->qty,
            'descrption'=>$request->descrption,
            'image'=>$image
        ]);

        return redirect('admin/allproducts');
    }
    public function destroy(Request $request){
        Good::destroy($request->deleteProduct);
        session()->flash('itemDeleted', true);
        return back();
    }
    public function edit($id) {
        return view('adminSection.editProduct', ['product'=> Good::find($id)]);

    }
    public function update(Request $request){
        
        $image= $request->file('imgUpdate')->store('img/product-img', 'public');
        $product = Good::find($request->id);
        $product->update([
            'title' => $request->title,
            'price' => $request->price,
            'image'=> $image,
            'qty'=> $request->qty
        ]);
        return redirect('admin/allproducts');

    }  
    public function createCategory(Request $request){
        Category::create([
            'categoryName'=>$request->categoryName
        ]);
        return redirect('admin/allproducts');

    }
}
// heroku buildpacks:add https://github.com/velizarn/heroku-buildpack-nano -a icommerce