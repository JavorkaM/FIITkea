@extends('app')

@section('title', 'Prihlásenie/Registrácia')

@section('content')
<div class="container">
    <div class="row">
        <!--    LOGIN   -->
        <div class="col-sm-6" style="border-right: 1px black solid">
            <h1 style="text-align:center">Prihlásenie</h1>
            <form method="POST" action="{{ route('login') }}" class="">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail:</label>
                    <input id="login-email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Heslo:</label>
                    <input id="login-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    @if (Route::has('password.request'))
                        <a id="forgot" class="form-text" href="{{ route('password.request') }}">
                            Zabudli ste heslo?
                        </a>
                    @endif

                </div>

                <div style="text-align:center">
                    <input type="submit" class="btn btn-dark btn-lg" value="Prihlásiť">
                    <br>

                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember" class="form-label">Zapamätať si ma</label>
                </div>
            </form>
        </div>
        <!--    REGISTER    -->
        <div class="col-sm-6">
            <h1 style="text-align:center">Registrácia</h1>
            <form method="POST" action="{{ route('register') }}" class="row g-2">
                @csrf
                <div class="col-12">
                    <label for="email" class="form-label">Email:</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="password" class="form-label">Heslo:</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="password-confirm" class="form-label">Potvrdenie hesla:</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                </div>
                <br>
                <div class="col-12">
                    <label for="name" class="form-label">Meno:</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div class="col-12">
                    <label for="surname" class="form-label">Priezvisko:</label>
                    <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}"  autocomplete="surname" autofocus>
                    @error('surname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12">
                    <div class="input-group">
                        <span class="input-group-text">+421</span>
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" pattern="^[0-9]{9}$" title="Tel. č. bez predvoľby"  name="phone" value="{{ old('phone') }}"  autocomplete="phone" autofocus>
                    </div>
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-8">
                    <label for="city" class="form-label">Mesto:</label>
                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}"  autocomplete="city" autofocus>
                    @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="zip" class="form-label">PSČ:</label>
                    <input id="zip" type="text" class="form-control @error('zip') is-invalid @enderror" name="zip" pattern="^[0-9]{5}$" title="PSČ v tvare 12345" value="{{ old('zip') }}"  autocomplete="zip" autofocus>
                    @error('zip')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="street" class="form-label">Ulica a č. domu:</label>
                    <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ old('street') }}"  autocomplete="street" autofocus>
                    @error('street')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <input type="submit" class="form-control btn btn-lg btn-dark" value="Registrovať">
            </form>
            <br>
        </div>
    </div>
</div>
@endsection