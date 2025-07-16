@section('title', 'Mot de passe oublié - CleanLodge')
@section('content-class', 'flex-center')


<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 text-center">
        {{ __('Mot de passe oublié ? Aucun souci. Indiquez votre adresse email et nous vous enverrons un lien pour le réinitialiser.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email -->
        <div class="form-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Submit -->
        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Envoyer le lien') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

