<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;

class ProvidersController extends Controller
{

    public function __construct() {
        // Staff Permission Check
        $this->middleware(['permission:view_providers'])->only('index');
        $this->middleware(['permission:add_providers'])->only('create');
        $this->middleware(['permission:edit_providers'])->only('edit');
        $this->middleware(['permission:delete_providers'])->only('destroy');
        $this->middleware(['permission:publish_provides'])->only('change_status');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Provider::select('providers.id as id','providers.image as image','providers.company as company','uploads.file_name as file_name')
                ->join('uploads','uploads.id','providers.image')
                ->orderby('providers.id','DESC')
                ->get();
        return view('backend.blog_system.providers.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog_system.providers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

                $d = new Provider;
                $d->image = $request->banner;
                $d->company = $request->company;
                $d->save();
                flash(translate('Patners has been inserted successfully'))->success();
                return redirect()->route('providers.index');
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

        $data = Provider::find(base64_decode($id));
        return view('backend.blog_system.providers.edit', compact('data'));

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
        $d = Provider::find(base64_decode($id));
        $d->image = $request->banner;
        $d->company = $request->company;
        $d->save();

        flash(translate('Providers has been updated successfully'))->success();
        return redirect()->route('providers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Provider::findOrFail(base64_decode($id));
        if(Provider::destroy(base64_decode($id))){
            //unlink($slider->photo);
            flash(translate('Providers has been deleted successfully'))->success();
        }
        else{
            flash(translate('Something went wrong'))->error();
        }
        return redirect()->route('providers.index');
    }
}
