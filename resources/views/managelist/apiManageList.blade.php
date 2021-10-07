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

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">สร้างสินค้า</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">เช็คสินค้า</button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false">ยกเลิกสินค้า</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <section class="content">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-tools">
                                                    <a class="btn btn-danger " href="{{ route('export_excel') }}">Export
                                                        <i class="fas fa-plus-square text-left white-icon"></i>
                                                    </a>
                                                </div>
                                                <h1>API</h1>
                                                <button type="button" class="btn btn-primary" 
                                                    data-bs-toggle="modal" data-bs-target="#exampleModalCreate">สร้างสินค้า</button>
                                                <!-- Button trigger modal -->

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
                                                                <table class="table" id="myTable">
                                                                    <thead class="red-back">
                                                                        <tr class="text-center">
                                                                            <th class="col-  text-right">
                                                                                <div class="text-center ">
                                                                                    <input class="list-checkbox"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault">
                                                                                </div>
                                                                            </th>
                                                                            <th scope="col">orderId</th>
                                                                            <th scope="col">invNo</th>
                                                                            <th scope="col">barcode</th>
                                                                            <th scope="col">shipperName</th>
                                                                            <th scope="col">shipperAddress</th>
                                                                            <th scope="col">shipperDistrict</th>
                                                                            <th scope="col">shipperProvince</th>
                                                                            <th scope="col">shipperZipcode</th>
                                                                            <th scope="col">shipperEmail</th>
                                                                            <th scope="col">shipperMobile</th>
                                                                            <th scope="col">cusName</th>
                                                                            <th scope="col">cusAdd</th>
                                                                            <th scope="col">cusAmp</th>
                                                                            <th scope="col">cusProv</th>
                                                                            <th scope="col">cusZipcode</th>
                                                                            <th scope="col">cusTel</th>
                                                                            <th scope="col">productPrice</th>
                                                                            <th scope="col">productInbox</th>
                                                                            <th scope="col">productWeight</th>
                                                                            <th scope="col">orderType</th>
                                                                            <th scope="col">manifestNo</th>
                                                                            <th scope="col">merchantId</th>
                                                                            <th scope="col">merchantZipcode</th>
                                                                            <th scope="col">storeLocationNo</th>
                                                                            <th scope="col">insurance</th>
                                                                            <th scope="col">insuranceRatePrice
                                                                            </th>
                                                                            <th scope="col">status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="text-center" id="myTableApi-create">
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
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <section class="content">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-tools">
                                                    <a class="btn btn-danger " href="{{ route('export_excel') }}">Export
                                                        <i class="fas fa-plus-square text-left white-icon"></i>
                                                    </a>
                                                </div>
                                                <h1>API</h1>
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalLabel">เช็คสินค้า</button>
                                                <!-- Button trigger modal -->
                                                <div class="card-body">
                                                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-6"></div>
                                                            <div class="col-sm-12 col-md-6"></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="table-responsive">
                                                                    <table class="table" id="myTable">
                                                                        <thead class="red-back">
                                                                            <tr class="text-center">
                                                                                <th class="col-  text-right">
                                                                                    <div class="text-center ">
                                                                                        <input class="list-checkbox"
                                                                                            type="checkbox" value=""
                                                                                            id="flexCheckDefault">
                                                                                    </div>
                                                                                </th>
                                                                                <th scope="col">orderId</th>
                                                                                <th scope="col">invNo</th>
                                                                                <th scope="col">barcode</th>
                                                                                <th scope="col">shipperName</th>
                                                                                <th scope="col">shipperAddress</th>
                                                                                <th scope="col">shipperDistrict</th>
                                                                                <th scope="col">shipperProvince</th>
                                                                                <th scope="col">shipperZipcode</th>
                                                                                <th scope="col">shipperEmail</th>
                                                                                <th scope="col">shipperMobile</th>
                                                                                <th scope="col">cusName</th>
                                                                                <th scope="col">cusAdd</th>
                                                                                <th scope="col">cusAmp</th>
                                                                                <th scope="col">cusProv</th>
                                                                                <th scope="col">cusZipcode</th>
                                                                                <th scope="col">cusTel</th>
                                                                                <th scope="col">productPrice</th>
                                                                                <th scope="col">productInbox</th>
                                                                                <th scope="col">productWeight</th>
                                                                                <th scope="col">orderType</th>
                                                                                <th scope="col">manifestNo</th>
                                                                                <th scope="col">merchantId</th>
                                                                                <th scope="col">merchantZipcode</th>
                                                                                <th scope="col">storeLocationNo</th>
                                                                                <th scope="col">insurance</th>
                                                                                <th scope="col">insuranceRatePrice
                                                                                </th>
                                                                                <th scope="col">status</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="text-center"
                                                                            id="myTableApi-Label">

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
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                    <section class="content">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-tools">
                                                    <a class="btn btn-danger " href="{{ route('export_excel') }}">Export
                                                        <i class="fas fa-plus-square text-left white-icon"></i>
                                                    </a>
                                                </div>
                                                <h1>API</h1>
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalCancel">ยกเลิกสินค้า</button>
                                                <!-- Button trigger modal -->

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
                                                                <table class="table" id="myTable">
                                                                    <thead class="red-back">
                                                                        <tr class="text-center">
                                                                            <th class="col-  text-right">
                                                                                <div class="text-center ">
                                                                                    <input class="list-checkbox"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault">
                                                                                </div>
                                                                            </th>
                                                                            <th scope="col">orderId</th>
                                                                            <th scope="col">invNo</th>
                                                                            <th scope="col">barcode</th>
                                                                            <th scope="col">shipperName</th>
                                                                            <th scope="col">shipperAddress</th>
                                                                            <th scope="col">shipperDistrict</th>
                                                                            <th scope="col">shipperProvince</th>
                                                                            <th scope="col">shipperZipcode</th>
                                                                            <th scope="col">shipperEmail</th>
                                                                            <th scope="col">shipperMobile</th>
                                                                            <th scope="col">cusName</th>
                                                                            <th scope="col">cusAdd</th>
                                                                            <th scope="col">cusAmp</th>
                                                                            <th scope="col">cusProv</th>
                                                                            <th scope="col">cusZipcode</th>
                                                                            <th scope="col">cusTel</th>
                                                                            <th scope="col">productPrice</th>
                                                                            <th scope="col">productInbox</th>
                                                                            <th scope="col">productWeight</th>
                                                                            <th scope="col">orderType</th>
                                                                            <th scope="col">manifestNo</th>
                                                                            <th scope="col">merchantId</th>
                                                                            <th scope="col">merchantZipcode</th>
                                                                            <th scope="col">storeLocationNo</th>
                                                                            <th scope="col">insurance</th>
                                                                            <th scope="col">insuranceRatePrice
                                                                            </th>
                                                                            <th scope="col">status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="text-center" id="myTableApi-cancel">

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
<!-- Button trigger modal -->


<!-- Modal Label Create -->
<div class="modal fade" id="exampleModalCreate" tabindex="-1" aria-labelledby="exampleModalCreate" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCreate">สร้างสินค้า</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fas fa-times-circle dark-icon"></i></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary"  onclick="createOrder()" data-bs-dismiss="modal">ยื่นยันการส่ง
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Label -->
<div class="modal fade" id="exampleModalLabel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เช็คสินค้า</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fas fa-times-circle dark-icon"></i></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary" onclick="getLabel()" data-bs-dismiss="modal">ยื่นยันการส่ง
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modal cancel -->
<div class="modal fade" id="exampleModalCancel" tabindex="-1" aria-labelledby="exampleModalCancel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCancel">ยกเลิกสินค้า</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fas fa-times-circle dark-icon"></i></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary"  onclick="cancelOrder()" data-bs-dismiss="modal">ยื่นยันการส่ง
                </button>
            </div>
        </div>
    </div>
</div>
@include('managelist.script.index')
@include('managelist.script.createOrderApi')

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- ./wrapper -->
@include('maun_footer.footer')

@endsection