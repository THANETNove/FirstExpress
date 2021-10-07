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
                            <br>
                            <br>
                            <div class="col-sm-10">
                                <h3 class="herd-center">ลงทะเบียน</h3>
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
                                                class="col-sm-2 col-form-label">ระบุเบอร์ติด</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="inputPassword"
                                                    placeholder="ระบุเบอร์ติด">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">โปรใส่รหัสยืนยัน
                                                SMS</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="inputPassword"
                                                    placeholder="โปรใส่รหัสยืนยัน">
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
                                <div class="align-on-w">

                                </div>
                                <div>
                                    <button type="submit" class="btn butt-save-center-r">ลงทะเบียน</button>
                                </div>
                                <a href="{{ url('desktop') }}" class="nav-link ">
                                    <p  class="">
                                        Desktop_1 pant
                                    </p>
                                </a>
                                <a href="{{ url('verify') }}" class="nav-link ">
                                    <p  class="">
                                    pant  ยืนยันตัวตน
                                    </p>
                                </a>

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