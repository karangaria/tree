<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
        public function Entry()
    {
        $entrys = Test::where('parent_entry_id', '=', 0)->get();
        return view('welcome',compact('entrys'));
    }
}
