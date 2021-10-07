@extends('layouts.app_layouts_home')

@section('content')

<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item"></li>
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
                                    <button class="nav-link   home-tab2" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="false" disabled>ผู้ใช้ในงานระบบ
                                        <i class="fas fa-user-circle text-left " id="i-home"></i>
                                    </button>
                                    <button class="nav-link " id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false" disabled>ฝ่ายเซล
                                        <i class="far fa-user text-left" id="i-profile"></i>
                                    </button>
                                    <button class="nav-link  active" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="true">ลูกค้า
                                        <i class="fas fa-user text-left dark-icon " id="i-contact"></i>
                                    </button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                    <section class="content">
                                        <!-- Default box -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">ลูกค้า&nbsp;&nbsp;&nbsp;<div class="text-green">
                                                        {{ Session::get('message_status') }}</h3>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-danger " data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal">เพิ่มลูกค้า
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
                                                                        <th>
                                                                            รหัสลูกค้า
                                                                        </th>
                                                                        <th>รหัสเซลล์ที่ดูเเล
                                                                        </th>
                                                                        <th>
                                                                            ชื่อลูกค้า
                                                                        </th>
                                                                        <th>
                                                                            อีเมลลูกค้า
                                                                        </th>
                                                                        <th>
                                                                            เบอร์โทรศัพท์ลูกค้า
                                                                        </th>
                                                                        <th>
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
                                                                    @foreach ($customers as $cus)
                                                                    <tr class="odd">
                                                                        <td class="sorting_1">
                                                                           {{$cus->customerCode}}
                                                                        </td>
                                                                        <td class="sorting_1">{{$cus->cell_code}}</td>
                                                                        <td class="sorting_1">{{$cus->name_customer}}
                                                                        </td>
                                                                        <td class="sorting_1">{{$cus->email}}</td>
                                                                        <td class="sorting_1">{{$cus->top_rate}}</td>
                                                                        @if($cus->rate_rate == 'Business pick')
                                                                        <td class="sorting_1 orange-icon">
                                                                            {{$cus->rate_rate}}</td>
                                                                        @elseif ($cus->rate_rate == 'Normal Pick')
                                                                        <td class="sorting_1">{{$cus->rate_rate}}</td>

                                                                        @elseif ($cus->rate_rate == 'Business Pick')
                                                                        <td class="sorting_1 orange_red-icon">
                                                                            {{$cus->rate_rate}}</td>

                                                                        @elseif ($cus->rate_rate == 'Platform Pick')
                                                                        <td class="sorting_1 orange_red">
                                                                            {{$cus->rate_rate}}</td>

                                                                        @else
                                                                        <td class="sorting_1 dark-icon">
                                                                            {{$cus->rate_rate}}</td>
                                                                        @endif
                                                                        <td class="sorting_1 ">
                                                                            <a class="btn right-button-b profile-tab3"
                                                                                href="{{ route('customer.show', $cus->id) }}">ดูรายละเอีดยดเพิ่มเติม</a>
                                                                            <a href="{{url('create-invoice', $cus->id)}}"
                                                                                class="btn" data-bs-toggle="tooltip" data-bs-placement="top" title="วางบิล">
                                                                                <i class="fas fa-ellipsis-v"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มลูกค้า </h5>
                <p class="text-header">นำข้อมูลลูกค้าเข้าระบบ</p>

                <p class="header-customer">CUSTOMER-2347</p>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fas fa-times-circle dark-icon"></i></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form method="POST" action="{{ route('customer.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <p class="cus-info-blue">SALE INFO</p>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P>รหัสเซลล์</P>
                                            <select class="form-control select2bs4 select2-hidden-accessible"
                                                name="cell_code" style="width: 100%;" data-select2-id="25" tabindex="-1"
                                                aria-hidden="true">
                                                @foreach ($sale as $sale)
                                                <option> {{$sale->codeSales}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                </br>
                                </br>
                                </br>
                                </br>
                                <div>
                                    <p class="cus-info-pink">CUSTOMER INFO</p>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P>ชื่อ-นามสกุล</P>
                                            <input class="form-control" name="name_customer" placeholder="ชื่อ-นามสกุล">
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P>ที่อยู่</P>
                                            <input class="form-control" name="address_customer" placeholder="45/5">
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P>อำเภอ</P>
                                            <input class="form-control" name="district_customer" placeholder="อำเภอ">
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P>รหัสไปรษณีย์</P>
                                            <input class="form-control" name="zip_code_customer" placeholder="zip_code">
                                        </div>
                                    </div>
                                </div>
                                </br>
                                <div>
                                    <p class="cus-info-pink">INVOKE /RECEIPT INFO</p>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P>ชื่อ-นามสกุล</P>
                                            <input class="form-control" name="name_invoke" placeholder="ชื่อ-นามสกุล">
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P>ที่อยู่</P>
                                            <input class="form-control" name="address_invoke" placeholder="45/5">
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P>อำเภอ</P>
                                            <input class="form-control" name="district_invoke" placeholder="อำเภอ">
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P>รหัสไปรษณีย์</P>
                                            <input class="form-control" name="zip_code_invoke" placeholder="zipCode">
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P>อีเมล วางบิล/ออกใบเสร็จ</P>
                                            <input class="form-control" name="receipt_invoke" placeholder="xxxx">
                                        </div>
                                    </div>
                                </div>
                                </br>
                                <div>
                                    <p class="cus-info-blue">CUSTOMER USER</p>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P>อีเมล</P>
                                            <input class="form-control" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P class="dark-icon">เบอร์ (REF)</P>
                                            <input class="form-control" name="ref_user" placeholder="xxx-xxx-xxxx">
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P>พาสเวิร์ด</P>
                                            <input class="form-control" name="password_user" placeholder="xxxxx">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <p class="cus-info-pink">CUSTOMER RATE</p>
                                </div>
                                <div class="card card-default cus-top">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P>เรทราคา</P>
                                            <select class="form-control select2bs4 select2-hidden-accessible"
                                                name="rate_rate" style="width: 100%;" data-select2-id="25" tabindex="-1"
                                                aria-hidden="true">
                                                <option selected="selected">Business pick</option>
                                                <option>Normal Pick</option>
                                                <option>Business Pick</option>
                                                <option>Platform Pick</option>
                                                <option>VIP Pick</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P>เบอร์</P>
                                            <input class="form-control" name="top_rate" placeholder="093-xxx-xxxx">
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P>ตำบล</P>
                                            <input class="form-control" name="district_rate" placeholder="ตำบล">
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P>จังหวัด</P>
                                            <input class="form-control" name="province_rate" placeholder="จังหวัด">
                                        </div>
                                    </div>
                                </div>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P>เบอร์</P>
                                            <input class="form-control" name="phone_number" placeholder="093-xxx-xxxx">
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P>ตำบล</P>
                                            <input class="form-control" name="canton_rate" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="form-group">
                                            <P>จังหวัด</P>
                                            <input class="form-control" name="province" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </br>
                <div class="">
                    <button type="submit" class="btn butt-save-center">เพิ่มลูกค้า</button>
                </div>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>
</div>

<div class="card-body">
    <div class="row">
        <div class="col-md-6">

        </div>

        <div class="col-md-6">

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