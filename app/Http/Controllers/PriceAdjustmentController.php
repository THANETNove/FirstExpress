<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PriceAdjustment;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PriceAdjustmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $price = DB::table('price_adjustments')
        ->count();

        if($price !== 0) {
            $sale = DB::table('price_adjustments')
            ->orderByDesc('id')
             ->get();
             
             $data = PriceAdjustment::findOrFail($sale[0]->id);
             //dd($data);
            return view('shippingRate.edit' , ['data' => $data ]);
        }else{

            return view('shippingRate.index');
        }
       
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            //'discount' => ['required', 'string', 'max:255'],
            'weightMin1' => ['required', 'string', 'max:255'],
            'weightMax1' => ['required', 'string', 'max:255'],
            'cost1' => ['required', 'string', 'max:255'],
            'sellingPriceBangkok1' => ['required', 'string', 'max:255'],
            'sellingPriceUpcountry1' => ['required', 'string', 'max:255'],

            'weightMin2' => ['required', 'string', 'max:255'],
            'weightMax2' => ['required', 'string', 'max:255'],
            'cost2' => ['required', 'string', 'max:255'],
            'sellingPriceBangkok2' => ['required', 'string', 'max:255'],
            'sellingPriceUpcountry2' => ['required', 'string', 'max:255'],

            'weightMin3' => ['required', 'string', 'max:255'],
            'weightMax3' => ['required', 'string', 'max:255'],
            'cost3' => ['required', 'string', 'max:255'],
            'sellingPriceBangkok3' => ['required', 'string', 'max:255'],
            'sellingPriceUpcountry3' => ['required', 'string', 'max:255'],

            'weightMin4' => ['required', 'string', 'max:255'],
            'weightMax4' => ['required', 'string', 'max:255'],
            'cost4' => ['required', 'string', 'max:255'],
            'sellingPriceBangkok4' => ['required', 'string', 'max:255'],
            'sellingPriceUpcountry4' => ['required', 'string', 'max:255'],

            'weightMin5' => ['required', 'string', 'max:255'],
            'weightMax5' => ['required', 'string', 'max:255'],
            'cost5' => ['required', 'string', 'max:255'],
            'sellingPriceBangkok5' => ['required', 'string', 'max:255'],
            'sellingPriceUpcountry5' => ['required', 'string', 'max:255'],

            'weightMin6' => ['required', 'string', 'max:255'],
            'weightMax6' => ['required', 'string', 'max:255'],
            'cost6' => ['required', 'string', 'max:255'],
            'sellingPriceBangkok6' => ['required', 'string', 'max:255'],
            'sellingPriceUpcountry6' => ['required', 'string', 'max:255'],

            'weightMin7' => ['required', 'string', 'max:255'],
            'weightMax7' => ['required', 'string', 'max:255'],
            'cost7' => ['required', 'string', 'max:255'],
            'sellingPriceBangkok7' => ['required', 'string', 'max:255'],
            'sellingPriceUpcountry7' => ['required', 'string', 'max:255'],

            'weightMin8' => ['required', 'string', 'max:255'],
            'weightMax8' => ['required', 'string', 'max:255'],
            'cost8' => ['required', 'string', 'max:255'],
            'sellingPriceBangkok8' => ['required', 'string', 'max:255'],
            'sellingPriceUpcountry8' => ['required', 'string', 'max:255'],

            
        ]);


        PriceAdjustment::create([
            'rebate' => $request['discount'],

            'weightMin1' => $request['weightMin1'],
            'weightMax1' => $request['weightMax1'],
            'cost1' => $request['cost1'],
            'sellingPriceBangkok1' => $request['sellingPriceBangkok1'],
            'sellingPriceUpcountry1' => $request['sellingPriceUpcountry1'],

            'weightMin2' => $request['weightMin2'],
            'weightMax2' => $request['weightMax2'],
            'cost2' => $request['cost2'],
            'sellingPriceBangkok2' => $request['sellingPriceBangkok2'],
            'sellingPriceUpcountry2' => $request['sellingPriceUpcountry2'],

            'weightMin3' => $request['weightMin3'],
            'weightMax3' => $request['weightMax3'],
            'cost3' => $request['cost3'],
            'sellingPriceBangkok3' => $request['sellingPriceBangkok3'],
            'sellingPriceUpcountry3' => $request['sellingPriceUpcountry3'],

            'weightMin4' => $request['weightMin4'],
            'weightMax4' => $request['weightMin4'],
            'cost4' => $request['cost4'],
            'sellingPriceBangkok4' => $request['sellingPriceBangkok4'],
            'sellingPriceUpcountry4' => $request['sellingPriceUpcountry4'],
            'weightMin5' => $request['weightMin5'],
            'weightMax5' => $request['weightMax5'],
            'cost5' => $request['cost5'],
            'sellingPriceBangkok5' => $request['sellingPriceBangkok5'],
            'sellingPriceUpcountry5' => $request['sellingPriceUpcountry5'],

            'weightMin6' => $request['weightMin6'],
            'weightMax6' => $request['weightMax6'],
            'cost6' => $request['cost6'],
            'sellingPriceBangkok6' => $request['sellingPriceBangkok6'],
            'sellingPriceUpcountry6' => $request['sellingPriceUpcountry6'],

            'weightMin7' => $request['weightMin7'],
            'weightMax7' => $request['weightMax7'],
            'cost7' => $request['cost7'],
            'sellingPriceBangkok7' => $request['sellingPriceBangkok7'],
            'sellingPriceUpcountry7' => $request['sellingPriceUpcountry7'],

            'weightMin8' => $request['weightMin8'],
            'weightMax8' => $request['weightMax8'],
            'cost8' => $request['cost8'],
            'sellingPriceBangkok8' => $request['sellingPriceBangkok8'],
            'sellingPriceUpcountry8' => $request['sellingPriceUpcountry8'],

        ]);
            return redirect('shipping-rate')->with('message_status', 'เพิ่ม ข้อมูลเรียบร้อย' );
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
        //
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

        $validated = $request->validate([
            //'discount' => ['required', 'string', 'max:255'],
            'weightMin1' => ['required', 'string', 'max:255'],
            'weightMax1' => ['required', 'string', 'max:255'],
            'cost1' => ['required', 'string', 'max:255'],
            'sellingPriceBangkok1' => ['required', 'string', 'max:255'],
            'sellingPriceUpcountry1' => ['required', 'string', 'max:255'],

            'weightMin2' => ['required', 'string', 'max:255'],
            'weightMax2' => ['required', 'string', 'max:255'],
            'cost2' => ['required', 'string', 'max:255'],
            'sellingPriceBangkok2' => ['required', 'string', 'max:255'],
            'sellingPriceUpcountry2' => ['required', 'string', 'max:255'],

            'weightMin3' => ['required', 'string', 'max:255'],
            'weightMax3' => ['required', 'string', 'max:255'],
            'cost3' => ['required', 'string', 'max:255'],
            'sellingPriceBangkok3' => ['required', 'string', 'max:255'],
            'sellingPriceUpcountry3' => ['required', 'string', 'max:255'],

            'weightMin4' => ['required', 'string', 'max:255'],
            'weightMax4' => ['required', 'string', 'max:255'],
            'cost4' => ['required', 'string', 'max:255'],
            'sellingPriceBangkok4' => ['required', 'string', 'max:255'],
            'sellingPriceUpcountry4' => ['required', 'string', 'max:255'],

            'weightMin5' => ['required', 'string', 'max:255'],
            'weightMax5' => ['required', 'string', 'max:255'],
            'cost5' => ['required', 'string', 'max:255'],
            'sellingPriceBangkok5' => ['required', 'string', 'max:255'],
            'sellingPriceUpcountry5' => ['required', 'string', 'max:255'],

            'weightMin6' => ['required', 'string', 'max:255'],
            'weightMax6' => ['required', 'string', 'max:255'],
            'cost6' => ['required', 'string', 'max:255'],
            'sellingPriceBangkok6' => ['required', 'string', 'max:255'],
            'sellingPriceUpcountry6' => ['required', 'string', 'max:255'],

            'weightMin7' => ['required', 'string', 'max:255'],
            'weightMax7' => ['required', 'string', 'max:255'],
            'cost7' => ['required', 'string', 'max:255'],
            'sellingPriceBangkok7' => ['required', 'string', 'max:255'],
            'sellingPriceUpcountry7' => ['required', 'string', 'max:255'],

            'weightMin8' => ['required', 'string', 'max:255'],
            'weightMax8' => ['required', 'string', 'max:255'],
            'cost8' => ['required', 'string', 'max:255'],
            'sellingPriceBangkok8' => ['required', 'string', 'max:255'],
            'sellingPriceUpcountry8' => ['required', 'string', 'max:255'],

            
        ]);
      //  $id = $request->id;
             
       // dd($id);
        $number = PriceAdjustment::find($id);
  

    
        $number->rebate =  $request->discount;
        $number->weightMin1 = $request->weightMin1;
        $number->weightMax1 = $request->weightMax1;
        $number->cost1 = $request->cost1;
        $number->sellingPriceBangkok1 = $request->sellingPriceBangkok1;
        $number->sellingPriceUpcountry1 = $request->sellingPriceUpcountry1;
        $number->weightMin2 = $request->weightMin2;
        $number->weightMax2 = $request->weightMax2;
        $number->cost2 = $request->cost2;
        $number->sellingPriceBangkok2 = $request->sellingPriceBangkok2;
        $number->sellingPriceUpcountry2 = $request->sellingPriceUpcountry2;
        $number->weightMin3 = $request->weightMin3;
        $number->weightMax3 = $request->weightMax3;
        $number->cost3 = $request->cost3;
        $number->sellingPriceBangkok3 = $request->sellingPriceBangkok3;
        $number->sellingPriceUpcountry3 = $request->sellingPriceUpcountry3;
        $number->weightMin4 = $request->weightMin4;
        $number->weightMax4 = $request->weightMax4;
        $number->cost4 = $request->cost4;
        $number->sellingPriceBangkok4 = $request->sellingPriceBangkok4;
        $number->sellingPriceUpcountry4 = $request->sellingPriceUpcountry4;
        $number->weightMin5 = $request->weightMin5;
        $number->weightMax5 = $request->weightMax5;
        $number->cost1 = $request->cost1;
        $number->sellingPriceBangkok5 = $request->sellingPriceBangkok5;
        $number->sellingPriceUpcountry5 = $request->sellingPriceUpcountry5;
        $number->weightMin6 = $request->weightMin6;
        $number->weightMax6 = $request->weightMax6;
        $number->cost6 = $request->cost6;
        $number->sellingPriceBangkok6 = $request->sellingPriceBangkok6;
        $number->sellingPriceUpcountry6 = $request->sellingPriceUpcountry6;
        $number->weightMin7 = $request->weightMin7;
        $number->weightMax7 = $request->weightMax7;
        $number->cost7 = $request->cost7;
        $number->sellingPriceBangkok7 = $request->sellingPriceBangkok7;
        $number->sellingPriceUpcountry7 = $request->sellingPriceUpcountry7;
        $number->weightMin8 = $request->weightMin8;
        $number->weightMax8 = $request->weightMax8;
        $number->cost8 = $request->cost8;
        $number->sellingPriceBangkok8 = $request->sellingPriceBangkok8;
        $number->sellingPriceUpcountry8 = $request->sellingPriceUpcountry8;



        $number->save();

        return redirect('shipping-rate')->with('message_status', 'เเก้ไข ข้อมูลเรียบร้อย' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
