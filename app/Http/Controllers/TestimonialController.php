<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{

    public function __construct() {
        // Staff Permission Check
        $this->middleware(['permission:view_testimonial'])->only('index');
        $this->middleware(['permission:add_testimonial'])->only('create');
        $this->middleware(['permission:edit_testimonial'])->only('edit');
        $this->middleware(['permission:delete_testimonial'])->only('destroy');
        $this->middleware(['permission:publish_testimonial'])->only('change_status');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Testimonial::select('testimonials.id as id','testimonials.person as person','testimonials.position as position','testimonials.content as content','uploads.file_name as file_name')
        ->join('uploads','uploads.id','testimonials.image')
        ->where('testimonials.type','CO')
        ->get();
        return view('backend.blog_system.testimonial.index',compact('data'));
    }


    public function indexpersonal()
    {
        $data = Testimonial::select('testimonials.id as id','testimonials.person as person','testimonials.position as position','testimonials.content as content','uploads.file_name as file_name')->join('uploads','uploads.id','testimonials.image')->get();
        return view('backend.blog_system.testimonial.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog_system.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

                $d = new Testimonial;
                $d->image = $request->image;
                $d->person = $request->person;
                $d->content = $request->content;
                $d->position = $request->position;
                $d->save();
                flash(translate('Slider has been inserted successfully'))->success();
                return redirect('admin/testimonial');
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

        $data = Testimonial::find(base64_decode($id));
        return view('backend.blog_system.testimonial.edit', compact('data'));

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
        $d = Testimonial::find($id);
        $d->image = $request->image;
        $d->person = $request->person;
        $d->content = $request->content;
        $d->position = $request->position;
        $d->save();

        flash(translate('Testimonial has been updated successfully'))->success();
        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Testimonial::findOrFail($id);
        if(Testimonial::destroy($id)){
            //unlink($slider->photo);
            flash(translate('Testimonial has been deleted successfully'))->success();
        }
        else{
            flash(translate('Something went wrong'))->error();
        }
        return redirect()->route('testimonial.index');
    }
}
