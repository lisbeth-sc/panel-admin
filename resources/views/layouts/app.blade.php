<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts and icons -->
    <script src="{{ asset('js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
        WebFont.load({
            google: {"families": ["Montserrat:100,200,300,400,500,600,700,800,900"]},
            custom: {"families": ["Flaticon", "LineAwesome"], urls: ['{{asset('css/fonts.css')}}']},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>


    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/ready.min.css')}}">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{asset('css/demo.css')}}">

</head>
<body>
<div class="wrapper">
    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header">
            <!--
                Tip 1: You can change the background color of the logo header using: data-background-color="black | dark | blue | purple | light-blue | green | orange | red"
            -->
            <a href="{{route('index')}}" class="big-logo">
                <img src="{{asset('assets/img/logoresponsive.png')}}" alt="logo img" class="logo-img">
            </a>
            <a href="{{route('index')}}" class="logo">
                <img src="{{asset('assets/img/logoheader.png')}}" alt="navbar brand" class="navbar-brand">
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="la la-bars"></i>
					</span>
            </button>
            <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
        </div>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue">
            <!--
                Tip 1: You can change the background color of the navbar header using: data-background-color="black | dark | blue | purple | light-blue | green | orange | red"
            -->
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button class="btn btn-minimize btn-rounded">
                        <i class="la la-navicon"></i>
                    </button>
                </div>

                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon-envelope-1"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon-alarm"></i>
                            <span class="notification">3</span>
                        </a>
                        <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                            <li>
                                <div class="dropdown-title">You have 4 new notification</div>
                            </li>
                            <li>
                                <div class="notif-center">
                                    <a href="#">
                                        <div class="notif-icon notif-primary"><i class="la la-user-plus"></i></div>
                                        <div class="notif-content">
												<span class="block">
													New user registered
												</span>
                                            <span class="time">5 minutes ago</span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="notif-icon notif-success"><i class="la la-comment"></i></div>
                                        <div class="notif-content">
												<span class="block">
													Rahmad commented on Admin
												</span>
                                            <span class="time">12 minutes ago</span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="notif-img">
                                            <img src="{{asset('assets/img/profile2.jpg')}}" alt="Img Profile">
                                        </div>
                                        <div class="notif-content">
												<span class="block">
													Reza send messages to you
												</span>
                                            <span class="time">12 minutes ago</span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="notif-icon notif-danger"><i class="la la-heart"></i></div>
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
                                <a class="see-all" href="javascript:void(0);">See all notifications<i
                                            class="la la-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                            <img src="{{asset('assets/img/profile.jpg')}}" alt="image profile" width="36"
                                 class="img-circle"></a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                            <li>
                                <div class="user-box">
                                    <div class="u-img"><img src="{{asset('assets/img/profile.jpg')}}"
                                                            alt="image profile"></div>
                                    <div class="u-text">
                                        <h4>Hizrian</h4>
                                        <p class="text-muted">hello@themekita.com</p><a href="profile.html"
                                                                                        class="btn btn-rounded btn-danger btn-sm">View
                                            Profile</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">My Profile</a>
                                <a class="dropdown-item" href="#">My Balance</a>
                                <a class="dropdown-item" href="#">Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Logout</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link quick-sidebar-toggler">
                            <i class="flaticon-shapes-1"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <!--
            Tip 1: You can change the background color of the sidebar using: data-background-color="black | dark | blue | purple | light-blue | green | orange | red"
            Tip 2: you can also add an image using data-image attribute
        -->
        <div class="sidebar-background"></div>
        <div class="sidebar-wrapper scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="photo">
                        <img src="{{asset('assets/img/profile.jpg')}}" alt="image profile">
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="collapseExample">
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
                    <li class="nav-item">
                        <a href="{{route('index')}}">
                            <i class="flaticon-home"></i>
                            <p>{{__('Inicio')}}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('index')}}">
                            <i class="flaticon-settings"></i>
                            <p>{{__('Configuración')}}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#empresa">
                            <i class="flaticon-layers"></i>
                            <p>{{__('Empresa')}}</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="empresa">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{route('empresa.create')}}">
                                        <span class="sub-item">{{__('Nueva empresa')}}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('empresa.index')}}">
                                        <span class="sub-item">{{__('Listar empresas')}}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#paquete">
                            <i class="flaticon-box-2"></i>
                            <p>{{__('Paquete')}}</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="paquete">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="#">
                                        <span class="sub-item">{{__('Nuevo paquete')}}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sub-item">{{__('Listar paquetes')}}</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#tables">
                            <i class="flaticon-user"></i>
                            <p>{{__('Usuario')}}</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="tables">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="#">
                                        <span class="sub-item">{{__('Nuevo usuario')}}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sub-item">{{__('Listar usuarios')}}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#sesion">
                            <i class="flaticon-chain"></i>
                            <p>{{__('Sesión')}}</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="sesion">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="#">
                                        <span class="sub-item">{{__('Listar sesiones')}}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->

    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

    </div>
    <div class="quick-sidebar">
        <a href="#" class="close-quick-sidebar">
            <i class="flaticon-cross"></i>
        </a>
        <div class="quick-sidebar-wrapper">
            <ul class="nav nav-tabs nav-line nav-color-primary" role="tablist">
                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#messages" role="tab"
                                        aria-selected="true">Messages</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tasks" role="tab"
                                        aria-selected="false">Tasks</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings" role="tab"
                                        aria-selected="false">Settings</a></li>
            </ul>
            <div class="tab-content mt-3">
                <div class="tab-chat tab-pane fade show active" id="messages" role="tabpanel">
                    <div class="messages-contact">
                        <div class="quick-wrapper">
                            <div class="quick-scroll scrollbar-outer">
                                <div class="quick-content contact-content">
                                    <span class="category-title mt-0">Recent</span>
                                    <div class="contact-list contact-list-recent">
                                        <div class="user">
                                            <a href="#">
                                                <div class="user-image">
                                                    <img src="{{asset('assets/img/jm_denis.jpg')}}" alt="denis">
                                                    <span class="status online"></span>
                                                </div>
                                                <div class="user-data">
                                                    <span class="name">Jimmy Denis</span>
                                                    <span class="message">How are you ?</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="user">
                                            <a href="#">
                                                <div class="user-image">
                                                    <img src="{{asset('assets/img/chadengle.jpg')}}" alt="chad">
                                                    <span class="status away"></span>
                                                </div>
                                                <div class="user-data">
                                                    <span class="name">Chad</span>
                                                    <span class="message">Ok, Thanks !</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="user">
                                            <a href="#">
                                                <div class="user-image">
                                                    <img src="{{asset('assets/img/mlane.jpg')}}" alt="john doe">
                                                    <span class="status offline"></span>
                                                </div>
                                                <div class="user-data">
                                                    <span class="name">John Doe</span>
                                                    <span class="message">Ready for the meeting today with...</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <span class="category-title">Contacts</span>
                                    <div class="contact-list">
                                        <div class="user">
                                            <a href="#">
                                                <div class="user-image">
                                                    <img src="{{asset('assets/img/jm_denis.jpg')}}" alt="denis">
                                                    <span class="status"></span>
                                                </div>
                                                <div class="user-data2">
                                                    <span class="name">Jimmy Denis</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="user">
                                            <a href="#">
                                                <div class="user-image">
                                                    <img src="{{asset('assets/img/chadengle.jpg')}}" alt="chad">
                                                    <span class="status away"></span>
                                                </div>
                                                <div class="user-data2">
                                                    <span class="name">Chad</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="user">
                                            <a href="#">
                                                <div class="user-image">
                                                    <img src="{{asset('assets/img/talha.jpg')}}" alt="talha">
                                                    <span class="status offline"></span>
                                                </div>
                                                <div class="user-data2">
                                                    <span class="name">Talha</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="messages-wrapper">
                        <div class="messages-title">
                            <div class="user">
                                <img src="{{asset('assets/img/chadengle.jpg')}}" alt="chad">
                                <span class="name">Chad</span>
                                <span class="last-active">Active 2h ago</span>
                            </div>
                            <button class="return">
                                <i class="flaticon-left-arrow-3"></i>
                            </button>
                        </div>
                        <div class="messages-body messages-scroll scrollbar-outer">
                            <div class="message-content-wrapper">
                                <div class="message message-in">
                                    <div class="message-pic">
                                        <img src="{{asset('assets/img/chadengle.jpg')}}" alt="chad">
                                    </div>
                                    <div class="message-body">
                                        <div class="message-content">
                                            <div class="name">Chad</div>
                                            <div class="content">Hello, Rian</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="message-content-wrapper">
                                <div class="message message-out">
                                    <div class="message-body">
                                        <div class="message-content">
                                            <div class="content">
                                                Hello, Chad
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="message-content-wrapper">
                                <div class="message message-in">
                                    <div class="message-pic">
                                        <img src="{{asset('assets/img/chadengle.jpg')}}" alt="chad">
                                    </div>
                                    <div class="message-body">
                                        <div class="message-content">
                                            <div class="name">Chad</div>
                                            <div class="content">
                                                When is the deadline of the project we are working on ?
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="message-content-wrapper">
                                <div class="message message-out">
                                    <div class="message-body">
                                        <div class="message-content">
                                            <div class="content">
                                                The deadline is about 2 months away
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="message-content-wrapper">
                                <div class="message message-in">
                                    <div class="message-pic">
                                        <img src="{{asset('assets/img/chadengle.jpg')}}" alt="chad">
                                    </div>
                                    <div class="message-body">
                                        <div class="message-content">
                                            <div class="name">Chad</div>
                                            <div class="content">
                                                Ok, Thanks !
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="messages-form">
                            <div class="messages-form-control">
                                <input type="text" placeholder="Type here"
                                       class="form-control input-pill input-solid message-input">
                            </div>
                            <div class="messages-form-tool">
                                <a href="#" class="attachment">
                                    <i class="flaticon-file"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tasks" role="tabpanel">
                    <div class="tasks-wrapper">
                        <div class="tasks-scroll scrollbar-outer">
                            <div class="tasks-content">
                                <span class="category-title mt-0">Today</span>
                                <ul class="tasks-list">
                                    <li>
                                        <label class="custom-checkbox custom-control checkbox-secondary">
                                            <input type="checkbox" checked="" class="custom-control-input"><span
                                                    class="custom-control-label">Planning new project structure</span>
                                            <span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-checkbox custom-control checkbox-secondary">
                                            <input type="checkbox" class="custom-control-input"><span
                                                    class="custom-control-label">Create the main structure							</span>
                                            <span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-checkbox custom-control checkbox-secondary">
                                            <input type="checkbox" class="custom-control-input"><span
                                                    class="custom-control-label">Add new Post</span>
                                            <span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-checkbox custom-control checkbox-secondary">
                                            <input type="checkbox" class="custom-control-input"><span
                                                    class="custom-control-label">Finalise the design proposal</span>
                                            <span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
                                        </label>
                                    </li>
                                </ul>

                                <span class="category-title">Tomorrow</span>
                                <ul class="tasks-list">
                                    <li>
                                        <label class="custom-checkbox custom-control checkbox-secondary">
                                            <input type="checkbox" class="custom-control-input"><span
                                                    class="custom-control-label">Initialize the project							</span>
                                            <span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-checkbox custom-control checkbox-secondary">
                                            <input type="checkbox" class="custom-control-input"><span
                                                    class="custom-control-label">Create the main structure							</span>
                                            <span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-checkbox custom-control checkbox-secondary">
                                            <input type="checkbox" class="custom-control-input"><span
                                                    class="custom-control-label">Updates changes to GitHub							</span>
                                            <span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-checkbox custom-control checkbox-secondary">
                                            <input type="checkbox" class="custom-control-input"><span
                                                    title="This task is too long to be displayed in a normal space!"
                                                    class="custom-control-label">This task is too long to be displayed in a normal space!				</span>
                                            <span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
                                        </label>
                                    </li>
                                </ul>

                                <div class="mt-3">
                                    <div class="btn btn-primary btn-rounded btn-sm">
											<span class="btn-label">
												<i class="la la-plus"></i>
											</span>
                                        Add Task
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="settings" role="tabpanel">
                    <div class="quick-wrapper settings-wrapper">
                        <div class="quick-scroll scrollbar-outer">
                            <div class="quick-content settings-content">

                                <span class="category-title mt-0">General Settings</span>
                                <ul class="settings-list">
                                    <li>
                                        <span class="item-label">Enable Notifications</span>
                                        <div class="item-control">
                                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"
                                                   data-style="btn-round">
                                        </div>
                                    </li>
                                    <li>
                                        <span class="item-label">Signin with social media</span>
                                        <div class="item-control">
                                            <input type="checkbox" data-toggle="toggle" data-onstyle="primary"
                                                   data-style="btn-round">
                                        </div>
                                    </li>
                                    <li>
                                        <span class="item-label">Backup storage</span>
                                        <div class="item-control">
                                            <input type="checkbox" data-toggle="toggle" data-onstyle="primary"
                                                   data-style="btn-round">
                                        </div>
                                    </li>
                                    <li>
                                        <span class="item-label">SMS Alert</span>
                                        <div class="item-control">
                                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"
                                                   data-style="btn-round">
                                        </div>
                                    </li>
                                </ul>

                                <span class="category-title mt-0">Notifications</span>
                                <ul class="settings-list">
                                    <li>
                                        <span class="item-label">Email Notifications</span>
                                        <div class="item-control">
                                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"
                                                   data-style="btn-round">
                                        </div>
                                    </li>
                                    <li>
                                        <span class="item-label">New Comments</span>
                                        <div class="item-control">
                                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"
                                                   data-style="btn-round">
                                        </div>
                                    </li>
                                    <li>
                                        <span class="item-label">Chat Messages</span>
                                        <div class="item-control">
                                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"
                                                   data-style="btn-round">
                                        </div>
                                    </li>
                                    <li>
                                        <span class="item-label">Project Updates</span>
                                        <div class="item-control">
                                            <input type="checkbox" data-toggle="toggle" data-onstyle="primary"
                                                   data-style="btn-round">
                                        </div>
                                    </li>
                                    <li>
                                        <span class="item-label">New Tasks</span>
                                        <div class="item-control">
                                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"
                                                   data-style="btn-round">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Custom template | don't include it in your project! -->
    <div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
            <div class="switcher">
                <div class="switch-block">
                    <h4>Topbar</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeTopBarColor" data-color="default"></button>
                        <button type="button" class="changeTopBarColor" data-color="black"></button>
                        <button type="button" class="changeTopBarColor" data-color="dark"></button>
                        <button type="button" class="selected changeTopBarColor" data-color="blue"></button>
                        <button type="button" class="changeTopBarColor" data-color="purple"></button>
                        <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                        <button type="button" class="changeTopBarColor" data-color="green"></button>
                        <button type="button" class="changeTopBarColor" data-color="orange"></button>
                        <button type="button" class="changeTopBarColor" data-color="red"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Logo Header</h4>
                    <div class="btnSwitch">
                        <button type="button" class="selected changeLogoHeaderColor" data-color="default"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="black"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="blue"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Sidebar</h4>
                    <div class="btnSwitch">
                        <button type="button" class="selected changeSidebarColor" data-color="default"></button>
                        <button type="button" class="changeSidebarColor" data-color="black"></button>
                        <button type="button" class="changeSidebarColor" data-color="dark"></button>
                        <button type="button" class="changeSidebarColor" data-color="blue"></button>
                        <button type="button" class="changeSidebarColor" data-color="purple"></button>
                        <button type="button" class="changeSidebarColor" data-color="light-blue"></button>
                        <button type="button" class="changeSidebarColor" data-color="green"></button>
                        <button type="button" class="changeSidebarColor" data-color="orange"></button>
                        <button type="button" class="changeSidebarColor" data-color="red"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Background</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                        <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                        <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <div class="form-group d-flex p-0 align-items-center">
                        <h4>Image Background</h4>
                        <div class="ml-auto">
                            <input id="custom-image-background" type="checkbox" data-toggle="toggle"
                                   data-onstyle="primary" data-style="btn-round">
                        </div>
                    </div>
                </div>
                <div class="switch-block mt-3">
                    <h4>Pick Image:</h4>
                    <div class="row images-pick m-0 mt-3 mb-5">
                        <div class="col-4 col-md-3 img-pick active">
                            <img src="{{asset('assets/img/sidebar-images/1.jpg')}}" alt="sidebar background">
                        </div>
                        <div class="col-4 col-md-3 img-pick">
                            <img src="{{asset('assets/img/sidebar-images/2.jpg')}}" alt="sidebar background">
                        </div>
                        <div class="col-4 col-md-3 img-pick">
                            <img src="{{asset('assets/img/sidebar-images/3.jpg')}}" alt="sidebar background">
                        </div>
                        <div class="col-4 col-md-3 img-pick">
                            <img src="{{asset('assets/img/sidebar-images/4.jpg')}}" alt="sidebar background">
                        </div>
                        <div class="col-4 col-md-3 img-pick">
                            <img src="{{asset('assets/img/sidebar-images/5.jpg')}}" alt="sidebar background">
                        </div>
                        <div class="col-4 col-md-3 img-pick">
                            <img src="{{asset('assets/img/sidebar-images/6.jpg')}}" alt="sidebar background">
                        </div>
                        <div class="col-4 col-md-3 img-pick">
                            <img src="{{asset('assets/img/sidebar-images/7.jpg')}}" alt="sidebar background">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-toggle">
            <i class="flaticon-settings"></i>
        </div>
    </div>
    <!-- End Custom template -->
