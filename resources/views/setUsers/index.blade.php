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
                <h1 class="text-left ">ตั้งค่าบทบาทผู้ใช้</h1>
                <p class="text-left">กำหนดเอกสิทธิ์ในการเข้าถึงระบบต่างๆในหน้า Admin</p>
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
                                                    <a class="btn btn-danger " data-bs-toggle="modal"
                                                        data-bs-target="#exModal">เพิ่มลูกค้า
                                                        <i class="fas fa-plus-square text-left white-icon"></i>
                                                    </a>
                                                </div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="mb-3 row">
                                                                <p class="col-sm-5 thickeb">
                                                                    บทบาทผู้ใช้งาน</p>

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
                                                            <div class="table-responsive">
                                                                <table id="example2"
                                                                    class="table table-bordered table-hover dataTable dtr-inline "
                                                                    role="grid" aria-describedby="example2_info">
                                                                    <thead class="red-back">
                                                                        <tr role="row">
                                                                            <th class="col-sm-2 text-center">
                                                                                ROLE
                                                                            </th>
                                                                            <th class="col-sm-4 text-center">
                                                                                Description
                                                                            </th>
                                                                            <th class="col-sm-4 text-center">Total
                                                                            </th>
                                                                            <th class="col-sm-2">

                                                                            </th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="odd text-center">
                                                                            <td>ADMIN</td>
                                                                            <td class="text-gray">เข้าถึงได้ทุกอย่าง
                                                                            </td>
                                                                            <td class="text-gray">0</td>
                                                                            <td><button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#modesto">เเก้ไขข้อสิทธิ์การเข้าถึง</button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="odd text-center">
                                                                            <td>Superadmin</td>
                                                                            <td class="text-gray"> เเก้ไขบทบาท/โครงสร้าง
                                                                            </td>
                                                                            <td class="text-gray">0</td>
                                                                            <td><button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#modesto">เเก้ไขข้อสิทธิ์การเข้าถึง</button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="odd text-center">
                                                                            <td>Spectator</td>
                                                                            <td class="text-gray">
                                                                                ดูได้อย่างเดียวเเก้ไขไม่ได้</td>
                                                                            <td class="text-gray">0</td>
                                                                            <td><button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#modesto">เเก้ไขข้อสิทธิ์การเข้าถึง</button>
                                                                            </td>
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

<!-- Modal Add-->
<div class="modal fade" id="exModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-md-5">
                    <h5 class=" text-center">เพิ่มบทบาท: </h5>
                </div>
                <div class="col-md-2">

                </div>
                <div class="text-right">

                </div>
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="fas fa-times-circle text-red"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('setUp-Users.store') }}">
                 @csrf
                <div class="mb-3 row">
                    <p for="staticEmail" class="col-sm-3  text-right thickeb">ชื่อบทบาท: </p>
                    <div class="col-sm-9">
                        <input type="text" name="rolename"  value="" class="form-control col-md-11">
                    </div>
                </div>
                <div class="mb-3 row">
                    <p class="col-sm-3  text-right thickeb">คำอธิบายบทบาท: </p>
                    <div class="col-sm-9">
                        <input type="text"   name="roledescription"  value="" class="form-control  col-md-11">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <p class="thickeb">จัดการผู้ใช้งาน</p>
                            <p>ดูผู้ใช้งาน</p>
                            <p>เพิ่มผู้ใช้งาน</p>
                            <p>ลบผู้ใช้งาน</p>
                            <p>แก้ไขผู้ใช้งาน</p>
                            <p>ตั้งค่าบทบาทผู้ใช้งาน</p>
                        </div>
                        <div class="col-md-7">

                        </div>
                        <div class="col-md-2 text-center">
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="customSwitch1"  id="customSwitch1" >
                                    <label class="custom-control-label" for="customSwitch1"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                    <label class="custom-control-label" for="customSwitch2"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                    <label class="custom-control-label" for="customSwitch3"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                    <label class="custom-control-label" for="customSwitch4"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                    <label class="custom-control-label" for="customSwitch5"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch6">
                                    <label class="custom-control-label" for="customSwitch6"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <p class="thickeb">จัดการบัญชี</p>
                            <p>จัดการใบเเจ้งหนี้</p>
                            <p>จัดการ COD</p>
                            <p>จัดการค่าคอมมิสชั่น</p>
                        </div>
                        <div class="col-md-7">

                        </div>
                        <div class="col-md-2 text-center">
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch7">
                                    <label class="custom-control-label" for="customSwitch7"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch8">
                                    <label class="custom-control-label" for="customSwitch8"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch9">
                                    <label class="custom-control-label" for="customSwitch9"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch10">
                                    <label class="custom-control-label" for="customSwitch10"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <p class="thickeb">การตั้งค่า</p>
                            <p>ดูเรทราค่าส่ง</p>
                            <p>เเก้ไขเรทค่าส่ง</p>
                            <p>ดูเรทค่าคอมมิสชั่น</p>
                            <p>เเก้ไขค่าคอมมิสชั่น</p>
                        </div>
                        <div class="col-md-7">

                        </div>
                        <div class="col-md-2 text-center">
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch11">
                                    <label class="custom-control-label" for="customSwitch11"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch12">
                                    <label class="custom-control-label" for="customSwitch12"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch13">
                                    <label class="custom-control-label" for="customSwitch13"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch14">
                                    <label class="custom-control-label" for="customSwitch14"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch15">
                                    <label class="custom-control-label" for="customSwitch15"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <p class="thickeb">รายงานประจำวัน</p>
                        </div>
                        <div class="col-md-7">

                        </div>
                        <div class="col-md-2 text-center">
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch16">
                                    <label class="custom-control-label" for="customSwitch16"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit"  class="btn btn-danger">บันทึก</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Edit-->
