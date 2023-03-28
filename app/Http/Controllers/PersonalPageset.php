<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Testimonial;

class PersonalPageset extends Controller
{

    public function __construct() {
        // Staff Permission Check
        $this->middleware(['permission:view_personalpageset'])->only('index');
        $this->middleware(['permission:add_personalpageset'])->only('create');
        $this->middleware(['permission:edit_personalpageset'])->only('edit');
        $this->middleware(['permission:delete_personalpageset'])->only('destroy');
        $this->middleware(['permission:update_personalpageset'])->only('update');


        $this->middleware(['permission:view_personaltestimonial'])->only('testimonial');
        $this->middleware(['permission:add_personaltestimonial'])->only('addtestimonial');
        $this->middleware(['permission:view_createpersonaltestimonial'])->only('createtestimonial');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('backend.personal.personalpageset');
    }

    public function testimonial(){
        $data = Testimonial::select('testimonials.id as id','testimonials.person as person','testimonials.position as position','testimonials.content as content','uploads.file_name as file_name')
        ->join('uploads','uploads.id','testimonials.image')
        ->where('testimonials.type','PO')
        ->get();
        return view('backend.personal.testimonial.index',compact('data'));
    }

    public function addtestimonial(Request $request){
        // Add testimonials
        $d = new Testimonial;
        $d->image = $request->image;
        $d->person = $request->person;
        $d->content = $request->content;
        $d->video = $request->video;
        $d->position = '-';
        $d->type = 'PO';
        $d->save();
        flash(translate('Testimonial Information'))->success();
        return redirect('admin/personal_testimonials');
    }

    public function createtestimonial()
    {
        return view('backend.personal.testimonial.create');
    }

    public function edittestimonial($id){
        $data = Testimonial::findorfail(base64_decode($id));
       return view('backend.personal.testimonial.edit',compact('data'));
    }

    public function updatetestimonial(Request $request, $id){

    }

    public function update(Request $request, $id)
    {
        $d = Testimonial::find($id);
        $d->image = $request->image;
        $d->person = $request->person;
        $d->content = $request->content;
        $d->video = $request->video;
        $d->position = '-';
        $d->type = 'PO';
        $d->save();

        flash(translate('Testimonial has been updated successfully'))->success();
        return redirect('admin/personal_testimonials');
    }
    public function updatebanner(Request $request)
    {
        try {
            foreach ($request->types as $key => $type) {
                overWriteEnvFile($type, $request[$type]);
                //print $type;
            }
            Artisan::call('cache:clear');
            flash(translate('Slider has been updated successfully'))->success();
            return redirect('admin/personalpageset');
           } catch (\Throwable $th) {

            flash(translate('Slider has been updated successfully'))->success();
            return redirect('admin/personalpageset');
           }

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



}
