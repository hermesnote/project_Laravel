{{-- Blade文件不需要加< ? php --}}

{{-- @extends('layouts.app') --}}
<x-layouts.app>
{{-- 用來指定這個視圖繼承自哪個 Blade 模板 --}}
{{-- 這行程式碼告訴 Blade，這個視圖繼承自 resources/views/layouts/app.blade.php 模板。
    這樣可以避免每個視圖重複相同的 HTML 結構，便於維護和統一樣式。 --}}

{{-- @section('content') --}}
<x-slot>
{{-- 這行開始定義一個名為 content 的區塊，這個區塊中的內容會被插入到父模板的 @yield('content') 位置。 --}}
    <h1>Accounts</h1>
    <a href="{{ route('accounts.create') }}">Create New Account</a>
</x-slot>
    {{-- 這是 Blade 的插值語法，用來生成 accounts.create 路由的 URL。route('accounts.create') 會返回對應路由的 URL。 --}}
    <ul>
    {{-- HTML 無序列表標籤，用於定義一個無序列表。 --}}
        @foreach($accounts as $account)
        {{-- Blade 的迭代指令，用來遍歷 $accounts 集合中的每一個 account。 --}}
            <li>{{ $account->name }} - {{ $account->balance }}
            {{-- {{ }}：Blade 的插值語法，用來輸出變數的值並進行 HTML 編碼。 --}}
            {{-- $account->name：訪問當前 Account 模型實例的 name 屬性，並將其值輸出到 HTML。 --}}
            {{-- $account->balance：訪問當前 Account 模型實例的 balance 屬性，並將其值輸出到 HTML。 --}}
                <a href="{{ route('accounts.edit', $account) }}">Edit</a>
                {{-- 生成一個指向編輯當前帳戶的鏈接 --}}
                {{-- route('accounts.edit', $account) 函數會生成一個 URL，該 URL 對應於 routes/web.php 中命名為 accounts.edit 的路由 --}}
                {{-- $account 是當前迭代的 Account 模型實例，Laravel 會自動使用 $account 的 id 屬性來生成對應的 URL --}}
                {{-- 點擊該鏈接後，用戶將被重定向到該帳戶的編輯頁面 --}}
                <form action="{{ route('accounts.destroy', $account) }}" method="POST" style="display:inline">
                    @csrf
                    {{-- @csrf 指令會生成一個隱藏的 <input> 標籤，包含一個 CSRF 令牌，這樣每次提交表單時，Laravel 都能驗證請求是否合法。 --}}
                    @method('DELETE')
                    {{-- 這行 Blade 指令用來生成一個隱藏的 <input> 標籤，告訴 Laravel 這個表單提交的方法應該被視為 DELETE。 --}}
                    {{-- HTML 表單只支持 GET 和 POST 方法，但 RESTful 架構中經常需要使用 PUT、PATCH、DELETE 等方法。 --}}
                    {{-- @method('DELETE') 指令生成一個隱藏的 <input> 標籤，告訴 Laravel 這個表單提交應該被視為 DELETE 請求。 --}}
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
{{-- @endsection --}}
{{-- 這行標記 content 區塊的結束。 --}}
<x-layouts.app>