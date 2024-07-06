<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Accounts') }}
        </h2>
    </x-slot>

    <h1>Accounts</h1>
    <a href="{{ route('accounts.create') }}">Create New Account</a>
    <ul>
        @foreach($accounts as $account)
            <li>{{ $account->name }} - {{ $account->balance }}
                <a href="{{ route('accounts.edit', $account) }}">Edit</a>
                <form action="{{ route('accounts.destroy', $account) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-layouts.app>