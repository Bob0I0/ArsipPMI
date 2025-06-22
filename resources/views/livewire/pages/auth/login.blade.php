<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="min-h-screen flex">
        <div class="hidden sm:block w-1/2 p-10 relative" style="background: linear-gradient(to right, #8E1212, #F42020);">
            <div class="absolute top-4 left-4 p-4 text-white">
                {{-- font-bold dan text-6xl untuk ukuran font besar, leading-tight untuk spasi antar baris --}}
                <h1 class="font-bold text-6xl leading-tight">Sistem</h1>
                <h1 class="font-bold text-6xl leading-tight">Informasi</h1>
                <h1 class="font-bold text-6xl leading-tight">Pengarsipan Surat</h1>
            </div>
        </div>
        <div class="w-full sm:w-1/2 flex items-center justify-center p-6 bg-white text-gray-900">
            {{-- Kartu Login: max-w-sm untuk responsif, p-8 padding, rounded-lg sudut, shadow-xl bayangan --}}
            <div class="w-full max-w-sm bg-white p-8 rounded-lg shadow-xl mx-auto my-auto">

                <div class="text-center mb-4">
                    {{-- Logo: mx-auto untuk centering, h-20 untuk tinggi (sesuaikan), w-auto agar proporsional --}}
                    <img src="{{ asset('images/LOGO-PMI-png-1 2.png') }}" alt="Login Logo" class="mx-auto w-full h-auto">
                </div>
                <x-auth-session-status class="mb-4 text-center text-green-600" :status="session('status')" />
                {{-- Form Livewire untuk Login --}}
                <form wire:submit="login">
                    {{-- Input Email --}}
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input wire:model="form.email" id="email"
                            class="block w-full py-2 px-3 text-gray-700 leading-tight
                                    border border-gray-200 
                                    rounded-lg 
                                    focus:outline-none focus:border-blue-300 focus:ring-1 focus:ring-blue-300 
                                    placeholder-gray-400 
                                    bg-white 
                                    transition-colors duration-200 ease-in-out"
                            type="email" name="email" required autofocus autocomplete="username"
                            placeholder="example@gmail.com" />
                        {{-- input-error adalah komponen Breeze untuk menampilkan error validasi --}}
                        <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                    </div>
                    {{-- Input Password --}}
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Kata Sandi</label>
                        <input wire:model="form.password" id="password"
                            class="block w-full py-2 px-3 text-gray-700 leading-tight
                                    border border-gray-200 
                                    rounded-lg 
                                    focus:outline-none focus:border-blue-300 focus:ring-1 focus:ring-blue-300 
                                    placeholder-gray-400 
                                    bg-white 
                                    transition-colors duration-200 ease-in-out"
                            type="password" name="password" required autofocus autocomplete="current-password"
                            placeholder="******" />
                        <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                    </div>
                    <!-- {{-- Remember Me --}}
                    <div class="block mb-4">
                        <label for="remember" class="inline-flex items-center">
                            <input wire:model="form.remember" id="remember" type="checkbox"
                                class="rounded bg-gray-900 border-gray-300 border-gray-700 text-red-600 shadow-sm
                                        focus:ring-red-500 focus:ring-red-600 focus:ring-offset-gray-800"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600 text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div> -->
                    {{-- Submit Button --}}
                    <div class="flex items-center justify-center"> 
                        <button type="submit"
                                class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded
                                        focus:outline-none focus:shadow-outline w-full"
                                wire:loading.attr="disabled">
                            Masuk
                        </button>
                    </div>

                    @error('form')
                        <p class="text-red-500 text-xs italic mt-4 text-center">{{ $message }}</p>
                    @enderror
                </form>
            </div>
        </div>
    </div>
</div>


