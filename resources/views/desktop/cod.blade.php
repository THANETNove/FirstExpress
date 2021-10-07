@extends('layouts.app_layouts_home')

@section('content')

<!-- Site wrapper -->
<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-height">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card padding-le_to">
                            <br>
                            <br>
                            <div class="col-sm-10">
                                <h3 class="herd-center">สมัคร COD</h3>
                            </div>
                            <br>
                            <br>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" novalidate="novalidate">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">บัตรประจำตัวประชาชน
                                                1590098879xxx</label>
                                            <div class="col-sm-6">
                                                <br>
                                                <p>*อิงจากหลักฐานยืนยันตัวตนขากข้อมูลลงทะเบียน</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">อีเมล</label>
                                            <div class="col-sm-4">
                                                <input type="Password" class="form-control" id="inputPassword"
                                                    placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword"
                                                class="col-sm-3 col-form-label">บัญชีธนาคาร</label>
                                            <div class="col-sm-4">
                                                <input type="Password" class="form-control" id="inputPassword"
                                                    placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-1 col-form-label">ชื่อบัญชี</label>
                                            <div class="col-sm-4">
                                                <input type="Password" class="form-control" id="inputPassword"
                                                    placeholder="Password">
                                            </div>
                                            <p> *กรุณาตรวจสอบชื่อบัญชีให้ตรงกับหลักฐานยืนยันตัวตนจากข้อมูลลงทะเบียน</p>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-1 col-form-label">เลขบัญชี</label>
                                            <div class="col-sm-5">
                                                <input type="Password" class="form-control" id="inputPassword"
                                                    placeholder="Password">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label for="inputPassword"
                                                class="col-sm-4 col-form-label">รูปหน้าสมุดบัญชีธนาคาร</label>
                                            <div class="col-sm-5">
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-4 col-form-label nav-text">
                                                อัพโหลดรูป
                                            </label>
                                            <div class="col-sm-5">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-4 col-form-label">

                                            </label>
                                            <div class="col-sm-5">

                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <br>

                                        <div class="form-group mb-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="terms" class="custom-control-input"
                                                    id="exampleCheck1">
                                                <label class="custom-control-label"
                                                    for="exampleCheck1">ยอมรับเงื่อนไข</label>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                                <!-- /.card-body -->
                                <div class="align-on-w">

                                </div>


                                <div class="form-group row">
                                    <label for="inputPassword"
                                        class="col-sm-4 col-form-label">รูปหน้าสมุดบัญชีธนาคาร</label>
                                    <div class="col-sm-5">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                </div>


                                    <div class="col-sm-12">
                                        <div>
                                            <button type="submit" class="btn butt-save-center-b">ลงทะเบียน</button>
                                        </div>
                                        <a href="{{ url('verify') }}" class="nav-link ">
                                            <p class="">
                                                back pant verify_identity
                                            </p>
                                        </a>
                                        <a href="{{ url('one-parcel') }}" class="nav-link ">
                                            <p class="">
                                                pant ส่งพัสดุชิ้นเดียว
                                            </p>
                                        </a>
                                    </div>


                                <div class="align-on-w"></div>
                            </form>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
</div>
</div>

@endsection