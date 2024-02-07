<style>
#layoutSidenav {
    display: flex;
}

#layoutSidenav_nav {
    width: 250px; /* Set a fixed width for the sidebar */
}

#sidenavAccordion {
    /* Add styles for your navigation accordion here */
}

/* Media query for smaller screens */
@media (max-width: 768px) {
    #layoutSidenav {
        flex-direction: column; /* Change to a column layout on smaller screens */
    }

    #layoutSidenav_nav {
        width: 100%; /* Full width for the sidebar on smaller screens */
    }
}
</style>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-5" href="Homee.php" ><img src="img/logo-rag.png"  width="90px" height="60px"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                <a  href="cart.php"><img src="img/pngtree.png" width="22px" height="22px" ></a>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="Homee.php">หน้าเเรก</a></li>
                        <li><a class="dropdown-item" href="https://www.instagram.com/_g.get/">ติดต่อ-สอบถาม</a></li>
                        <li><a class="dropdown-item" href="https://ggt-support.freshdesk.com/support/home">เเจ้งปัญหาสำหรับตัวเองจริง</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">

                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Ragnarok classic</div>
                            <a class="nav-link" href="Homee.php">
                            <img src="img/AIINews.png"width="32px" height="32px"> 
                                AII News
                            </a>
                                <a class="nav-link" href="Homee.php">
                            <img src="img/R.png"width="32px" height="32px">
                                Events
                            </a>
                            <div class="sb-sidenav-menu-heading">Explore Market</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <img src="img/shopp.png"width="32px" height="32px">
                                Market
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="Roshop.php">
                                <img src="img/All.png"width="32px" height="32px">AII
                                 </a>
                                <a class="nav-link" href="Roshop.php">
                                <img src="img/mak.png"width="32px" height="32px">Headgears
                                </a>
                                <a class="nav-link" href="Roshop.php">
                                <img src="img/Arom.png"width="32px" height="32px">Armors
                                </a>
                                <a class="nav-link" href="Roshop.php">
                                <img src="img/ca.png"width="32px" height="32px">Cards shadow.png
                                </a>
                                <a class="nav-link" href="Roshop.php">
                                <img src="img/shadow.png"width="32px" height="32px">Shadow
                                </a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Other Item
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Usable Item
                                    </a>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        ETC.
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">

                    </div>
                </nav>
            </div>