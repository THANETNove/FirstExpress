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
                                <div class="card-to">
                                    <div class="card-header">
                                    
                                        <h3 class="card-title text-left">
                                        <a   href="{{ route('customer.edit', 1) }}"><i class="fas fa-angle-left dark-icon"></i></a> 
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$data->name_customer}}&nbsp;#{{$data->customerCode}}</h3>
                                    </div>

                                    <div class="card-body">
                                        <form action="{{ route('customer.update', $data->id) }}" method="POST">
                                             @csrf
                                             @method('PUT')
                                            <div class="row reght-aling">
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">ชื่อ-นามสกุล : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="inputEmail3"  name="name_customer" value="{{$data->name_customer}}" placeholder="{{$data->name_customer}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">เบอร์โทรศัพท์ : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="inputEmail3"  name="top_rate" value="{{$data->top_rate}}" placeholder="{{$data->top_rate}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">ที่อยู่ : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="inputEmail3" name="address_customer" value="{{$data->address_customer}}" placeholder="{{$data->address_customer}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">ตำบล : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="inputEmail3" name="district_rate" value="{{$data->district_rate}}" placeholder="{{$data->district_rate}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">อำเภอ : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="inputEmail3"  name="district_customer" value="{{$data->district_customer}}" placeholder="{{$data->district_customer}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">จังหวัด : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="inputEmail3" name="province_rate"  value="{{$data->province_rate}}" placeholder="{{$data->province_rate}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">รหัสไปรษณีย์ : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="inputEmail3"  name="zip_code_customer"  value="{{$data->zip_code_customer}}" placeholder="{{$data->zip_code_customer}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">อีเมล : </label>
                                                        <div class="col-sm-8">
                                                            <input type="email" class="form-control" id="inputEmail3" name="email" value="{{$data->email}}" placeholder="{{$data->email}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">REF : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="inputEmail3"  name="ref_user" value="{{$data->ref_user}}" placeholder="{{$data->ref_user}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">พาสเวิร์ด : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="inputEmail3" name="password_user" value="" placeholder="พาสเวิร์ด">
                                                        </div>
                                                    </div>
                                                    <div class="form-group top-aling row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">เซลล์ที่ดูเเล : </label>
                                                        <div class="col-sm-8">
                                                        <select class="form-control select2bs4 select2-hidden-accessible" name="cell_code" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
                                                            @foreach ($sale as $sale)
                                                                <option > {{$sale->codeSales}}</option>
                                                            @endforeach

                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group top-aling row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">เรทราคา : </label>
                                                        <div class="col-sm-8">
                                                        <select class="form-control select2bs4 select2-hidden-accessible" name="rate_rate" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
                                                            <option selected="selected">Business  pick</option> 
                                                            <option>Normal Pick</option>
                                                            <option>Business Pick</option>
                                                            <option>Platform Pick</option>
                                                            <option>VIP Pick</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group right-button-bc  top-aling-bu ">
                                                        <button type="submit" class="btn btn-danger">บันทึก  <i class="fas fa-save text-left"></i></i></button>
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
<!-- ./wrapper -->
@include('maun_footer.footer')

@endsection