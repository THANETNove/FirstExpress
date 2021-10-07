<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Session;
use Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\Add_user;



class System_UserController extends Controller
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


        $users = DB::table('add_users')
        ->get();
      //  dd($users);
        return view('manage_users.system_user.index', ['users' => $users]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
            'title_role' => ['required', 'string'],
        ]);


         Add_user::create([
            'username' => $request['username'],
            'email' => $request['email'],
            'title_role' => $request['title_role'],
            'password' => Hash::make($request['password']),
        ]);
            return redirect('home')->with('message_status', 'เพิ่ม ข้อมูลเรียบร้อย' );

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
          //  dd( $request->id);
        $id = $request->id;
        $data = Add_user::findOrFail($id);
       // dd( $users);
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


     
    
        $flight = Add_user::find($request->id_e);
  

    
        $flight->username = $request->username_e;
        $flight->email = $request->email_e;
        $flight->title_role = $request->title_role_e;
        $flight->password = Hash::make($request->password_e);
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
  
        $flight = Add_user::find($id);

        $flight->delete();

        return redirect('/home')->with('message_destroy', 'ลบ ข้อมูลเรียบร้อย');
    }
}
