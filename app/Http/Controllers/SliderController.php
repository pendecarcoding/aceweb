<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{

    public function __construct() {
        // Staff Permission Check
        $this->middleware(['permission:view_slider'])->only('index');
        $this->middleware(['permission:add_slider'])->only('create');
        $this->middleware(['permission:edit_slider'])->only('edit');
        $this->middleware(['permission:delete_slider'])->only('destroy');
        $this->middleware(['permission:publish_slider'])->only('change_status');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::select('sliders.id as id','sliders.caption as caption','sliders.sub_caption','uploads.file_name as file_name')->join('uploads','uploads.id','sliders.image')->get();
        return view('backend.blog_system.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog_system.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

                $slider = new Slider;
                $slider->image = $request->banner;
                $slider->caption = $request->caption;
                $slider->sub_caption = $request->sub_caption;
                $slider->save();
                flash(translate('Slider has been inserted successfully'))->success();
                return redirect('admin/slider');
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

        $slider = Slider::find($id);
        return view('backend.blog_system.sliders.edit', compact('slider'));

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
        $slider = Slider::find($id);
        $slider->image = $request->banner;
        $slider->caption = $request->caption;
        $slider->sub_caption = $request->sub_caption;
        $slider->save();

        flash(translate('Slider has been updated successfully'))->success();
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        if(Slider::destroy($id)){
            //unlink($slider->photo);
            flash(translate('Slider has been deleted successfully'))->success();
        }
        else{
            flash(translate('Something went wrong'))->error();
        }
        return redirect()->route('slider.index');
    }
}
