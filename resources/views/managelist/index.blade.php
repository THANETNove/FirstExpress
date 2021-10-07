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
                <h1 class="text-left ">จัดการรายการ</h1>
                <p class="text-left">จัดการรายการเเละจัดเเจงขนส่งให้เเต่ละรายการ</p>
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

                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                                aria-selected="true">รายการที่ยังไม่ได้จัดส่ง</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile" type="button" role="tab"
                                                aria-controls="profile"
                                                aria-selected="false">รายการที่จัดส่งเเล้ว</button>
                                        </li>

                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <section class="content">
                                                <!-- Default box -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="mb-3 row">
                                                                        <label for="inputPassword"
                                                                            class="col-sm-5 col-form-label text-right">รหัสไปรษณีต้นทาง:
                                                                        </label>
                                                                        <div class="col-sm-7">
                                                                            <select class="form-control"
                                                                                aria-label="Default select example">
                                                                                <option selected>10510</option>
                                                                                <option value="1">10511</option>
                                                                                <option value="2">10512</option>
                                                                                <option value="3">10513</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="mb-3 row">
                                                                                    <p class="col-sm-6 ">ช่วงน้ำหนัก
                                                                                        (กก.) :</p>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="inputPassword"
                                                                                            value="1">
                                                                                    </div>
                                                                                </div>
                                                                            </div>-
                                                                            <div class="col">
                                                                                <div class="mb-3 row">
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="inputPassword"
                                                                                            value="20">
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="btn btn-light"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">กำหนดการเลือกขนส่ง
                                                                    <i class="fas fa-cog"></i>
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card-body">
                                                        <div id="example2_wrapper"
                                                            class="dataTables_wrapper dt-bootstrap4">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6"></div>
                                                                <div class="col-sm-12 col-md-6"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <table id="example2" class="table">
                                                                        <thead class="red-back text-center">
                                                                            <tr role="row">
                                                                                <th>
                                                                                    จำนวนสินค้า
                                                                                </th>
                                                                                <th>น้ำหนัก
                                                                                </th>
                                                                                <th>
                                                                                    ไปรษณีต้นทาง
                                                                                </th>
                                                                                <th>
                                                                                    ที่อยู่ต้นทาง
                                                                                </th>
                                                                                <th>
                                                                                    ขนส่ง
                                                                                </th>
                                                                                <th>
                                                                                    ยื่นยัน/เเก้ไขขนส่ง
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <tr class="odd">
                                                                                <td class="text-center">3</td>
                                                                                <td class="text-center">25.1</td>
                                                                                <td class="text-center">10510</td>
                                                                                <td>1/234 หมู่บ้านมะแขว่น ซอยวินทวงศ์
                                                                                    ถนนสุวินทวงศ์ กรุงเทพ 10510</td>
                                                                                <td class="text-center text-red">KERRY
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <a class="btn btn-success"
                                                                                        href="#d">ยื่นยันการส่ง <i
                                                                                            class="fas fa-check-circle"></i></a>
                                                                                    <a class="btn btn-warning text-white"
                                                                                        href="#d">เเก้ไขขนส่ง <i
                                                                                            class="fas fa-pen"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd">
                                                                                <td class="text-center">3</td>
                                                                                <td class="text-center">25.1</td>
                                                                                <td class="text-center">10510</td>
                                                                                <td>1/234 หมู่บ้านมะแขว่น ซอยวินทวงศ์
                                                                                    ถนนสุวินทวงศ์ กรุงเทพ 10510</td>
                                                                                <td class="text-center text-red">KERRY
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <a class="btn btn-success"
                                                                                        href="#d">ยื่นยันการส่ง <i
                                                                                            class="fas fa-check-circle"></i></a>
                                                                                    <a class="btn btn-warning text-white"
                                                                                        href="#d">เเก้ไขขนส่ง <i
                                                                                            class="fas fa-pen"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd">
                                                                                <td class="text-center">3</td>
                                                                                <td class="text-center">25.1</td>
                                                                                <td class="text-center">10510</td>
                                                                                <td>1/234 หมู่บ้านมะแขว่น ซอยวินทวงศ์
                                                                                    ถนนสุวินทวงศ์ กรุงเทพ 10510</td>
                                                                                <td class="text-center text-red">KERRY
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <a class="btn btn-success"
                                                                                        href="#d">ยื่นยันการส่ง <i
                                                                                            class="fas fa-check-circle"></i></a>
                                                                                    <a class="btn btn-warning text-white"
                                                                                        href="#d">เเก้ไขขนส่ง <i
                                                                                            class="fas fa-pen"></i></a>
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
                                        <div class="tab-pane fade" id="profile" role="tabpanel"
                                            aria-labelledby="profile-tab">
                                            <section class="content">
                                                <!-- Default box -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="mb-3 row">
                                                                        <label for="inputPassword"
                                                                            class="col-sm-5 col-form-label text-right">รหัสไปรษณีต้นทาง:
                                                                        </label>
                                                                        <div class="col-sm-7">
                                                                            <select class="form-control"
                                                                                aria-label="Default select example">
                                                                                <option selected>10510</option>
                                                                                <option value="1">10511</option>
                                                                                <option value="2">10512</option>
                                                                                <option value="3">10513</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card-body">
                                                        <div id="example2_wrapper"
                                                            class="dataTables_wrapper dt-bootstrap4">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6"></div>
                                                                <div class="col-sm-12 col-md-6"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <table id="example2" class="table">
                                                                        <thead class="red-back text-center">
                                                                            <tr role="row">
                                                                                <th class="col-  text-right">
                                                                                    <div class="text-center ">
                                                                                        <input class="list-checkbox"
                                                                                            type="checkbox" value=""
                                                                                            id="flexCheckDefault">
                                                                                    </div>
                                                                                </th>
                                                                                <th>
                                                                                    จำนวนสินค้า
                                                                                </th>
                                                                                <th>น้ำหนัก
                                                                                </th>
                                                                                <th>
                                                                                    ไปรษณีต้นทาง
                                                                                </th>
                                                                                <th>
                                                                                    ที่อยู่ต้นทาง
                                                                                </th>
                                                                                <th>
                                                                                    ขนส่ง
                                                                                </th>
                                                                                <th>
                                                                                
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <tr class="odd">
                                                                                <td class="text-center">
                                                                                    <div class="text-center ">
                                                                                        <input class="list-checkbox"
                                                                                            type="checkbox" value=""
                                                                                            id="flexCheckDefault">
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-center">3</td>
                                                                                <td class="text-center">25.1</td>
                                                                                <td class="text-center">10510</td>
                                                                                <td>1/234 หมู่บ้านมะแขว่น ซอยวินทวงศ์
                                                                                    ถนนสุวินทวงศ์ กรุงเทพ 10510</td>
                                                                                <td class="text-center text-red">KERRY
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <a class="btn back-icon"
                                                                                        href="#d"><i class="fas fa-edit"></i></a>
                                                                                    
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
                    </div>
                </div>
                <nav>
        </section>
    </div>
