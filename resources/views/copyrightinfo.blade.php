<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Copyright</title>
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

        nav ul li a img:hover {
            text-decoration: none;
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

    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 offset-1">
                    <h2 style="text-align: center">Copyright Information</h2>
                    <br />
                    <details>
                        <summary>What is Copyright?</summary>
                        <p>Copyright is a legal concept that grants creators exclusive rights to control the use and
                            distribution of their original works for a limited time. It covers various forms of creative
                            expression, including literary, artistic, musical, and software works, among others.
                            Copyright protection automatically arises upon creation and allows creators to reproduce,
                            distribute, perform, display, and adapt their works. The duration of copyright protection
                            varies by jurisdiction and type of work, typically lasting for the creator's lifetime plus a
                            certain period.</p>
                    </details>
                    <details>
                        <summary>Works eligible for Copyright</summary>
                        <p>literary wokrs; musical works; artistic works; films; sound recordings; broadcasts;
                            derivative works</p>
                    </details>
                    <details>
                        <summary>Duration of Copyright</summary>
                        <p><b>1. Literary, Musical or Artistic Works:</b><br>Generally, this categories of copyright
                            work reflects to the human beings which shall subsist during the life of the author plus 50
                            years after his death.<br>
                            <br><b>2. Film, Sound Recordings and Performer:</b><br>
                            This categories of copyright work shall subsist for 50 years from the work was published,
                            fixed in a fixation for the film and sound recording. For performer, the copyright work
                            shall subsist from the performances was perform or fixation in a sound recording.<br>
                            <br><b>3. Broadcasts:</b><br>For the copyright in broadcasts, it protection occurred in way
                            of transmission either by wire or wireless means, the period for fifty years shall be
                            computed from the which the broadcasts was first made.
                        </p>
                    </details>
                    <details>
                        <summary>The rights of Copyright Owners</summary>
                        <p><b>1. Legal rights:</b><br>
                            Author, copyright owner and performer is given an exclusive right to control under the
                            copyright law. Legal rights that are given to them includes the rights to enforce their
                            copyrighted works in cases for infringement either by civil or criminal action. In term of
                            criminal prosecution, it is conducted by the Enforcement Division of Ministry of Domestic
                            Trade, Cooperative and Consumerism (MTDCC) or Royal Malaysian Police.<br>
                            <br><b>2. Economic Rights:</b> <br> Economic rights that are given to rightholders includes
                            rights of reproduction, rights of communication to public, rights to perform, showing or
                            playing to the public, rights of distribution and rights of commercial rental. This rights
                            can be exercised during the period of protection governed under Copyright Act 1987. Economic
                            rights allows the owner of rights to derive financial reward from the use of his works by
                            the user or commercial purposes. Form of economic rights can be by way of assignment,
                            licensing and testamentary disposition.<br>
                            <br><b>3. Moral Rights:</b>
                            <br> - Paternity rights, This rights allows the author to claim the originality rights of
                            his or her creation.
                            <br> - Integrity Rights, This right authorizes the author to prevent any users from
                            distortion, mutilation or other modifications of his or her works whereby the result of the
                            modification will significantly alter the original work and adversely affect the author’s
                            honor or reputation.
                        </p>
                    </details>
                    <details>
                        <summary>Copyright infringements</summary>
                        <p>Whoever uses any copyrighted works without consent or authorization from the author, copyright
                            owner and performer, it may constitute an infringement under Copyright Act 1987. Amongst the
                            act of infringement includes:<br>
                            <br>> Reproduces in any material form, performs, shows or plays or distributes to the
                            public<br>
                            <br>> Imports any article into Malaysia for the purpose of trade or financial gains<br>
                            <br>> Makes for sale or rent any infringing copy<br>
                            <br>> Sells, rent or by way of trade, exposes or offers for sale or rent any infringing
                            copy<br>
                            <br>> Distributes infringing copies<br>
                            <br>> Possesses, otherwise than for his private and domestic use, any infringing copy<br>
                            <br>> Exhibits in public any infringing copy by way of trade<br>
                            <br>> Makes or has in his possession any contrivance used or intended to be used for the
                            purpose of making infringing copies<br>
                        </p>
                    </details>
                </div>
                <div class="box">
                    <br><br>
                    <a href="{{ route('copyform') }}">
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
