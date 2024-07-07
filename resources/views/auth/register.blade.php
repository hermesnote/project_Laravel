<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('姓名')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div> --}}

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('電子郵件')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('密碼')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('確認密碼')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Social Login Buttons -->
        <div class="mt-4">
            <!-- Google 登入按鈕 -->
            <a href="{{ url('login/google') }}" class="bg-red-500 text-white font-bold py-2 px-4 rounded w-full flex items-center justify-center">
                <i class="fab fa-google mr-2"></i> 使用 Google 登入
            </a>

            <!-- Facebook 登入按鈕 -->
            <a href="{{ url('login/facebook') }}" class="bg-blue-600 text-white font-bold py-2 px-4 rounded w-full flex items-center justify-center mt-4">
                <i class="fab fa-facebook-f mr-2"></i> 使用 Facebook 登入
            </a>

            <!-- Twitter 登入按鈕 -->
            <a href="{{ url('login/twitter') }}" class="bg-blue-400 text-white font-bold py-2 px-4 rounded w-full flex items-center justify-center mt-4">
                <i class="fab fa-twitter mr-2"></i> 使用 Twitter 登入
            </a>

        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('已經註冊了嗎?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('註冊') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
