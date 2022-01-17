<div class="main-sidebar" id="divMenu">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="javascript:void(0)" style="height:30px;">
                <img src="{{ asset('ladun') }}/stisla/img/al-hafiz.png" style="width: 60px;margin-top:20px;">
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="javascript:void(0)"></a>
        </div>
        <ul class="sidebar-menu" style="margin-top:20px;">
            <li><a class="nav-link" @click="dashboardAtc()" href="javascript:void(0)"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            <li><a class="nav-link" @click="absensiAtc()" href="javascript:void(0)"><i class="fas fa-chart-bar"></i><span>Absensi Harian</span></a></li>
            <li><a class="nav-link" @click="pembayaranSppAtc()" href="javascript:void(0)"><i class="fas fa-chart-bar"></i><span>Pembayaran SPP</span></a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-newspaper"></i> <span>Data Master</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="javascript:void(0)" @click="santriAtc()">Santri</a></li>
                    <li><a class="nav-link" href="javascript:void(0)" @click="pengurusAtc()">Pengurus</a></li>
                    <li><a class="nav-link" href="javascript:void(0)">Kafilah</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-newspaper"></i> <span>Keuangan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="javascript:void(0)">Penggajian</a></li>
                    <li><a class="nav-link" href="javascript:void(0)">Pengeluaran</a></li>
                    <li><a class="nav-link" href="javascript:void(0)">Donasi</a></li>
                    <li><a class="nav-link" href="javascript:void(0)">Cash Flow</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="{{ url('/logout') }}"><i class="fas fa-sign-out-alt"></i> <span>Log Out</span></a></li>
        </ul>
    </aside>
</div>