<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SRDC</title>

    {{-- <link rel="stylesheet" href="../css/homepagestyle.css"> --}}
    <link rel="preconnect" href="https://fonts.bunny.net">

    <style>
        .container-nav {
            width: 100%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #092044;
        }

        .container-header {
            width: 100%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            width: 100px;
            height: auto;
            margin: 8px;
        }

        .title {
            text-align: center;
        }

        .search-bar {
            flex: 1;
            margin-left: auto;
            text-align: right;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        .search-space {
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
        }

        nav {
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            margin-left: 0;
            padding-right: 20px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-between;
        }

        nav li {
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
        }


        .login-btn {
            background-color: #092044;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
        }

        .login-btn:hover {
            background-color: #063366;
        }


        .main-content {
            display: flex;
            justify-content: space-around;
            align-items: center;
            text-align: center;
            width: 100%;

        }

        .recent {
            flex: 1;
            margin: 0;
            font-size: 20px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 15px;
        }

        .recent a,
        .recent {
            padding: 15px;
            color: black;
            text-decoration: none;
            font-weight: bold;
            font-size: 24px;
        }


        .activity-window,
        .track-window,
        .notify-window {
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
            height: 45vh;
            border-radius: 20px;
            width: 90%;
            border: 2px solid gray;
            /* Add this line to set the border */
            //box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Shadow */
            background-color: #f2f2f2;
            /* Light gray background color */
            font-weight: normal;
            font-size: 15px;
        }

        /* new */

        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

        header {
            background-color: white;
            color: #fff;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: center;
        }

        .container-nav {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #092044;
        }

        .container-header {
            width: 100%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }


        .search-bar {
            margin-left: auto;
            text-align: right;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        input[type="text"] {
            padding: 10px;
            width: 80%;
            border: none;
            border-radius: 5px;
        }


        /* Main Nav Styles */
        nav {
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            margin-left: 0;
            padding-right: 20px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: flex-end;
            box-sizing: border-box;
        }

        nav li {
            text-align: left;
            margin-right: 20px;
            position: relative;
        }

        nav a {
            color: #fff;
            text-decoration: none;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* Dropdown Menu */
        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: #092044;
            /* Solid background to avoid transparency issue */
            z-index: 1;
            list-style: none;
            transition: opacity 0.3s ease-in-out, visibility 0.3s;
            /* Smooth fade-in */
            white-space: nowrap;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            visibility: hidden;
            /* Initially hide the dropdown */
            opacity: 0;
            /* Start with invisible state */
        }

        .dropdown-content li {
            padding: 0;
            margin: 0;
        }

        .dropdown-content li a {
            margin-left: auto;
            padding: 10px 15px;
            color: white;
            text-decoration: none;
            display: block;
            white-space: nowrap;
        }

        .dropdown-content li a:hover {
            background-color: #064073;
        }

        /* Show Dropdown on Hover */
        .dropdown:hover .dropdown-content {
            display: block;
            visibility: visible;
            opacity: 1;
            /* Fade in on hover */
        }

        section {
            margin-bottom: 20px;
            /* Add space between sections */
        }

        h2 {
            margin-bottom: 10px;
            /* Add space below headings */
        }

        footer {
            max-width: 100%;
            margin: 0 auto;
            display: flex;
            text-align: center;
            background-color: #092044;
            color: white;
            font-size: 12px;
        }

        .user-actions {
            display: flex;
            align-items: center;
        }

        .login-btn {
            margin-right: 10px;
            background-color: #092044;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .login-btn:hover {
            background-color: #063366;
        }

        .slider {
            width: auto;
            height: 300px;
            position: relative;
            overflow: hidden;
        }

        .slider .list {
            position: absolute;
            width: max-content;
            height: 100%;
            left: 0;
            top: 0;
            display: flex;
            transition: 1s;
        }

        .slider .list img {
            width: auto;
            max-width: auto;
            height: 100%;
            object-fit: cover;
        }

        .slider .buttons {
            position: absolute;
            top: 45%;
            left: 5%;
            width: 90%;
            display: flex;
            justify-content: space-between;
        }

        .slider .buttons button {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #fff5;
            color: #fff;
            border: none;
            font-family: monospace;
            font-weight: bold;
        }

        .slider .dots {
            position: absolute;
            bottom: 10px;
            left: 0;
            color: #fff;
            width: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .slider .dots li {
            list-style: none;
            width: 10px;
            height: 10px;
            background-color: #fff;
            margin: 10px;
            border-radius: 20px;
            transition: 0.5s;
        }

        .slider .dots li.active {
            width: 30px;
        }

        @media screen and (max-width: 100%) {
            .slider {
                height: 300px;
            }
        }

        .multi-select {
            display: flex;
            box-sizing: border-box;
            flex-direction: column;
            position: relative;
            width: 100%;
            user-select: none;
        }

        .multi-select .multi-select-header {
            border: 1px solid #dee2e6;
            padding: 7px 30px 7px 12px;
            overflow: hidden;
            gap: 7px;
            min-height: 45px;
        }

        .multi-select .multi-select-header::after {
            content: "";
            display: block;
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23949ba3' viewBox='0 0 16 16'%3E%3Cpath d='M8 13.1l-8-8 2.1-2.2 5.9 5.9 5.9-5.9 2.1 2.2z'/%3E%3C/svg%3E");
            height: 12px;
            width: 12px;
        }

        .multi-select .multi-select-header.multi-select-header-active {
            border-color: #c1c9d0;
        }

        .multi-select .multi-select-header.multi-select-header-active::after {
            transform: translateY(-50%) rotate(180deg);
        }

        .multi-select .multi-select-header.multi-select-header-active+.multi-select-options {
            display: flex;
        }

        .multi-select .multi-select-header .multi-select-header-placeholder {
            color: #65727e;
        }

        .multi-select .multi-select-header .multi-select-header-option {
            display: inline-flex;
            align-items: center;
            background-color: #f3f4f7;
            font-size: 14px;
            padding: 3px 8px;
            border-radius: 5px;
        }

        .multi-select .multi-select-header .multi-select-header-max {
            font-size: 14px;
            color: #65727e;
        }

        .multi-select .multi-select-options {
            display: none;
            box-sizing: border-box;
            flex-flow: wrap;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 999;
            margin-top: 5px;
            padding: 5px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-height: 200px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .multi-select .multi-select-options::-webkit-scrollbar {
            width: 5px;
        }

        .multi-select .multi-select-options::-webkit-scrollbar-track {
            background: #f0f1f3;
        }

        .multi-select .multi-select-options::-webkit-scrollbar-thumb {
            background: #cdcfd1;
        }

        .multi-select .multi-select-options::-webkit-scrollbar-thumb:hover {
            background: #b2b6b9;
        }

        .multi-select .multi-select-options .multi-select-option,
        .multi-select .multi-select-options .multi-select-all {
            padding: 4px 12px;
            height: 42px;
        }

        .multi-select .multi-select-options .multi-select-option .multi-select-option-radio,
        .multi-select .multi-select-options .multi-select-all .multi-select-option-radio {
            margin-right: 14px;
            height: 16px;
            width: 16px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        .multi-select .multi-select-options .multi-select-option .multi-select-option-text,
        .multi-select .multi-select-options .multi-select-all .multi-select-option-text {
            box-sizing: border-box;
            flex: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            color: inherit;
            font-size: 16px;
            line-height: 20px;
        }

        .multi-select .multi-select-options .multi-select-option.multi-select-selected .multi-select-option-radio,
        .multi-select .multi-select-options .multi-select-all.multi-select-selected .multi-select-option-radio {
            border-color: #40c979;
            background-color: #40c979;
        }

        .multi-select .multi-select-options .multi-select-option.multi-select-selected .multi-select-option-radio::after,
        .multi-select .multi-select-options .multi-select-all.multi-select-selected .multi-select-option-radio::after {
            content: "";
            display: block;
            width: 3px;
            height: 7px;
            margin: 0.12em 0 0 0.27em;
            border: solid #fff;
            border-width: 0 0.15em 0.15em 0;
            transform: rotate(45deg);
        }

        .multi-select .multi-select-options .multi-select-option.multi-select-selected .multi-select-option-text,
        .multi-select .multi-select-options .multi-select-all.multi-select-selected .multi-select-option-text {
            color: #40c979;
        }

        .multi-select .multi-select-options .multi-select-option:hover,
        .multi-select .multi-select-options .multi-select-option:active,
        .multi-select .multi-select-options .multi-select-all:hover,
        .multi-select .multi-select-options .multi-select-all:active {
            background-color: #f3f4f7;
        }

        .multi-select .multi-select-options .multi-select-all {
            border-bottom: 1px solid #f1f3f5;
            border-radius: 0;
        }

        .multi-select .multi-select-options .multi-select-search {
            padding: 7px 10px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            margin: 10px 10px 5px 10px;
            width: 100%;
            outline: none;
            font-size: 16px;
        }

        .multi-select .multi-select-options .multi-select-search::placeholder {
            color: #b2b5b9;
        }

        .multi-select .multi-select-header,
        .multi-select .multi-select-option,
        .multi-select .multi-select-all {
            display: flex;
            flex-wrap: wrap;
            box-sizing: border-box;
            align-items: center;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            width: 100%;
            font-size: 16px;
            color: #212529;
        }
    </style>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/flags/flags.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

</head>

<body>
    <header>
        <div class="container-nav">
            <!-- Logo -->
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('logo_20200823.jpg') }}" alt="utkylui" class="logo">
            </a>
            <!-- Navigation Menu -->
            <nav>
                <ul class="nav-list">
                    <!-- Navigation Links -->
                    <li><a href="{{ route('welcome') }}">About Us</a></li>

                    <!-- Dropdown for "Researches" -->
                    <li class="dropdown">
                        <a href="#">Researches</a>
                        <ul class="dropdown-content">
                            <li><a href="{{ route('patentinfo') }}">Patent</a></li>
                            <li><a href="{{ route('utilityinfo') }}">Utility</a></li>
                            <li><a href="{{ route('trademarkinfo') }}">Trademark</a></li>
                            <li><a href="{{ route('industrialinfo') }}">Industrial Design</a></li>
                            <li><a href="{{ route('geographicalinfo') }}">Geographical Indication</a></li>
                            <li><a href="{{ route('copyrightinfo') }}">Copyright</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('custdash') }}">Dashboard</a></li>
                    <li><a href="{{ route('user.forum') }}">IdeaKAMEK</a></li>
                    <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                    <li><a href="{{ route('help') }}">Help</a></li>
                    @auth
                    @else
                        <li><a href="{{ route('login-page') }}">Login</a></li>
                    @endauth

                    <!-- Right Aligned Notifications and User Dropdowns -->
                    <li class="nav-right">
                        @auth
                            <!-- Notifications and User Profile Container -->
                            <div class="d-flex align-items-center">

                                <!-- Notifications Dropdown -->
                                <div class="dropdown me-3">
                                    <a href="#" class="dropdown-toggle nav-link header-nav-list"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('assets/img/icons/header-icon-05.svg') }}" alt="Notifications">
                                        <span class="badge bg-success">
                                            {{ auth()->user()->unreadNotifications->count() }}
                                            <span class="visually-hidden">unread notifications</span>
                                        </span>
                                    </a>

                                    <div class="dropdown-menu notifications">
                                        <div class="topnav-dropdown-header">
                                            <span class="notification-title">Notifications</span>
                                            <a href="{{ route('user.markasread') }}" class="clear-noti">Clear All</a>
                                        </div>
                                        <div class="noti-content">
                                            <ul class="notification-list">
                                                @if (auth()->user()->unreadNotifications->isNotEmpty())
                                                    @foreach (auth()->user()->unreadNotifications as $notification)
                                                        <li class="notification-message">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <a href="{{ $notification->data['data']['link'] ?? '#' }}"
                                                                        class="dropdown-item">
                                                                        {{ $notification->data['data']['message'] }}
                                                                    </a>
                                                                    <p class="noti-time">
                                                                        <span
                                                                            class="notification-time">{{ $notification->created_at->diffForHumans() }}</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                @else
                                                    <li class="notification-message">
                                                        <div class="media justify-content-center">
                                                            <span>There are no notifications!</span>
                                                        </div>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="topnav-dropdown-footer">
                                            <a href="#">View all Notifications</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- User Profile Dropdown -->
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <div class="user-img">
                                            @if (Auth::user()->image)
                                                <img src="{{ asset('images/profile/' . Auth::user()->image) }}"
                                                    alt="Profile" class="rounded-circle">
                                            @else
                                                <img src="{{ asset('assets/img/profiles/icons8-user-100.png') }}"
                                                    alt="Profile" class="rounded-circle">
                                            @endif
                                            <div class="user-text">
                                                <h6 style="color: rgba(255, 255, 255, 0.671)">{{ Auth::user()->name }}</h6>
                                                <p class="text-muted mb-0">User</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="user-header">
                                            <div class="avatar avatar-sm">
                                                @if (Auth::user()->image)
                                                    <img src="{{ asset('images/profile/' . Auth::user()->image) }}"
                                                        alt="Profile" class="rounded-circle">
                                                @else
                                                    <img src="{{ asset('assets/img/profiles/icons8-user-100.png') }}"
                                                        alt="Profile" class="rounded-circle">
                                                @endif
                                            </div>
                                            <div class="user-text">
                                                <h6>{{ Auth::user()->name }}</h6>
                                                <p class="text-muted mb-0">User</p>
                                            </div>
                                        </div>

                                        <a class="dropdown-item"
                                            href="{{ route('user.profile', Auth::user()->id) }}">Profile</a>
                                         <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none">
                            @csrf
                        </form>
                                    </div>
                                </div>

                            </div>

                        @endauth
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="">
            <div class="container-fluid">
                <br>
                <div class="row">
                    <div class="card col-md-12">
                        <div class="card-body">
                            <div class="bank-inner-details">
                                <div class="row">
                                    <form action="{{ route('user.posts.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>{{ __('messages.title') }}<span class="text-danger">*</span></label>
                                                    <input name="title" type="text" class="input form-control"
                                                        style="border: 1px solid #ced4da;">

                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>{{ __('messages.category') }}<span class="text-danger">*</span></label>
                                                    <select name="category" class="select form-control">
                                                        <option>{{ __('messages.select_category') }}</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>



                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>{{ __('messages.tags') }}<span class="text-danger">*</span></label>
                                                    <select name="tag" class="Select form-control"
                                                        data-placeholder="{{ __('messages.select_tags') }}" multiple data-multi-select>

                                                        @foreach ($tags as $tag)
                                                            <option value="{{ $tag->id }}">{{ $tag->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>{{ __('messages.images') }}<span
                                                            class="form-text text-muted">({{ __('messages.optional') }})</span></label>
                                                    <input type="file" name="images[]" id="images" multiple
                                                        class="form-control" accept="image/*" max="5">
                                                    <small class="form-text text-muted">{{ __('messages.thumbnail_info') }}</small>
                                                </div>
                                            </div>

                                            <!-- Thumbnail card initially hidden -->
                                            <div class="col-lg-4 col-md-4" id="thumbnail-card"
                                                style="display: none;">
                                                <div class="card flex-fill bg-white">
                                                    <img alt="Thumbnail" id="thumbnail" class="card-img-top">
                                                    <small class="form-text text-muted">{{ __('messages.thumbnail_info') }}</small>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div id="carouselExampleIndicators" class="carousel slide"
                                                            style="display: none;" data-bs-ride="carousel">
                                                            <ol class="carousel-indicators" id="carousel-indicators">
                                                                <!-- Carousel indicators will be populated here -->
                                                            </ol>
                                                            <div class="carousel-inner" id="carousel-inner"
                                                                role="listbox">
                                                                <!-- Carousel items will be populated here -->
                                                            </div>
                                                            <a class="carousel-control-prev"
                                                                href="#carouselExampleIndicators" role="button"
                                                                data-bs-slide="prev">
                                                                <span class="carousel-control-prev-icon"
                                                                    aria-hidden="true"></span>
                                                                <span class="visually-hidden">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next"
                                                                href="#carouselExampleIndicators" role="button"
                                                                data-bs-slide="next">
                                                                <span class="carousel-control-next-icon"
                                                                    aria-hidden="true"></span>
                                                                <span class="visually-hidden">Next</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
                                        <script>
                                            document.getElementById('images').addEventListener('change', function(event) {
                                                const files = event.target.files;
                                                const thumbnailCard = document.getElementById('thumbnail-card');
                                                const thumbnail = document.getElementById('thumbnail');
                                                const carouselIndicators = document.getElementById('carousel-indicators');
                                                const carouselInner = document.getElementById('carousel-inner');
                                                const carousel = document.getElementById('carouselExampleIndicators');

                                                // Clear previous carousel items and indicators
                                                carouselIndicators.innerHTML = '';
                                                carouselInner.innerHTML = '';

                                                if (files.length > 5) {
                                                    alert('You can only upload a maximum of 5 images.');
                                                    this.value = ''; // Clear the input if more than 5 files are selected
                                                    thumbnailCard.style.display = 'none'; // Hide the card
                                                    carousel.style.display = 'none'; // Hide the carousel
                                                } else if (files.length > 0) {
                                                    // Display the first image as a thumbnail
                                                    const firstImage = files[0];
                                                    thumbnail.src = URL.createObjectURL(firstImage);
                                                    thumbnailCard.style.display = 'block'; // Show the thumbnail card
                                                    carousel.style.display = 'block'; // Show the carousel

                                                    // Create carousel items for each selected image
                                                    Array.from(files).forEach((file, index) => {
                                                        // Create carousel indicator
                                                        const indicator = document.createElement('li');
                                                        indicator.setAttribute('data-bs-target="#carouselExampleIndicators"');
                                                        indicator.setAttribute('data-bs-slide-to', index);
                                                        indicator.className = index === 0 ? 'active' : '';
                                                        carouselIndicators.appendChild(indicator);

                                                        // Create carousel item
                                                        const carouselItem = document.createElement('div');
                                                        carouselItem.className = `carousel-item ${index === 0 ? 'active' : ''}`;
                                                        const img = document.createElement('img');
                                                        img.className = 'd-block img-fluid';
                                                        img.src = URL.createObjectURL(file);
                                                        img.alt = `Slide ${index + 1}`;
                                                        carouselItem.appendChild(img);
                                                        carouselInner.appendChild(carouselItem);
                                                    });

                                                    console.log("Carousel items created:", carouselInner.children.length); // Debugging line
                                                } else {
                                                    // Hide the thumbnail card and carousel if no images are selected
                                                    thumbnailCard.style.display = 'none';
                                                    carousel.style.display = 'none';
                                                }
                                            });
                                        </script>




                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>{{ __('messages.description') }}</label>
                                        <textarea name="editor" class="form-control" id="body" placeholder="{{ __('messages.enter_description') }}" name="body"></textarea>
                                    </div>
                                </div>
                                <div class=" blog-categories-btn pt-0">
                                    <div class="bank-details-btn ">
                                        <button type="submit" class="btn bank-cancel-btn me-2">{{ __('messages.add_post') }}</button>
                                    </div>
                                </div>
                                </form>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

    </main>
    <footer style="background-color: #092044">
        <div class="container">
            <p style="color: #fff">&copy; SRDC 2024</p>
        </div>
    </footer>
</body>

<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<script>
    // Initialize CKEditor
    ClassicEditor
        .create(document.querySelector('textarea'))
        .then(editor => {
            console.log('Editor was initialized', editor);
        })
        .catch(error => {
            console.error('Error during initialization of the editor', error);
        });
</script>
<script>
    class MultiSelect {

        constructor(element, options = {}) {
            let defaults = {
                placeholder: 'Select item(s)',
                max: null,
                search: true,
                selectAll: true,
                listAll: true,
                name: '',
                width: '',
                height: '',
                dropdownWidth: '',
                dropdownHeight: '',
                data: [],
                onChange: function() {},
                onSelect: function() {},
                onUnselect: function() {}
            };
            this.options = Object.assign(defaults, options);
            this.selectElement = typeof element === 'string' ? document.querySelector(element) : element;
            for (const prop in this.selectElement.dataset) {
                if (this.options[prop] !== undefined) {
                    this.options[prop] = this.selectElement.dataset[prop];
                }
            }
            this.name = this.selectElement.getAttribute('name') ? this.selectElement.getAttribute('name') :
                'multi-select-' + Math.floor(Math.random() * 1000000);
            if (!this.options.data.length) {
                let options = this.selectElement.querySelectorAll('option');
                for (let i = 0; i < options.length; i++) {
                    this.options.data.push({
                        value: options[i].value,
                        text: options[i].innerHTML,
                        selected: options[i].selected,
                        html: options[i].getAttribute('data-html')
                    });
                }
            }
            this.element = this._template();
            this.selectElement.replaceWith(this.element);
            this._updateSelected();
            this._eventHandlers();
        }

        _template() {
            let optionsHTML = '';
            for (let i = 0; i < this.data.length; i++) {
                optionsHTML += `
                    <div class="multi-select-option${this.selectedValues.includes(this.data[i].value) ? ' multi-select-selected' : ''}" data-value="${this.data[i].value}">
                        <span class="multi-select-option-radio"></span>
                        <span class="multi-select-option-text">${this.data[i].html ? this.data[i].html : this.data[i].text}</span>
                    </div>
                `;
            }
            let selectAllHTML = '';
            if (this.options.selectAll === true || this.options.selectAll === 'true') {
                selectAllHTML = `<div class="multi-select-all">
                    <span class="multi-select-option-radio"></span>
                    <span class="multi-select-option-text">Select all</span>
                </div>`;
            }
            let template = `
                <div class="multi-select ${this.name}"${this.selectElement.id ? ' id="' + this.selectElement.id + '"' : ''} style="${this.width ? 'width:' + this.width + ';' : ''}${this.height ? 'height:' + this.height + ';' : ''}">
                    ${this.selectedValues.map(value => `<input type="hidden" name="${this.name}[]" value="${value}">`).join('')}
                    <div class="multi-select-header" style="${this.width ? 'width:' + this.width + ';' : ''}${this.height ? 'height:' + this.height + ';' : ''}">
                        <span class="multi-select-header-max">${this.options.max ? this.selectedValues.length + '/' + this.options.max : ''}</span>
                        <span class="multi-select-header-placeholder">${this.placeholder}</span>
                    </div>
                    <div class="multi-select-options" style="${this.options.dropdownWidth ? 'width:' + this.options.dropdownWidth + ';' : ''}${this.options.dropdownHeight ? 'height:' + this.options.dropdownHeight + ';' : ''}">
                        ${this.options.search === true || this.options.search === 'true' ? '<input type="text" class="multi-select-search" placeholder="Search...">' : ''}
                        ${selectAllHTML}
                        ${optionsHTML}
                    </div>
                </div>
                `;
            let element = document.createElement('div');
            element.innerHTML = template;
            return element;
        }

        _eventHandlers() {
            let headerElement = this.element.querySelector('.multi-select-header');
            this.element.querySelectorAll('.multi-select-option').forEach(option => {
                option.onclick = () => {
                    let selected = true;
                    if (!option.classList.contains('multi-select-selected')) {
                        if (this.options.max && this.selectedValues.length >= this.options.max) {
                            return;
                        }
                        option.classList.add('multi-select-selected');
                        if (this.options.listAll === true || this.options.listAll === 'true') {
                            headerElement.insertAdjacentHTML('afterbegin',
                                `<span class="multi-select-header-option" data-value="${option.dataset.value}">${option.querySelector('.multi-select-option-text').innerHTML}</span>`
                            );
                        }
                        this.element.querySelector('.multi-select').insertAdjacentHTML('afterbegin',
                            `<input type="hidden" name="${this.name}[]" value="${option.dataset.value}">`
                        );
                        this.data.filter(data => data.value == option.dataset.value)[0].selected = true;
                    } else {
                        option.classList.remove('multi-select-selected');
                        this.element.querySelectorAll('.multi-select-header-option').forEach(
                            headerOption => headerOption.dataset.value == option.dataset.value ?
                            headerOption.remove() : '');
                        this.element.querySelector(`input[value="${option.dataset.value}"]`).remove();
                        this.data.filter(data => data.value == option.dataset.value)[0].selected =
                            false;
                        selected = false;
                    }
                    if (this.options.listAll === false || this.options.listAll === 'false') {
                        if (this.element.querySelector('.multi-select-header-option')) {
                            this.element.querySelector('.multi-select-header-option').remove();
                        }
                        headerElement.insertAdjacentHTML('afterbegin',
                            `<span class="multi-select-header-option">${this.selectedValues.length} selected</span>`
                        );
                    }
                    if (!this.element.querySelector('.multi-select-header-option')) {
                        headerElement.insertAdjacentHTML('afterbegin',
                            `<span class="multi-select-header-placeholder">${this.placeholder}</span>`
                        );
                    } else if (this.element.querySelector('.multi-select-header-placeholder')) {
                        this.element.querySelector('.multi-select-header-placeholder').remove();
                    }
                    if (this.options.max) {
                        this.element.querySelector('.multi-select-header-max').innerHTML = this
                            .selectedValues.length + '/' + this.options.max;
                    }
                    if (this.options.search === true || this.options.search === 'true') {
                        this.element.querySelector('.multi-select-search').value = '';
                    }
                    this.element.querySelectorAll('.multi-select-option').forEach(option => option.style
                        .display = 'flex');
                    headerElement.classList.remove('multi-select-header-active');
                    this.options.onChange(option.dataset.value, option.querySelector(
                        '.multi-select-option-text').innerHTML, option);
                    if (selected) {
                        this.options.onSelect(option.dataset.value, option.querySelector(
                            '.multi-select-option-text').innerHTML, option);
                    } else {
                        this.options.onUnselect(option.dataset.value, option.querySelector(
                            '.multi-select-option-text').innerHTML, option);
                    }
                };
            });
            headerElement.onclick = () => headerElement.classList.toggle('multi-select-header-active');
            if (this.options.search === true || this.options.search === 'true') {
                let search = this.element.querySelector('.multi-select-search');
                search.oninput = () => {
                    this.element.querySelectorAll('.multi-select-option').forEach(option => {
                        option.style.display = option.querySelector('.multi-select-option-text')
                            .innerHTML.toLowerCase().indexOf(search.value.toLowerCase()) > -1 ? 'flex' :
                            'none';
                    });
                };
            }
            if (this.options.selectAll === true || this.options.selectAll === 'true') {
                let selectAllButton = this.element.querySelector('.multi-select-all');
                selectAllButton.onclick = () => {
                    let allSelected = selectAllButton.classList.contains('multi-select-selected');
                    this.element.querySelectorAll('.multi-select-option').forEach(option => {
                        let dataItem = this.data.find(data => data.value == option.dataset.value);
                        if (dataItem && ((allSelected && dataItem.selected) || (!allSelected && !
                                dataItem.selected))) {
                            option.click();
                        }
                    });
                    selectAllButton.classList.toggle('multi-select-selected');
                };
            }
            if (this.selectElement.id && document.querySelector('label[for="' + this.selectElement.id + '"]')) {
                document.querySelector('label[for="' + this.selectElement.id + '"]').onclick = () => {
                    headerElement.classList.toggle('multi-select-header-active');
                };
            }
            document.addEventListener('click', event => {
                if (!event.target.closest('.' + this.name) && !event.target.closest('label[for="' + this
                        .selectElement.id + '"]')) {
                    headerElement.classList.remove('multi-select-header-active');
                }
            });
        }

        _updateSelected() {
            if (this.options.listAll === true || this.options.listAll === 'true') {
                this.element.querySelectorAll('.multi-select-option').forEach(option => {
                    if (option.classList.contains('multi-select-selected')) {
                        this.element.querySelector('.multi-select-header').insertAdjacentHTML('afterbegin',
                            `<span class="multi-select-header-option" data-value="${option.dataset.value}">${option.querySelector('.multi-select-option-text').innerHTML}</span>`
                        );
                    }
                });
            } else {
                if (this.selectedValues.length > 0) {
                    this.element.querySelector('.multi-select-header').insertAdjacentHTML('afterbegin',
                        `<span class="multi-select-header-option">${this.selectedValues.length} selected</span>`
                    );
                }
            }
            if (this.element.querySelector('.multi-select-header-option')) {
                this.element.querySelector('.multi-select-header-placeholder').remove();
            }
        }

        get selectedValues() {
            return this.data.filter(data => data.selected).map(data => data.value);
        }

        get selectedItems() {
            return this.data.filter(data => data.selected);
        }

        set data(value) {
            this.options.data = value;
        }

        get data() {
            return this.options.data;
        }

        set selectElement(value) {
            this.options.selectElement = value;
        }

        get selectElement() {
            return this.options.selectElement;
        }

        set element(value) {
            this.options.element = value;
        }

        get element() {
            return this.options.element;
        }

        set placeholder(value) {
            this.options.placeholder = value;
        }

        get placeholder() {
            return this.options.placeholder;
        }

        set name(value) {
            this.options.name = value;
        }

        get name() {
            return this.options.name;
        }

        set width(value) {
            this.options.width = value;
        }

        get width() {
            return this.options.width;
        }

        set height(value) {
            this.options.height = value;
        }

        get height() {
            return this.options.height;
        }

    }
    document.querySelectorAll('[data-multi-select]').forEach(select => new MultiSelect(select));
</script>


</html>