</div>

<!--   Core JS Files   -->
<script src="{{asset('js/core/jquery.3.2.1.min.js')}}"></script>
<script src="{{asset('js/core/popper.min.js')}}"></script>
<script src="{{asset('js/core/bootstrap.min.js')}}"></script>

<!-- jQuery UI -->
<script src="{{asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

<!-- jQuery Scrollbar -->
<script src="{{asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

<!-- Moment JS -->
<script src="{{asset('js/plugin/moment/moment.min.js')}}"></script>

<!-- Chart JS -->
<script src="{{asset('js/plugin/chart.js/chart.min.js')}}"></script>

<!-- Chart Circle -->
<script src="{{asset('js/plugin/chart-circle/circles.min.js')}}"></script>

<!-- Datatables -->
<script src="{{asset('js/plugin/datatables/datatables.min.js')}}"></script>

<!-- Bootstrap Notify -->
<script src="{{asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

<!-- Bootstrap Toggle -->
<script src="{{asset('js/plugin/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>

<!-- jQuery Vector Maps -->
<script src="{{asset('js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('js/plugin/jqvmap/maps/jquery.vmap.world.js')}}"></script>

<!-- Google Maps Plugin -->
<script src="{{asset('js/plugin/gmaps/gmaps.js')}}"></script>

