<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use App\Brand;

class ResultsComposer
{
    public function compose(View $view)
    {
        //added the criteria for the input search,prices and brand into the array criteria
        //add request method here to initialize the request to be used in this method
        $request=request();
        $criteria =[
            'query'=> $request->input('query'),
            'price'=>$request->input('price'),
            'brand'=>$request->input('brand'),
            'origin'=>$request->input('origin')

        ];
        //array_filter will remove some of the items in the array
        $criteria = array_filter($criteria,function($value){
            return $value!==null;
        });

        $view->criteria=$criteria;

        //select from table brands where column equals origin
        $origins = \DB::table('brands')->select('origin')->distinct()->orderBy('origin')->pluck('origin');
        $view->origins=$origins;
    }
}