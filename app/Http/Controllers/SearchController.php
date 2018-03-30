<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->input('query');

        $words = explode(' ', $q);

        $query = Product::query();

        if(null !== ($price = $request->input('price'))){
            // dd($request->input('price'));
            $query->whereBetween('price', [$price*50, ($price+1)*50])->orderBy('price','DESC');

        }else{
            $query->orderBy('total_number_of_ratings','DESC');
        }

        foreach($words as $word){
            $query->where(function($query) use ($word){
                $query
                ->where('title', 'LIKE', '%'.$word.'%')
                ->orWhere('description', 'LIKE', '%'.$word.'%')
                ->orWhereHas('brand', function($query) use ($word){
                    $query
                    ->where('name', 'LIKE', '%'.$word.'%')
                    ->orWhere('origin', 'LIKE', '%'.$word.'%');
                });
            });
        }

        //add the search criteria here where the brand not null OR origin not null
        $brand = $request->input('brand');
        $origin = $request->input('origin');
        if(null !== $brand||null !== $origin)
        {
            $query->whereHas('brand', function($query) use ($brand, $origin){
                if($brand){
                    $query->where('name', 'LIKE', '%'.$brand.'%');
                }
                if($origin){
                    $query->where('origin', 'LIKE',$origin);
                }
            })->orderBy('total_number_of_ratings','DESC');
        }


        //return the queries for the brand,name,origin,title
        $products = ($query->get());
        return view('results', ['products' => $products, 'q' => $q]);

    }
    public function show($brand)
    {
    }
}
//toSql
        // foreach($all_brands as $brand){
        //     $brands[$brand->id] = $brand;
        //     $brands_count[$brand->id]=$brand->product_count;

        // }
        // $brands_ids = array_keys($brands_count);
        // arsort($brands_count);
        //return $products;