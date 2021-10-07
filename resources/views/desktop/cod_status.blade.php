@extends('layouts.app_layouts_home')

@section('content')

<!-- Site wrapper -->
<div class="wrapper ">


    <!-- Content Wrapper. Contains page content -->
    <div class="content-height ">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card  padding-le">
                            <div class="card-header">
                                <div class="card-tools">
                                <p class="text-right thicker" >COD Status
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <br>
                                <p class="herd-center thicker">< 2021-09 ></p>
                            </div>
                            <form id="quickForm" novalidate="novalidate">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-6  cod-box">
                                                <br>
                                                <br>
                                                <br>
                                                <p class="text-center">ปฎิทิน</p>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-sm-3 ">
                                                <p class="text-center thicker b-color ">ชำระเสร็จสิ้น</p>
                                            </div>

                                            <div class="col-sm-3 ">
                                                <p class="text-center thicker dark-icon">รอการตรวจสอบอนุมัติ</p>
                                            </div>

                                            <div class="col-sm-3 ">
                                                <p class="text-center thicker">ไม่มการเก็บยอดชำระ</p>
                                            </div>
                                        </div>
                                        <label class="text-left">DD-MM-YYYY</label>
                                        <div class="col-sm-6 text-left">

                                            <div class="box-parcel thicker">
                                                <p>จำนวน COD</p>
                                                <p>จำนวนยอดที่ควรโอน</p>
                                                <p>ยอดเงินควรรับ</p>
                                                <p>ยอดเงินที่รับแล้ว</p>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-body -->

                            </form>
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
</div>
<div class="col-sm-10">
    <a href="{{ url('delivery-details') }}" class="nav-link ">
        <p class=" btn">
            back pant delivery-details
        </p>
    </a>
    <a href="{{ url('parcel-number') }}" class="nav-link ">
        <p class="btn">
            pant parcel-number
        </p>
    </a>
</div>


@endsection