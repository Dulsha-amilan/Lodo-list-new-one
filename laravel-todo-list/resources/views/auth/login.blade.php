<x-guest-layout>
    <x-authentication-card>

        <x-slot name="logo" class="w-1/2 max-w-md p-6 bg-transparent" >
            <div class="flex">
                <div id="lottie-container" class="w-1/2 h-500px">
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            var animationContainer = document.getElementById('lottie-container');
                            lottie.loadAnimation({
                                container: animationContainer,
                                renderer: 'svg',
                                loop: true,
                                autoplay: true,
                                path: '{{ asset('animation/Login.json') }}' // Path to your animation JSON file
                            });
                        });
                    </script>
                </div>
                <br><br><br>
                <!-- Form Container -->
                <div class="w-1/2 max-w-md p-6 bg-transparent">
                    <x-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="relative z-0 w-full mb-6 group">
                            <x-label for="email" />Email
                            <x-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="block mt-1 w-full" placeholder=" " />
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <x-label for="password">Password</x-label>
                            <x-input id="password" type="password" name="password" :value="old('password')" required autofocus autocomplete="username" class="block mt-1 w-full" placeholder=" " />
                        </div>

                        <div class="block relative z-0 w-full mb-6 group">
                            <label for="remember_me" class="flex items-center">
                                <x-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                            @endif

                            <x-button class="ml-4">
                                {{ __('Log in') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </x-slot>
    </x-authentication-card>
    <br>
    <!-- Footer starts here -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p class="text-base">&copy; {{ date('Y') }} Your Company Name. All rights reserved.</p>
        </div>
    </footer>
</x-guest-layout>
