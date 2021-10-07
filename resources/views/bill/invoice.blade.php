@extends('layouts.app_layouts_home')

@section('content')

<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item"></li>
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <h1 class="text-left">จัดการบัญชี</h1>
                <p class="text-left">เพิ่มเเละจัดการบัญชี</p>
               
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('maun_footer.maun')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div>
                </div>
            </div><!-- /.container-fluid  ความขห่าง top-->
        </section>
        <section class="content">
            <nav>
                <section class="content">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="text-center"> ใบวางบิล</h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <h5>ผู้ติดต่อ</h5>
                                    <a class="text-blue" id="text-name"> {{$user->name_customer}}</a>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">วันที่ออก*</label>
                                                    <input type="text" id="date-issued1" value="" class="form-control datepicker_out">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">วันที่ครบกำหนด*</label>
                                                    <input type="text" id="date-end2" value="" class="form-control datepicker">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">เอกสารที่</label>
                                                    <input type="text" class="form-control" value="{{$countInvoice}}"
                                                        id="idBn-2018" placeholder="BN-2018060008" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <a id="text-address">
                                    {{$user->address_customer}}
                                    {{$user->district_rate}}
                                   {{$user->district_customer}}
                                    {{$user->province_rate}}
                                   {{$user->zip_code_customer}}
                             
                                </a>
                                 <p  id="errorForm" class="text-red"></p>
                                 <p class="text-green" id="massageData"></p>
                            </div>
                            <div class="table-responsive">
                                <br>
                            <table class="table" id="myTable" >
                                <thead>
                                    <tr role="row">
                                        <th>ลำดับที่
                                        </th>
                                        <th>รหัส</th>
                                        <th>
                                            วันที่ออก</th>
                                        <th>วันที่ครบกำหนด</th>
                                        <th>ยอดรวมสุทธิ</th>
                                        <th>มูลค่าที่ต้องชำระ</th>
                                        <th>จำนวลเงินวางบิล</th>
                                    </tr>
                                </thead>
                                <tbody id="idtr">
                                    <tr class="">
                                        <td class="dtr-control">1</td>
                                        <td>
                                            <input type="text" class="form-control text-right" id="name_01" value=""
                                                placeholder="IN-201860006" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control text-right datepicker" id="name_11"  value=""
                                                placeholder="05/06/2018" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control text-right datepicker_out" id="name_21"  value=""
                                                placeholder="12/06/2018" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control text-right" id="name_31"  value=""
                                                placeholder="000.00" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control text-right" id="name_41"  value=""
                                                placeholder="000.00" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-8">
                                                    <input type="text" class="form-control text-right input_number" id="idInput1" value=""
                                                        placeholder="000.00"  onChange="change_send(this.value)" aria-label="Username"
                                                        aria-describedby="basic-addon1">
                                                </div>
                                                <div class="col-md-4">
                                                    <a type="button" id="deleteRows"   value="Del"> <i
                                                            class="fas fas fa-times"></i></a>&nbsp;&nbsp;
                                                    <a type="button" onclick="myCreateFunction()"> <i
                                                            class="fas fa-plus "></i></a>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">อ้างอิง</label>
                                        <textarea class="form-control" value="" id="text-Textarea1" rows="4"
                                            placeholder="กรอกรายละเอียดไม่เกิน 360 ตัวอักษร"></textarea>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label"><i
                                                class="fas fa-tags "></i>&nbsp;&nbsp;&nbsp;&nbsp;tag</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control"  value="" id="tag">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <br>
                                    <div class="mb-3 row">
                                        <p for="inputPassword" class="col-sm-4 col-form-label  text-right">จำนวนรวม
                                            (รายการ)</p>
                                        <div class="col-sm-6 text-right ">
                                            
                                            <p id="my_id" class=" text-right">1</p>
                                        </div>
                                        <div class="col-md-2 text-right">
                                            
                                             <p class=" text-right">รายการ</p>
                                        </div>
                                       
                                    </div>
                                    <div class="mb-3 row">
                                        <p for="inputPassword" class="col-sm-4 col-form-label  text-right">
                                            ราคาสุทธิสินค้าที่เสียภาษี</p>
                                        <div class="col-sm-6 text-right">
                                            <p class="bant"  id="price_products">000.00  </p>
                                         
                                        </div>
                                        <div class="col-sm-2  text-right">
                                            <p class=" text-right">บาท  </p>
                                         
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <p for="inputPassword" class="col-sm-4 col-form-label  text-right">
                                            ภาษีมูลค่าเพิ่ม</p>
                                        <div class="col-sm-6 text-right">
                                            <p class=" text-right" id="vat"> 7 %</p>
                                        </div>
                                        <div class="col-sm-1">
                                           
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <p for="inputPassword" class="col-sm-4 col-form-label  text-right">ยอดรวมสุทธิ
                                        </p>
                                        <div class="col-sm-6 text-right">
                                            <p class="bant" id="sumVat">000.00 </p>
                                        </div>
                                        <div class="col-sm-2 text-right">
                                            <p class=" text-right " id="sumVat">บาท </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <hr>

                            <div class="row">
                                <div class="col-sm-12 col-md-7">
                                    <button type="button" class="btn btn-primary">เพิ่ม</button>
                                </div>
                                <div class="col-sm-12 col-md-5 text-center">
                                    <button type="button" class="btn btn-danger">ยกเลิก</button>
                                    <button type="button" class="btn btn-primary" onclick="Invoice()">บันทึกร่าง&nbsp;&nbsp;&nbsp; <i
                                            class="fas fa-caret-down"></i></button>
                                    <button type="submit" class="btn btn-primary summit-invoice"  >อนุมัติรายการ&nbsp;&nbsp;&nbsp;<i
                                            class="fas fa-caret-up text-center"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </nav>
        </section>
    </div>
</div>
<!-- /.content-wrapper -->




<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('maun_footer.footer')

@endsection