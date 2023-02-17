<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id)
    {
        $product = Product::where(['id' => $id])->first();

        return view('product', compact('product'));
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'countryManufacturer' => 'required',
            'yearOfRelease' => 'required',
            'model' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:2000'
        ]);

        $newImageName = time() . '-' . $request->file('image')->getClientOriginalName();

        $request->image->move(public_path('images'), $newImageName);

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'countryManufacturer' => $request->countryManufacturer,
            'yearOfRelease' => $request->yearOfRelease,
            'model' => $request->model,
            'imageUrl' => $newImageName
        ]);

        return redirect()->route('home');
    }
    public function destroy(Product $product) {
        $file_path = public_path().'\images\\'.$product->image;
        if ($product->image_new != 'image_new') {
            $file_path_new = public_path().'\images\\'.$product->image_new;
        }
        $product->delete();
        unlink($file_path);
        if ($product->image_new != 'image_new') {
            unlink($file_path_new);
        }
        return redirect()->route('home');
    }

}