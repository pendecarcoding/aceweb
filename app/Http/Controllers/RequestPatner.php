<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patnerrequest;

class RequestPatner extends Controller
{

    public function __construct() {
        // Staff Permission Check
        $this->middleware(['permission:view_requestpatner'])->only('index');
        $this->middleware(['permission:add_requestpatners'])->only('create');
        $this->middleware(['permission:edit_requestpatners'])->only('edit');
        $this->middleware(['permission:delete_requestpatners'])->only('destroy');
        $this->middleware(['permission:publish_requestpatners'])->only('change_status');
    }


    public function index(){
        $data = Patnerrequest::orderby('id','ASC')->get();
       return view('backend.blog_system.requestpatner.index',compact('data'));
    }

    public function viewmessage($id)
    {

        $data = Patnerrequest::where('id',base64_decode($id))->first();
        return view('backend.blog_system.requestpatner.send', compact('data'));

    }
}
