<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Download;
use File;

class DownloadsController extends Controller
{

    public function __construct() {
        // Staff Permission Check
        $this->middleware(['permission:view_downloads'])->only('index');
        $this->middleware(['permission:add_downloads'])->only('create');
        $this->middleware(['permission:edit_downloads'])->only('edit');
        $this->middleware(['permission:delete_downloads'])->only('destroy');
        $this->middleware(['permission:publish_downloads'])->only('change_status');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Download::all();
        return view('backend.investor.downloads.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.investor.downloads.create');
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
                            $media = new Download;
                            $media->namefile = $request->name;
                            $media->file = $rename;
                            $media->count = 0;
                            $media->save();
                            flash(translate('Downloads has been save successfully'))->success();
                            return redirect()->route('downloads.index');
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

        $data = Download::find(base64_decode($id));
        return view('backend.investor.downloads.edit', compact('data'));

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
                            if(File::exists(public_path('download/' . $request->fileold))) {
                                File::delete(public_path('download/' . $request->fileold));
                            }
                            $media = Download::find(base64_decode($id));
                            $media->namefile = $request->name;
                            $media->file = $rename;
                            $media->save();
                            flash(translate('Downloads has been update successfully'))->success();
                            return redirect()->route('downloads.index');
                        }
                        }else{
                            $media = Download::find(base64_decode($id));
                            $media->namefile = $request->name;
                            $media->save();
                            flash(translate('Downloads has been update successfully'))->success();
                            return redirect()->route('downloads.index');
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
        $slider = Download::findOrFail(base64_decode($id));
        if(Download::destroy(base64_decode($id))){
            if(File::exists(public_path('download/' . $slider->file))) {
                File::delete(public_path('download/' . $slider->file));
            }
            flash(translate('Download has been deleted successfully'))->success();
        }
        else{
            flash(translate('Download went wrong'))->error();
        }
        return redirect()->route('downloads.index');
    }
}
