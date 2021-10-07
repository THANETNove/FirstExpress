@extends('layouts.app_layouts_home')

@section('content')

<!-- Site wrapper -->
<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-height">
        <section class="content ">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card padding-le">
                            <br>
                            <br>
                            <div class="col-sm-10">
                                <h3 class="herd-center">ยืนยันตัวตน</h3>
                            </div>
                            <br>
                            <br>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" novalidate="novalidate">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group row">
                                            <label for="staticEmail"
                                                class="col-sm-2 col-form-label">เลขประจำตัวประชาชน</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="inputPassword"
                                                    placeholder="เลขประจำตัวประชาชน">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail"
                                                class="col-sm-2 col-form-label">อัพโหลดรูปบัตรประชาชน</label>
                                            <div class="col-sm-6">
                                                <input class="l" type="file" id="formFile">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">อีเมล</label>
                                            <div class="col-sm-6">
                                                <input type="Password" class="form-control" id="inputPassword"
                                                    placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword"
                                                class="col-sm-2 col-form-label">เบอร์ติดต่อ</label>
                                            <div class="col-sm-6">
                                                <input type="Password" class="form-control" id="inputPassword"
                                                    placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Verification code
                                                (SMS)</label>
                                            <div class="col-sm-6">
                                                <input type="Password" class="form-control" id="inputPassword"
                                                    placeholder="Password">
                                            </div>
                                        </div>
                                    </form>

                                    <div class="form-group mb-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="terms" class="custom-control-input"
                                                id="exampleCheck1">
                                            <label class="custom-control-label"
                                                for="exampleCheck1">ยอมรับเงื่อนไข</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                    <br>
                                    <div class="col-sm-10">
                                        <div>
                                            <button type="submit" class="btn butt-save-center-r">ลงทะเบียน</button>
                                        </div>
                                        <a href="{{ route('desktop.create') }}" class="nav-link ">
                                            <p class="">
                                                back pant ลงทะเบียน
                                            </p>
                                        </a>
                                        <a href="{{ url('cod') }}" class="nav-link ">
                                            <p class="">
                                                pant สมัคร COD
                                            </p>
                                        </a>
                                    </div>

                                <div class="align-on-w"></div>
                            </form>
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