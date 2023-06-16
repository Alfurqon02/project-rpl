<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">
    <!-- Sidebar content -->
    <div class="sidebar-content">
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">
                <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigasi</h5>
                <div>
                    <button type="button"
                        class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="ph-arrows-left-right"></i>
                    </button>
                    <button type="button"
                        class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                        <i class="ph-x"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="ph-house fs-5"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                <li class="nav-item">
                    <a href="{{ route('pesanan') }}" class="nav-link">
                        <i class="ph-house fs-5"></i>
                        <span>
                            Pesanan
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                <li class="nav-item">
                    <a href="{{ route('history') }}" class="nav-link">
                        <i class="ph-house fs-5"></i>
                        <span>
                            History
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
