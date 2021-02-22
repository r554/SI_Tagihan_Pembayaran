<nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">

            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="<?= base_url() ?>assets/dist/assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
                    <div class="user-details">
                        <div id="more-details"><?php echo $this->session->userdata('nama') ?></div>
                    </div>
                </div>
                <!-- <div class="collapse" id="nav-user-link">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="user-profile.html" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
                        <li class="list-inline-item"><a href="email_inbox.html"><i class="feather icon-mail" data-toggle="tooltip" title="Messages"></i><small class="badge badge-pill badge-primary">5</small></a></li>
                        <li class="list-inline-item"><a href="<?= base_url('Auth_admin/logout') ?>" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
                    </ul>
                </div> -->
            </div>

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Kelola Data</label>
                </li>
                <li class="nav-item active">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span>Dashboard</a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Data Pelanggan</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="#" target="_blank">Pelanggan Aktif</a></li>
                        <li><a href="#" target="_blank">Pelanggan Non Aktif</a></li>
                        <li><a href="#" target="_blank">Pelanggan Baru</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Data Layanan</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="widget-statistic.html">Daftar Layanan</a></li>
                        <!-- <li><a href="widget-data.html">Data</a></li>
                        <li><a href="widget-chart.html">Chart</a></li> -->
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Data Tagihan</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="user-profile.html">Tagihan Bulan Ini</a></li>
                        <li><a href="user-card.html">Sudah Bayar</a></li>
                        <li><a href="user-list.html">Tunggakan</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Kelola Aplikasi<span class="pcoded-badge badge badge-danger">NEW</span></label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user-check"></i></span><span class="pcoded-mtext">User</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="member-dashboard.html">Daftar User</a></li>
                        <!-- <li><a href="member-mail-template.html">Email templates</a></li>
                        <li><a href="member-countries.html">Country</a></li>
                        <li><a href="member-coupons.html">Coupons</a></li>
                        <li><a href="member-newsletter.html">Newsletter</a></li>
                        <li><a href="member-user.html">User</a></li>
                        <li><a href="member-membership.html">Membership</a></li> -->
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-settings"></i></span><span class="pcoded-mtext">Pengaturan</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="help-dashboard.html">Helpdesk dashboard</a></li>
                        <li><a href="help-create-ticket.html">Create ticket</a></li>
                        <li><a href="help-ticket.html">ticket list</a></li>
                        <li><a href="help-ticket-details.html">ticket Details</a></li>
                        <li><a href="help-customer.html">Customer</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>