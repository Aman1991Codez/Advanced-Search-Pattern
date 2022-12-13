<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Products;

class SearchController extends Controller
{
    public function index()
    {
        $data = \DB::table('products')->paginate(10);
        return view('search', compact('data'));
    }
    public function simple(Request $request)
    {
        $data = \DB::table('products');
        if( $request->input('search')){
            $data = $data->where('name', 'LIKE', "%" . $request->search . "%");
        }
        $data = $data->paginate(10);
        return view('search', compact('data'));
    }
    public function advance(Request $request)
    {
        $data = \DB::table('products');
        if( $request->name){
            $data = $data->where('name', 'LIKE', "%" . $request->name . "%");
        }
        if( $request->detail){
            $data = $data->where('detail', 'LIKE', "%" . $request->detail . "%");
        }
        // if( $request->min_age && $request->max_age ){
        //     $data = $data->where('age', '>=', $request->min_age)
        //                  ->where('age', '<=', $request->max_age);
        // }
        $data = $data->paginate(10);
        return view('search', compact('data'));
    }
}
