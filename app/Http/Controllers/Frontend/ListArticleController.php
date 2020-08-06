<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListArticleController extends Controller
{
    public function About(){
        $thisTypeinfos=Arctype::where('id',1)->first();
        $productions=Arctype::where('reid',2)->get(['typename','real_path']);
        $latestnews=Archive::whereIn('typeid',[7,8])->take(10)->latest()->get(['id','typeid','title','created_at']);
        return view('frontend.about',compact('thisTypeinfos','productions','latestnews'));
    }

    public function Productions(Request $request,$path=''){
        if (empty($path)){
            $thisTypeinfos=Arctype::where('id',2)->first();
            $productionlists=Archive::whereIn('typeid',Arctype::where('reid',2)->pluck('id'))->orderBy('id','desc')->paginate(12);
        }else{
            $thisTypeinfos=Arctype::where('id',Arctype::where('real_path',$request->path())->value('id'))->first();
            $productionlists=Archive::where('typeid',Arctype::where('real_path',$request->path())->value('id'))->orderBy('id','desc')->paginate(12);
        }
        $productions=Arctype::where('reid',2)->get(['typename','real_path']);
        $latestnews=Archive::whereIn('typeid',[7,8])->take(10)->latest()->get(['id','typeid','title','created_at']);
        return view('frontend.productions',compact('thisTypeinfos','productions','latestnews','productionlists'));
    }

    public function Mendian(){
        $thisTypeinfos=Arctype::where('id',5)->first();
        $productions=Arctype::where('reid',2)->get(['typename','real_path']);
        $latestnews=Archive::whereIn('typeid',[7,8])->take(10)->latest()->get(['id','typeid','title','created_at']);
        $dianmianlists=Archive::where('typeid',5)->orderBy('id','desc')->paginate(12);
        return view('frontend.dianmian',compact('thisTypeinfos','productions','latestnews','dianmianlists'));
    }

    public function News(Request $request,$path=''){
        if (empty($path)){
            $thisTypeinfos=Arctype::where('id',6)->first();
            $newslists=Archive::whereIn('typeid',Arctype::where('reid',6)->pluck('id'))->orderBy('id','desc')->paginate(20);
        }else{
            $thisTypeinfos=Arctype::where('id',Arctype::where('real_path',$request->path())->value('id'))->first();
            $newslists=Archive::where('typeid',Arctype::where('real_path',$request->path())->value('id'))->orderBy('id','desc')->paginate(20);
        }
        $latestnews=Archive::whereIn('typeid',[7,8])->take(10)->latest()->get(['id','typeid','title','created_at']);
        $newstypes=Arctype::where('reid',6)->get(['typename','real_path']);
        return view('frontend.news',compact('thisTypeinfos','latestnews','newstypes','newslists'));
    }
}
