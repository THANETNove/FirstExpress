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
                <h1 class="text-left ">ใบเเจ้งหนี้</h1>
                <p class="text-left">จัดการ/ใบเเจ้งหนี้</p>
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
                                                    <a href="{{url('charge')}}" class="btn btn-danger ">เพิ่มใบเเจ้งหนี้
                                                        <i class="fas fa-plus-square text-left white-icon"></i>
                                                    </a>
                                                </div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3 row">
                                                                <p for="inputPassword" class="col-sm-5 col-form-label">
                                                                    วันที่ออกใบเเจ้งหนี้</p>
                                                                <div class="col-sm-7">
                                                                    <input type="text" class="form-control datepicker">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3 row">
                                                                <label for="inputPassword"
                                                                    class="col-sm-2 col-form-label">ถึง</label>
                                                                <div class="col-sm-7">
                                                                    <input type="text"
                                                                        class="form-control datepicker_out">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-4 row">
                                                                <form class="d-flex">
                                                                    <input class="form-control me-2" type="search"
                                                                        placeholder="ค้นหา..." aria-label="Search">
                                                                    <button class="btn btn-outline-secondary"
                                                                        type="submit"><i
                                                                            class="fas fa-search"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nav nav-pills nav-sidebar flex-column nav nav-tabs"></ul>
                                                    <p type="button" class="text-center " data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal">เเสดงการค้นหาเพิ่มเติม <i
                                                            class="fas fa-angle-double-down"></i></p>
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
                                                            <div class="table-responsive">
                                                                <table id="example2"
                                                                    class="table table-bordered table-hover dataTable dtr-inline "
                                                                    role="grid" aria-describedby="example2_info">
                                                                    <thead class="red-back">
                                                                        <tr role="row">
                                                                            <th class="col-sm-1">
                                                                                <div class="text-center ">
                                                                                    <input class="list-invo"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault">
                                                                                </div>
                                                                            </th>
                                                                            <th>
                                                                                รหัสลูกค้า
                                                                            </th>
                                                                            <th>
                                                                                เลขที่ใบเเจ้งหนี้
                                                                            </th>
                                                                            <th>ชื่อ-นามสกุล
                                                                            </th>
                                                                            <th>
                                                                                เลขผู้เสียภาษี
                                                                            </th>
                                                                            <th>
                                                                                จำนวนพัสดุ
                                                                            </th>
                                                                            <th>
                                                                                จำนวนพัสดุ
                                                                            </th>
                                                                            <th>
                                                                                ส่วนลด
                                                                            </th>
                                                                            <th>
                                                                                VAT
                                                                            </th>
                                                                            <th>
                                                                                ค่าขนส่ง
                                                                            </th>
                                                                            <th>
                                                                                Emailing
                                                                            </th>
                                                                            <th>
                                                                                สถานะ
                                                                            </th>
                                                                            <th>
                                                                                
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
                                                                            <td>ณ์ฮ-2431</td>
                                                                            <td>Robert Fox</td>
                                                                            <td>123456764556442</td>
                                                                            <td>1432 Willoughby Rd.Sydney</td>
                                                                            <td>Normal pick</td>
                                                                            <td>426</td>
                                                                            <td>426</td>
                                                                            <td>426</td>
                                                                            <td>Sent</td>
                                                                            <td>
                                                                                <p class="text-red">Unpaid</p>
                                                                            </td>
                                                                            <td><button type="button"
                                                                                    class="btn btn-secondary">เเจ้งชำระ</button>
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <button type="button"
                                                    class="btn btn-danger box-inv">ส่งใบเเจ้งหนี้ทางอีเมล</button>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-bs-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-6 col-form-label">วันที่อกกใบเเจ้งหนี้</label>
                                <div class="col-sm-6">
                                    <input type="text" id="datepicker" class="form-control datepicker">

                                </div>
                                <label for="inputPassword" class="col-sm-6 col-form-label">ลูกค้า</label>
                                <div class="col-sm-6">
                                    <select class="form-control margin-model" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                </div>
                                <label for="inputPassword" class="col-sm-6 col-form-label">เลขใบเเจ้งหนี้</label>
                                <div class="col-sm-6">
                                    <select class="form-control margin-model" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <label for="inputPassword" class="col-sm-6 col-form-label">สถานะ</label>
                                <div class="col-sm-6">
                                    <select class="form-control margin-model" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="inputPassword"
                                            class="col-sm-2 col-form-label margin-model">ถึง</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control datepicker_out">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="Search"
                                            aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">ค้นหา...</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p type="button" class="text-center " data-bs-toggle="modal">
                        ซ่อนเเสดงการค้นหาเพิ่มเติม <i class="fas fa-angle-double-up"></i></p>
                </div>
            </div>
        </div>
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