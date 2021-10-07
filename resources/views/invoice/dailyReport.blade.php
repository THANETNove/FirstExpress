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
                <h1 class="text-left ">รายงานประจำวัน</h1>
                <p class="text-left">จัดการ/รายงานประจำวัน</p>
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
                                                    <a href="{{url('create-invoice')}}" class="btn btn-danger " >เพิ่มบิล
                                                        <i class="fas fa-plus-square text-left white-icon"></i>
                                                    </a>

                                                    <button  class="btn btn-primary " onclick="apiShippop()">demo api shippop
                                                        <i class="fas fa-plus-square text-left white-icon"></i>
                                                    </a>
                                                </div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3 row">
                                                                <label for="inputPassword"
                                                                    class="col-sm-2 col-form-label">ลูกค้า</label>
                                                                <div class="col-sm-7">
                                                                    <select class="form-control"
                                                                        aria-label="Default select example">
                                                                        <option selected>Open this select menu</option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                        <div class="mb-3 row">
                                                                <label for="inputPassword"
                                                                    class="col-sm-4 col-form-label">วันที่ส่งของ</label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" id="datepicker" class="form-control datepicker">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                        <div class="mb-3 row">
                                                                <label for="inputPassword"
                                                                    class="col-sm-2 col-form-label">ถึง</label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" id="datepicker_out" class="form-control datepicker_out">
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
                                                            <table id="example2"
                                                                class="table table-bordered table-hover dataTable dtr-inline "
                                                                role="grid" aria-describedby="example2_info">
                                                                <thead class="red-back">
                                                                    <tr role="row">
                                                                        <th class="col-sm-1">
                                                                            <div class="text-center ">
                                                                                <input class="list-invo" type="checkbox"
                                                                                    value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </th>
                                                                        <th>
                                                                            รหัสลูกค้า
                                                                        </th>
                                                                        <th>ชื่อ
                                                                        </th>
                                                                        <th>
                                                                            เลขผู้เสียภาษี
                                                                        </th>
                                                                        <th>
                                                                            ข้อมูล
                                                                        </th>
                                                                        <th>
                                                                            RATE
                                                                        </th>
                                                                        <th>
                                                                            จำนวนพัสดุ
                                                                        </th>
                                                                        <th>
                                                                            ส่วนลด
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
                                                                        <td>Robert Fox</td>
                                                                        <td>123456764556442</td>
                                                                        <td>1432 Willoughby Rd.Sydney</td>
                                                                        <td>Normal pick</td>
                                                                        <td>426</td>
                                                                        <td>426</td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td>
                                                                            <div class="text-center">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>CUS-2432</td>
                                                                        <td>Devon Lane</td>
                                                                        <td>123456764556442</td>
                                                                        <td>123456764556442</td>
                                                                        <td>56 Ashcroft Ln.Sydney</td>
                                                                        <td>426</td>
                                                                        <td>426</td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td>
                                                                            <div class="text-center">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>CUS-2431</td>
                                                                        <td>Robert Fox</td>
                                                                        <td>123456764556442</td>
                                                                        <td>1432 Willoughby Rd.Sydney</td>
                                                                        <td>Normal pick</td>
                                                                        <td>426</td>
                                                                        <td>426</td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td>
                                                                            <div class="text-center">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>CUS-2431</td>
                                                                        <td>Robert Fox</td>
                                                                        <td>123456764556442</td>
                                                                        <td>1432 Willoughby Rd.Sydney</td>
                                                                        <td>Normal pick</td>
                                                                        <td>426</td>
                                                                        <td>426</td>
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
<form action="/sdsdsd" id="form01">
    <input type="hidden " value="" id="demo01">
</form>

<script>

    function storeData(data) {

        $.ajax({
            url: 'http://localhost:8080/pricelist',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            method: 'post',
            contentType: "application/json",
            dataType: 'json',
            data: {
                api_key: 'savasdvsdvasdvasdvasdvasdvasdvasdvasvg',
                promo_code: 'yes',
                data: [],
            },
            success:storeData,
            error:function(jqXHR, textStatus, errorThrown){
                console.log('error', textStatus);
                alert('ไม่สามารถเชื่อมต่อข้อมูลได้')
            }
        })

    console.log('success', data);
    $("#demo01").val('xxx')
    $("#form01").submit()
 
    }
    function apiShippop(){
        $.ajax({
            url: 'http://localhost:8080/pricelist',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            method: 'post',
            contentType: "application/json",
            dataType: 'json',
            data: {
                api_key: 'savasdvsdvasdvasdvasdvasdvasdvasdvasvg',
                promo_code: 'yes',
                data: [
                        {
                            "from": {
                                "name": "ชื่อผู้ส่ง - นามสกุล",
                                "address": "522 ซอยรัชดาภิเษก 26 ถนนรัชดาภิเษก  แขวงสามเสนนอก เขตห้วยขวาง กรุงเทพมหานคร",
                                "district": "-",
                                "state": "-",
                                "province": "-",
                                "postcode": "10310",
                                "tel": "0929053355"
                            },
                            "to": {
                                "name": "ชื่อผู้รับ นามสกุล",
                                "address": "522 ซอยรัชดาภิเษก 26 ถนนรัชดาภิเษก  แขวงสามเสนนอก เขตห้วยขวาง กรุงเทพมหานคร",
                                "district": "-",
                                "state": "-",
                                "province": "-",
                                "postcode": "10310",
                                "tel": "0929053355"
                            },
                            "parcel": {
                                "name": "-",
                                "weight": "1",
                                "width": "1",
                                "length": "1",
                                "height": "1"
                            },
                            "showall": "1"
                        }
                    ],
            },
            success:storeData,
            error:function(jqXHR, textStatus, errorThrown){
                console.log('error', textStatus);
                alert('ไม่สามารถเชื่อมต่อข้อมูลได้')
            }
        })
    }
</script>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('maun_footer.footer')

@endsection