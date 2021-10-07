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
                                                        data-bs-target="#exampleModalV">เเสดงการค้นหาเพิ่มเติม <i
                                                            class="fas fa-angle-double-down"></i></p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3 row">
                                                            <p for="inputPassword" class="col-sm-5 col-form-label">
                                                                วันที่มีผล</p>
                                                            <div class="col-sm-7">
                                                                <input type="text" class="form-control datepicker">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 row">
                                                            <button type="button"
                                                                class="btn btn-secondary">สร้างไฟล์โอนเงิน</button>
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
                                                        <div class="col-md-12">
                                                            <div class="table-responsive">
                                                                <table id="example2" class="table  ">
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
                                                                                ชื่อ-นามสกุล
                                                                            </th>
                                                                            <th>
                                                                                เรทขนส่ง
                                                                            </th>
                                                                            <th>
                                                                                ข้อมูลธนาคาร
                                                                            </th>
                                                                            <th>
                                                                                ยอดเก็บเงินปลายทาง
                                                                            </th>
                                                                            <th>
                                                                                ยอดค่าบริการ
                                                                            </th>
                                                                            <th>
                                                                                VAT
                                                                            </th>
                                                                            <th>
                                                                                ยอดโอนเงินคืน
                                                                            </th>
                                                                            <th>
                                                                                วันที่ออกใบเสร็จ
                                                                            </th>
                                                                            <th>
                                                                                เลขที่ใบเสร็จ
                                                                            </th>
                                                                            <th>
                                                                                วันที่โอน
                                                                            </th>
                                                                            <th>
                                                                                วันที่สร้าง
                                                                            </th>
                                                                            <th>
                                                                                สถานะ
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
                                                                            <td>ชัยทอง มาติกา</td>
                                                                            <td>Standard</td>
                                                                            <td>เลขที่บัญชี : 10510254314 (ธนพล
                                                                                มาติกานนท์)
                                                                                กรุงไทย สาขา รามอินทรา (0797)</td>
                                                                            <td>2,575.00</td>
                                                                            <td>426.00</td>
                                                                            <td>6.17</td>
                                                                            <td>3,186</td>
                                                                            <td>09-16-2021</td>
                                                                            <td>FECOD
                                                                                1105151651178</td>
                                                                            <td>19-08-2021</td>
                                                                            <td>18-08-2021</td>
                                                                            <td><p class="text-green">ยืนยันแล้ว</p></td>
                                                                        </tr>
                                                                        tr class="odd">
                                                                            <td>
                                                                                <div class="text-center">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault">
                                                                                </div>
                                                                            </td>
                                                                            <td>CUS-2431</td>
                                                                            <td>ชัยทอง มาติกา</td>
                                                                            <td>Standard</td>
                                                                            <td>เลขที่บัญชี : 10510254314 (ธนพล
                                                                                มาติกานนท์)
                                                                                กรุงไทย สาขา รามอินทรา (0797)</td>
                                                                            <td>2,575.00</td>
                                                                            <td>426.00</td>
                                                                            <td>6.17</td>
                                                                            <td>3,186</td>
                                                                            <td>09-16-2021</td>
                                                                            <td>FECOD
                                                                                1105151651178</td>
                                                                            <td>19-08-2021</td>
                                                                            <td>18-08-2021</td>
                                                                            <td><p class="text-green">ยืนยันแล้ว</p></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
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


<!-- Modal -->
<div class="modal fade" id="exampleModalV" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <div class="col-sm-12 col-md-8">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="mb-3 row">
                                            <p for="inputPassword" class="col-sm-5 col-form-label">วันที่สร้างรายการ</p>
                                            <div class="col-sm-7">
                                                <input type="text" id="datepicker01" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <p for="inputPassword" class="col-sm-5 col-form-label">วันที่สร้างรายการ</p>
                                            <div class="col-sm-7">
                                                <input type="text" id="datepicker02" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <p for="inputPassword" class="col-sm-5 col-form-label">วันที่สร้างรายการ</p>
                                            <div class="col-sm-7">
                                                <input type="text" id="datepicker03" class="form-control datepicker">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="mb-3 row">
                                            <p for="inputPassword" class="col-sm-2 col-form-label">ถึง</p>
                                            <div class="col-sm-7">
                                                <input type="text" id="datepicker11" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <p for="inputPassword" class="col-sm-2 col-form-label">ถึง</p>
                                            <div class="col-sm-7">
                                                <input type="text" id="datepicker12" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <p for="inputPassword" class="col-sm-2 col-form-label">ถึง</p>
                                            <div class="col-sm-7">
                                                <input type="text" id="datepicker13" class="form-control datepicker">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="ค้นหา..."
                                    aria-label="Search">
                                <button class="btn btn-outline-secondary" type="submit"><i
                                        class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <div class="mb-3 row">
                                <p class="col-sm-3">วันที่สร้างรายการ</p>
                                <div class="col-sm-9">
                                    <select class="form-control" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="1"></option>
                                        <option value="2"></option>
                                        <option value="3"></option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <p class="col-sm-3">วันที่สร้างรายการ</p>
                                <div class="col-sm-9">
                                    <select class="form-control" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="1"></option>
                                        <option value="2"></option>
                                        <option value="3"></option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <p class="col-sm-3">วันที่สร้างรายการ</p>
                                <div class="col-sm-9">
                                    <select class="form-control" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="1"></option>
                                        <option value="2"></option>
                                        <option value="3"></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <p type="button" class="text-center " data-bs-toggle="modal">
                ซ่อนเเสดงการค้นหาเพิ่มเติม <i class="fas fa-angle-double-up"></i></p>
                <br>
        </div>
    </div>
</div>




<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('maun_footer.footer')

@endsection