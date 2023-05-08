<x-guest-layout>
 
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="/css/Login.css">
            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
            <title>Login</title>
        </head>
        <body>
            <div class="login-wrap">
            <div class="login-html">
                <div>
                    <h1 style="text-align: center;color: #fff;margin-bottom: 60px;font-family: 'nunito';font-weight: normal;">Inscription</h1>
                </div>
                
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Inscription</label>

                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><a href="{{route('login')}}">Se connecter</a></label>
                <div class="login-form">
                    <div class="sign-in-htm">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                                <!-- Name -->
                                <div>
                                    <x-label for="name" :value="__('Name')" />

                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-label for="email" :value="__('Email')" />

                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-label for="password" :value="__('Password')" />

                                    <x-input id="password" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-input id="password_confirmation" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password_confirmation" required />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>

                                    <x-button class="ml-4">
                                        {{ __('Register') }}
                                    </x-button>
                                </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        </body>
        </html>

</x-guest-layout>
