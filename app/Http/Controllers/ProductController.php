<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Manufacturer;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allProducts = Product::orderBy('created_at', 'desc')->get();
        return view('admin.product.index')->with('allProducts', $allProducts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $allManu = Manufacturer::all();
        return view('admin.product.add')->with('allManu', $allManu);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $image_name = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $image_name, 'public');
        $data['image'] = 'storage/'.$path;
        
        Product::create($data);
        return redirect('admin/product')->with('message', 'Thêm sản phẩm thành công!');
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
        $product = Product::find($id);
        $allManu = Manufacturer::all();
        return view('admin.product.edit')->with('product', $product)->with('allManu', $allManu);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
        $product = Product::find($id);
        if ($request->hasfile('image')) {
            $destination = $product->image;
            if (File::exists($destination)){
               
                File::delete($destination);
                
                $image_name = time() . $request->file('image')->getClientOriginalName();
                $path = $request->file('image')->storeAs('images', $image_name, 'public');
                $product->image = 'storage/' . $path;
                $product->update();
            }
        }
        else {
           $product->update($request->all());
        }
        return redirect('admin/product')->with('message', 'Sửa sản phẩm thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return redirect('admin/product')->with('message', 'Xóa sản phẩm thành công!');
    }
}
