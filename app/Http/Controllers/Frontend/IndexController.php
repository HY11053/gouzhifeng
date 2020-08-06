<?php

namespace App\Http\Controllers\Frontend;

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
        $production1s=Archive::where('typeid',3)->take(4)->orderBy('id','desc')->get(['id','title','typeid','litpic']);
        $production2s=Archive::where('typeid',4)->take(4)->orderBy('id','desc')->get(['id','title','typeid','litpic']);
        $production3s=Archive::where('typeid',10)->take(4)->orderBy('id','desc')->get(['id','title','typeid','litpic']);
        $dianmians=Archive::where('typeid',5)->latest()->take(6)->get(['id','title','typeid','litpic']);
        $cgsnew=Archive::where('typeid',7)->take(1)->orderBy('id','desc')->where('flags','like','%c%')->get(['id','title','typeid','litpic']);
        $gsnews=Archive::where('typeid',7)->latest()->take(5)->get(['id','title','typeid','litpic']);
        $jmnews=Archive::where('typeid',8)->latest()->take(12)->get(['id','title','typeid','litpic']);
        return view('frontend.index',compact('prodcutiontypes','production1s','production2s','production3s','dianmians','gsnews','jmnews','cgsnew'));
    }
}
