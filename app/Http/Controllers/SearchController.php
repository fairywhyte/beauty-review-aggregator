<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

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
            $query->whereBetween('price', [$price*50, ($price+1)*50]);

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

        if(null !== ($brand = $request->input('brand'))){
            $query->whereHas('brand', function($query) use ($brand){
                $query
                ->where('name', 'LIKE', '%'.$brand.'%');
            });
        }




        $products = ($query->get());
        //toSql
        //added the criteria for the input search,prices and brand into the array criteria
        $criteria =[
            'q'=> $request->input('q'),
            'price'=>$request->input('price'),
            'brand'=>$request->input('brand')
        ];
        //array_filter will remove some of the items in the array
        $criteria = array_filter($criteria,function($value){
            return $value!==null;
        });

        //return $products;
        return view('results', ['products' => $products, 'q' => $q, 'criteria'=>$criteria]);
    }


    public function show($brand)
    {



    }


}
