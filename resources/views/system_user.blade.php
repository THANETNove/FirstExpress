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
                <h1 class="text-left">จัดการผู้ใช้งาน</h1>
                <p class="text-left">เพิ่มเเละจัดการผู้ใช้งานต่างๆ</p>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('home.maun')

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
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active  home-tab2" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">ผู้ใช้ในงานระบบ <i
                                            class="fas fa-user-circle text-left " id="i-home"></i></button>
                                    <button class="nav-link profile-tab2" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">ฝ่ายเซล <i class="far fa-user text-left" id="i-profile"></i></button>
                                    <button class="nav-link contact-tab3" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">ลูกค้า <i class="fas fa-user text-left " id="i-contact"></i></button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <section class="content">
                                            <!-- Default box -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">ผู้ใช้ในงานระบบ</h3>

                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-danger ">เพิ่มผู้ใช้
                                                            <i class="fas fa-plus-square text-left white-icon"></i>
                                                        </button>
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
                                                                    <thead class="red-back">
                                                                        <tr role="row">
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="example2" rowspan="1"
                                                                                colspan="1"
                                                                                aria-label="Rendering engine: activate to sort column ascending">
                                                                                ชื่อ
                                                                            </th>
                                                                            <th class="sorting sorting_desc" tabindex="0"
                                                                                aria-controls="example2" rowspan="1"
                                                                                colspan="1"
                                                                                aria-label="Browser: activate to sort column ascending"
                                                                                aria-sort="descending">อีเมล
                                                                            </th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="example2" rowspan="1"
                                                                                colspan="1"
                                                                                aria-label="Platform(s): activate to sort column ascending"
                                                                                style="">
                                                                                บทบาท
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="odd">
                                                                            <td class="sorting_1">พี่หวาน</td>
                                                                            <td class="sorting_1">Wanwan@gmail.com</td>
                                                                            <td class="sorting_1">เเอดมิน
                                                                                <button type="button"
                                                                                    class="btn btn right-button">
                                                                                    <i
                                                                                        class="fas fa-trash-alt dark-icon"></i>
                                                                                </button>
                                                                                <button type="button"
                                                                                    class="btn btn right-button">
                                                                                    <i class="far fa-edit"></i>
                                                                                </button>
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
                                <div class="tab-pane fade " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <section class="content">
                                            <!-- Default box -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">ฝ่ายเซล</h3>

                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-danger ">เพิ่มเซลล์
                                                            <i class="fas fa-plus-square text-left white-icon"></i>
                                                        </button>
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
                                                                    <thead class="red-back">
                                                                        <tr role="row">
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="example2" rowspan="1"
                                                                                colspan="1"
                                                                                aria-label="Rendering engine: activate to sort column ascending">
                                                                                รหัสเซลล์
                                                                            </th>
                                                                            <th class="sorting sorting_desc" tabindex="0"
                                                                                aria-controls="example2" rowspan="1"
                                                                                colspan="1"
                                                                                aria-label="Browser: activate to sort column ascending"
                                                                                aria-sort="descending">ชื่อผู้ใช้งาน
                                                                            </th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="example2" rowspan="1"
                                                                                colspan="1"
                                                                                aria-label="Platform(s): activate to sort column ascending"
                                                                                style="">
                                                                                อีเมล
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="odd">
                                                                            <td class="sorting_1">SALE-01</td>
                                                                            <td class="sorting_1">Wanwan Sale1</td>
                                                                            <td class="sorting_1">Wanwan@gmail.com
                                                                                <button type="button"
                                                                                    class="btn btn right-button">
                                                                                    <i
                                                                                        class="fas fa-trash-alt dark-icon"></i>
                                                                                </button>
                                                                                <button type="button"
                                                                                    class="btn btn right-button">
                                                                                    <i class="far fa-edit"></i>
                                                                                </button>
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
                                <div class="tab-pane fade active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <section class="content">
                                            <!-- Default box -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">ลูกค้า</h3>

                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-danger ">เพิ่มลูกค้า
                                                            <i class="fas fa-plus-square text-left white-icon"></i>
                                                        </button>
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
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="example2" rowspan="1"
                                                                                colspan="1"
                                                                                aria-label="Rendering engine: activate to sort column ascending">
                                                                                รหัสลูกค้า
                                                                            </th>
                                                                            <th class="sorting sorting_desc" tabindex="0"
                                                                                aria-controls="example2" rowspan="1"
                                                                                colspan="1"
                                                                                aria-label="Browser: activate to sort column ascending"
                                                                                aria-sort="descending">รหัสเซลล์ที่ดูเเล
                                                                            </th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="example2" rowspan="1"
                                                                                colspan="1"
                                                                                aria-label="Platform(s): activate to sort column ascending"
                                                                                style="">
                                                                                ชื่อลูกค้า
                                                                            </th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="example2" rowspan="1"
                                                                                colspan="1"
                                                                                aria-label="Platform(s): activate to sort column ascending"
                                                                                style="">
                                                                                อีเมลลูกค้า
                                                                            </th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="example2" rowspan="1"
                                                                                colspan="1"
                                                                                aria-label="Platform(s): activate to sort column ascending"
                                                                                style="">
                                                                                เอบร์โทรศัพท์ลูกค้า
                                                                            </th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="example2" rowspan="1"
                                                                                colspan="1"
                                                                                aria-label="Platform(s): activate to sort column ascending"
                                                                                style="">
                                                                                ประเภทงาน
                                                                            </th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="example2" rowspan="1"
                                                                                colspan="1"
                                                                                aria-label="Platform(s): activate to sort column ascending"
                                                                                style="">

                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="odd">
                                                                            <td class="sorting_1">CUS-2431</td>
                                                                            <td class="sorting_1">SALE-1</td>
                                                                            <td class="sorting_1">ชัยทอง มาติกา</td>
                                                                            <td class="sorting_1">Wanwan@gmail.com</td>
                                                                            <td class="sorting_1">091-xxx-xxxx</td>
                                                                            <td class="sorting_1">Normal Pick</td>
                                                                            <td class="sorting_1 ">
                                                                                <a class="btn right-button-b profile-tab3" href="{{ route('customer.show', 1) }}">ดูรายละเอีดยดเพิ่มเติม</a>

                                                                                <i class="fas fa-ellipsis-v"></i>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="odd">
                                                                            <td class="sorting_1">CUS-2431</td>
                                                                            <td class="sorting_1">SALE-1</td>
                                                                            <td class="sorting_1">ชัยทอง มาติกา</td>
                                                                            <td class="sorting_1">Wanwan@gmail.com</td>
                                                                            <td class="sorting_1">091-xxx-xxxx</td>
                                                                            <td class="sorting_1 orange-icon">Business Pick
                                                                            </td>
                                                                            <td class="sorting_1 ">
                                                                            <a class="btn right-button-b" href="widgets.html">ดูรายละเอีดยดเพิ่มเติม</a>

                                                                                <i class="fas fa-ellipsis-v"></i>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="odd">
                                                                            <td class="sorting_1">CUS-2431</td>
                                                                            <td class="sorting_1">SALE-1</td>
                                                                            <td class="sorting_1">ชัยทอง มาติกา</td>
                                                                            <td class="sorting_1">Wanwan@gmail.com</td>
                                                                            <td class="sorting_1">091-xxx-xxxx</td>
                                                                            <td class="sorting_1 dark-icon">Platform Pick
                                                                            </td>
                                                                            <td class="sorting_1 ">
                                                                            <a class="btn right-button-b" href="widgets.html">ดูรายละเอีดยดเพิ่มเติม</a>
                                                                                <i class="fas fa-ellipsis-v"></i>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="odd">
                                                                            <td class="sorting_1">CUS-2431</td>
                                                                            <td class="sorting_1">SALE-1</td>
                                                                            <td class="sorting_1">ชัยทอง มาติกา</td>
                                                                            <td class="sorting_1">Wanwan@gmail.com</td>
                                                                            <td class="sorting_1">091-xxx-xxxx</td>
                                                                            <td class="sorting_1 dark-icon">VIP Pick</td>
                                                                            <td class="sorting_1 ">
                                                                            <a class="btn right-button-b" href="widgets.html">ดูรายละเอีดยดเพิ่มเติม</a>

                                                                                <i class="fas fa-ellipsis-v"></i>
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
@include('home.footer')

@endsection