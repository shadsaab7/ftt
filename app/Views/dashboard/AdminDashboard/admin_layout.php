<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Dashboard | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="/public/assets/css/dashlite.css?ver=2.4.0">
    <link id="skin-default" rel="stylesheet" href="/public/assets/css/theme.css?ver=2.4.0">
    <link rel="stylesheet" type="text/css" href="/public/assets/css/libs/fontawesome-icons.css">
</head>

<body class="nk-body ui-rounder npc-default has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-sidebar" data-content="sidebarMenu">
            <div class="nk-sidebar-bar">
                <div class="nk-apps-brand">
                    <a href="<?= route_to('admin_index') ?>" class="logo-link">
                        <img class="logo-light logo-img" src="public/images/FTT_Online_Logo@640.png" srcset="./images/logo-small2x.png 2x" alt="logo">
                        <img class="logo-dark logo-img" src="public/images/FTT_Online_Logo@640.png" srcset="./images/logo-dark-small2x.png 2x" alt="logo-dark">
                    </a>
                </div>
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-body">
                        <div class="nk-sidebar-content" data-simplebar>
                            <div class="nk-sidebar-menu">
                                <!-- Menu -->
                                <ul class="nk-menu apps-menu">
                                    <li class="nk-menu-item active">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navDashboards">
                                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navFlight">
                                            <span class="nk-menu-icon" style="font-size: 20px;"><em class="fas fa-plane"></em></span>
                                        </a>
                                    </li> 
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navHotels">
                                            <span class="nk-menu-icon" style="font-size: 20px;"><em class="fas fa-hotel"></em></span>
                                        </a>
                                    </li> 
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navTour">
                                            <span class="nk-menu-icon" style="font-size: 20px;"><em class="fas fa-gift"></em></span>
                                        </a>
                                    </li> 
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navBus">
                                            <span class="nk-menu-icon" style="font-size: 20px;"><em class="fas fa-bus"></em></span>
                                        </a>
                                    </li> 
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navVendors">
                                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        </a>
                                    </li> 
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navApps">
                                            <span class="nk-menu-icon"><em class="icon ni ni-sign-inr"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navUsers">
                                            <span class="nk-menu-icon"><em class="icon ni ni-user-list"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navClient">
                                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navNews">
                                            <span class="nk-menu-icon"><em class="icon ni ni-user-round"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navEnquiry">
                                            <span class="nk-menu-icon"  style="font-size: 20px;"><em class="fas fa-address-card"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navAccountHead">
                                            <span class="nk-menu-icon" ><em class="icon ni ni-sign-inr"></em></span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="nk-sidebar-main is-light">
                <div class="nk-sidebar-inner" data-simplebar>
                    <div class="nk-menu-content menu-active" data-content="navDashboards">
                        <h5 class="title">Dashboards</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="<?= route_to('admin_index') ?>" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nk-menu-content" data-content="navApps">
                        <h5 class="title">Accounts</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-wallet-alt"></em></span>
                                    <span class="nk-menu-text">Wallet Details</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-sign-inr"></em></span>
                                    <span class="nk-menu-text">Transaction</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nk-menu-content" data-content="navUsers">
                        <h5 class="title">Users</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="<?= route_to('user_details') ?>" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-list"></em></span>
                                    <span class="nk-menu-text">Users Details</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nk-menu-content" data-content="navClient">
                        <h5 class="title">Clients</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="<?= route_to('add_client') ?>" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-add-fill"></em></span>
                                    <span class="nk-menu-text">Add Client</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="<?= route_to('client_details') ?>" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-list-fill"></em></span>
                                    <span class="nk-menu-text">Client Details</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nk-menu-content" data-content="navNews">
                        <h5 class="title">News</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="<?= route_to('news_list') ?>" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-vol"></em></span>
                                    <span class="nk-menu-text">News & Announcement</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="<?= route_to('add_news') ?>" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-round"></em></span>
                                    <span class="nk-menu-text">Add News</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nk-menu-content" data-content="navEnquiry">
                        <h5 class="title">Enquiry</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="<?= route_to('enquiry_for') ?>" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-vol"></em></span>
                                    <span class="nk-menu-text">Enquiry For</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="<?= route_to('contact') ?>" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-round"></em></span>
                                    <span class="nk-menu-text">Contact Us</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nk-menu-content" data-content="navFlight">
                        <h5 class="title">Flight</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-grid-plus-fill"></em></span>
                                    <span class="nk-menu-text">Add</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-sign-inr"></em></span>
                                    <span class="nk-menu-text">Group Fare</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-sign-inr"></em></span>
                                    <span class="nk-menu-text">Special Fare</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-search"></em></span>
                                    <span class="nk-menu-text">Search</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nk-menu-content" data-content="navHotels">
                        <h5 class="title">Hotels</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-grid-plus-fill"></em></span>
                                    <span class="nk-menu-text">Add</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-sign-inr"></em></span>
                                    <span class="nk-menu-text">Special Fare</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-search"></em></span>
                                    <span class="nk-menu-text">Search</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nk-menu-content" data-content="navTour">
                        <h5 class="title">Tour Packages</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-grid-plus-fill"></em></span>
                                    <span class="nk-menu-text">Add</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-search"></em></span>
                                    <span class="nk-menu-text">Search</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nk-menu-content" data-content="navBus">
                        <h5 class="title">Bus | Train | Car</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-grid-plus-fill"></em></span>
                                    <span class="nk-menu-text">Add</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-search"></em></span>
                                    <span class="nk-menu-text">Search</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nk-menu-content" data-content="navVendors">
                        <h5 class="title">Vendors</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-list"></em></span>
                                    <span class="nk-menu-text">Vendors Details</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nk-menu-content" data-content="navAccountHead">
                        <h5 class="title">Accounts Head</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-wallet-alt"></em></span>
                                    <span class="nk-menu-text">Wallet Details</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-sign-inr"></em></span>
                                    <span class="nk-menu-text">Transaction</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed nk-header-fluid is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="#" class="logo-link">
                                    <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-search ml-3 ml-xl-0">
                            </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <div class="dropdown-inner user-card-wrap bg-lighter">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span><?= strtoupper(substr(session()->get('admin.first_name'), 0, 2)); ?></span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text"><?= session()->get('admin.first_name') ?></span>
                                                        <span class="sub-text"><?= session()->get('admin.email') ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="<?= route_to('admin_profile') ?>"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="<?= route_to('logout') ?>"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <?= $this->renderSection('content') ?>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="/public/assets/js/bundle.js?ver=2.4.0"></script>
    <script src="/public/assets/js/scripts.js?ver=2.4.0"></script>
    <script src="/public/assets/js/charts/chart-ecommerce.js?ver=2.4.0"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?= $this->renderSection('javascript') ?>
</body>

</html>