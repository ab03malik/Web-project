<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // chnge products2.index to frontend.products
        $product = Product::all()->toArray();
        return view('frontend.products', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'product_price' => 'required',
            'product_image' => 'required'
        ]);

        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $fileName = 'product-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public', $fileName);

            DB::table('products')->insert([
                'product_name' => $request->get('product_name'),
                'product_price' => $request->get('product_price'),
                'product_image' => $path,
            ]);

            // $product = new product([
            //     'product_name' => $request->get('product_name'),
            //     'product_price' => $request->get('product_price'),
            //     'product_image' => $path,
            // ]);
            // $product->save();

            return redirect()->route('products2.index')->with('success', 'Data Added');
        }
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
    }

    public function deleteproduct(Request $request)
    {
        $product = Product::find($request->id);
        $product->delete();
        return response()->json(['success' => 'Record has been deleted']);
    }

    public function admin()
    {
        $product = Product::all()->toArray();
        return view('products2.index', compact('product'));
    }
}
