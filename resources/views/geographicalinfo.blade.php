<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Industrial Design Basic Info</title>
    <style type="text/css">
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

        .logo {
            width: 100px;
            height: auto;
            margin: 8px;
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

        @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro");


        details summary::-webkit-details-marker {
            display: none;
        }

        details summary::before {
            content: "";
            position: absolute;
            left: 0;
            no-repeat 50% 50% / 1em 1em;
            width: 1.5em;
            height: 1.5em;
            transition: transform 0.1s linear;
            margin-left: 10%;
        }

        summary {
            margin-left: 10%;
            margin-right: 10%;
            width: 80%;
            padding: 20px;
            padding-left: 25px;
            border-bottom: 1px solid #ccc;
        }

        summary:hover {
            color: #007bff;
        }

        summary:focus {
            outline: none;
        }

        details[open] summary:before {
            transform: rotate(90deg);
        }

        details[open]>summary {
            color: #007bff;
        }

        details[open]>summary~* {
            animation: open 1s ease;
            margin-left: 12%;
            margin-right: 11%;
        }

        p.source {
            padding-top: 50px;
            font-size: 0.75em;
            text-align: center;
        }

        @keyframes open {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .button-28 {
            appearance: none;
            background-color: transparent;
            border: 2px solid #092044;
            border-radius: 15px;
            box-sizing: border-box;
            color: #3B3B3B;
            cursor: pointer;
            display: inline-block;
            font-family: Roobert, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 16px;
            font-weight: 600;
            line-height: normal;
            margin: 0;
            min-height: 60px;
            min-width: 0;
            outline: none;
            padding: 16px 24px;
            text-align: center;
            text-decoration: none;
            transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            width: 13%;
            will-change: transform;
        }

        .button-28:disabled {
            pointer-events: none;
        }

        .button-28:hover {
            color: #fff;
            background-color: #092044;
            box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
            transform: translateY(-2px);
        }

        .button-28:active {
            box-shadow: none;
            transform: translateY(0);
        }

        .box {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 45px;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/flags/flags.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
        <div class="container-nav">
            {{-- <nav>
                <ul>
                    <li><a href="{{ route('patentinfo') }}">Patent</a></li>
                    <li><a href="{{ route('utilityinfo') }}">Utility</a></li>
                    <li><a href="{{ route('trademarkinfo') }}">Trademark</a></li>
                    <li><a href="{{ route('industrialinfo') }}">Industrial Design</a></li>
                    <li><a href="{{ route('geographicalinfo') }}">Geographical Indication</a></li>
                    <li><a href="{{ route('copyrightinfo') }}">Copyright</a></li>
                    <li><a href="{{ route('custdash') }}">Dashboard</a></li>
                    <li><a href="{{ route('about-us') }}">About Us</a></li>
                    <li><a href="{{ route('user.forum') }}">Forum</a></li>
                    <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                </ul>
            </nav> --}}
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 offset-1">
                    <h2 style="text-align: center">Geographical Indications Information</h2>
                    <br />
                    <details>
                        <summary>What is Geographical Indications?</summary>
                        <p>Geographical indications (GIs) are signs used on products that have a specific geographical
                            origin and possess qualities, reputation, or characteristics that are essentially
                            attributable to that place of origin. These indications are typically used to protect and
                            promote products that have a strong association with their geographical location, often due
                            to unique environmental factors, traditional production methods, or cultural heritage.
                            Geographical indications can include the names of regions, towns, or other geographical
                            entities and may refer to agricultural products, foodstuffs, wines, spirits, handicrafts,
                            and industrial products.</p>
                    </details>
                    <details>
                        <summary>Protection of Geographical Indications</summary>
                        <p>The protection of geographical indications is aimed at safeguarding the reputation,
                            integrity, and economic value of products associated with specific geographical regions.
                            This protection is typically provided through legal frameworks at the national, regional,
                            and international levels, which establish rules and procedures for the registration, use,
                            and enforcement of geographical indications.</p>
                    </details>
                    <details>
                        <summary>Exclusion from Protections of Geographical Indications</summary>
                        <p>1. Geographical indications which are contrary to public order or morality or territory of
                            origin.<br>
                            <br>2. Geographical indications which are not or have ceased to be protected in their
                            country.<br>
                            <br>3. Geographical indications which have fallen into disuse in their country or territory
                            of origin.
                        </p>
                    </details>
                    <details>
                        <summary>Rights of use</summary>
                        <p>
                            1. Only producers carrying on their activity in the geographical area specified in the
                            Register shall have the right to use a registered geographical indication in the course of
                            trade.<br>
                            <br>2. The right of use be in respect of the products specified in the Register in a
                            accordance to the qualify, reputation or characteristic specified in the Register.
                        </p>
                    </details>
                    <details>
                        <summary>Who may apply?</summary>
                        <p>1. A person who is carrying on an activity as a producer in the geographical area specified
                            in the application with respect to the goods specified in the application, and includes with
                            respect to the such person.<br>
                            <br>2. A competent authority.<br>
                            <br>3. A trade organization or association.
                        </p>
                    </details>
                </div>
                <div class="box">
                    <br><br>
                    <a href="{{ route('geographic') }}">
                        <button class="button-28" role="button">Apply Now</button></a>
                </div>
    </main>
</body>
<br><br><br>
<footer style="background-color: #092044">
    <div class="container">
        <p style="color: #fff">&copy; SRDC 2024</p>
    </div>
</footer>

<script type="text/javascript">
    // Fetch all details element
    const details = Array.from(document.querySelectorAll("details"));

    // Add onclick listeners
    details.forEach(targetDetail => {
        targetDetail.addEventListener("click", () => {
            // Close all details that are not targetDetail
            details.forEach(detail => {
                if (detail !== targetDetail) {
                    detail.removeAttribute("open");
                }
            });
        });
    });
</script>

<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}" type="91732f123e0b155049445025-text/javascript"></script>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="91732f123e0b155049445025-text/javascript"></script>

<script src="{{ asset('assets/js/feather.min.js') }}" type="91732f123e0b155049445025-text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}" type="315e37247ada644ce95c8823-text/javascript"></script>

<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="315e37247ada644ce95c8823-text/javascript"></script>

<script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}" type="91732f123e0b155049445025-text/javascript"></script>

<script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}" type="91732f123e0b155049445025-text/javascript"></script>
<script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}" type="91732f123e0b155049445025-text/javascript"></script>

<script src="{{ asset('assets/js/script.js') }}" type="91732f123e0b155049445025-text/javascript"></script>
<script src="{{ asset('assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
    data-cf-settings="91732f123e0b155049445025-|49" defer></script>

</html>