<!-- Dropzone -->
<script src="{{asset('js/plugin/dropzone/dropzone.min.js')}}"></script>

<!-- Fullcalendar -->
<script src="{{asset('js/plugin/fullcalendar/fullcalendar.min.js')}}"></script>

<!-- DateTimePicker -->
<script src="{{asset('js/plugin/datepicker/bootstrap-datetimepicker.min.js')}}"></script>

<!-- Bootstrap Tagsinput -->
<script src="{{asset('js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>

<!-- Bootstrap Wizard -->
<script src="{{asset('js/plugin/bootstrap-wizard/bootstrapwizard.js')}}"></script>

<!-- jQuery Validation -->
<script src="{{asset('js/plugin/jquery.validate/jquery.validate.min.js')}}"></script>

<!-- Summernote -->
<script src="{{asset('js/plugin/summernote/summernote-bs4.min.js')}}"></script>

<!-- Select2 -->
<script src="{{asset('js/plugin/select2/select2.full.min.js')}}"></script>

<!-- Sweet Alert -->
<script src="{{asset('js/plugin/sweetalert/sweetalert.min.js')}}"></script>

<!-- Ready Pro JS -->
<script src="{{asset('js/ready.min.js')}}"></script>

<!-- Ready Pro DEMO methods, don't include it in your project! -->
<script src="{{asset('js/setting-demo.js')}}"></script>
<script src="{{asset('js/demo.js')}}"></script>

@yield('scripts')
</body>
</html>
