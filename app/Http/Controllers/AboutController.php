<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Artisan;

class AboutController extends Controller
{

    public function __construct() {
        // Staff Permission Check
        $this->middleware(['permission:view_about'])->only('index');
        $this->middleware(['permission:add_about'])->only('create');
        $this->middleware(['permission:edit_about'])->only('edit');
        $this->middleware(['permission:delete_about'])->only('destroy');
        $this->middleware(['permission:publish_about'])->only('change_status');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.blog_system.about.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updater(Request $request)
    {
       try {
        foreach ($request->types as $key => $type) {
            overWriteEnvFile($type, $request[$type]);
            //print $type;
        }
        Artisan::call('cache:clear');
        flash(translate('Slider has been updated successfully'))->success();
        return redirect()->route('about.index');
       } catch (\Throwable $th) {

        flash(translate('Slider has been updated successfully'))->success();
        return redirect()->route('about.index');
       }

    }


}
