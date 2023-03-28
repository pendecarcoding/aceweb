<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messageceo;

class MessageCeoController extends Controller
{

    public function __construct() {
        // Staff Permission Check
        $this->middleware(['permission:view_messageceo'])->only('index');
        $this->middleware(['permission:update_messageceo'])->only('update');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {   $data = Messageceo::find('1');
        return view('backend.investor.messageceo.index',compact('data'));
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
        $slider = Messageceo::find(base64_decode($id));
        $slider->image = $request->banner;
        $slider->title = $request->title;
        $slider->content = $request->content;
        $slider->save();

        flash(translate('Message CEO has been updated successfully'))->success();
        return redirect()->route('messagefromceo.index');
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
