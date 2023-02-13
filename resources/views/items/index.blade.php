<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"crossorigin="anonymous"></script>
    <!-- popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"crossorigin="anonymous"></script>
    <!-- bootstrap.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"crossorigin="anonymous"></script>

    <title>商品管理システム/商品一覧</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @include('common.side')
            <div class="col">
                <div class="col-12 text-right mt-3 mb-3">
                    <a class="btn btn-outline-primary" href="{{ url('/item_register') }}" role="button">商品登録</a>
                </div>          
                <div class="col text-center">
                    <table class="table table-bordered">
                        <thead>
                        <th>商品ID</th>
                        <th>商品名</th>
                        <th>種別</th>
                        <th>商品価格</th>
                        <th>画像</th>
                        <th>詳細</th>
                        <th>登録者ID</th>
                        <th>登録者氏名</th>
                        <th></th>
                        </thead>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->price }}</td>
                            <td><img src="{{ Storage::url($item->image) }}" alt="" width="80px"></td>
                            <td>{{ $item->detail }}</td>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->user_name }}</td>
                            <td><a class="btn btn-primary btn-sm" href="{{ url('/item_update/'.$item->id) }}" role="button"><div>編集</div></a></td>
                        </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>