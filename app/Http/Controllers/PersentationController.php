<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persentation;
use File;

class PersentationController extends Controller
{

    public function __construct() {
        // Staff Permission Check
        $this->middleware(['permission:view_persentation'])->only('index');
        $this->middleware(['permission:add_persentation'])->only('create');
        $this->middleware(['permission:edit_persentation'])->only('edit');
        $this->middleware(['permission:delete_persentation'])->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Persentation::all();
        return view('backend.investor.persentation.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.investor.persentation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
               $request->validate([
                 'file' => 'required|mimes:doc,docx,xls,xlsx,pdf'
                ]);
                if($request->hasFile('file')) {
                    $uploadPath = public_path('download/persentation');
                      if(!File::isDirectory($uploadPath)) {
                         File::makeDirectory($uploadPath, 0755, true, true);
                      }
                      $file = $request->file('file');
                      $explode = explode('.', $file->getClientOriginalName());
                      $originalName = $explode[0];
                      $extension = $file->getClientOriginalExtension();
                      $rename = 'file_' . date('YmdHis') . '.' . $extension;
                      $mime = $file->getClientMimeType();
                      $filesize = $file->getSize();
                      if($file->move($uploadPath, $rename)) {
                            $media = new Persentation;
                            $media->persentation = $request->name;
                            $media->date = $request->date;
                            $media->file = $rename;
                            $media->download = 0;
                            $media->save();
                            flash(translate('Downloads has been save successfully'))->success();
                            return redirect()->route('persentation.index');
                        }
                }else{

                }


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

        $data = Persentation::find(base64_decode($id));
        return view('backend.investor.persentation.edit', compact('data'));

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

                if($request->hasFile('file')) {
                    $request->validate([
                        'file' => 'required|mimes:doc,docx,xls,xlsx,pdf'
                        ]);
                    $uploadPath = public_path('download');
                      if(!File::isDirectory($uploadPath)) {
                         File::makeDirectory($uploadPath, 0755, true, true);
                      }
                      $file = $request->file('file');
                      $explode = explode('.', $file->getClientOriginalName());
                      $originalName = $explode[0];
                      $extension = $file->getClientOriginalExtension();
                      $rename = 'file_' . date('YmdHis') . '.' . $extension;
                      $mime = $file->getClientMimeType();
                      $filesize = $file->getSize();

                      if($file->move($uploadPath, $rename)) {
                            if(File::exists(public_path('download/persentation/' . $request->fileold))) {
                                File::delete(public_path('download/persentation/' . $request->fileold));
                            }
                            $media = Persentation::find(base64_decode($id));
                            $media->persentation = $request->name;
                            $media->date = $request->date;
                            $media->file = $rename;
                            $media->save();
                            flash(translate('Persentations has been update successfully'))->success();
                            return redirect()->route('persentation.index');
                        }
                        }else{
                            $media = Persentation::find(base64_decode($id));
                            $media->persentation = $request->name;
                            $media->date = $request->date;

                            $media->save();
                            flash(translate('Persentations has been update successfully'))->success();
                            return redirect()->route('persentation.index');
                        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Persentation::findOrFail(base64_decode($id));
        if(Persentation::destroy(base64_decode($id))){
            if(File::exists(public_path('download/persentation/' . $slider->file))) {
                File::delete(public_path('download/persentation/' . $slider->file));
            }
            flash(translate('Persentations has been deleted successfully'))->success();
        }
        else{
            flash(translate('Persentations went wrong'))->error();
        }
        return redirect()->route('persentation.index');
    }
}
