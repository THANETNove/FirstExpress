<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Sale;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
     
        $users = DB::table('sales')
        // ->orderBy('id ','desc')
         ->get();




           return view('manage_users.sale.index',['users' => $users]);
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
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:add_users'],
            'password' => ['required', 'string', 'min:8'],
        ]);


        $countSales = DB::table('sales')
        ->count();
     
       // dd($countSales);
            if ($countSales !== 0) {
                
     
             $sale = Sale::findOrFail($countSales);
     
     
                $countNumber =  $sale->codeSales;
                $substrBn =  substr($countNumber, 5);
                $codeSales = 'SALE-'  ."". ($substrBn + 1);
               // dd($countNumber,  $substrBn,$codeSales);
            } else {
     
                 $codeSales = 'SALE-1001';
                 //dd($codeSales);
            }

        Sale::create([
            'codeSales' => $codeSales,
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
            return redirect('sale')->with('message_status', 'เพิ่ม ข้อมูลเรียบร้อย' );
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
    public function edit(Request $request)
    {
        $id = $request->id;
        $data = Sale::findOrFail($id);
       // dd( $data);
         return response()->json(['data' => $data]);
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


    
        $flight = Sale::find($request->id_sale);
    
        $flight->username = $request->username_sale;
        $flight->email = $request->email_sale;
        $flight->password = Hash::make($request->password_sale);
        $flight->save();



        return response()->json(['message'=>'บันทึก เรียบร้อย']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        $flight = Sale::find($id);

        $flight->delete();

        return redirect('/sale')->with('message_Sale', 'ลบ ข้อมูลเรียบร้อย');
    }
}
