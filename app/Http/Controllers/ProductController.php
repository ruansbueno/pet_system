<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::select('id','name','arquivo', 'author')->paginate(3);
        return view('dashboard', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->id();
        return view('products.create', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        if($request->hasFile('arquivo')){
            $archiveName = $request->file('arquivo')->store('images', 'public');
            $archiveName = explode('/',$archiveName)[1];
        }

        $product = Product::create([
            'name' => $request['name'],
            'price' => $request['price'],
            'weight' => $request['weight'],
            'weight' => $request['weight'],
            'arquivo' => $archiveName,
            'author' => $request['author'],
            'description' => $request['description']
        ]);

        if($product){
            return redirect()->route('dashboard')->with('success', 'Produto Cadastrado com sucesso');
        }else{
            return redirect()->route('products.create')->with('error', 'Não foi possível cadastrar o produto');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        if(auth()->id() !== $product->author){
            return redirect()->route('dashboard')->with('error', 'Você não tem permissão para alterar o produto');
        }

        $user = auth()->id();
        return view('products.edit', compact('product','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {   
        if(auth()->id() !== $product->author){
            return redirect()->route('dashboard')->with('error', 'Você não tem permissão para alterar o produto');
        }

        if($request->hasFile('arquivo')){
            Storage::disk('public')->delete('images/'.$product->arquivo);

            $archiveName = $request->file('arquivo')->store('images', 'public');
            $archiveName = explode('/',$archiveName)[1];


            $update = $product->update([
                'name' => $request['name'],
                'price' => $request['price'],
                'weight' => $request['weight'],
                'weight' => $request['weight'],
                'arquivo' => $archiveName,
                'description' => $request['description']
            ]);
        }else{
            $update = $product->update([
                'name' => $request['name'],
                'price' => $request['price'],
                'weight' => $request['weight'],
                'weight' => $request['weight'],
                'description' => $request['description']
            ]);
        }

        if($update){
            return redirect()->route('products.index')->with('success', 'Produto atualizado com sucesso');
        }else{
            return redirect()->route('products.edit')->with('error', 'Não foi possível atualizar o produto');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {   
        if(auth()->id() !== $product->author){
            return redirect()->route('dashboard')->with('error', 'Você não tem permissão para apagar o produto');
        }

        $deletedProduct = $product->delete($product->id);

        Storage::disk('public')->delete('images/'.$product->arquivo);

        if($deletedProduct){
            return redirect()->route('dashboard')->with('success', 'Produto excluído com sucesso');
        }else{
            return redirect()->route('dashboard')->with('error', 'Não foi possível executar a exclusão');
        }
    }
}
