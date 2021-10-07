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
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">ที่อยู่ :
                                                </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="inputEmail3"
                                                        placeholder="ที่อยู่">
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
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">ที่อยู่ :
                                                </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="inputEmail3"
                                                        placeholder="ที่อยู่">
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
                                                    <h4> ข้อมูลผู้รับ</h4>
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
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">ที่อยู่ :
                                                </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="inputEmail3"
                                                        placeholder="ที่อยู่">
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
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">
                                                    <h4> กรอกอัตโนมัติ</h4>
                                                </label>

                                            </div>

                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">
                                                </label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="3"></textarea>
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
                                                    <a>ข้อมูลพัสดุ</a>
                                                </label>
                                            </div>
                                            <div class="form-group row">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">
                                                    <a>บริการเสริม</a>
                                                </label>
                                            </div>
                                            <!-- text input -->
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-pur">มูลค่า
                                                    COD :
                                                </label>
                                                <div class="col-sm-8">

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-pur">ประกัน
                                                    : </label>
                                                <div class="col-sm-8">

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">ประเภทสินค้า :
                                                </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="inputEmail3"
                                                        placeholder="drop list">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">น้ำหนักพัสดุ kg
                                                    :
                                                </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="inputEmail3"
                                                        placeholder="ขนาด กxยxส">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">หมายเหตุ :
                                                </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="inputEmail3"
                                                        placeholder="หมายเหตุ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-text col-sm-12">
                                            </br>
                                            <div class="form-group row nav-text ">
                                                <label for="inputEmail3"
                                                    class="col-sm-2 col-form-label text-footer">คำนวนค่าขนส่งโดยประมาณ :
                                                </label>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" id="inputEmail3"
                                                        placeholder="คำนวนค่าขนส่งโดยประมาณ">
                                                </div>
                                                บาท
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3"
                                                class="col-sm-12 col-form-label text-left">เป็นราคาโดยประมาณโปรดเตรียมเงินให้พร้อมสำหรับการเข้ารับ
                                            </label>

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
                                        <a href="{{ url('cod') }}" class="nav-link ">
                                            <p class="">
                                                back pant cod
                                            </p>
                                        </a>
                                        <a href="{{ url('more-one-parcel') }}" class="nav-link ">
                                            <p class="">
                                                pant more-one-parcel
                                            </p>
                                        </a>
                                    </div>

                                    <div class="align-on-w"></div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div> <!-- /.card -->
    <nav>
</section>



@endsection