<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/flags/flags.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            max-width: 800px;
            margin: 0 auto;
        }

        fieldset {
            border: 2px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        legend {
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #666;
        }

        .checks {
            display: flex;
        }

        input[type="text"],
        textarea,
        .input-file {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="checkbox"],
        input[type="radio"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }




        textarea {
            height: 150px;
            resize: vertical;
        }

        .checkbox,
        .radio {
            margin-bottom: 10px;
        }

        .checkbox label,
        .radio label {
            display: inline-block;
            margin-right: 20px;
            font-weight: normal;
            color: #666;
        }

        .checkbox input[type="checkbox"],
        .radio input[type="radio"] {
            margin-right: 5px;
            display: inline-block;
            vertical-align: middle;
        }

        input[type="date"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 5px 5px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            width: 110px;
            /* Adjust width as needed */
            margin: 0 10px;
            /* Add some space between buttons */
            transition: 0.5s ease-in-out;
        }

        input[type="reset"] {
            background-color: #d72f2f;
            /* Red color */
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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

        h1 {
            margin: 0;
        }

        .search-bar {
            flex: 1;
            margin-left: auto;
            text-align: right;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        input[type="text"] {
            padding: 10px;
            width: 100%;
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
    </style>
     <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
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

    <h1>Utility Innovation Form Submission</h1>
    <form method="post" action="{{ route('saveItemUtil') }}" accept-charset="UTF-8" class="patentForm"
        enctype="multipart/form-data">
        {{ csrf_field() }}

        <fieldset>

            <!-- Form Name -->
            <legend class="legends">1. Invention</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="inventiontitle">Title of Invention</label>
                <div class="col-md-10">
                    <input id="inventiontitle" name="inventiontitle" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend class="legends">2. Applicant Info</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="name">Applicant Name</label>
                <div class="col-md-10">
                    <input id="name" name="name" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="applicantid">I.C / Passport No</label>
                <div class="col-md-10">
                    <input id="applicantid" name="applicantid" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="applicantaddress">Address In Malaysia</label>
                <div class="col-md-10">
                    <input id="applicantaddress" name="applicantaddress" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="applicantnationality">Nationality</label>
                <div class="col-md-10">
                    <input id="applicantnationality" name="applicantnationality" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>



            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="telno">Telephone No</label>
                <div class="col-md-10">
                    <input id="telno" name="telno" type="text" placeholder="012-3456789"
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="faxno">Fax No</label>
                <div class="col-md-10">
                    <input id="faxno" name="faxno" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend class="legends">3. Innovator Status</legend>
            <!-- Text input-->
            <div class="form-group" >
                <label><input type="radio" name="innovator_status" value="innovator"> Yes</label>
                <label><input type="radio" name="innovator_status" value="not_innovator"> No</label>

                <div id="innovator_info" style="display: none;">
                    <h3>If the applicant is not the innovator:</h3>
                    <label>Name of innovator: <input type="text" name="innovator_name"></label><br>
                    <label>Address of innovator: <input type="text" name="innovator_address"></label><br>
                </div>
            </div>
        </fieldset>


        <fieldset>
            <legend class="legends">5. Divisional Application</legend>
            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-10 control-label" for="divisional">This application is a divisional
                    application</label>
                <div class="col-md-10">
                    <label class="radio-inline" for="divisional-0">
                        <input type="radio" name="divisional" id="divisional-0" value="Yes">
                        Yes
                    </label>
                    <label class="radio-inline" for="divisional-1">
                        <input type="radio" name="divisional" id="divisional-1" value="No">
                        No
                    </label>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="filingdate">The benefit of the filing date</label>
                <div class="col-md-10">
                    <input id="filingdate" name="filingdate" type="date" placeholder="MM/DD/YYYY"
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="prioritydate">Priority Date</label>
                <div class="col-md-10">
                    <input id="prioritydate" name="prioritydate" type="date" placeholder="MM/DD/YYYY"
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="initialapplication">Initial Application No.</label>
                <div class="col-md-10">
                    <input id="initialapplication" name="initialapplication" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="initialfiling">Date of Filing of initial
                    application</label>
                <div class="col-md-10">
                    <input id="initialfiling" name="initialfiling" type="date" placeholder="MM/DD/YYYY"
                        class="form-control input-md" required />

                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend class="legends">6. Priority Claim</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="claimcountry">Country (if the earlier application is a
                    regional or international application, indicate the office with which it is filed)</label>
                <div class="col-md-10">
                    <input id="claimcountry" name="claimcountry" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="filingclaim">Filing Date</label>
                <div class="col-md-10">
                    <input id="filingclaim" name="filingclaim" type="date" placeholder="MM/DD/YYYY"
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="claimapplication">Application No.</label>
                <div class="col-md-10">
                    <input id="claimapplication" name="claimapplication" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-10 control-label" for="patentsymbol">Symbol of the International Patent
                    Classification allocated</label>
                <div class="col-md-10">
                    <label class="radio-inline" for="patentsymbol-0">
                        <input type="radio" name="patentsymbol" id="patentsymbol-0" value="Yes">
                        Yes
                    </label>
                    <label class="radio-inline" for="patentsymbol-1">
                        <input type="radio" name="patentsymbol" id="patentsymbol-1" value="No">
                        No
                    </label>
                </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-10 control-label" for="earlyapplication">The priority of more than one earlier
                    application is claimed</label>
                <div class="col-md-10">
                    <label class="radio-inline" for="earlyapplication-0">
                        <input type="radio" name="earlyapplication" id="earlyapplication-0" value="Yes">
                        Yes
                    </label>
                    <label class="radio-inline" for="earlyapplication-1">
                        <input type="radio" name="earlyapplication" id="earlyapplication-1" value="No">
                        No
                    </label>
                </div>
            </div>

            <div class="pdpaa">
                <p>By submitting the form, you hereby consent into signing the <a
                        href="{{ route('help') }}#PDPA">PDPA</a> to the Sarawak Research and Development Council
                    (Research Council) and other relevant agencies and associates </p>
            </div>
        </fieldset>

        <!-- Button (Double) -->
        <div class="button-container">
            <input type="submit" value="Submit">
            <input type="reset">
        </div>

    </form>
    <br><br>
    <footer style="background-color: #092044">

        <p style="color: #fff">&copy; SRDC 2024</p>

    </footer>

    <script>
        document.querySelectorAll('input[name="innovator_status"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                var innovatorInfo = document.getElementById('innovator_info');
                if (this.value === 'not_innovator' && this.checked) {
                    innovatorInfo.style.display = 'block';
                } else {
                    innovatorInfo.style.display = 'none';
                }
            });
        });

        function handleAgentStatus() {
            var agentStatus = document.querySelector('input[name="agent_status"]:checked').value;
            var agentInfo = document.getElementById('agent_info');
            var representativeInfo = document.getElementById('representative_info');

            if (agentStatus === 'agent_appointed') {
                agentInfo.style.display = 'block';
                representativeInfo.style.display = 'none';
            } else if (agentStatus === 'representative_appointed') {
                agentInfo.style.display = 'none';
                representativeInfo.style.display = 'block';
            }
        }
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
</body>

</html>
