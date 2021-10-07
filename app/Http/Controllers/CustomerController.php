<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Sale;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function countNumber()
     {
                 
        $customer = DB::table('customers')
        ->count();

        return $customer;

     }


    public function index()
    {
    
    
        
        $sale = DB::table('sales')
        // ->orderBy('id ','desc')
         ->get();
 
         $customers = DB::table('customers')
         // ->orderBy('id ','desc')
          ->get();

        return view('manage_users.customer.index' , ['sale' => $sale,'customers' => $customers]);
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

        //dd($request->all());

        $validated = $request->validate([
             'cell_code' => ['required', 'string', 'max:255'],
            'name_customer' => ['required', 'string'],
            'address_customer' => ['required', 'string', 'max:255'],
            'district_customer' => ['required', 'string', 'max:255'],
            'top_rate' => ['required', 'string', 'max:255'],
            'zip_code_customer' => ['required', 'string', 'max:255'],
            'name_invoke' => ['required', 'string', 'max:255'],
            'address_invoke' => ['required', 'string', 'max:255'],
            'district_invoke' => ['required', 'string', 'max:255'],
            'zip_code_invoke' => ['required', 'string', 'max:255'],
            'receipt_invoke' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'ref_user' => ['required', 'string', 'max:255'],
            'password_user' => ['required', 'string', 'max:255'],
            'rate_rate' => ['required', 'string', 'max:255'],
            'district_rate' => ['required', 'string', 'max:255'],
            'province_rate' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'canton_rate' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],

        ]);
   //     dd($request->all());
               

   $countId = DB::table('customers')
   ->count();

       if ($countId !== 0) {
           

        $countId = Customer::findOrFail($countId);


           $countNumber =  $countId->customerCode;
           $substrBn =  substr($countNumber, 4);
           $customerCode = 'CUS-'  ."". ($substrBn + 1);
       } else {

            $customerCode = 'CUS-1001';
       }
     
        Customer::create([
            'customerCode' =>   $customerCode,
            'cell_code' =>  $request['cell_code'],
            'name_customer' => $request['name_customer'],
            'address_customer' => $request['address_customer'],
            'district_customer' => $request['district_customer'],
            'zip_code_customer' => $request['zip_code_customer'],
            'top_rate' => $request['top_rate'],
            'name_invoke' => $request['name_invoke'],
            'address_invoke' => $request['address_invoke'],
            'district_invoke' => $request['district_invoke'],
            'zip_code_invoke' => $request['zip_code_invoke'],
            'receipt_invoke' => $request['receipt_invoke'],
            'email' => $request['email'],
            'ref_user' => $request['ref_user'],
            'password_user' =>  Hash::make($request['password_user']),
            'rate_rate' => $request['rate_rate'],
            'district_rate' => $request['district_rate'],
            'province_rate' => $request['province_rate'],
            'phone_number' => $request['phone_number'],
            'canton_rate' => $request['canton_rate'],
            'province' => $request['province'],
            
        ]);
            return redirect('customer')->with('message_status', 'เพิ่ม ข้อมูลเรียบร้อย' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   

        $data = Customer::findOrFail($id);
        return view('manage_users.customer.show_customer' ,['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $sale = DB::table('sales')
        // ->orderBy('id ','desc')
         ->get();

        $data = Customer::findOrFail($id);
        return view('manage_users.customer.edit_customer',['data' => $data , 'sale' => $sale]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        
        $validated = $request->validate([
            'name_customer' => ['required', 'string', 'max:255'],
           'top_rate' => ['required', 'string'],
           'address_customer' => ['required', 'string', 'max:255'],
           'district_rate' => ['required', 'string', 'max:255'],
           'district_customer' => ['required', 'string', 'max:255'],
           'province_rate' => ['required', 'string', 'max:255'],
           'zip_code_customer' => ['required', 'string', 'max:255'],
           'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
           'ref_user' => ['required', 'string', 'max:255'],
           'password_user' => ['required', 'string', 'max:255'],
           'cell_code' => ['required', 'string', 'max:255'],
           'rate_rate' => ['required', 'string', 'max:255'],

       ]);



       
       $flight = Customer::find($id);
  

    
       $flight->name_customer = $request->name_customer;
       $flight->top_rate = $request->top_rate;
       $flight->address_customer = $request->address_customer;
       $flight->district_rate = $request->district_rate;
       $flight->district_customer = $request->district_customer;
       $flight->province_rate = $request->province_rate;
       $flight->zip_code_customer = $request->address_customer;
       $flight->email = $request->email;
       $flight->ref_user = $request->ref_user;
       $flight->password_user = Hash::make($request->password_user);
       $flight->cell_code = $request->cell_code;
       $flight->rate_rate = $request->rate_rate;
       $flight->save();
       return redirect('customer')->with('message_status', 'เพิ่ม ข้อมูลเรียบร้อย' );
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
