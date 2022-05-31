<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Banner;
use App\Models\Detail;
use App\Models\Image;
use App\Models\Info;
use App\Models\Note;
use App\Models\Size;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Truc;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        $infos = Info::all();
        $banners = Banner::all();
        $types = Type::all();
        $sizes = Size::all();

        $q = $request->input('q');
        $products = Product::where('name', 'like', "%$q%")
            ->orWhere('price', 'like', "%$q%")
            ->paginate(5);
        $produits = Product::where('name', 'like', "%$q%")
            ->orWhere('discount', 'like', "%$q%")
            ->paginate(6);

        return view('pages.shop-list', compact('produits', 'products', 'infos', 'banners', 'types', 'sizes'));
    }


    public function index()
    {
        $infos = Info::all();
        $banners = Banner::all();
        $types = Type::all();
        $sizes = Size::all();
        $products = Product::paginate(5);
        $produits = Product::paginate(6);
        $banners = Banner::all();

        return view('pages.shop-list', compact('produits', 'products', 'infos', 'banners', 'types', 'sizes', 'banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $infos = Info::all();
        $products = Product::all();
        $types = Type::all();
        $sizes = Size::all();
        return view('pages.backoffice.product.backCreateProduct', compact('infos', 'products', 'types', 'sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        // pour le re-size des images ici en l'occurence l'image de Product
        // format 270x270
        $image = $request->file('file');
        $input['file'] = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/thumbnail/images/270x270');
        $imgFile = Truc::make($image->getRealPath());
        $imgFile->resize(270, 270, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $input['file']);
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $input['file']);

        // format 70x83
        $destinationPath = public_path('/thumbnail/images/70x83');
        $imgFile->resize(70, 83, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $input['file']);
        $destinationPath = public_path('/uploads');

        // format 450x375
        $destinationPath = public_path('/thumbnail/images/450x375');
        $imgFile->resize(450, 375, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $input['file']);
        $destinationPath = public_path('/uploads');



        // création du product en lui même
        $product = new Product();
        $product->name = $request->name;
        $product->state = $request->state;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->type_id = $request->type_id;
        $product->size_id = $request->size_id;
        $product->user_id = Auth::user()->id;
        $product->save();
        $productbis = $product;

        // création de l'image du product
        $image = new Image();
        $image->src = $input['file'];
        $oldstar = Image::where('bool', true)->first();
        if ($request->bool != null) {
            $oldstar->bool = false;
            $image->bool = true;
            $oldstar->save();
        }else {
            $image->bool = false;
        }
        $image->product_id = $productbis->id;
        $image->save();


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $infos = Info::all();
        $details = Detail::all();
        $image = Image::all();
        $banners = Banner::all();
        $notes = Note::orderBy('id', 'desc')->limit(5)->get();
        return view('pages.showProduct', compact('product', 'infos', 'details', 'image', 'banners', 'notes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $infos = Info::all();
        $products = Product::all();
        $types = Type::all();
        $sizes = Size::all();

        return view('pages.backoffice.product.backEditProduct', compact('product', 'infos', 'products', 'types', 'sizes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {


        // création du product en lui même

        $product->name = $request->name;
        $product->state = $request->state;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->type_id = $request->type_id;
        $product->size_id = $request->size_id;
        $product->user_id = Auth::user()->id;
        $product->save();
        $productbis = $product;

        // pour le re-size des images ici en l'occurence l'image de Product
        if ($request->file) {
            $image = $request->file('file');
            $input['file'] = time() . '.' . $image->getClientOriginalExtension();
            // format 270x270
            $destinationPath = public_path('/thumbnail');
            $imgFile = Truc::make($image->getRealPath());
            $imgFile->resize(270, 270, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/uploads/70x83');
            $image->move($destinationPath, $input['file']);


            // format 70x83
            $destinationPath = public_path('/thumbnail/images/70x83');
            $imgFile->resize(70, 83, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/uploads');

            // format 450x375
            $destinationPath = public_path('/thumbnail/images/450x375');
            $imgFile->resize(450, 375, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/uploads');


            // création de l'image du product
            $image = new Image();
            $image->src = $request['file'];
            $image->product_id = $productbis->id;
            $image->save();
        }


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }
}
