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
                <h1 class="text-left ">จัดการผู้ใช้งาน</h1>
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
                                    <button class="nav-link active  home-tab2" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">ผู้ใช้ในงานระบบ <i
                                            class="fas fa-user-circle text-left dark-icon " id="i-home"></i></button>
                                    <button class="nav-link profile-tab2" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false" disabled>ฝ่ายเซล <i
                                            class="far fa-user text-left" id="i-profile"></i></button>
                                    <button class="nav-link contact-tab3" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false" disabled>ลูกค้า <i
                                            class="fas fa-user text-left " id="i-contact"></i></button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <section class="content">
                                        <!-- Default box -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">ผู้ใช้ในงานระบบ  &nbsp;&nbsp;&nbsp;<div class="text-green" >{{ Session::get('message_status') }}</div>
                                                <div class="text-red" >{{ Session::get('message_destroy') }}</div></h3>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-danger " data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal">เพิ่มผู้ใช้
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
                                                        <table id="example2" class="table  table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                                                                <thead class="red-back">
                                                                    <tr role="row">
                                                                        <th>
                                                                            ชื่อ
                                                                        </th>
                                                                        <th>อีเมล
                                                                        </th>
                                                                        <th>
                                                                            บทบาท
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach ($users as $user)
                                                                    <tr class="odd">
                                                                        <td class="sorting_1" name="id" style="display:none;">{{$user->id}}</td>
                                                                        <td class="sorting_1" name="username">{{$user->username}}</td>
                                                                        <td class="sorting_1" name="email">{{$user->email}}</td>
                                                                        <td class="sorting_1" name="title_role">{{$user->title_role}}
                                                                            <a  class="btn btn right-button" href="{{url('destroy-system_user',$user->id)}}"  >
                                                                                <i class="fas fa-trash-alt dark-icon"></i>
                                                                            </a>
                                                                            <button type="button"
                                                                                class="btn btn right-button  edit_button"  id="{{$user->id}}" data-bs-toggle="modal" data-bs-target="#examModal" >
                                                                                <i class="far fa-edit"></i>
                                                                            </button>
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
                    <nav>
        </section>
    </div>
</div>

<!-- Modal add-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title " id="exampleModal">เพิ่มผู้ใช้งาน </h5>
                <p class="text-header_user">เพิ่มผู้ใช้งาน</p>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fas fa-times-circle dark-icon"></i></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('home.store') }}">
                    @csrf
                    <div class="mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                    
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="mb-3">
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                            name="username" value="{{ old('username') }}" required autocomplete="username" autofocus
                            placeholder="Username">
                    </div>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="mb-3">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password" placeholder="Password">
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="mb-3">
                        <select class="form-control "  name="title_role" style="width: 100%;">
                            <option data-select2-id="11">role</option>
                            <option data-select2-id="29">Alaska</option>
                            <option data-select2-id="31">Delaware</option>
                            <option data-select2-id="32">Tennessee</option>
                            <option data-select2-id="33">Texas</option>
                            <option data-select2-id="34">Washington</option>
                        </select>
                    </div>
                    @error('title_role')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
            <div class="">
                <button type="submit" class="btn butt-save"> {{ __(' เพิ่มผู้ใช้') }}</button>
            </div>
            </form>
        </div>
    </div>
</div>




<!-- Modal  เเก้ไข-->

<div class="modal fade" id="examModal" tabindex="-1" aria-labelledby="examModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="examModal">เเก้ไขผู้ใช้งาน </h5>
                <p class="text-header_user"  id="message">เเก้ไขผู้ใช้งาน</p>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fas fa-times-circle dark-icon"></i></button>
            </div>

            <div class="modal-body">

                    <div class="mb-3">
                        <input id="id_e" type="text" class="form-control"
                        name="id_e" value="" required autocomplete="id" placeholder="id"  style="display:none;">
                    
                    </div>
                    <div class="mb-3">
                        <input id="email_e" type="email" class="form-control @error('email_e') is-invalid @enderror"
                        name="email_e" value="" required autocomplete="email" placeholder="Email">
                    
                    </div>
                    @error('email_e')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="mb-3">
                        <input id="username_e" type="text" class="form-control @error('username_e') is-invalid @enderror"
                            name="username_e" value=""  required autocomplete="username" autofocus
                            placeholder="Username">
                    </div>
                    @error('username_e')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="mb-3">
                        <input id="password_e" type="password"
                            class="form-control @error('password_e') is-invalid @enderror" name="password_e" required
                            autocomplete="new-password" placeholder="Password">
                    </div>
                    @error('password_e')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="mb-3">
                        <select class="form-control "id="title_role_e"  name="title_role_e" style="width: 100%;">
                            <option data-select2-id="11">role</option>
                            <option data-select2-id="29">Alaska</option>
                            <option data-select2-id="31">Delaware</option>
                            <option data-select2-id="32">Tennessee</option>
                            <option data-select2-id="33">Texas</option>
                            <option data-select2-id="34">Washington</option>
                        </select>
                    </div>
                    @error('title_role')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
            <div class="">
                <button type="submit" id="edit_serve" class="btn butt-save"> บันทึก</button>
            </div>
        </div>
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
@include('manage_users.script.system_user')
@endsection
