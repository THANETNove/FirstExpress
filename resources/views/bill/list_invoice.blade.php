@extends('layouts.app_layouts_home')

@section('content')

<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <h1 class="text-left ">วางบิล</h1>
                <p class="text-left">จัดการ/ยื่นยันใบเเจ้งหนี้</p>
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                    <section class="content">
                                        <!-- Default box -->
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3 row">
                                                                <label for="inputPassword"
                                                                    class="col-sm-2 col-form-label">ลูกค้า</label>
                                                                <div class="col-sm-7">
                                                                    <select class="form-control" aria-label="Default select example">
                                                                        @foreach ($invoiceUser as $invoice)
                                                                         <option value="3">{{$invoice->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                        <div class="mb-3 row">
                                                                <label for="inputPassword"
                                                                    class="col-sm-4 col-form-label">วันที่ส่งของ</label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" id="datepicker" class="form-control datepicker">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                        <div class="mb-3 row">
                                                                <label for="inputPassword"
                                                                    class="col-sm-2 col-form-label">ถึง</label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" id="datepicker_out" class="form-control datepicker_out">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6"></div>
                                                        <div class="col-sm-12 col-md-6"></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="example2"
                                                                class="table table-bordered table-hover dataTable dtr-inline "
                                                                role="grid" aria-describedby="example2_info">
                                                                <thead class="red-back">
                                                                    <tr role="row">
                                                                        <th class="col-sm-1">
                                                                            <div class="text-center ">
                                                                                <input class="list-invo" type="checkbox"
                                                                                    value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </th>
                                                                        <th>
                                                                            รหัสลูกค้า
                                                                        </th>
                                                                        <th>ชื่อลูกค้า
                                                                        </th>
                                                                        <th>
                                                                            เลขผู้เสียภาษี
                                                                        </th>
                                                                        <th>
                                                                            ข้อมูล
                                                                        </th>
                                                                        <th>
                                                                            เรทขนส่ง
                                                                        </th>
                                                                        <th>
                                                                            จำนวนพัสดุ
                                                                        </th>
                                                                        <th>
                                                                            ส่วนลด
                                                                        </th>
                                                                        <th>
                                                                            VAT
                                                                        </th>
                                                                        <th>
                                                                            ค่าขนส่ง
                                                                        </th>
                                                                        <th>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach ($bill as $user)
                                                                    <tr class="odd">
                                                                        <td>
                                                                            <div class="text-center">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>{{$user->customerCode}}</td>
                                                                        <td>{{$user->name}}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>{{$user->id}}</td>
                                                                        <td>{{$user->totalItems}}</td>
                                                                        <td>{{$user->rate_rate}}</td>
                                                                        <td>{{$user->vat}}</td>
                                                                        <td>{{$user->netTotal}}</td>
                                                                        <td>
                                                                        <a class="btn btn-primary" href="{{url('invoiceEidit',$user->id)}}">เเก้ไข</a>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <button type="button" class="btn btn-danger box-inv_to ">ดูตัวอย่างใบเเจ้งหนี้</button>
                                               
 
                                                <button type="button" class="btn btn-outline-danger box-inv">ยันยันออกใบเเจ้งหนี้</button>
                                                
                                              
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <nav>
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