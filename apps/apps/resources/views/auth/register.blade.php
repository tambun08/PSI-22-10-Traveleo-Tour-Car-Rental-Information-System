<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Traveleo Tour & Travel</title>
    <link rel="stylesheet" href="images/logo.jpeg" />
</head>
<style>
    body {
    --color-primary: #eeeeee;
    --color-primary-dark: white;
    --color-secondary: #252c6a;
    --color-error: #cc3333;
    --color-success: #4bb544;
    --border-radius: 4px;

    margin: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    background: url(./background.jpg);
    background-size: cover;
}

.container {
    width: 400px;
    max-width: 400px;
    margin: 1rem;
    padding: 2rem;
    box-shadow: 0 0 40px rgba(0, 0, 0, 0.2);
    border-radius: var(--border-radius);
    background: #ffffff;
}

.container,
.form__input,
.form__button {
    font: 500 1rem 'Quicksand', sans-serif;
    
}

.form--hidden {
    display: none;
}

.form > *:first-child {
    margin-top: 0;
}

.form > *:last-child {
    margin-bottom: 0;
}

.form__title {
    margin-bottom: 2rem;
    text-align: center;
}

.form__message {
    text-align: center;
    margin-bottom: 1rem;
}

.form__message--success {
    color: var(--color-success);
}

.form__message--error {
    color: var(--color-error);
}

.form__input-group {
    margin-bottom: 1rem;
    
}

.form__input {
    display: block;
    width: 100%;
    padding: 0.75rem;
    box-sizing: border-box;
    border-radius: var(--border-radius);
    border: 1px solid #dddddd;
    outline: none;
    
    transition: background 0.2s, border-color 0.2s;
}

.form__input:focus {
    border-color: var(--color-primary);
    background: #ffffff;
}

.form__input--error {
    color: var(--color-error);
    border-color: var(--color-error);
}

.form__input-error-message {
    margin-top: 0.5rem;
    font-size: 0.85rem;
    color: var(--color-error);
}

.form__button {
    width: 100%;
    padding: 1rem 2rem;
    font-weight: bold;
    font-size: 1.1rem;
    color: black;
    border: none;
    border-radius: var(--border-radius);
    outline: none;
    cursor: pointer;
    background: green;
}

.form__button:hover {
    background: var(--color-primary-dark);
}

.form__button:active {
    transform: scale(0.98);
}

.form__text {
    text-align: center;
}

.form__link {
    color: var(--color-secondary);
    text-decoration: none;
    cursor: pointer;
}

.form__link:hover {
    text-decoration: underline;
}
</style>

<body>
    <div class="container">
        <form class="form" id="login" action="{{ route('register') }}" method="post">
            @csrf
            <h1 class="form__title">SIREMOTRA
                Traveleo Tour & Travel</h1>
                <hr>
                @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
            @endif
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="email" id="signupUsername" name="email" class="form__input" autofocus placeholder="Email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" name="name" class="form__input" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Nama Lengkap"  name="nama_lengkap">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Nomor Hp"  name="no_hp">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Alamat"  name="alamat">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <select class="form__input @error('role_name') is-invalid @enderror" name="role_name" id="role_name">
                    <fieldset class="form-group">
                        <option selected disabled>Pilih Role Anda</option>
                        <option value="Admin" >Admin</option>
                        <option value="Operator">Operator</option>
                        <option value="Penyewa">penyewa</option>
                        <option value="Penyewa">supir</option>
                </select>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" name="password" class="form__input" placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>

            <button class="form__button" type="submit">Register</button>
            <hr>
            <p class="form__text">
                <center>
                    <p class="text-center">Sudah punya akun? <a href="{{ route('login') }}">Login</a> sekarang!</p>
                </center>
            </p>
        </form>
    </div>
</body>

</html>