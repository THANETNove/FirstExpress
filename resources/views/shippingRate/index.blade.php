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
                <h1 class="text-left ">ปรับเรทราคา </h1>
                <p class="text-left">ปรับข้อมูลเรทค่าส่ง</p>
                <p class="text-green">{{ Session::get('message_status') }}</p>
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
                                    <form method="POST" action="{{ route('shipping-rate.store') }}">
                                        @csrf
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3 row">
                                                                <label for="inputPassword"
                                                                    class="col-sm-4 col-form-label">ส่วนลด %:</label>
                                                                <div class="col-sm-7">
                                                                    <input type="text"   name="discount" class="form-control"
                                                                        placeholder="">
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
                                                                <table id="" class="table  table-borderless">
                                                                    <thead>
                                                                        <tr role="row">
                                                                            <th class="col-md-6">
                                                                                น้ำหนัก (Min-Max)
                                                                            </th>
                                                                            <th class="col-sm-12 col-md-2">ต้นทุน
                                                                            </th>
                                                                            <th class="col-sm-12 col-md-2">
                                                                                ราคาขาย (กรุงเทพ)
                                                                            </th>
                                                                            <th class="col-sm-12 col-md-2">
                                                                                รายขาย (ต่างจังหวัด)
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="odd">
                                                                            <td>
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="col">
                                                                                            <input type="text" value="" class="form-control  @error('weightMin1') is-invalid @enderror" name="weightMin1"  placeholder="1">
                                                                                        </div>-
                                                                                        @error('weightMin1')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                        <div class="col">
                                                                                            <input type="text" value="" class="form-control  @error('weightMax1') is-invalid @enderror"  name="weightMax1" placeholder="20">
                                                                                        </div>
                                                                                        @error('weightMax1')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" class="form-control    @error('cost1') is-invalid @enderror" value="" name="cost1" placeholder="20">
                                                                            </td>
                                                                            @error('cost1')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                            <td>
                                                                                <input type="text" class="form-control @error('sellingPriceBangkok1') is-invalid @enderror" value="" name="sellingPriceBangkok1" placeholder="20">
                                                                            </td>
                                                                            @error('sellingPriceBangkok1')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                            <td>
                                                                                <input type="text" class="form-control  @error('sellingPriceUpcountry1') is-invalid @enderror"  value="" name="sellingPriceUpcountry1" placeholder="20">
                                                                            </td>
                                                                            @error('sellingPriceUpcountry1')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </tr>
                                                                        <tr class="odd">
                                                                            <td>
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="col">
                                                                                            <input type="text" value="" class="form-control @error('weightMin2') is-invalid @enderror" name="weightMin2" placeholder="21">
                                                                                        </div>-
                                                                                        @error('weightMin2')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                        <div class="col">
                                                                                            <input type="text" value="" class="form-control  @error('weightMax2') is-invalid @enderror" name="weightMax2" placeholder="20">
                                                                                        </div>
                                                                                        @error('weightMax2')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" class="form-control @error('cost2') is-invalid @enderror" value="" name="cost2" placeholder="20">
                                                                            </td>
                                                                            @error('cost2')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                            <td>
                                                                                <input type="text" class="form-control @error('sellingPriceBangkok2') is-invalid @enderror" value=""  name="sellingPriceBangkok2" placeholder="20">
                                                                            </td>
                                                                            @error('sellingPriceBangkok2')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                            <td>
                                                                                <input type="text" class="form-control  @error('sellingPriceUpcountry2') is-invalid @enderror"  value="" name="sellingPriceUpcountry2" placeholder="20">
                                                                            </td>
                                                                            @error('sellingPriceUpcountry2')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </tr>
                                                                        <tr class="odd">
                                                                            <td>
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="col">
                                                                                            <input type="text" value="" class="form-control @error('weightMin3') is-invalid @enderror" name="weightMin3" placeholder="101">
                                                                                        </div>-
                                                                                        @error('weightMin3')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                        <div class="col">
                                                                                            <input type="text" value="" class="form-control @error('weightMax3') is-invalid @enderror" name="weightMax3" placeholder="20">
                                                                                        </div>
                                                                                        @error('weightMax3')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" class="form-control @error('cost3') is-invalid @enderror" value="" name="cost3" placeholder="20">
                                                                            </td>
                                                                            @error('cost3')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                            <td>
                                                                                <input type="text" class="form-control  @error('sellingPriceBangkok3') is-invalid @enderror" value=""  name="sellingPriceBangkok3" placeholder="20">
                                                                            </td>
                                                                            @error('sellingPriceBangkok3')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                            <td>
                                                                                <input type="text" class="form-control  @error('sellingPriceUpcountry3') is-invalid @enderror"  value=""  name="sellingPriceUpcountry3" placeholder="20">
                                                                            </td>
                                                                            @error('sellingPriceUpcountry3')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </tr>
                                                                        <tr class="odd">
                                                                            <td>
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="col">
                                                                                            <input type="text" value="" class="form-control @error('weightMin4') is-invalid @enderror" name="weightMin4" placeholder="251">
                                                                                        </div>-
                                                                                        @error('weightMin4')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                        <div class="col">
                                                                                            <input type="text" value="" class="form-control @error('weightMax4') is-invalid @enderror" name="weightMax4" placeholder="20">
                                                                                        </div>
                                                                                        @error('weightMax4')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" class="form-control @error('cost4') is-invalid @enderror" value="" name="cost4" placeholder="20">
                                                                            </td>
                                                                            @error('cost4')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                            <td>
                                                                                <input type="text" class="form-control  @error('sellingPriceBangkok4') is-invalid @enderror" value=""  name="sellingPriceBangkok4" placeholder="20">
                                                                            </td>
                                                                            @error('sellingPriceBangkok4')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                            <td>
                                                                                <input type="text" class="form-control @error('sellingPriceUpcountry4') is-invalid @enderror"  value="" name="sellingPriceUpcountry4" placeholder="20">
                                                                            </td>
                                                                            @error('sellingPriceUpcountry4')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </tr>
                                                                        <tr class="odd">
                                                                            <td>
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="col">
                                                                                            <input type="text" value="" class="form-control @error('weightMin5') is-invalid @enderror" name="weightMin5" placeholder="501">
                                                                                        </div>-
                                                                                        @error('weightMin5')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                        <div class="col">
                                                                                            <input type="text" value="" class="form-control @error('weightMax5') is-invalid @enderror" name="weightMax5" placeholder="20">
                                                                                        </div>
                                                                                        @error('weightMax5')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" class="form-control  @error('cost5') is-invalid @enderror" value=""  name="cost5" placeholder="20">
                                                                            </td>
                                                                            @error('cost5')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                            <td>
                                                                                <input type="text" class="form-control  @error('sellingPriceBangkok5') is-invalid @enderror" value="" name="sellingPriceBangkok5" placeholder="20">
                                                                            </td>
                                                                            @error('sellingPriceBangkok5')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                            <td>
                                                                                <input type="text" class="form-control @error('sellingPriceUpcountry5') is-invalid @enderror"  value="" name="sellingPriceUpcountry5" placeholder="20">
                                                                            </td>
                                                                            @error('sellingPriceUpcountry5')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </tr>
                                                                        <tr class="odd">
                                                                            <td>
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="col">
                                                                                            <input type="text" value="" class="form-control @error('weightMin6') is-invalid @enderror" name="weightMin6" placeholder="1001">
                                                                                        </div>-
                                                                                        @error('weightMin6')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                        <div class="col">
                                                                                            <input type="text" value="" class="form-control @error('weightMax6') is-invalid @enderror" name="weightMax6" placeholder="20">
                                                                                        </div>
                                                                                        @error('weightMax6')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" class="form-control @error('cost6') is-invalid @enderror" value="" name="cost6" placeholder="20">
                                                                            </td>
                                                                            @error('cost6')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                 </span>
                                                                            @enderror
                                                                            <td>
                                                                                <input type="text" class="form-control  @error('sellingPriceBangkok6') is-invalid @enderror" value="" name="sellingPriceBangkok6" placeholder="20">
                                                                            </td>
                                                                            @error('sellingPriceBangkok6')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                 </span>
                                                                            @enderror
                                                                            <td>
                                                                                <input type="text" class="form-control @error('sellingPriceUpcountry6') is-invalid @enderror"  value=""  name="sellingPriceUpcountry6" placeholder="20">
                                                                            </td>
                                                                            @error('weightMin7')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                 </span>
                                                                            @enderror
                                                                        </tr>

                                                                        <tr class="odd">
                                                                            <td>
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="col">
                                                                                            <input type="text" value="" class="form-control @error('weightMin7') is-invalid @enderror" name="weightMin7" placeholder="1501">
                                                                                        </div>-
                                                                                        @error('weightMin7')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                        <div class="col">
                                                                                            <input type="text" value="" class="form-control @error('weightMax7') is-invalid @enderror"  name="weightMax7" placeholder="20">
                                                                                        </div>
                                                                                        @error('weightMax7')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" class="form-control @error('cost7') is-invalid @enderror" value="" name="cost7" placeholder="20">
                                                                            </td>
                                                                            @error('cost7')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                            <td>
                                                                                <input type="text" class="form-control  @error('sellingPriceBangkok7') is-invalid @enderror" value=""  name="sellingPriceBangkok7" placeholder="20">
                                                                            </td>
                                                                            @error('sellingPriceBangkok7')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                            <td>
                                                                                <input type="text" class="form-control  @error('sellingPriceUpcountry7') is-invalid @enderror"  value=""  name="sellingPriceUpcountry7" placeholder="20">
                                                                            </td>
                                                                            @error('sellingPriceUpcountry7')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </tr>
                                                                        <tr class="odd">
                                                                            <td>
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="col">
                                                                                            <input type="text" value="" class="form-control  @error('weightMin8') is-invalid @enderror" name="weightMin8" placeholder="2001">
                                                                                        </div>-
                                                                                        @error('weightMin8')
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $message }}</strong>
                                                                                        </span>
                                                                                        @enderror
                                                                                        <div class="col">
                                                                                            <input type="text" value="" class="form-control @error('weightMax8') is-invalid @enderror" name="weightMax8" placeholder="20">
                                                                                        </div>
                                                                                        @error('weightMax8')
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $message }}</strong>
                                                                                        </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" class="form-control  @error('cost8') is-invalid @enderror" value="" name="cost8" placeholder="20">
                                                                            </td>
                                                                            @error('cost8')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                            @enderror
                                                                            <td>
                                                                                <input type="text" class="form-control @error('sellingPriceBangkok8') is-invalid @enderror" value="" name="sellingPriceBangkok8" placeholder="20">
                                                                            </td>
                                                                            @error('sellingPriceBangkok8')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                            @enderror
                                                                            <td>
                                                                                <input type="text" class="form-control  @error('sellingPriceUpcountry8') is-invalid @enderror"  value="" name="sellingPriceUpcountry8" placeholder="20">
                                                                            </td>
                                                                            @error('sellingPriceUpcountry8')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                            @enderror
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="">
                                                                    <button type="submit" class="btn butt-save"> {{ __(' เพิ่มเรทราคา') }}</button>
                                                                </div>
                                                            </form>
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