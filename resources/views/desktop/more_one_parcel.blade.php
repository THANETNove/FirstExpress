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
                                        <div class="col-sm-6">

                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">
                                                    <h4> ข้อมูลผู้ส่ง</h4>
                                                </label>
                                            </div>
                                            <!-- text input -->
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">ชื่อ-นามสกุล :
                                                </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="inputEmail3"
                                                        placeholder="ชื่อ-นามสกุล">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">หมายเลขโทรศัพท์
                                                    : </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="inputEmail3"
                                                        placeholder="หมายเลขโทรศัพท์">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3"
                                                    class="col-sm-6 col-form-label">จังหวัด/อำเภอ/ตำบล/รหัสไปรษณีย์ :
                                                </label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputEmail3"
                                                        placeholder="จังหวัด/อำเภอ/ตำบล/รหัสไปรษณีย์">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">ที่อยู่ :
                                                </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="inputEmail3"
                                                        placeholder="ที่อยู่">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">
                                                    <h4> ที่อยู่เข้ารับ</h4>
                                                </label>
                                                <div class="col-sm-6">
                                                    <br>
                                                    <p class="text-express text-blue">ปักหมุด</p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">หมายเลขโทรศัพท์
                                                    :
                                                </label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputEmail3"
                                                        placeholder="หมายเลขโทรศัพท์">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3"
                                                    class="col-sm-6 col-form-label">จังหวัด/อำเภอ/ตำบล/รหัสไปรษณีย์:
                                                </label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputEmail3"
                                                        placeholder="จังหวัด/อำเภอ/ตำบล/รหัสไปรษณีย์">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">ที่อยู่ :
                                                </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="inputEmail3"
                                                        placeholder="ที่อยู่">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-pur">มูลค่า
                                                    COD
                                                </label>
                                                <div class="col-sm-8">

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
                                        <div class="col-sm-6">

                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">
                                                    <a>ข้อมูลผู้รับ</a>
                                                </label>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3"
                                                    class="col-sm-6 col-form-label text-pur">ดาวน์โหลดเทมแพลต Excel
                                                </label>
                                                <div class="col-sm-6">
                                                    <div class="file-excel ">
                                                        <div class="container file-excel-left">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <img src="{{ asset('image/excel.jpg')}}">
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="file" id="formFile">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="custom-control custom-checkbox  text-left-">
                                            <input type="checkbox" name="terms" class="custom-control-input"
                                                id="exampleCheck1">
                                            <label class="custom-control-label"
                                                for="exampleCheck1">ยอมรับเงื่อนไข</label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-sm-10">
                                        <div>
                                            <button type="submit" class="btn butt-save-center-r">บุ๊คขนส่ง</button>
                                        </div>
                                        <a href="{{ url('one-parcel') }}" class="nav-link ">
                                            <p class="">
                                                back pant one-parcel
                                            </p>
                                        </a>
                                        <a href="{{ url('booking-history') }}" class="nav-link ">
                                            <p class="">
                                                pant booking-history
                                            </p>
                                        </a>
                                    </div>
                                    <div class="align-on-w"></div>
                                </form>
                            </div>
                    </section>
                </div>
            </div>
        </div> <!-- /.card -->
    <nav>
</section>



@endsection