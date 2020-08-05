<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Archive;
use App\AdminModel\Brandarticle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    public function Index(){
        $articleUsers=array_unique(Archive::where('created_at','>',Carbon::today())->where('created_at','<',Carbon::now())->pluck('write')->toArray());
        $colorStyle=['aqua','green','blue','red','yellow'];
        $newArticles=Archive::take(6)->orderBy('id','desc')->get();
        $labelStyle=['label-danger','label-info','label-warning','label-success','label-primary','label-default'];
        $articlenum = Cache::remember('articlenum_count', 60*24, function() {
            return Archive::count();});
        return view('admin.admin_index',compact('articleUsers','colorStyle','newArticles','labelStyle','articlenum'));
    }
}
