<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('編輯帳戶') }}
        </h2>
    </x-slot>

    <h1>編輯帳戶</h1>
    <form action="{{ route('accounts.update', $account) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">名稱：</label>
        <input type="text" id="name" name="name" value="{{ $account->name }}" required>

        <label for="balance">餘額：</label>
        <input type="text" id="balance" name="balance" value="{{ $account->balance }}" required>

        <button type="submit">更新帳戶</button>
    </form>
</x-layouts.app>
