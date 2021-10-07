<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Support\Facades\DB;
use App\Models\Flight;


class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     

        $invoiceUser = DB::table('invoices')
        ->select('name')
        ->distinct()
        ->get();
/*
        $bill = DB::table('invoices')
        ->leftJoin('customers', 'invoices.name', '=', 'customers.name_customer')
        ->get();*/

        
        $bill = DB::table('customers')
        ->rightJoin('invoices', 'customers.name_customer', '=', 'invoices.name')
        ->get();

       // dd($bill);
        return view('bill.list_invoice' , ['bill' => $bill , 'invoiceUser' => $invoiceUser]);
    }
    



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {   

   
       // dd($userName,$userAddress);
        $invoice = DB::table('invoices')
        ->count();
        //->get();
       
       

            if ($invoice !== 0) {
                

                $sale = DB::table('invoices')
                ->orderByDesc('id')
                
                 ->get();

                $bnNumber =  $sale[0]->documentThat;
                $substrBn =  substr($bnNumber, 3);
               // $intNumber = (int)$substrBn;
                $countInvoice = 'BN-'  ."". ($substrBn + 1);
           //  dd( $countInvoice, $substrBn );
            } else {

                 $countInvoice = 'BN-1000000001';
                    

            }
   
        $user = Customer::findOrFail($id);
       // $userName = $user->name_customer;
        //dd($userName);

       return view('bill.invoice' ,[ 'countInvoice' => $countInvoice, 'user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        
        Invoice::create([
            'issuedDateIssue' => $request['issuedDateIssue'],
            'dateDue' => $request['dateDue'],
            'documentThat' => $request['documentThat'],
            'refer' => $request['refer'],
            'tag' => $request['tag'],
            'datajson' => json_encode($request['datajson']),
            'name' => $request['name'],
            'address' => $request['address'],
            'totalItems' => $request['totalItems'],
            'priceGoods' => $request['priceGoods'],
            'vat' => $request['vat'],
            'netTotal' => $request['netTotal'],
            
        ]);

        return response()->json(['message'=>'บันทึก เรียบร้อย']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('asdsadas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

     
        return view('bill.editInvoice' ,['id' => $id]);
    }


    public function getData(Request $request)
    {

        $id = $request->id_data;

        $dataInvoice = Invoice::findOrFail($id);

        return response()->json(['data'=> $dataInvoice]);

     //   dd('55555', $invoice);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

 
       
        $id = $request->id;
      //  dd($id);

        $addIn = Invoice::find( $id);
  
       // dd($flight);
    
        $addIn->issuedDateIssue = $request->issuedDateIssue;
        $addIn->dateDue = $request->dateDue;
        $addIn->documentThat = $request->documentThat;
        $addIn->refer = $request->refer;
        $addIn->tag = $request->tag;
        $addIn->datajson = json_encode($request['datajson']);
        $addIn->name = $request->name;
        $addIn->address = $request->address;
        $addIn->totalItems = $request->totalItems;
        $addIn->priceGoods = $request->priceGoods;
        $addIn->vat = $request->vat;
        $addIn->netTotal = $request->netTotal;
        

    
        $addIn->save();

        return response()->json(['message'=>'เเก้ไข เรียบร้อย']);

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