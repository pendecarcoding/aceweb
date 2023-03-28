<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patner;

class PatnersController extends Controller
{

    public function __construct() {
        // Staff Permission Check
        $this->middleware(['permission:view_patners'])->only('index');
        $this->middleware(['permission:add_patners'])->only('create');
        $this->middleware(['permission:edit_patners'])->only('edit');
        $this->middleware(['permission:delete_patners'])->only('destroy');
        $this->middleware(['permission:publish_patners'])->only('change_status');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Patner::select('patners.id as id','patners.image as image','patners.company as company','uploads.file_name as file_name')
                ->join('uploads','uploads.id','patners.image')
                ->orderby('patners.id','DESC')
                ->get();
        return view('backend.blog_system.patners.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog_system.patners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

                $d = new Patner;
                $d->image = $request->banner;
                $d->company = $request->company;
                $d->save();
                flash(translate('Patners has been inserted successfully'))->success();
                return redirect()->route('patners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = Patner::find(base64_decode($id));
        return view('backend.blog_system.patners.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $d = Patner::find(base64_decode($id));
        $d->image = $request->banner;
        $d->company = $request->company;
        $d->save();

        flash(translate('Patners has been updated successfully'))->success();
        return redirect()->route('patners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Patner::findOrFail(base64_decode($id));
        if(Patner::destroy(base64_decode($id))){
            //unlink($slider->photo);
            flash(translate('Patners has been deleted successfully'))->success();
        }
        else{
            flash(translate('Something went wrong'))->error();
        }
        return redirect()->route('patners.index');
    }
}
