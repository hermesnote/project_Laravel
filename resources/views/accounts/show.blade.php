<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('帳戶詳情') }}
        </h2>
    </x-slot>

    <h1>帳戶詳情</h1>
    <p>名稱：{{ $account->name }}</p>
    <p>餘額：{{ $account->balance }}</p>
</x-layouts.app>
