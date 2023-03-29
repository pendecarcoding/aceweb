<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Resources\V2\PolicyCollection;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Pricefeed;
class PricefeedController extends Controller
{
    public function update(Request $r)
    {

            $data =[
                'updateby'=>'SYSTEM',
                'name'=>'CRONJOB',
                'systemprice'=>$r->currentprice,
                'overrideprice'=>$r->overrideprice,
            ];
            Pricefeed::insert($data);
                $datas = Product::all();
                foreach ($datas as $key => $v) {
                    $margin = DB::table('marginprice')->where('denominations',$v->weight)->first();
                    $formula = ($r->overrideprice+$margin->margin)*$v->weight;
                    $u = [
                        'unit_price'=>$formula
                    ];
                    $act = Product::where('id',$v->id)->update($u);
                    $p = [
                        'price'=>$formula
                    ];
                    $act = DB::table('product_stocks')->where('product_id',$v->id)->update($p);
                }



    }

}