</div>
<!-- /.content-wrapper -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="tab-content" id="myTabContent">
            <div class="modal-content">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="display:none;">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Contact</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">กำหนดรูปเเบบการเลือกขนส่ง</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                                    class="fas fa-times-circle dark-icon"></i></button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-borderless">
                                <thead>
                                    <tr class="text-muted">
                                        <th scope="col">เงื่อนไข</th>
                                        <th scope="col">ช่วงน้ำหนัก</th>
                                        <th scope="col">พื่นที่</th>
                                        <th scope="col">ขนส่ง</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>พัสดุหนัก</th>
                                        <td>5.0-10.0</td>
                                        <td>กรุงเทพ/ปริมฑล</td>
                                        <td class="text-red">KERRY</td>
                                        <td class="text-red">
                                            <button type="button" class="btn back-icon"><i
                                                    class="fas fa-pen"></i></button>
                                            <button type="button" class="btn btn-danger"><i
                                                    class="fas fa-minus"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>พัสดุเบา</th>
                                        <td>1.0-4.9</td>
                                        <td>ต่างจังหวัด</td>
                                        <td class="text-orange">FLASH</td>
                                        <td class="text-red">
                                            <button type="button" class="btn back-icon"><i
                                                    class="fas fa-pen"></i></button>
                                            <button type="button" class="btn btn-danger"><i
                                                    class="fas fa-minus"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>พัสดุหนัก</th>
                                        <td>1.0-4.9</td>
                                        <td>ต่างจังหวัด</td>
                                        <td class="text-orange">FLASH</td>
                                        <td class="text-red">
                                            <button type="button" class="btn back-icon"><i
                                                    class="fas fa-pen"></i></button>
                                            <button type="button" class="btn btn-danger"><i
                                                    class="fas fa-minus"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="modal-footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <button type="button" class="btn back-icon" onclick="contactTab()">เพิ่มเงื่อนไข
                                            <i class="fas fa-plus-square"></i></button>
                                    </div>
                                    <div class="col-md-7">

                                    </div>
                                    <div class="col-md-2 text-center">
                                        <button type="button" class="btn btn-danger">บันทึก</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">เพิ่มเงื่อนไขการขนส่ง</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                                    class="fas fa-times-circle dark-icon"></i></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-6">
                                            <label class="form-label">ชื่อเงื่อนไข</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1">
                                        </div>
                                        <div class="mb-6">
                                            <label class="form-label">ช่วงน้ำหนัก</label>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="form-control" aria-label="First name">
                                                </div>-
                                                <div class="col">
                                                    <input type="text" class="form-control" aria-label="Last name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-6">
                                            <label class="form-label">พื่นที่</label>
                                            <select class="form-control" aria-label="Default select example">
                                                <option selected>ทั้งหมด</option>
                                                <option value="1">One</option>
                                            </select>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="mb-6">
                                            <label class="form-label">กำหนดขนส่ง</label>
                                            <select class="form-control" aria-label="Default select example">
                                                <option selected>KERRY</option>
                                                <option value="1">One</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger"
                                onclick="profileTab()">ย้อนกลับ</button>
                            <button type="button" class="btn btn-danger">บันทึก</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('managelist.script.index')

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('maun_footer.footer')

@endsection