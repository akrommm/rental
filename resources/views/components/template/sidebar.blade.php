<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable ps-theme-dark">
            <br>
            <li class="font-weight-bold ml-3">Menu</li>
            <!-- <li class=" ml-3">Menu</li> -->
            <li class="nav-item {{request()->is('admin/dashboard') ? 'active' : ''}}">
                <a href=" {{ url('admin/dashboard') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-inbox"></i>
                    </span>
                    <span class="title">Master-Data</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{request()->is('admin/manajemen-produk') ? 'active' : ''}} ">
                        <a href="{{ url('admin/manajemen-produk') }}"><i class="anticon anticon-book"></i> Manajemen Produk</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class="{{request()->is('admin/kategori-produk') ? 'active' : ''}} ">
                        <a href="{{ url('admin/kategori-produk') }}"><i class="fas fa-paperclip"></i> Kategori Produk</a>
                    </li>
                </ul>
            </li>
            <hr>
            <li class="nav-item {{request()->is('beranda') ? 'active' : ''}}">
                <a href=" {{ url('beranda') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-right-circle"></i>
                    </span>
                    <span class="title">Kehalaman Depan</span>
                </a>
            </li>
        </ul>
    </div>
</div>