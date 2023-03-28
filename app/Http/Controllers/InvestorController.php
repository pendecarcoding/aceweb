<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Testimonial;

class InvestorController extends Controller
{

    public function __construct() {
        // Staff Permission Check
        $this->middleware(['permission:investor.bannerset'])->only('setbanner');


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function setbanner()
    {
       return view('backend.investor.investorpageset');
    }

    public function updatebanner(Request $request)
    {
        try {
            foreach ($request->types as $key => $type) {
                overWriteEnvFile($type, $request[$type]);
                //print $type;s
            }
            Artisan::call('cache:clear');
            flash(translate('Slider has been updated successfully'))->success();
            return back();
           } catch (\Throwable $th) {

            flash(translate('Slider has been updated successfully'))->success();
            return back();
           }

    }



}
