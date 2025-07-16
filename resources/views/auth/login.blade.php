@section('title', 'Connexion - CleanLodge')



<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input id="password" type="password" name="password" required>
            @error('password') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <!-- Remember + Forgot Password -->
        <div class="form-row">
            <label class="remember-me">
                <input type="checkbox" name="remember">
                Se souvenir de moi
            </label>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="forgot-link">Mot de passe oublié ?</a>
            @endif
        </div>

        <div class="register">
            <a href="{{ route('register')}}">Vous n'avez pas de compte ? Inscrivez-vous</a>
        </div>

        <!-- Submit -->
        <x-primary-button class="ms-4">
                {{ __('login') }}
            </x-primary-button>
    </form>
</x-guest-layout>
