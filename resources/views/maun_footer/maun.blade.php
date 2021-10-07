<aside class="main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="image">
            <img src="{{ asset('image/express.png')}}">
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav nav-tabs" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="icon-black nav-item" id="menu-parent-1">
                    <a class="nav-link ">
                        <i class="fas fa-user-friends icon-black"></i>
                        <p class="text-left icon-black   ">
                            จัดการผู้ใช้งาน
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a class="nav-link text-left-to check-path " data-parent="#menu-parent-1" data-path="home"
                                href="{{ url('home') }}">ผู้ใช้งานระบบ </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-left-to check-path" data-parent="#menu-parent-1" data-path="sale"
                                href="{{ url('sale') }}">ฝ่ายเซล </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-left-to nav-link check-path" data-parent="#menu-parent-1"
                                data-path="customer" href="{{ url('customer') }}">ลูกค้า </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-left-to nav-link check-path" data-parent="#menu-parent-1"
                                data-path="setUp-Users" href="{{ url('setUp-Users') }}">ตั้งค่าบทบาทผู้ใช้ </a>
                        </li>
                    </ul>
                </li>

                <li class="icon-black nav-item" id="menu-parent-2">
                    <a class="nav-link " data-path="/">
                        <i class="fas fa-list icon-black"></i>
                        <p class="text-left icon-black  ">
                            จัดการรายการ
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a class="nav-link text-left-to check-path " class="nav-link check-path"
                                data-parent="#menu-parent-2" data-path="manage-list"
                                href="{{ url('manage-list') }}">จัดการรายการ </a>
                        </li>


                    </ul>
                </li>


                <li class="icon-black nav-item" id="menu-parent-3">
                    <a class="nav-link ">
                        <i class="fas fa-university icon-black"></i>
                        <p class="text-left icon-black ">
                            จัดการบัญชี
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="{{ url('list-invoice') }}" class="nav-link  check-path "
                                data-parent="#menu-parent-3" data-path="list-invoice">
                                <p href="widgets.html" class="text-left-no">
                                    วางบิล
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link check-path" data-path="list-charge" data-parent="#menu-parent-3"
                                href="{{ url('list-charge') }}">
                                <p class="text-left-no">
                                    ใบเเจ้งหนี้
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link check-path" data-path="receipt-list" data-parent="#menu-parent-3"
                                href="{{ url('receipt-list') }}">
                                <p class="text-left-no">
                                    ออกใบเสร็จ
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('cell-commission') }}" class="nav-link check-path"
                                data-parent="#menu-parent-3" data-path="cell-commission">
                                <p class="text-left-no">
                                    คอมมิชชั่นเซลล์
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('manage-customer-information') }}" class="nav-link check-path"
                                data-parent="#menu-parent-3" data-path="manage-customer-information">
                                <p class="text-left-no">
                                    จัดการข้อมูลลูกค้า
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/COD-Refund') }}" class="nav-link check-path" data-parent="#menu-parent-3"
                                data-path="COD-Refund">
                                <p class="text-left-no">
                                    จัดการโอนเงินคืน COD
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('manage-customer') }}" class="nav-link check-path"
                                data-parent="#menu-parent-3" data-path="manage-customer">
                                <p class="text-left-no">
                                    ลูกค้า
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('api-manage') }}" class="nav-link check-path"
                                data-parent="#menu-parent-3" data-path="api-manage">
                                <p class="text-left-no">
                                    TEST API
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="icon-black nav-item" id="menu-parent-4">
                    <a class="nav-link " data-path="/">
                        <i class="fas fa-pen icon-black"></i>
                        <p class="text-left icon-black  ">
                            เรทราคาส่ง
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a class="nav-link text-left-to check-path " class="nav-link check-path"
                                data-parent="#menu-parent-4" data-path="shipping-rate"
                                href="{{ url('shipping-rate') }}">ปรัทเรทคาส่ง </a>
                        </li>


                    </ul>
                </li>

                <li class="icon-black nav-item" id="menu-parent-5">
                    <a class="nav-link " data-path="/">
                        <i class="fas fa-chart-line icon-black"></i>
                        <p class="text-left icon-black  ">
                            รายงาน
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a class="nav-link text-left-to check-path " class="nav-link check-path"
                                data-parent="#menu-parent-5" data-path="daily-report"
                                href="{{ url('daily-report') }}">รายงานประจำวัน </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a class="nav-link text-left-to check-path " class="nav-link check-path" data-path="/"
                                href="{{ url('desktop') }}">Desktop </a>
                        </li>
                    </ul>
                </li>

                <li class="icon-black nav-item" id="menu-parent-6">
                    <a class="nav-link " data-path="/">
                    <i class="fas fa-sign-out-alt icon-black"></i>
                        <p class="text-left icon-black ">
                            Logout
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                        <a href="{{ route('logout') }}" class="nav-link " onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <p class="text-left-no">
                                    {{ __('Logout') }}
                                </p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>


                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>