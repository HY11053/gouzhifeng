<?php

namespace App\Http\Controllers\Mobile;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
use App\AdminModel\Brandarticle;
use App\AdminModel\InvestmentType;
use App\AdminModel\KnowedgeNew;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ArticleController extends Controller
{

    public function Article(Request $request,$id){
        $thisArticleInfos=Cache::remember('thisNewsArticleInfos'.$id,  config('app.cachetime')+rand(3600,3600*24), function() use ($id){
            return Archive::findOrFail($id);
        });
        $productions=Arctype::where('reid',2)->get(['typename','real_path']);
        $latestnews=Archive::whereIn('typeid',[7,8])->take(10)->latest()->get(['id','typeid','title','created_at']);
        return view('mobile.article_article',compact('thisArticleInfos','productions','latestnews'));
    }
}
