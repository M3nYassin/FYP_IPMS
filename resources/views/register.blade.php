@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p style="color:red;">{{ $error }}</p>
    @endforeach
@endif
<div class="container">
    <input type="checkbox" id="check">
    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="login form">
            <header>Signup</header>
            <input type="text" placeholder="Enter your Full Name" id="name" class="form-control" name="name"
                required>

            <input type="text" placeholder="Enter your email" id="email" class="form-control" name="email"
                required autofocus>

            <input type="password" placeholder="Enter your password" id="password" class="from-control" name="password"
                required autofocus>

            <input type="password" placeholder="Confirm your password" id="password_confirmation" class="form-control"
                name="password_confirmation" required autofocus>

            <input type="submit" value="Register">

    </form>

    <div class="signup">
        <span class="signup">Already have an account?
            <label for="check"><a href="login">Login</a></label>

            @if (Session::has('success'))
                <p style="color:green;">{{ Session::get('success') }}</p>
            @endif

            <style>
                /* Import Google font - Poppins */
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: 'Poppins', sans-serif;
                }

                body {
                    min-height: 100vh;
                    width: 100%;
                    background: #092044;
                }

                .container {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    max-width: 430px;
                    width: 100%;
                    background: #fff;
                    border-radius: 7px;
                    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
                }

                .container .registration {
                    display: none;
                }

                #check:checked~.registration {
                    display: block;
                }

                #check:checked~.login {
                    display: none;
                }

                #check {
                    display: none;
                }

                .container .form {
                    padding: 2rem;
                }

                .form header {
                    font-size: 2rem;
                    font-weight: 500;
                    text-align: center;
                    margin-bottom: 1.5rem;
                }

                .form input {
                    height: 60px;
                    width: 100%;
                    padding: 0 15px;
                    font-size: 17px;
                    margin-bottom: 1.3rem;
                    border: 1px solid #ddd;
                    border-radius: 6px;
                    outline: none;
                }

                .form input:focus {
                    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
                }

                .form a {
                    font-size: 16px;
                    color: #009579;
                    text-decoration: none;
                }

                .form a:hover {
                    text-decoration: underline;
                }

                .form input.button {
                    color: #fff;
                    background: #009579;
                    font-size: 1.2rem;
                    font-weight: 500;
                    letter-spacing: 1px;
                    margin-top: 1.7rem;
                    cursor: pointer;
                    transition: 0.4s;
                }

                .form input.button:hover {
                    background: #006653;
                }

                .signup {
                    font-size: 17px;
                    text-align: center;
                }

                .signup label {
                    color: #009579;
                    cursor: pointer;
                }

                .signup label:hover {
                    text-decoration: underline;
                }
            </style>
