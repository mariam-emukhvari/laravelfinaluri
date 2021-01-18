<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }


    public function addProductIndex()
    {
        $categories = Category::all();
        return view('admin.addProduct', compact('categories'));
    }

    public function addProduct(Request $request, Product $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'required',
        ]);
        $imagePath = request('image')->store('images','public');

        Product::create([
            'product_name' => $data['name'],
            'price' => $data['price'],
            'description' => $data['description'],
            'image' => $imagePath,
        ]);

        return back();
    }

    public function addCategoryIndex()
    {
        return view('admin.addCategory');
    }

    public function addCategory(Request $request)
    {
        $data = $request->validate([
           'name' => 'required'
        ]);

        Category::create([
            'category_name' => $data['name']
        ]);

        return back();
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
        //
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
}
