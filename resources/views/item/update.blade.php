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

    <title>商品管理システム/商品編集</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @include('common.side')
            <div class="col-md-2"></div>
            <div class="col-md-6">
                    <h2>商品の編集</h2>
                @if (count($errors)>0)
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ url('/item_update/'.$form[0]->id) }}" method="post" enctype="multipart/form-data" >
                    <table  class="table-responsive">
                        @csrf
                        @foreach ($form as $ids )
                            <tr><th>商品名:</th><td><input type="text" name="name" value="{{$ids->name}}"></td></tr>
                            <tr><th>種別:</th><td><input type="number" min="1" max="9" step="1" name="type" value="{{$ids->type}}"></td></tr>
                            <tr><th>商品価格:</th><td><input type="text" name="price" value="{{$ids->price}}"></td></tr>
                            <tr><th>画像:</th><td><input type="file" name="image"></td></tr>
                            <tr><th>現在の画像:</th><td><img src="{{ Storage::url($ids->image) }}" alt="画像" width="80px"></td></tr>
                            <tr><th>詳細:</th><td><input type="text" name="detail" value="{{$ids->detail}}"></td></tr>
                            @endforeach
                    </table>
                            <div class="button">
                                <button class="btn btn-primary mt-3" type="submit" name="button1">修正</button>
                            </div>


                    <form action="{{ url('/item_update/'.$form[0]->id) }}" method="POST">
                        @csrf
                        <div class="button">
                            <button class="btn btn-outline-danger mt-5" type="submit" name="button2">削除</button>
                        </div>
                    </form>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
