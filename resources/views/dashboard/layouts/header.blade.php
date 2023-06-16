<div class="navbar navbar-dark navbar-expand-lg navbar-static border-bottom border-bottom-white border-opacity-10">
    <div class="container-fluid">
        <div class="d-flex d-lg-none me-2">
            <button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
                <i class="ph-list"></i>
            </button>
        </div>
        <div class="navbar-brand flex-1 flex-lg-0">
            <a href="/" class="d-inline-flex align-items-center text-reset">
                <img src="" alt="">
                <h5 class="d-none d-sm-inline-block h-35px ms-3 m-0">DNA Spot Cafe</h5>
            </a>
        </div>
        <ul class="nav flex-row justify-content-end order-1 order-lg-2">
            <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                <a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <div class="status-indicator-container">
                        <img src="" class="w-32px h-32px rounded-pill"
                            alt="">
                        <span class="status-indicator bg-success"></span>
                    </div>
                    <span class="d-none d-lg-inline-block mx-lg-2">Username</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <form action="" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="ph-sign-out me-2"></i>
                            Keluar
                        </button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>
