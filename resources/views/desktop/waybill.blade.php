@extends('layouts.app_layouts_home')

@section('content')

<!-- Main content -->
<section class="content">
    <nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <section class="content">
                    <nav>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                            aria-labelledby="nav-home-tab">
                                            <section class="content">
                                                <!-- Default box -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title font-weight-bolder">รายการพัสดุ</h3>
                                                        <br>
                                                        <div class="form-group row">
                                                            <label for="staticEmail"
                                                                class="col-sm-1 col-form-label">กำหนดวันที่</label>
                                                            <div class="col-sm-2">
                                                                <input type="text" class="form-control" id="inputPassword"
                                                                    placeholder="6/09/2021">
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
                                                                        class="table table-bordered table-hover dataTable dtr-inline"
                                                                        role="grid" aria-describedby="example2_info">
                                                                        <thead class="background-purple text-center">
                                                                            <tr role="row">
                                                                                <th >
                                                                                    #
                                                                                </th>
                                                                                <th >รหัส Booking
                                                                                </th>
                                                                                <th >
                                                                                    จำนวนรายการ
                                                                                </th>
                                                                                <th class="col-sm-6">
                                                                                    
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="odd text-center">
                                                                                <td class="sorting_1">1</td>
                                                                                <td class="sorting_1">0000023</td>
                                                                                <td class="sorting_1">1/1
                                                                                </td>
                                                                                <td class="sorting_1">
                                                                                <button type="button" class="btn butt-waybill ">ปริ้นใบปะหน้า</button>
                                                                                <button type="button" class="btn butt-waybill ">ใบนำส่ง</button>
                                                                                <button type="button" class="btn butt-waybill ">ตรวจสอบใบนำส่ง</button>

                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd text-center">
                                                                                <td class="sorting_1">2</td>
                                                                                <td class="sorting_1">0000024</td>
                                                                                <td class="sorting_1">20/20
                                                                                </td>
                                                                                <td class="sorting_1">
                                                                                <button type="button" class="btn butt-waybill ">ปริ้นใบปะหน้า</button>
                                                                                <button type="button" class="btn butt-waybill ">ใบนำส่ง</button>
                                                                                <button type="button" class="btn butt-waybill ">ตรวจสอบใบนำส่ง</button>

                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd text-center">
                                                                                <td class="sorting_1">3</td>
                                                                                <td class="sorting_1">0000025</td>
                                                                                <td class="sorting_1">9/9
                                                                                </td>
                                                                                <td class="sorting_1">
                                                                                <button type="button" class="btn butt-waybill ">ปริ้นใบปะหน้า</button>
                                                                                <button type="button" class="btn butt-waybill ">ใบนำส่ง</button>
                                                                                <button type="button" class="btn butt-waybill ">ตรวจสอบใบนำส่ง</button>

                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd text-center">
                                                                                <td class="sorting_1">4</td>
                                                                                <td class="sorting_1">0000026</td>
                                                                                <td class="sorting_1">1/1
                                                                                </td>
                                                                                <td class="sorting_1">
                                                                                <button type="button" class="btn butt-waybill ">ปริ้นใบปะหน้า</button>
                                                                                <button type="button" class="btn butt-waybill ">ใบนำส่ง</button>
                                                                                <button type="button" class="btn butt-waybill ">ตรวจสอบใบนำส่ง</button>

                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav>
                </section>
                </div>
            </div>
        </div> <!-- /.card -->
        <nav>
</section>

<div class="col-sm-10">
    <a href="{{ url('booking-history') }}" class="nav-link ">
        <p class="">
            back pant booking-history
        </p>
    </a>
</div>



@endsection