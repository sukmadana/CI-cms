 <!-- Sidebar -->
 <nav id="sidebar">
        <!-- Sidebar Scroll Container -->
        <div id="sidebar-scroll">
            <!-- Sidebar Content -->
            <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
            <div class="sidebar-content">
                <!-- Side Header -->
                <div class="side-header side-content bg-white-op">
                    
                    
                    <a class="h5 text-white" href="<?=base_url();?>">
                        <span class="h4 font-w600 sidebar-mini-hide">My Travel CMS</span>
                    </a>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="side-content side-content-full">
                    <ul class="nav-main">
                        <li>
                            <a class="active" href="<?=base_url('mypanel')?>"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-docs"></i><span class="sidebar-mini-hide">Pages</span></a>
                            <ul>
                                <li>
                                    <a href="#">Page List</a>
                                </li>
                                <li>
                                    <a href="#">New Page</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="" href="<?=base_url()?>mypanel/media"><i class="si si-picture"></i><span class="sidebar-mini-hide">Media</span></a>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-camera"></i><span class="sidebar-mini-hide">Appearance</span></a>
                            <ul>
                                <li>
                                    <a href="#">Theme Status</a>
                                </li>
                                <li>
                                    <a href="#">Plugin Status</a>
                                </li>
                                <li>
                                    <a href="#">Menu</a>
                                </li>
                                <li>
                                    <a href="#">Widget</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-users"></i><span class="sidebar-mini-hide">User</span></a>
                            <ul>
                                <li>
                                    <a href="<?=base_url('mypanel/user')?>">User List</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>mypanel/user/add">New User</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-settings"></i><span class="sidebar-mini-hide">Setting</span></a>
                            <ul>
                                <li>
                                    <a href="<?=base_url()?>mypanel/setting">General</a>
                                </li>
                                <!-- <li>
                                    <a href="#">SEO</a>
                                </li> -->
                                <li>
                                    <a href="<?=base_url()?>mypanel/setting/sitestatus">Site Status</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
                <!-- END Side Content -->
            </div>
            <!-- Sidebar Content -->
        </div>
        <!-- END Sidebar Scroll Container -->
    </nav>
    <!-- END Sidebar -->