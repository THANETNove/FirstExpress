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
                <h1 class="text-left ">ราคาทุน</h1>
                <p class="text-left">ปรับข้อมูลราคาทุน</p>
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
                                                                        <th class="col-md-6 text-center">
                                                                            น้ำหนัก (MIN-MAX)
                                                                        </th>
                                                                        <th class="col-sm-12 col-md-2 text-center">
                                                                            ต้นทุน SHIPPOP
                                                                        </th>
                                                                        <th class="col-sm-12 col-md-2 text-center">
                                                                            ราคาขาย Standard กรุงเทพ
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="odd">
                                                                        <td>
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <input type="text" value="" class="form-control" placeholder="1">
                                                                                    </div>-
                                                                                    <div class="col">
                                                                                        <input type="text" value="" class="form-control" placeholder="20">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" value="" placeholder="30">
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" value="" placeholder="37.00">
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td>
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <input type="text" value="" class="form-control" placeholder="21">
                                                                                    </div>-
                                                                                    <div class="col">
                                                                                        <input type="text" value="" class="form-control" placeholder="100">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" value="" placeholder="37.00">
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" value="" placeholder="37.00">
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td>
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <input type="text" value="" class="form-control" placeholder="101">
                                                                                    </div>-
                                                                                    <div class="col">
                                                                                        <input type="text" value="" class="form-control" placeholder="250">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" value="" placeholder="37.00">
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" value="" placeholder="37.00">
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td>
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <input type="text" value="" class="form-control" placeholder="251">
                                                                                    </div>-
                                                                                    <div class="col">
                                                                                        <input type="text" value="" class="form-control" placeholder="500">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" value="" placeholder="37.00">
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" value="" placeholder="37.00">
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td>
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <input type="text" value="" class="form-control" placeholder="501">
                                                                                    </div>-
                                                                                    <div class="col">
                                                                                        <input type="text" value="" class="form-control" placeholder="1000">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" value="" placeholder="55.00">
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" value="" placeholder="55.00">
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td>
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <input type="text" value="" class="form-control" placeholder="1001">
                                                                                    </div>-
                                                                                    <div class="col">
                                                                                        <input type="text" value="" class="form-control" placeholder="1500">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" value="" placeholder="72.00">
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" value="" placeholder="72.00">
                                                                        </td>
                                                                    </tr>

                                                                    <tr class="odd">
                                                                        <td>
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <input type="text" value="" class="form-control" placeholder="1501">
                                                                                    </div>-
                                                                                    <div class="col">
                                                                                        <input type="text" value="" class="form-control" placeholder="2000">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" value="" placeholder="72.00">
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" value="" placeholder="72.00">
                                                                        </td>

                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td>
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <input type="text" value="" class="form-control" placeholder="2001">
                                                                                    </div>-
                                                                                    <div class="col">
                                                                                        <input type="text" value="" class="form-control" placeholder="2500">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" value="" placeholder="91.00">
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" value="" placeholder="91.00">
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
@include('maun_footer.footer')

@endsection