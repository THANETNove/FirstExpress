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
                        <div class="card">

                            <div class="card-body">
                                <form>
                                    <div class="row reght-aling">
                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-6 col-form-label">เวลาบุ๊คกิ้ง :
                                                </label>
                                                <div class="col-sm-6">
                                                        <label class=" col-form-label">2021-09-04   11.51.23</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-6 col-form-label">ที่อยู่เข้ารับ :
                                                </label>
                                                <div class="col-sm-6">
                                                        <p class=" col-form-label">194 หมู่ 4 ไพลา บางแค กทม</p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-6 col-form-label">จำนวนพัสดุ :
                                                </label>
                                                <div class="col-sm-2">
                                                        <p class=" col-form-label">1</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <br>
                                            <div class="col-sm-10">
                                                <label class=" col-form-label text-pur "> รอรับพัสดุ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <br>
                                            <div class="col-sm-10">
                                                <a class="col-form-label text-blue font-weight-bolder" href="{{ url('waybill') }}"> ปริ้นใบปะหน้า/ใบนำส่ง</a>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="form-group row  ">
                                                    <label for="inputEmail3" class="col-sm-6 col-form-label top-edit">แก้ไข
                                                    </label>
                                                    <div class="col-sm-4 top-edit">
                                                        <label for="inputEmail3" class=" col-form-label ">ยกเลิก 
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>

                    <section class="content">
                        <!-- Default box -->
                        <div class="card">

                            <div class="card-body">
                                <form>
                                    <div class="row reght-aling">
                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-6 col-form-label">เวลาบุ๊คกิ้ง :
                                                </label>
                                                <div class="col-sm-6">
                                                        <label class=" col-form-label">2021-09-04   11.51.23</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-6 col-form-label">ที่อยู่เข้ารับ :
                                                </label>
                                                <div class="col-sm-6">
                                                        <p class=" col-form-label">194 หมู่ 4 ไพลา บางแค กทม</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <br>
                                            <div class="col-sm-10">
                                                <label class=" col-form-label text-red "> ยกเลิกแล้ว</label>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <section class="content">
                        <!-- Default box -->
                        <div class="card">

                            <div class="card-body">
                                <form>
                                    <div class="row reght-aling">
                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-6 col-form-label">เวลาบุ๊คกิ้ง :
                                                </label>
                                                <div class="col-sm-6">
                                                        <label class=" col-form-label">2021-09-04   11.51.23</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-6 col-form-label">ที่อยู่เข้ารับ :
                                                </label>
                                                <div class="col-sm-6">
                                                        <p class=" col-form-label">194 หมู่ 4 ไพลา บางแค กทม</p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-6 col-form-label">จำนวนพัสดุ :
                                                </label>
                                                <div class="col-sm-2">
                                                        <p class=" col-form-label">1</p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-6 col-form-label">ค่าใช้จ่ายรวม :
                                                </label>
                                                <div class="col-sm-2">
                                                        <p class=" col-form-label">182.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <br>
                                            <div class="col-sm-10">
                                                <label class=" col-form-label text-blue "> รับพัสดุแล้ว</label>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div> <!-- /.card -->
        <nav>
</section>

<div class="col-sm-10">
    <a href="{{ url('more-one-parcel') }}" class="nav-link ">
        <p class=" btn">
            back pant more-one-parcel
        </p>
    </a>
    <a href="{{ url('my-parcel') }}" class="nav-link ">
        <p class="btn">
            pant my-parcel
        </p>
    </a>
</div>



@endsection