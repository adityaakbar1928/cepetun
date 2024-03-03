<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/verifyemail.css">
    <title>Login Page | CepeTun</title>
</head>

<body>
    @if (session('success'))
            <label>
                <input type="checkbox" class="alertCheckbox" autocomplete="off" />
                <div class="alert success">
                    <span class="alertText">{{ session('success') }}<span class="alertClose"></i></span>
                </div>
            </label>
        @endif
    <div class="container">
        <div class="headcop">
            <h1>Verify Your Email</h1>
        </div>
        <div>
            <p>Kami telah mengirimkan email verifikasi, periksa email anda untuk melakukan verifikasi pendaftaran.</p>
            <p>Kirim Ulang Email, jika anda masih belum menerima email verifikasi.</p>
        </div>
        <div class="button-group">
            <form action="{{ route('verification.resend') }}" method="post">
                @csrf
                <button type="submit">Kembali ke Login</button>
            </form>
            <button><a href="{{ route('actionlogout') }}">Kembali ke Login</a></button>
        </div>
    </div>

    <script src="/assets/js/script.js"></script>
</body>

</html>