<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../css/login.css') }}">
    <title>Login Admin</title>
</head>
<body>
    <div class="login-box">
        <div class="login-header">
            <header>Login</header>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-box">
                <input type="email" id="email" class="input-field" name="email" placeholder="Email" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-box">
                <input type="password" id="password" class="input-field" name="password" placeholder="Password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>
            <div class="input-submit">
                <button type="submit" class="submit-btn" style="color: white">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
    </div>
</body>
</html>