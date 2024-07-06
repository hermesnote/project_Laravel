<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('新增帳戶') }}
        </h2>
    </x-slot>

    <h1>新增帳戶</h1>
    <form action="{{ route('accounts.store') }}" method="POST">
        @csrf
        <label for="name">名稱：</label>
        <input type="text" id="name" name="name" required>

        <label for="balance">餘額：</label>
        <input type="text" id="balance" name="balance" required>

        <button type="submit">新增帳戶</button>
    </form>
</x-layouts.app>
