<!doctype html>
<html lang="en">

<head>
    <!-- initiate head with meta tags, css and script -->
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/toastr-master/build/toastr.css">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="https://demo.smartcart.shopping/favicon.png" />

    <!-- font awesome library -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">

    <!-- themekit admin template asstes -->
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/icon-kit/dist/css/iconkit.min.css">
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/jquery-ui/jquery-ui.css">
    <!-- Stack array for including inline css or head elements -->
    <title>Dashboard | Admin Panel</title>

    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/weather-icons/css/weather-icons.min.css">
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://demo.smartcart.shopping/plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/chartist/dist/chartist.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://demo.smartcart.shopping/dist/css/theme.min.css">
    <link rel="stylesheet" href="https://demo.smartcart.shopping/css/style.css">
    <script src="https://demo.smartcart.shopping/src/js/vendor/modernizr-2.8.3.min.js"></script>

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('b3284130a7e422708888', {
            cluster: 'mt1',
            encrypted: true
        });
    </script>
    <style>
        .toast-top-right {
            top: 64px;
        }
    </style>
</head>


<body id="app">
    <div class="wrapper">
        <!-- initiate header-->
        <header class="header-top" header-theme="blue">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <div class="top-menu d-flex align-items-center">
                        <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                        <button type="button" id="navbar-fullscreen" class="nav-link"><i
                                class="ik ik-maximize"></i></button>
                    </div>
                    <div class="top-menu d-flex align-items-center">
                        <div class="dropdown dropdown-notifications" style="background: #fff3; border-radius: 50%;">
                            <a class="nav-link dropdown-toggle" href="#" id="notiDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="ik ik-bell"></i><span class="badge bg-danger notif-count"
                                    data-count='0'></span></a>
                            <div class="dropdown-menu dropdown-menu-right notification-dropdown"
                                aria-labelledby="notiDropdown">
                                <h4 class="header">Notifications
                                    <small class="dropdown-toolbar-actions">
                                        <a href="#" onclick="location.reload()"
                                            style="float: right;font-size: 11px;">Mark all
                                            as read</a>
                                    </small>
                                </h4>
                                <div class="notifications-wrap">

                                </div>
                                <div class="dropdown-footer text-center">
                                    <a href="notifications">View All</a>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="nav-link ml-10 right-sidebar-toggle d-none"><i
                                class="ik ik-message-square"></i><span class="badge bg-success">3</span></button>

                        <button type="button" class="nav-link ml-10 d-none" id="apps_modal_btn" data-toggle="modal"
                            data-target="#appsModal"><i class="ik ik-grid"></i></button>
                        <div class="dropdown" style="background: #fff3; border-radius: 50%;">

                            <a href="#"><img src="#" style="width: 30px;height: 30px;border-radius: 50%;"
                                    alt="">
                            </a>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    class="avatar" src="#" alt=""></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile"><i
                                        class="ik ik-user dropdown-icon"></i>Profile</a>
                                <a class="dropdown-item" href="logout"><i
                                        class="ik ik-power dropdown-icon"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="page-wrap">
            <!-- initiate sidebar-->
            <div class="app-sidebar">
                <div class="sidebar-header">
                    <a class="header-brand" href="#">
                        <div class="logo-img text-center">
                            <h4>Smart Cart</h4>
                        </div>
                    </a>
                    <button type="button" class="nav-toggle"><i data-toggle="expanded"
                            class="ik ik-toggle-right toggle-icon"></i></button>
                    <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                </div>


                <div class="sidebar-content">
                    <div class="nav-container">
                        <nav id="main-menu-navigation" class="navigation-main">
                            <div class="px-2 py-1">
                                <input type="text" class="form-control" placeholder="Search..."
                                    id="cm_menu_search_input">
                            </div>
                            <div class="nav-item active" id="dashboard">
                                <a href="#"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                            </div>

                            <div class="nav-item " id="dispatcher">
                                <a href="#"><i class="fas fa-desktop"></i><span>Dispatcher</span></a>
                            </div>

                            <div class="nav-lavel" id="messages-management">Messages Management</div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-question"></i><span>Support Tickets</span> <span
                                        class="badge badge-warning">0 </span></a>
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-car"></i><span>Drivers Support Tickets</span></a>
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-bell"></i><span>Send Notifications</span></a>
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-star"></i><span>Customers Feedback</span></a>
                            </div>

                            <div class="nav-lavel" id="customers-management">Customers Management</div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-users"></i><span>All Customers</span></a>
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-braille"></i><span>Customers Points</span></a>
                            </div>

                            <div class="nav-lavel" id="drivers-management">Drivers Management</div>
                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-car"></i><span>All Drivers</span></a>
                            </div>
                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-people-carry"></i><span>Pending Drivers</span></a>
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-calendar-alt"></i><span>Shift Details</span></a>
                            </div>
                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-calendar"></i><span>Shift Calendar</span></a>
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-clipboard"></i><span>Notified Drivers</span></a>
                            </div>

                            <div class="nav-lavel" id="merchants-management">Merchants Management</div>
                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-store"></i><span>All Merchants</span></a>
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-store-alt"></i><span>Add New Merchant</span></a>
                            </div>

                            <div class="nav-lavel" id="administrators-management">Administrators Management
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-users-cog"></i><span>All Administrators</span></a>
                            </div>
                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-user-cog"></i><span>Add New
                                        Administrator</span></a>
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-users-cog"></i><span>Activity Logs</span></a>
                            </div>

                            <div class="nav-item has-sub " id="city">
                                <a href="#"><i class="fas fa-city"></i><span>Roles &amp; Permissions</span></a>
                                <div class="submenu-content">
                                    <a href="#" class="menu-item"><span>Roles List</span> </a>
                                    <a href="#" class="menu-item "><span>Users Roles</span> </a>
                                </div>
                            </div>

                            <div class="nav-lavel" id="catalog-management">Catalog Management</div>
                            <div class="nav-item has-sub ">
                                <a href="#"><i class="fas fa-cubes"></i><span>Manage Services</span></a>
                                <div class="submenu-content">
                                    <a href="#" class="menu-item"><span>List</span> </a>
                                    <a href="#" class="menu-item "><span>Add New</span> </a>
                                </div>
                            </div>

                            <div class="nav-item has-sub " id="manage-categories">
                                <a href="#"><i class="fas fa-sitemap"></i><span>Manage Categories</span></a>
                                <div class="submenu-content">
                                    <a href="#" class="menu-item "><span>List (Tree View)</span> </a>
                                    <a href="#" class="menu-item "><span>List (Table View)</span> </a>
                                    <a href="#" class="menu-item "><span>List (Sitemap View)</span> </a>

                                    <a href="#" class="menu-item "><span>Add New</span> </a>
                                </div>
                            </div>

                            <div class="nav-item has-sub " id="manage-products">
                                <a href="#"><i class="fas fa-list"></i><span>Manage Products</span></a>
                                <div class="submenu-content">
                                    <a href="#" class="menu-item "><span>List</span> </a>
                                    <a href="#" class="menu-item "><span>Add New</span> </a>
                                    <a href="#" class="menu-item "><span>Product Unit</span> </a>
                                    <a href="#" class="menu-item "><span>Pending Product</span> </a>
                                </div>
                            </div>

                            <div class="nav-item has-sub " id="manage-sample-products">
                                <a href="#"><i class="fas fa-tasks"></i><span>Manage Sample Products</span></a>
                                <div class="submenu-content">
                                    <a href="#" class="menu-item "><span>List</span> </a>
                                    <a href="#" class="menu-item "><span>Add New</span> </a>
                                </div>
                            </div>

                            <div class="nav-lavel" id="all-orders">Orders Management</div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-receipt"></i><span>All Orders</span></a>
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-clipboard"></i><span>Anything Orders</span></a>
                            </div>



                            <div class="nav-lavel" id="merchant-statements">Merchant Statements</div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-dollar-sign"></i><span>Payout Amount</span></a>
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-dollar-sign"></i><span>Transactions</span></a>
                            </div>

                            <div class="nav-lavel" id="driver-statements">Driver Statements</div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-money-bill"></i><span>Payout Amount</span></a>
                            </div>

                            <div class="nav-item has-sub ">
                                <a href="#"><i class="fas fa-donate"></i><span>Zain Cash</span></a>
                                <div class="submenu-content">
                                    <a href="#" class="menu-item"><span>All</span> </a>
                                    <a href="#" class="menu-item "><span>Open</span> </a>
                                </div>
                            </div>

                            <div class="nav-lavel" id="marketing">Marketing</div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-percent"></i><span>Coupons</span></a>
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-bullhorn"></i><span>All Offers</span></a>
                            </div>
                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-bullhorn"></i><span>Paid Offers</span></a>
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-images"></i><span>Banners Managment</span></a>
                            </div>

                            <div class="nav-lavel" id="feedback">Feedback</div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-star"></i><span>Merchant Reviews</span></a>
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="far fa-star"></i><span>Driver Reviews</span></a>
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-star"></i><span>Customer Reviews</span></a>
                            </div>

                            <div class="nav-lavel" id="definitions">Definitions</div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-question-circle"></i><span>Faqs</span></a>
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-comments"></i><span>Feedback</span></a>
                            </div>

                            <div class="nav-lavel" id="delivery-management">Delivery Management</div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-shipping-fast"></i><span>Tawseleh</span></a>
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-truck"></i><span>Merchants tawseleh</span></a>
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-map-marker"></i><span>Areas</span></a>
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="fas fa-dollar-sign"></i><span>Delivery Costs</span></a>
                            </div>

                            <div class="nav-lavel" id="Settings">Settings</div>

                            <div class="nav-item ">
                                <a href="#"><i class="fa fa-percent"></i><span>Driver Commission</span></a>
                            </div>

                            <div class="nav-item ">
                                <a href="#"><i class="fa fa-cogs"></i><span>Settings</span></a>
                            </div>
                            <div class="nav-item ">
                                <a href="#"><i class="far fa-clock"></i><span>Working hours</span></a>
                            </div>

                            <div class="nav-item has-sub ">
                                <a href="#"><i class="ik ik-globe"></i><span>Country</span></a>
                                <div class="submenu-content">
                                    <a href="#" class="menu-item"><span>List</span> </a>
                                    <a href="#" class="menu-item "><span>Add New</span> </a>
                                </div>
                            </div>

                            <div class="nav-item has-sub " id="nationalities">
                                <a href="#"><i class="fas fa-globe-asia"></i><span>Nationalities</span></a>
                                <div class="submenu-content">
                                    <a href="#" class="menu-item"><span>List</span> </a>
                                    <a href="#" class="menu-item "><span>Add New</span> </a>
                                </div>
                            </div>

                            <div class="nav-item has-sub " id="city">
                                <a href="#"><i class="fas fa-city"></i><span>City</span></a>
                                <div class="submenu-content">
                                    <a href="#" class="menu-item"><span>List</span> </a>
                                    <a href="#" class="menu-item "><span>Add New</span> </a>
                                </div>
                            </div>

                            <div class="nav-item " id="cancel-reasons'">
                                <a href="#"><i class="fas fa-ban"></i><span>Cancel Reasons</span></a>
                            </div>

                            <div class="nav-item " id="static-pages">
                                <a href="#"><i class="fas fa-columns"></i><span>Static Pages</span></a>
                            </div>

                            <div class="nav-item " id="walkthrough-pages">
                                <a href="#"><i class="fas fa-paste"></i><span>Walkthrough Pages</span></a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="main-content">
                <!-- yeild contents here -->
                <!-- push external head elements to head -->
                <style>
                    .card .card-header {
                        padding: 10px 20px;
                        border-color: #ffffff36;
                    }
                </style>
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                  </div>
                @endif
                <div class="container-fluid">
                    <form action="{{route('import_product')}}" method="post" enctype="multipart/form-data">
                    
                        @csrf
                        
                        
                        <label class="form-label">Small file input example</label>
                        <input class="form-control" name="excel_file" type="file">
                        @error('excel_file')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <button class="btn btn-primary" type="submit">Upload</button>
                    </form>

                    <table class="table mt-4">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">ItemCode</th>
                            <th scope="col">ItemName</th>
                            <th scope="col">discount</th>
                            <th scope="col">price</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if( count($product))
                            @foreach( $product as $pro )
                                <tr>
                                    <th scope="row">{{ $pro->id }}</th>
                                    <td>{{ $pro->Code }}</td>
                                    <td>{{ $pro->Name }}</td>
                                    <td>{{ $pro->discount }}</td>
                                    <td>{{ $pro->price }}</td>
                                </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td>Data Base Is Empty</td>
                                </tr>
                            @endif
                        </tbody>
                      </table>
                </div>

                <style>
                    #markerLayer img {
                        width: 50px !important;
                        height: 50px !important;
                        margin: 0 auto !important;
                        display: table !important;
                        left: 0 !important;
                        right: 0 !important;
                    }
                </style>

                <!-- push external js -->
            </div>

            <!-- initiate chat section-->
            <aside class="right-sidebar">
                <div class="sidebar-chat" data-plugin="chat-sidebar">
                    <div class="sidebar-chat-info">
                        <h6>Chat List</h6>
                        <form class="mr-t-10">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search for friends ...">
                                <i class="ik ik-search"></i>
                            </div>
                        </form>
                    </div>
                    <div class="chat-list">
                        <div class="list-group row">
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Gene Newman">
                                <figure class="user--online">
                                    <img src="https://demo.smartcart.shopping/img/users/1.jpg" class="rounded-circle"
                                        alt="">
                                </figure><span><span class="name">Gene Newman</span> <span
                                        class="username">@gene_newman</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Billy Black">
                                <figure class="user--online">
                                    <img src="https://demo.smartcart.shopping/img/users/2.jpg" class="rounded-circle"
                                        alt="">
                                </figure><span><span class="name">Billy Black</span> <span
                                        class="username">@billyblack</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Herbert Diaz">
                                <figure class="user--online">
                                    <img src="https://demo.smartcart.shopping/img/users/3.jpg" class="rounded-circle"
                                        alt="">
                                </figure><span><span class="name">Herbert Diaz</span> <span
                                        class="username">@herbert</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Sylvia Harvey">
                                <figure class="user--busy">
                                    <img src="https://demo.smartcart.shopping/img/users/4.jpg" class="rounded-circle"
                                        alt="">
                                </figure><span><span class="name">Sylvia Harvey</span> <span
                                        class="username">@sylvia</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item active"
                                data-chat-user="Marsha Hoffman">
                                <figure class="user--busy">
                                    <img src="https://demo.smartcart.shopping/img/users/5.jpg" class="rounded-circle"
                                        alt="">
                                </figure><span><span class="name">Marsha Hoffman</span> <span
                                        class="username">@m_hoffman</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Mason Grant">
                                <figure class="user--offline">
                                    <img src="https://demo.smartcart.shopping/img/users/1.jpg" class="rounded-circle"
                                        alt="">
                                </figure><span><span class="name">Mason Grant</span> <span
                                        class="username">@masongrant</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Shelly Sullivan">
                                <figure class="user--offline">
                                    <img src="https://demo.smartcart.shopping/img/users/2.jpg" class="rounded-circle"
                                        alt="">
                                </figure><span><span class="name">Shelly Sullivan</span> <span
                                        class="username">@shelly</span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </aside>

            <div class="chat-panel" hidden>
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <a href="javascript:void(0);"><i class="ik ik-message-square text-success"></i></a>
                        <span class="user-name">John Doe</span>
                        <button type="button" class="close" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="card-body">
                        <div class="widget-chat-activity flex-1">
                            <div class="messages">
                                <div class="message media reply">
                                    <figure class="user--online">
                                        <a href="#">
                                            <img src="https://demo.smartcart.shopping/img/users/3.jpg"
                                                class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>Epic Cheeseburgers come in all kind of styles.</p>
                                    </div>
                                </div>
                                <div class="message media">
                                    <figure class="user--online">
                                        <a href="#">
                                            <img src="https://demo.smartcart.shopping/img/users/1.jpg"
                                                class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>Cheeseburgers make your knees weak.</p>
                                    </div>
                                </div>
                                <div class="message media reply">
                                    <figure class="user--offline">
                                        <a href="#">
                                            <img src="https://demo.smartcart.shopping/img/users/5.jpg"
                                                class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>Cheeseburgers will never let you down.</p>
                                        <p>They will also never run around or desert you.</p>
                                    </div>
                                </div>
                                <div class="message media">
                                    <figure class="user--online">
                                        <a href="#">
                                            <img src="https://demo.smartcart.shopping/img/users/1.jpg"
                                                class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>A great cheeseburger is a gastronomical event.</p>
                                    </div>
                                </div>
                                <div class="message media reply">
                                    <figure class="user--busy">
                                        <a href="#">
                                            <img src="https://demo.smartcart.shopping/img/users/5.jpg"
                                                class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>There is a cheesy incarnation waiting for you no matter what you palete
                                            preferences are.</p>
                                    </div>
                                </div>
                                <div class="message media">
                                    <figure class="user--online">
                                        <a href="#">
                                            <img src="https://demo.smartcart.shopping/img/users/1.jpg"
                                                class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>If you are a vegan, we are sorry for you loss.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="javascript:void(0)" class="card-footer" method="post">
                        <div class="d-flex justify-content-end">
                            <textarea class="border-0 flex-1" rows="1" placeholder="Type your message here"></textarea>
                            <button class="btn btn-icon" type="submit"><i
                                    class="ik ik-arrow-right text-success"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- initiate footer section-->
            <footer class="footer">
                <div class="w-100 clearfix">
                    <span class="text-center text-sm-left d-md-inline-block">
                        Copyright © 2023 Smart Cart, All Rights Reserved.
                    </span>
                    <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">

                    </span>
                </div>
            </footer>

        </div>
    </div>

    <!-- initiate modal menu section-->
    <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog"
        aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                class="ik ik-x-circle"></i></button>
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="quick-search">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto">
                                <div class="input-wrap">
                                    <input type="text" id="quick-search" class="form-control"
                                        placeholder="Search..." />
                                    <i class="ik ik-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="container">
                        <div class="apps-wrap">
                            <div class="app-item">
                                <a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                            </div>
                            <div class="app-item dropdown">
                                <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="ik ik-command"></i><span>Ui</span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- initiate scripts-->
    <script src="https://demo.smartcart.shopping/src/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="https://demo.smartcart.shopping/plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://demo.smartcart.shopping/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://demo.smartcart.shopping/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="https://demo.smartcart.shopping/plugins/screenfull/dist/screenfull.js"></script>

    <!-- Stack array for including inline js or scripts -->
    <script defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8BUI8-dzrQlGg_ttawIFvLR2xXtqTw2A&callback=initMap"></script>
    <script src="//js.pusher.com/3.1/pusher.min.js"></script>

    <script>
        var tracking_info = [{
            "name": "Mohammad Abu zain",
            "is_online": "Online",
            "status": "Busy",
            "latitude": "29.538532",
            "longitude": "35.013118",
            "image": "https:\/\/demo.smartcart.shopping\/img\/user.jpg"
        }, {
            "name": "\u0639\u0646\u0627\u0646 \u0639\u0627\u062f\u0644",
            "is_online": "Online",
            "status": "Busy",
            "latitude": "29.495364",
            "longitude": "34.998747",
            "image": "https:\/\/demo.smartcart.shopping\/img\/user.jpg"
        }, {
            "name": "Ramzi Abd",
            "is_online": "Online",
            "status": "Busy",
            "latitude": "29.563621",
            "longitude": "35.002256",
            "image": "https:\/\/demo.smartcart.shopping\/img\/user.jpg"
        }, {
            "name": "Yassir Shatnawi",
            "is_online": "Online",
            "status": "Busy",
            "latitude": "29.546676",
            "longitude": "35.009552",
            "image": "https:\/\/demo.smartcart.shopping\/img\/user.jpg"
        }];

        function reloadMarker(data) {
            var myMapOptions = {
                center: new google.maps.LatLng(29.5810295, 35.0050958),
                zoom: 12,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map"), myMapOptions);
            setMarkers(map, tracking_info)
        }

        function initMap() {
            var myMapOptions = {
                center: new google.maps.LatLng(29.5810295, 35.0050958),
                zoom: 12,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map"), myMapOptions);
            setMarkers(map, tracking_info)
        }

        function setMarkers(map, locations) {
            var marker, i;
            for (i = 0; i < locations.length; i++) {
                var name = locations[i].name
                var is_online = locations[i].is_online
                var status = locations[i].status
                var latitude = locations[i].latitude
                var longitude = locations[i].longitude
                // var image = locations[i].image
                const svgMarker = {
                    path: "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
                    fillColor: locations[i].is_online == 1 ? "red" : "green",
                    fillOpacity: 0.6,
                    strokeWeight: 0.5,
                    rotation: 0,
                    scale: 2,
                    anchor: new google.maps.Point(15, 30),
                };
                var myoverlay = new google.maps.OverlayView();
                myoverlay.draw = function() {
                    //this assigns an id to the markerlayer Pane, so it can be referenced by CSS
                    this.getPanes().markerLayer.id = 'markerLayer';
                };
                myoverlay.setMap(map);

                latlngset = new google.maps.LatLng(latitude, longitude);
                var marker = new google.maps.Marker({
                    map: map,
                    title: name,
                    position: latlngset,
                    icon: svgMarker,
                    animation: google.maps.Animation.DROP,
                });
                // map.setCenter(marker.getPosition());
                var content = `<strong>${name}</strong><br>${is_online} (${status})`;
                var infowindow = new google.maps.InfoWindow()
                google.maps.event.addListener(marker, 'click', (function(marker, content, infowindow) {
                    console.log('marker', marker)
                    return function() {
                        infowindow.setContent(content);
                        infowindow.open(map, marker);
                    };
                })(marker, content, infowindow));
            }
        }
        // Pusher to check latest input
    </script>
    <script type="text/javascript">
        $('.count').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 3000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
        Pusher.logToConsole = true;
        var pusher = new Pusher('b3284130a7e422708888', {
            cluster: 'mt1',
            encrypted: true
        });
        var channel = pusher.subscribe('admin-notification');
        var channel2 = pusher.subscribe('update-location');
        var callback = (data) => {
            //reloadMarker();
            //window.location.reload();
        };
        var callback2 = (data) => {
            reloadMarker(data);
            //window.location.reload();
        };
        var eventName = "admin-notification";
        var eventName2 = "update-location";
        pusher.bind(eventName, callback);
        pusher.bind(eventName2, callback2);
    </script>

    <script src="https://demo.smartcart.shopping/dist/js/theme.js"></script>
    <script src="https://demo.smartcart.shopping/js/chat.js"></script>

    <script>
        function setRoute($id, $route) {
            $('#item_id').val($id);
            $('#frm_confirm_delete').attr('action', $route);
        }

        $(document).ready(function() {
            $('#cm_menu_search_input').keyup(function(e) {
                var text = $('#cm_menu_search_input').val().trim().toLowerCase();
                $('#main-menu-navigation div.nav-item').each(function(index, element) {
                    if (!$(element).find('a').text().toLowerCase().includes(text)) {
                        $(element).addClass('hide');
                        $('.nav-lavel').addClass('hide');
                    } else {
                        $(element).removeClass('hide');
                        $('.nav-lavel').removeClass('hide');
                    }
                });
            });


            if ($(window).innerWidth() <= 1024) {
                $('.sidebar-content').css('scroll-behavior', 'inherit')
            }
        });
    </script>
    <script src="https://demo.smartcart.shopping/plugins/toastr-master/toastr.js"></script>
    <script>
        var count = $(this).data("count");
        var notificationsWrapper = $('.dropdown-notifications');
        var notificationsCountElem = notificationsWrapper.find('span[data-count]');
        var notificationsCount = parseInt(notificationsCountElem.data('count'));
        var notifications = notificationsWrapper.find('.notifications-wrap');

        if (notificationsCount <= 0) {
            notificationsCount = 0;
        }

        $(".notif-count").text(notificationsCount);
        var pusher = new Pusher('b3284130a7e422708888', {
            cluster: 'mt1',
            encrypted: true
        });

        var channel = pusher.subscribe('admin-notification');
        var callback = (data) => {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            var notify_toast = toastr["success"](data.message);

            var existingNotifications = notifications.html();
            var newNotificationHtml = `
                    <a href="#" class="media">
                        <span class="d-flex">
                            <i class="ik ik-check"></i>
                        </span>
                        <span class="media-body">
                            <span class="heading-font-family media-heading">` + data.message + `</span>
                            <span class="media-content">1 minutes ago</span>
                        </span>
                    </a>
                    `;

            notifications.html(newNotificationHtml + existingNotifications);
            notificationsCount += 1;
            notificationsCountElem.attr('data-count', notificationsCount);
            notificationsWrapper.find('.notif-count').text(notificationsCount);
            notificationsWrapper.show();
        };

        var eventName = "admin-notification";
        pusher.bind(eventName, callback);
    </script>
</body>

</html>
