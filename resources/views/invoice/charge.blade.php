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
                <h1 class="text-left">จัดการบัญชี</h1>
                <p class="text-left">เพิ่มเเละจัดการบัญชี</p>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('maun_footer.maun')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
        <nav>
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <h5 class="b-color">[บริษัท]</h5>
                            <p>[ที่อยู่]</p>
                            <p>[จังหวัด รหัสไปรษณีย์]</p>
                            <p>[หมายเลขโทรศัพท์ (000) 000-0000]</p>
                            <h5 class="charge-box col-sm-12 col-md-5">เรียกเก็บไปยัง:</h5>
                            <p>[ชื่อ]</p>
                            <p>[ชื่อบริษัท]</p>
                            <p>[ที่อยู่]</p>
                            <p>[จังหวัด รหัสไปรษณีย์]</p>
                            <p>[หมายเลขโทรศัพท์]</p>
                            <p>[ที่อยู่อิเมล]</p>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h1 class="text-center b-color">ใบเเจ้งหนี้</h1>
                            </br>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group thickeb">
                                            <p class="text-center charge-box">หมายเลขเอกสาร</p>
                                            <p class="text-center thickeb">2034</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group thickeb">
                                            <p class="text-center charge-box">วันที่</p>
                                            <p class="text-center thickeb">21/2/61</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group thickeb">
                                            <p class="text-center charge-box">ID ลูกค้า</p>
                                            <p class="text-center thickeb">564</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group thickeb">
                                            <p class="text-center charge-box">ข้อตกลง</p>
                                            <p class="text-center thickeb">ครบกำหนดเมื่อได้รับ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                    <table id="myTable" class="table ">
                        <thead class="text-center charge-box">
                            <tr role="row">
                                <th class="col-sm-12 col-md-6">คำอธิบาย
                                </th>
                                <th class="col-sm-12 col-md-1">ปริมาณ</th>
                                <th class="col-sm-12 col-md-2">
                                    ราคาต่อหน่วย</th>
                                <th class="col-sm-12 col-md-3">จำนวนเงิน</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd">
                                <td>ค่าบริการ</td>
                                <td class="text-center">1</td>
                                <td class="text-right">200.00</td>
                                <td class="text-right">200.00</td>
                            </tr>
                            <tr class="odd">
                                <td>เเรงงาน: 5 ชั่วโมง ฺ฿ 75/ ชั่วโมง</td>
                                <td class="text-center">5</td>
                                <td class="text-right">75.00</td>
                                <td class="text-right">375.00</td>
                            </tr>
                            <tr class="odd">
                                <td>ส่วนลดของ</td>
                                <td class="text-right"></td>
                                <td class="text-right">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                            <p class="text-left"> -</p>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <p class="text-right"> 50</p>
                                            </div>
                                        </div>
                                    </div></td>
                                <td >
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                            <p class="text-left"> -</p>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <p class="text-right"> 50</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd">
                                <td></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                            </tr>
                            <tr class="odd">
                                <td></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                            </tr>
                            <tr class="odd">
                                <td></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                            </tr>
                            <tr class="odd">
                                <td></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                            </tr>
                            <tr class="odd">
                                <td></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                            </tr>
                            <tr class="odd">
                                <td></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                            </tr>
                            <tr class="odd">
                                <td></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                            </tr>
                            <tr class="odd">
                                <td></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                            </tr>
                            <tr class="odd">
                                <td></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                            </tr>
                            <tr class="odd">
                                <td></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                            </tr>
                            <tr class="odd">
                                <td></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                            </tr>
                            <tr class="odd">
                                <td></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                            </tr>
                            <tr class="odd">
                                <td></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                            </tr>
                            <tr class="border-primary">
                                <th scope="row" class="text-center ">
                                    <p class="charge-text b-color">ขอบคุณที่ร่วมทำธุระกิจกับเรา!</p>
                                </th>
                                <td colspan="2" class="table-active charge-text">
                                    <p>ผลร่วมย่อย</p>
                                    <p>อัตราภาษี</p>
                                    <p>ภาษี</p>
                                    <h3 class="b-color">ผลรวม</h3>
                                </td>
                                <td class="charge-text">
                                    <p class="text-right">525.00</p>
                                    <p class="text-right">4.250%</p>
                                    <p class="text-right">22.31</p>
                                    <h3>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <p>฿</p>
                                                </div>
                                                <div class="col-sm-12 col-md-6 text-right ">
                                                    <p>547.31</p>
                                                </div>
                                            </div>
                                        </div>
                                    </h3>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-12  text-center ">
                            <br>
                            <br>
                            <br>
                            <p>ถ้าคุณมีคำถามเกี่ยวใบเเจ้งหนี้นี้โปรติดต่อ</p>
                            <p class="thickeb">[ชื่อ หมายเลขโทรศัพท์ email@address.com]</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </nav>
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