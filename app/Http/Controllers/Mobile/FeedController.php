<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function Feedback(Request $request){
        return json_encode(['status'=>'done']);
    }
}
