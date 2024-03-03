<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/stylelogin.css">
    <title>Login Page | CepeTun</title>
</head>

<body>
    @if (session('message'))
            <label>
                <input type="checkbox" class="alertCheckbox" autocomplete="off" />
                <div class="alert success">
                    <span class="alertText">{{ session('message') }}<span class="alertClose"></i></span>
                </div>
            </label>
        @endif
        @if (session('error'))
            <label>
                <input type="checkbox" class="alertCheckbox" autocomplete="off" />
                <div class="alert error">
                    <span class="alertText">Error: {{ session('error') }}<span class="alertClose"></span>
                </div>
            </label>
        @endif
        @if (session('verifymessage'))
            <label>
                <input type="checkbox" class="alertCheckbox" autocomplete="off" />
                <div class="alert error" id="verifyemail">
                    <span class="alertText">{{ session('verifymessage') }}<span class="alertClose"></span>
                </div>
            </label>
        @endif
    <div class="container" id="container">
        <div class="form-container sign-up" id="reg">
            <form action="{{ route('actionregister') }}" method="POST">
                @csrf
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="text" placeholder="Name" name="name">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <button type="submit">Register</button>
            </form>
        </div>
        <div class="form-container sign-in" id="log">
            <form action="{{ route('actionlogin') }}" method="POST">
                @csrf
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="email" name="email" placeholder="Email">
                <input type="password" placeholder="Password" name="password">
                <a href="#">Forget Your Password?</a>
                <button type="submit">Log In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Silahkan login jika anda sudah mendaftar</p>
                    <button class="hidden" id="login">Log In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, There!</h1>
                    <p>Daftar disini jika anda belum mendaftar untuk dapat menggunakan fitur CepeTun</p>
                    <button class="hidden" id="register">Register</button>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
</body>

</html>