<?php

namespace App\Http\Controllers\Mobile;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use App\AdminModel\KnowedgeNew;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    public function Index(){
        $prodcutiontypes=Arctype::where('reid',2)->take(3)->orderBy('id','asc')->pluck('typename');
        $productions=Archive::whereIn('typeid',Arctype::where('reid',2)->pluck('id'))->take(6)->orderBy('id','desc')->get(['id','title','typeid','litpic']);
        $dianmians=Archive::where('typeid',5)->latest()->take(6)->get(['id','title','typeid','litpic']);
        $newslists=Archive::whereIn('typeid',[7,8])->latest()->take(10)->get(['id','title','typeid','litpic']);
        return view('mobile.index',compact('prodcutiontypes','productions','dianmians','newslists'));
    }
}
