<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-12 text-right mt-3 mb-3">
                <a href="{{ url('/add') }}">>>登録</a>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <th>名前</th>
                    <th>電話番号</th>
                    <th>メールアドレス</th>
                    <th></th>
                </thead>
                <tr>
                    <td>鈴木一郎</td>
                    <td>090-1234-5678</td>
                    <td>test@test.com</td>
                    <td><a href="{{ url('edit') . '/1' }}">>>編集</a></td>
                </tr>
                <tr>
                    <td>鈴木一郎</td>
                    <td>090-1234-5678</td>
                    <td>test@test.com</td>
                    <td><a href="{{ url('edit') . '/2' }}">>>編集</a></td>
                </tr>
                <tr>
                    <td>鈴木一郎</td>
                    <td>090-1234-5678</td>
                    <td>test@test.com</td>
                    <td><a href="{{ url('edit') . '/3' }}">>>編集</a></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>