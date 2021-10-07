@extends('layouts.app_layouts_home')

@section('content')

<!-- Main content -->
<section class="content">
    <nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <section class="content">
                        <!-- Default box -->
                        <div class="card ">
                            <div class="card-header">
                                <label class="parcel-left"><br>รายการพัสดุที่จัดส่ง </label>
                                <div class="card-tools">
                                    <label class="parcel-right">รายการพัสดุที่จัดส่ง
                                    </label>
                                </div>
                            </div>
                            <div class="select-my col-sm-8">
                                    </br>
                                    <input type="text" id="inputPassword6" class="form-control  box-parcel"
                                        aria-describedby="passwordHelpInline"
                                        placeholder="ค้นหาเลขพัสดุ /ชื่อผู้รับ/ เบอร์โทร">
                                </div>

                            <div class="card-body">
                                <table class="table box-text col-sm-12 text-white">
                                    <thead>
                                        <tr class=" my-head">
                                            <th scope="col">อยู่ระหว่างจัดส่ง</th>
                                            <th scope="col">จัดส่งสำเร็จ</th>
                                            <th scope="col">อื่นๆ/ตีกลับ</th>
                                        </tr>
                                    </thead>
                                </table>
                                <br>
                                <br>
                                <form>
                                    <div class="row reght-aling">
                                        <div class="col-sm-4 text-left">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-6 col-form-label">เลขพัสดุ:
                                                    12345678910 :
                                                </label>
                                                <div class="col-sm-6">

                                                </div>
                                            </div>

                                            <div class="box-parcel">
                                                <p>shein by sis.sie09876766xxกรุงเทพมหานคร</p>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-6 col-form-label">ค่าส่ง &nbsp;&nbsp;&nbsp;&nbsp; 45.00
                                                </label>
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <br>
                                            <div class="col-sm-10">
                                                <label class=" col-form-label text-pur">
                                                    รับพัสดุแล้ว</label>
                                            </div>
                                        </div>
                                </form>
                                <div class="col-sm-12">
                                            <br>
                                            <div class="col-sm-11">
                                                <label class=" col-form-label">
                                                <i class="fas fa-angle-right  icon-black" style="font-size:50px;"></i>
                                                </label>
                                            </div>
                                            <div class="col-sm-11">
                                                <p class=" col-form-label icon-black">
                                                     เพิ่มเติม
                                                </p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div> <!-- /.card -->
        <nav>
</section>

<div class="col-sm-10">
    <a href="{{ url('booking-history') }}" class="nav-link ">
        <p class=" btn">
            back pant booking-history
        </p>
    </a>
    <a href="{{ url('delivery-details') }}" class="nav-link ">
        <p class="btn">
            pant delivery_details
        </p>
    </a>
</div>



@endsection