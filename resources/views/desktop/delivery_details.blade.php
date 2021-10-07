@extends('layouts.app_layouts_home')

@section('content')

<!-- Main content -->
<section class="content">
    <nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <section class="content">
                        <!-- Default box -->
                        <div class="card ">
                            <div class="card-header">
                                <label class="parcel-left"><br>เลขพัสดุ: 12345678910 </label>

                            </div>
                            <br>
                            <div class=" col-sm-6 text-center box-back" >
                                </br>
                                <p >กรุงเทพ  <i class="fas fa-arrow-right icon-black text-center text-width"></i> กาญจนบุรี
                                </p>
                            </div>

                            <div class="card-body">
                                <form>
                                    <div class="row reght-aling">
                                        <div class="col-sm-6 text-left">

                                            <div class="box-parcel">
                                                <p>shein by sis.sie </p>
                                                <p>09876766xx</p>
                                                <p>กรุงเทพมหานคร</p>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputEmail3"
                                                    class="col-sm-6 col-form-label text-center">ติดตามสถานะ
                                                </label>

                                            </div>
                                            <div class="form-group row">
                                                <div class="box-delivery"></div>

                                            </div>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <div class="form-group row">
                                                <label for="inputEmail3"
                                                    class="col-sm-6 col-form-label text-center">รายละเอียดพัสดุ
                                                </label>
                                            </div> 
                                            <div class="box-delivery_right text-left">
                                                <p><a  class="thicker text-gray-dark">ผู้ส่ง</a> happy shop 08796789xx</p>  <p> 194 หมู่ 4 ไพลา บางแค กทม </p>
                                            </div>
                                            
                                            <div class="box-delivery_right text-left">
                                                <p><a  class="thicker text-gray-dark">ผู้รับ</a> shein by sis.sie 09876766xx</p>  <p>  34 ลาลาแลนด์ บางรัก กรุงเทพมหานคร   </p>
                                            </div>
                                            <div class="box-delivery text-left ">
                                             <label for="inputEmail3"
                                                    class="col-sm-6 col-form-label ">ประเภทสินค้า
                                                </label>
                                                <label for="inputEmail3"
                                                    class="col-sm-6 col-form-label ">น้ำหนัก
                                                </label>
                                                <label for="inputEmail3"
                                                    class="col-sm-6 col-form-label">ขนาด
                                                </label>
                                                <label for="inputEmail3"
                                                    class="col-sm-6 col-form-label">ค่าส่ง
                                                </label>
                                                <label for="inputEmail3"
                                                    class="col-sm-6 col-form-label ">คาดการณ์จัดส่ง ภายในวันที่
                                                </label>
                                                <label for="inputEmail3"
                                                    class="col-sm-6 col-form-label">ยอด COD
                                                </label>
                                                <label for="inputEmail3"
                                                    class="col-sm-6 col-form-label">ประกันคุ้มครองพัสดุ
                                                </label>
                                                <label for="inputEmail3"
                                                    class="col-sm-6 col-form-label">เวลาเข้ารับสินค้า
                                                </label>
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

<div class="col-sm-10">
    <a href="{{ url('my-parcel') }}" class="nav-link ">
        <p class=" btn">
            back pant my-parcel
        </p>
    </a>
    <a href="{{ url('COD-Status') }}" class="nav-link ">
        <p class="btn">
            pant COD-Status
        </p>
    </a>
</div>



@endsection