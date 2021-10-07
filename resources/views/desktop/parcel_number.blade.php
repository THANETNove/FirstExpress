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
                            <div class="row reght-aling">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">เลขพัสดุ :
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="inputEmail3"
                                                placeholder="TH12345678910">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class=" col-sm-6 text-center box-number">
                                </br>
                                <p>กรุงเทพ <i class="fas fa-arrow-right icon-black text-center text-width"></i>
                                    กาญจนบุรี
                                </p>
                            </div>

                            <div class="col-sm-10">
                                <br>
                                <br>
                                <p class="herd-center thicker">ติดตามสถานะ</p>
                            </div>
                            <div class="bok-pa-num"></div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <nav>
</section>

<div class="col-sm-10">
    <a href="{{ url('COD-Status') }}" class="nav-link ">
        <p class=" btn">
            back pant COD-Status
        </p>
    </a>
    <a href="{{ url('invoice') }}" class="nav-link ">
        <p class="btn">
            pant invoice
        </p>
    </a>
</div>



@endsection