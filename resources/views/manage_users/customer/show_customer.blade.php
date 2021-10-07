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
                <h1 class="text-left">จัดการลูกค้า</h1>
                <p class="text-left">ลูกค้า  >  จัดการลูกค้า</p>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('maun_footer.maun')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <nav>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <section class="content">
                                <!-- Default box -->
                                <div class="card">
                                    <div class="card-header">
                                    
                                        <h3 class="card-title text-left">
                                        <a  href="{{ url('customer') }}"><i class="fas fa-angle-left dark-icon"></i></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->name_customer}}&nbsp;#CUS-{{str_pad($data->id,"3","0",STR_PAD_LEFT )}}</h3>

                                        <div class="card-tools">
                                            <a  class="btn btn-danger  edit-user "  href="{{ route('customer.edit',1) }}">เเก้ไขข้อมูล
                                                <i class="fas fa-pen text-left dark-icon"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                            <div class="row reght-aling">
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">ชื่อ-นามสกุล : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="inputEmail3" value="{{$data->name_customer}}" placeholder="ชื่อ-นามสกุล">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">เบอร์โทรศัพท์ : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="inputEmail3" value="{{$data->top_rate}}" placeholder="เบอร์โทรศัพท์">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">ที่อยู่ : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" value="{{$data->address_customer}}"  id="inputEmail3" placeholder="ที่อยู่">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">ตำบล : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control"  value="{{$data->district_rate}}" id="inputEmail3" placeholder="ตำบล">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">อำเภอ : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="inputEmail3" value="{{$data->district_customer}}" placeholder="อำเภอ">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">จังหวัด : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="inputEmail3" value="{{$data->province_rate}}" placeholder="จังหวัด">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">รหัสไปรษณีย์ : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="inputEmail3"   value="{{$data->zip_code_customer}}" placeholder="รหัสไปรษณีย์">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">อีเมล : </label>
                                                        <div class="col-sm-8">
                                                            <input type="email" class="form-control" id="inputEmail3"  value="{{$data->email}}" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">REF : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="inputEmail3" value="{{$data->ref_user}}" placeholder="REF">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">พาสเวิร์ด : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="inputEmail3" value="{{$data->password_user}}" placeholder="พาสเวิร์ด">
                                                        </div>
                                                    </div>
                                                    <div class="form-group top-aling row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">เซลล์ที่ดูเเล : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="inputEmail3" value="{{$data->cell_code}}" placeholder="เซลล์ที่ดูเเล">
                                                        </div>
                                                    </div>
                                                    <div class="form-group top-aling row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">เรทราคา : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="inputEmail3"  value="{{$data->rate_rate}}" placeholder="เรทราคา">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div> <!-- /.card -->
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