<div class="modal fade" id="modesto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <p class=" text-center">สิทธิการเข้าถึง: <a class="text-red">ADMIN</a></p>
                        </div>
                        <div class="col-md-2">

                        </div>
                        <div class="text-right">

                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal">
                            <i class="fas fa-times-circle text-red"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="mb-3 row">
                    <p class="col-sm-3  text-right thickeb">คำอธิบายบทบาท: </p>
                    <div class="col-sm-9">
                        <input type="text" class="form-control col-md-11">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <p class="thickeb">จัดการผู้ใช้งาน</p>
                            <p>ดูผู้ใช้งาน</p>
                            <p>เพิ่มผู้ใช้งาน</p>
                            <p>ลบผู้ใช้งาน</p>
                            <p>แก้ไขผู้ใช้งาน</p>
                            <p>ตั้งค่าบทบาทผู้ใช้งาน</p>
                        </div>
                        <div class="col-md-7">

                        </div>
                        <div class="col-md-2 text-center">
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1E">
                                    <label class="custom-control-label" for="customSwitch1E"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch2E">
                                    <label class="custom-control-label" for="customSwitch2E"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch3E">
                                    <label class="custom-control-label" for="customSwitch3E"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch4E">
                                    <label class="custom-control-label" for="customSwitch4E"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch5E">
                                    <label class="custom-control-label" for="customSwitch5E"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch6E">
                                    <label class="custom-control-label" for="customSwitch6E"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <p class="thickeb">จัดการบัญชี</p>
                            <p>จัดการใบเเจ้งหนี้</p>
                            <p>จัดการ COD</p>
                            <p>จัดการค่าคอมมิสชั่น</p>
                        </div>
                        <div class="col-md-7">

                        </div>
                        <div class="col-md-2 text-center">
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch7E">
                                    <label class="custom-control-label" for="customSwitch7E"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch8E">
                                    <label class="custom-control-label" for="customSwitch8E"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch9E">
                                    <label class="custom-control-label" for="customSwitch9E"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch10E">
                                    <label class="custom-control-label" for="customSwitch10E"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <p class="thickeb">การตั้งค่า</p>
                            <p>ดูเรทราค่าส่ง</p>
                            <p>เเก้ไขเรทค่าส่ง</p>
                            <p>ดูเรทค่าคอมมิสชั่น</p>
                            <p>เเก้ไขค่าคอมมิสชั่น</p>
                        </div>
                        <div class="col-md-7">

                        </div>
                        <div class="col-md-2 text-center">
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch11E">
                                    <label class="custom-control-label" for="customSwitch11E"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch12E">
                                    <label class="custom-control-label" for="customSwitch12E"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch13E">
                                    <label class="custom-control-label" for="customSwitch13E"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch14E">
                                    <label class="custom-control-label" for="customSwitch14E"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch15E">
                                    <label class="custom-control-label" for="customSwitch15E"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <p class="thickeb">รายงานประจำวัน</p>
                        </div>
                        <div class="col-md-7">

                        </div>
                        <div class="col-md-2 text-center">
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch16E">
                                    <label class="custom-control-label" for="customSwitch16E"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-danger">บันทึก</button>
                            </div>
                        </div>
                    </div>
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