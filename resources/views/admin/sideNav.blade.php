    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">

                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{url('a/dashboard')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div> Dashboard </a>
                    <a class="nav-link" href="{{url('a/requests')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-seedling"></i></div> Service Requests </a>



                    <div class="sb-sidenav-menu-heading">Lab</div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Members
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav font-weight-light">
                            <a class="nav-link" href="{{url('a/applications')}}"><i class="fas fa-paper-plane mr-2"></i>Applications</a>
                            <a class="nav-link" href="{{url('a/members')}}"><i class="fas fa-box-open mr-2"></i>All Members</a>
                            <a class="nav-link" href="{{url('a/member/add')}}"><i class="fas fa-plus-square mr-2"></i>Add Member</a>
                            <a class="nav-link" href="{{url('a/member/edit')}}"><i class="fas fa-edit mr-2"></i>Edit Member</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
                        <div class="sb-nav-link-icon"><i class="fas fa-universal-access"></i></div>
                        Admin
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts2" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav font-weight-light">
                            @if($LoggedAdminInfo->type_admin == 1)
                                <a class="nav-link" href="{{url('a/admins')}}"><i class="fas fa-box-open mr-2"></i>All Admins</a>
                                <a class="nav-link" href="{{url('a/admin/add')}}"><i class="fas fa-plus-square mr-2"></i>Add Admin</a>
                                <a class="nav-link" href="{{url('a/admin/edit')}}"><i class="fas fa-edit mr-2"></i>Edit Admin</a>
                            @else
                                <a class="nav-link" href="{{url('a/staff')}}"><i class="fas fa-box-open mr-2"></i>Staff</a>
                            @endif
                        </nav>
                    </div>


                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                {{ session('LoggedAdminType') == 1 ? "SUPER ADMIN" : "ADMIN" }}
            </div>
        </nav>
    </div>
