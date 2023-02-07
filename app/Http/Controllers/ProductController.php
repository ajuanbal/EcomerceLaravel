<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categoria;
use Illuminate\Http\Request;

/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate();

        return view('product.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * $products->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        $categoria = Categoria::pluck('name','id');
        return view('product.create', compact('product','categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Product::$rules);
        $file = $request->file('image_path');
        $path = $file->store('public/images');
        $name = $file->getClientOriginalName();
        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'details' => $request->details,
            'price' => $request->price,
            'shipping_cost' => $request->shipping_cost,
            'description' => $request->description,
            'image_path' => /* $path. */$name,
            'created_at'=> $request->created_at,
            'updated_at'=> $request->updated_at,
        ];
        $category = Categoria::find($request->id_category);
        $category->products()->create($data);
        return redirect()->route('products.index')
            ->with('success', 'Producto creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        $categoria = Categoria::pluck('name','id');
        return view('product.edit', compact('product','categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        request()->validate(Product::$rules);

        //$img = Product::find($product->$id,'image_path');

        $file = $request->file('image_path');
        $path = $file->store('public/images');
        $name = $file->getClientOriginalName();
        if($name!=null){
            $data = [
                'name' => $request->name,
                'slug' => $request->slug,
                'details' => $request->details,
                'price' => $request->price,
                'shipping_cost' => $request->shipping_cost,
                'description' => $request->description,
                'image_path' => $name,
                'created_at'=> $request->created_at,
                'updated_at'=> $request->updated_at,
            ];
        }else{
            $data = [
                'name' => $request->name,
                'slug' => $request->slug,
                'details' => $request->details,
                'price' => $request->price,
                'shipping_cost' => $request->shipping_cost,
                'description' => $request->description,
                'image_path' => $product->image_path,
                'created_at'=> $request->created_at,
                'updated_at'=> $request->updated_at,
            ];
        }

        $category = Categoria::find($request->id_category);
        $category->products()->update($data);

        /* $product->update($request->all());
 */
        return redirect()->route('products.index')
            ->with('success', 'Producto actualizado satisfactoriamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();

        return redirect()->route('products.index')
            ->with('success', 'Producto eliminado satisfactoriamente');
    }
}
