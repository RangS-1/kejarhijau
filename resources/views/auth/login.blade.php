<x-guest-layout>
    <div class="min-h-screen grid grid-cols-1 lg:grid-cols-2 bg-white dark:bg-gray-900">
        <!-- ================================================================= -->
        <!-- SEBELAH KIRI: GAMBAR / VISUAL (HALAMAN LOGIN)                     -->
        <!-- ================================================================= -->
        <div class="relative hidden lg:flex flex-col justify-between p-12 bg-slate-950 text-white overflow-hidden border-r border-slate-800">
            <!-- Background Decorative Glow (Opsional) -->
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-emerald-600/20 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-emerald-900/30 rounded-full blur-3xl pointer-events-none"></div>

            <!-- Top Brand Logo / Header Kiri -->
            <div class="relative z-10 flex items-center gap-3">
                <a href="/" class="flex items-center gap-3">
                    <x-application-logo class="w-10 h-10 fill-current text-emerald-400" />
                    <span class="text-xl font-bold tracking-tight text-white">KejarHijau</span>
                </a>
            </div>

            <!-- AREA GAMBAR (PLACEHOLDER) -->
            <!-- ----------------------------------------------------------------- -->
            <!-- PETUNJUK UNTUK MENEMPELKAN GAMBAR:                                -->
            <!-- Ganti bagian di dalam container <div> di bawah ini dengan tag     -->
            <!-- <img> milik Anda, contoh:                                         -->
            <!-- <img src="{{ asset('images/login-bg.png') }}" alt="Login Visual" -->
            <!--      class="w-full h-full object-cover rounded-xl" />             -->
            <!-- ----------------------------------------------------------------- -->
            <div class="relative z-10 my-auto py-8">
                <!-- BLOK PLACEHOLDER GAMBAR -->
                <div class="w-full max-w-lg mx-auto min-h-[360px] border-2 border-dashed border-slate-700/80 rounded-2xl bg-slate-900/60 backdrop-blur-sm flex flex-col items-center justify-center p-8 text-center transition hover:border-emerald-500/50">
                    <div class="w-16 h-16 rounded-full bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 mb-4 shadow-inner">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-200 mb-1">Area Gambar Login</h3>
                    <p class="text-sm text-slate-400 max-w-xs mb-3">
                        Bagian ini disiapkan untuk gambar visual login.
                    </p>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-mono bg-slate-800 text-emerald-400 border border-slate-700">
                        &lt;img src="..." /&gt;
                    </span>
                </div>
            </div>

            <!-- Bottom Left Footer Info -->
            <div class="relative z-10 text-xs text-slate-500">
                &copy; {{ date('Y') }} KejarHijau. All rights reserved.
            </div>
        </div>

        <!-- ================================================================= -->
        <!-- SEBELAH KANAN: FORM LOGIN                                         -->
        <!-- ================================================================= -->
        <div class="flex flex-col justify-between p-6 sm:p-10 lg:p-16 min-h-screen">
            <!-- Top Right Navigation Link -->
            <div class="flex justify-between sm:justify-end items-center w-full">
                <!-- Mobile Logo -->
                <a href="/" class="lg:hidden flex items-center gap-2">
                    <x-application-logo class="w-8 h-8 fill-current text-emerald-600 dark:text-emerald-400" />
                    <span class="font-bold text-gray-900 dark:text-white">KejarHijau</span>
                </a>
                <div class="text-sm text-gray-600 dark:text-gray-400">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="font-semibold text-emerald-600 dark:text-emerald-400 hover:text-emerald-500 hover:underline ms-1 inline-flex items-center gap-1">
                        Daftar &rarr;
                    </a>
                </div>
            </div>

            <!-- Main Form Container -->
            <div class="w-full max-w-md mx-auto my-auto py-8">
                <div class="mb-8">
                    <h1 class="text-2xl sm:text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Masuk ke KejarHijau
                    </h1>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        Masukkan email dan password akun Anda untuk melanjutkan.
                    </p>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-6" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" class="font-medium text-gray-700 dark:text-gray-300" />
                        <x-text-input 
                            id="email" 
                            class="block mt-1.5 w-full rounded-lg border-gray-300 dark:border-gray-700 dark:bg-gray-800 focus:border-emerald-500 focus:ring-emerald-500 text-sm py-2.5 px-3.5" 
                            type="email" 
                            name="email" 
                            :value="old('email')" 
                            required 
                            autofocus 
                            autocomplete="username" 
                            placeholder="nama@email.com"
                        />
                        <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" class="font-medium text-gray-700 dark:text-gray-300" />
                        <x-text-input 
                            id="password" 
                            class="block mt-1.5 w-full rounded-lg border-gray-300 dark:border-gray-700 dark:bg-gray-800 focus:border-emerald-500 focus:ring-emerald-500 text-sm py-2.5 px-3.5" 
                            type="password" 
                            name="password" 
                            required 
                            autocomplete="current-password" 
                            placeholder="••••••••"
                        />
                        <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between pt-1">
                        <label for="remember_me" class="inline-flex items-center cursor-pointer">
                            <input 
                                id="remember_me" 
                                type="checkbox" 
                                class="rounded border-gray-300 dark:border-gray-700 text-emerald-600 shadow-sm focus:ring-emerald-500 dark:bg-gray-900" 
                                name="remember"
                            >
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ingat saya') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="text-sm font-medium text-emerald-600 dark:text-emerald-400 hover:text-emerald-500 hover:underline" href="{{ route('password.request') }}">
                                {{ __('Lupa password?') }}
                            </a>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-2">
                        <button 
                            type="submit" 
                            class="w-full bg-emerald-600 hover:bg-emerald-700 active:bg-emerald-800 text-white font-semibold py-2.5 px-4 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900 transition duration-150 ease-in-out flex items-center justify-center gap-2 text-sm"
                        >
                            <span>{{ __('Masuk') }}</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Bottom Spacer / Footer -->
            <div class="text-center sm:text-left text-xs text-gray-400 dark:text-gray-600 pt-4">
                KejarHijau Auth Portal
            </div>
        </div>
    </div>
</x-guest-layout>
