<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesktopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('desktop.desktop_1');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('desktop.register');
    }


    public function verify_identity()
    {
        return view('desktop.verify_identity');
    }

    public function one_parcel()
    {
        return view('desktop.one_parcel');
    }

    public function more_one_parcel()
    {
        return view('desktop.more_one_parcel');
    }

    
    public function booking_history()
    {
        return view('desktop.booking_history');
    }

    public function waybill()
    {
        return view('desktop.waybill');
    }

    public function my_parcel()
    {
        return view('desktop.my_parcel');
    }

    public function delivery_details()
    {
        return view('desktop.delivery_details');
    }

    public function cod_status()
    {
        return view('desktop.cod_status');
    }
    public function parcel_number()
    {
        return view('desktop.parcel_number');
    }
    public function invoice()
    {
        return view('desktop.invoice');
    }



    
   
     
    public function charge()
    {
        return view('invoice.charge');
    }

       
    public function list_charge()
    {
        return view('invoice.list_charge');
    }

    public function receipt_list()
    {
        return view('invoice.receipt_list');
    }

    
    public function cell_commission()
    {
        return view('invoice.cell_commission');
    }

    public function list_cellCommission()
    {
        return view('invoice.list_cellCommission');
    }

  

    public function costPrice()
    {
        return view('invoice.costPrice');
    }


    public function manageCustomerInformation()
    {
        return view('invoice.manageCustomerInformation');
    }

    public function codRefund()
    {
        return view('invoice.codRefund');
    }

    public function manageCustomer()
    {
        return view('invoice.manageCustomer');
    }

    public function dailyReport()
    {
        return view('invoice.dailyReport');
    }











    
    public function cod()
    {
        return view('desktop.cod');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
