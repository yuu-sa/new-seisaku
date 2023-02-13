<div class="d-flex flex-column col-2">
    <div class="row p-2 justify-content-center bg-dark">
        <div class="fs-4 text-white"><a href="{{ url('/home') }}" class="nav-link active">商品管理システム</a></div>
    </div>

    <ul class="nav flex-column mx-auto">
        <li class="nav-item">
            <a href="{{ url('/item_list') }}" class="nav-link active">商品一覧</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/item_register') }}" class="nav-link">商品登録</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/chat') }}" class="nav-link chat">チャット</a>
        </li>
    </ul>

    <div class="dropdown d-flex mx-auto">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ $user->name }}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('logout') }}">ログアウト</a>
        </div>
    </div>
</div>