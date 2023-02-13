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

    <title>ログインフォーム</title>
</head>
<body>

<form method="POST" action="{{ route('login') }}">
  @csrf

  <div class="container-sm">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <p class="h2 text-center mb-5">ログインフォーム</p>
        <label for="inputEmail" class="sr-only"></label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="メールアドレス" >
        <label for="inputPassword" class="sr-only"></label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="パスワード" >
        <button class="btn btn-primary btn-block mt-3" type="submit">ログイン</button>
        <p class="text-center mt-5"><a href="/touroku">会員登録</a></p>
      </div>
    </div>
  </div>
</form>

</body>
</html>