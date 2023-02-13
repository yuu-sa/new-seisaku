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

    <title>新規会員登録</title>
</head>

<body class="container-sm">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <form action="{{ route('register') }}" method="post">
        @csrf

        <div class="signup-container">

          @if($errors->any())
            <div class="alert alert-danger">
              @foreach ($errors->all() as $errors)
                {{ $errors }}
              @endforeach
            </div>
          @endif

          <p class="h2 text-center mb-5">新規会員登録</p>
          <input type="text" class="form-control" name="nickname" placeholder="ニックネーム" maxlength="50" autofocus>
          <input type="email" class="form-control" name="email" placeholder="メールアドレス" maxlength="254" >
          <input type="password" class="form-control" name="password" placeholder="パスワード" minlength="4" maxlength="128" >
          <input type="password" class="form-control" name="password_confirmation" placeholder="パスワード(確認)" minlength="4" maxlength="128" >

          <button class="btn btn-primary btn-block mt-3" type="submit">会員登録する</button>
          <p class="text-center mt-5"><a href="/">ログイン</a></p>
        </div>
      </form>
    </div>
    </div>
  </div>
</body>

</html>