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
                <h1 class="text-left ">คอมมิชชั่นเซลล์</h1>
                <p class="text-left">ข้อมูลคอมมิสชั่นรายเดือน</p>
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
                                            <div class="card-tools">
                                                    <a href="{{url('list-cellCommission')}}" class="btn btn-danger " >สั่งออกไฟล์ Elsx
                                                        <i class="fas fa-file-excel text-left white-icon"></i>
                                                    </a>
                                                </div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3 row">
                                                                <label for="inputPassword"
                                                                    class="col-sm-3 col-form-label">ลูกค้า</label>
                                                                <div class="col-sm-6">
                                                                    <select class="form-control"
                                                                        aria-label="Default select example">
                                                                        <option selected>Open this select menu</option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                        <div class="mb-3 row">
                                                                <label for="inputPassword"
                                                                    class="col-sm-4 col-form-label">เดือน</label>
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
                                                                            รหัสเซลล์
                                                                        </th>
                                                                        <th>ชื่อเซลล์
                                                                        </th>
                                                                        <th>
                                                                            จำนวนลูกค้า
                                                                        </th>
                                                                        <th>
                                                                            จำนวนพัสดุ
                                                                        </th>
                                                                        <th>
                                                                            ยอดรวม
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="odd">
                                                                        <td>
                                                                            <div class="text-center">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>CUS-2431</td>
                                                                        <td>พี่หวาน</td>
                                                                        <td>35</td>
                                                                        <td>125</td>
                                                                        <td>1 %</td>
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