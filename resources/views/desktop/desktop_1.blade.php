@extends('layouts.app_layouts_home')

@section('content')

<!-- Site wrapper -->
<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-height">
        <section class="content padding-le_to">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <h3 class="text-first">FIRST</h3>
                    <h3 class="text-express">EXPRESS</h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"> </span></a>
                        </li>
                        <li class="nav-item  dark-icon">
                            <a class="nav-link" href="#">หน้าหลัก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">ส่งพัสดุชิ้นเดียว</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ส่งพัสดุมากกว่าหนึ่งชิ้น</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">คำนวณค่าส่ง</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">เช็คเลขพัสดุ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "  href="{{ route('desktop.create') }}"  tabindex="-1" aria-disabled="true">ลงทะเบียน</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "  href="{{ url('home') }}"  tabindex="-1" aria-disabled="true">HOME</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="align-on">
                
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <nav class="navbar navbar-expand-lg navbar-light bg-light nav-text">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"> </span></a>
                        </li>
                        <li class="nav-item  nav-color">
                            <a class="nav-link" href="#">หน้าหลัก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">ส่งพัสดุชิ้นเดียว</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ส่งพัสดุมากกว่าหนึ่งชิ้น</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">คำนวณค่าส่ง</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">เช็คเลขพัสดุ</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="align-on">
                
            </div>
        </section>
    </div>
</div>

@endsection