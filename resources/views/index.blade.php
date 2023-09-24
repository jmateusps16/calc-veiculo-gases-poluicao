<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>CALC GPOLUENTES APP</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">
	
    <link rel="stylesheet" href={{ asset('libs/css/bootstrap.min.css') }}>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href={{ asset('libs/css/ready.css') }} >
	<link rel="stylesheet" href={{ asset('libs/css/demo.css') }} >
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <div class="logo-header">
                <a href="index.html" class="logo">
                    Ready Dashboard
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg">
                <div class="container-fluid">

                    <form class="navbar-left navbar-form nav-search mr-md-3" action="">
                        <div class="input-group">
                            <input type="text" placeholder="Search ..." class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="la la-search search-icon"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-envelope"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-bell"></i>
                                <span class="notification">3</span>
                            </a>
                            <ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
                                <li>
                                    <div class="dropdown-title">You have 4 new notification</div>
                                </li>
                                <li>
                                    <div class="notif-center">
                                        <a href="#">
                                            <div class="notif-icon notif-primary"> <i class="la la-user-plus"></i>
                                            </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    New user registered
                                                </span>
                                                <span class="time">5 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-success"> <i class="la la-comment"></i> </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Rahmad commented on Admin
                                                </span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="assets/img/profile2.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Reza send messages to you
                                                </span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-danger"> <i class="la la-heart"></i> </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Farrah liked Admin
                                                </span>
                                                <span class="time">17 minutes ago</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);"> <strong>See all
                                            notifications</strong> <i class="la la-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                aria-expanded="false"> <img src="assets/img/profile.jpg" alt="user-img" width="36"
                                    class="img-circle"><span>Hizrian</span> </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <div class="user-box">
                                        <div class="u-img"><img src="assets/img/profile.jpg" alt="user"></div>
                                        <div class="u-text">
                                            <h4>Hizrian</h4>
                                            <p class="text-muted">hello@themekita.com</p><a href="profile.html"
                                                class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a>
                                <a class="dropdown-item" href="#"> My Balance</a>
                                <a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> Account
                                    Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Logout</a>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="sidebar">
            <div class="scroll-wrapper scrollbar-inner sidebar-wrapper" style="position: relative;">
                <div class="scrollbar-inner sidebar-wrapper scroll-content"
                    style="height: 955px; margin-bottom: 0px; margin-right: 0px; max-height: none;">
                    <div class="user">
                        <div class="photo">
                            <img src="assets/img/profile.jpg">
                        </div>
                        <div class="info">
                            <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    Hizrian
                                    <span class="user-level">Administrator</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                                <ul class="nav">
                                    <li>
                                        <a href="#profile">
                                            <span class="link-collapse">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#edit">
                                            <span class="link-collapse">Edit Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#settings">
                                            <span class="link-collapse">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav">
                        <li class="nav-item active">
                            <a href="index.html">
                                <i class="la la-dashboard"></i>
                                <p>Dashboard</p>
                                <span class="badge badge-count">5</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="components.html">
                                <i class="la la-table"></i>
                                <p>Components</p>
                                <span class="badge badge-count">14</span>
                            </a>
                        </li>






                    </ul>
                </div>
                <div class="scroll-element scroll-x">
                    <div class="scroll-element_outer">
                        <div class="scroll-element_size"></div>
                        <div class="scroll-element_track"></div>
                        <div class="scroll-bar" style="width: 100px;"></div>
                    </div>
                </div>
                <div class="scroll-element scroll-y">
                    <div class="scroll-element_outer">
                        <div class="scroll-element_size"></div>
                        <div class="scroll-element_track"></div>
                        <div class="scroll-bar" style="height: 86px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Dashboard</h4>



                    <div class="row">


                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header ">
                                    <h4 class="card-title">Table</h4>
                                    <p class="card-category">Users Table</p>
                                </div>
                                <div class="card-body">
                                    <table class="table table-head-bg-success table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-tasks">
                                <div class="card-header ">
                                    <h4 class="card-title">Tasks</h4>
                                    <p class="card-category">To Do List</p>
                                </div>
                                <div class="card-body ">
                                    <div class="table-full-width">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input  select-all-checkbox"
                                                                    type="checkbox" data-select="checkbox"
                                                                    data-target=".task-select">
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                    </th>
                                                    <th>Task</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input task-select"
                                                                    type="checkbox">
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>Planning new project structure</td>
                                                    <td class="td-actions text-right">
                                                        <div class="form-button-action">
                                                            <button type="button" data-toggle="tooltip"
                                                                title=""
                                                                class="btn btn-link <btn-simple-primary"
                                                                data-original-title="Edit Task">
                                                                <i class="la la-edit"></i>
                                                            </button>
                                                            <button type="button" data-toggle="tooltip"
                                                                title="" class="btn btn-link btn-simple-danger"
                                                                data-original-title="Remove">
                                                                <i class="la la-times"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input task-select"
                                                                    type="checkbox">
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>Update Fonts</td>
                                                    <td class="td-actions text-right">
                                                        <div class="form-button-action">
                                                            <button type="button" data-toggle="tooltip"
                                                                title=""
                                                                class="btn btn-link <btn-simple-primary"
                                                                data-original-title="Edit Task">
                                                                <i class="la la-edit"></i>
                                                            </button>
                                                            <button type="button" data-toggle="tooltip"
                                                                title="" class="btn btn-link btn-simple-danger"
                                                                data-original-title="Remove">
                                                                <i class="la la-times"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input task-select"
                                                                    type="checkbox">
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>Add new Post
                                                    </td>
                                                    <td class="td-actions text-right">
                                                        <div class="form-button-action">
                                                            <button type="button" data-toggle="tooltip"
                                                                title=""
                                                                class="btn btn-link <btn-simple-primary"
                                                                data-original-title="Edit Task">
                                                                <i class="la la-edit"></i>
                                                            </button>
                                                            <button type="button" data-toggle="tooltip"
                                                                title="" class="btn btn-link btn-simple-danger"
                                                                data-original-title="Remove">
                                                                <i class="la la-times"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input task-select"
                                                                    type="checkbox">
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>Finalise the design proposal</td>
                                                    <td class="td-actions text-right">
                                                        <div class="form-button-action">
                                                            <button type="button" data-toggle="tooltip"
                                                                title=""
                                                                class="btn btn-link <btn-simple-primary"
                                                                data-original-title="Edit Task">
                                                                <i class="la la-edit"></i>
                                                            </button>
                                                            <button type="button" data-toggle="tooltip"
                                                                title="" class="btn btn-link btn-simple-danger"
                                                                data-original-title="Remove">
                                                                <i class="la la-times"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <div class="stats">
                                        <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            @include('components.footer')
        </div>
    </div>

    <script src={{ asset('libs/js/core/jquery.3.2.1.min.js') }}></script>
    <script src={{ asset('libs/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}></script>
    <script src={{ asset('libs/js/core/popper.min.js') }}></script>
    <script src={{ asset('libs/js/core/bootstrap.min.js') }}></script>
    <script src={{ asset('libs/js/plugin/chartist/chartist.min.js') }}></script>
    <script src={{ asset('libs/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}></script>
    <script src={{ asset('libs/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}></script>
    <script src={{ asset('libs/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}></script>
    <script src={{ asset('libs/js/plugin/jquery-mapael/jquery.mapael.min.js') }}></script>
    <script src={{ asset('libs/js/plugin/jquery-mapael/maps/world_countries.min.js') }}></script>
    <script src={{ asset('libs/js/plugin/chart-circle/circles.min.js') }}></script>
    <script src={{ asset('libs/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}></script>
    <script src={{ asset('libs/js/ready.min.js') }}></script>
    <script src={{ asset('libs/js/demo.js') }}></script>

    <div
        style="left: -1000px; overflow: scroll; position: absolute; top: -1000px; border: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;">
        <div style="border: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;">
        </div>
    </div>
</body>

</html>
