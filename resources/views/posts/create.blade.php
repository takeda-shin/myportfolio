<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>New Portfolio</title>
  <link rel="stylesheet" href="/css/new.css">
</head>
<body>

  <div class="header">
    <a href="{{ url('/') }}" class="header-back">Back</a>
  </div>

  <div class="container container-main">
    <div class="container-main__title">
      <h1>New Portfolio</h1>
    </div>
    <div class="container-main__message">
      <h3>きみの存在を世界に示そう！</h3>
    </div>

    <div class="form">
      <form method="post" action= "{{ url('/posts') }}">
        {{ csrf_field() }}
        <p>
          タイトル
        </p>
        <p>
          <input type="text" name="title" placeholder="enter title" value="{{ old('title') }}"> 
          <!-- エラーメッセージ -->
          @if ($errors->has('title'))
          <span class="error">{{ $errors->first('title') }}</span>
          @endif
        </p>
        <br>
        <p>
          キャッチコピー
        </p>
        <p>
          <textarea name="body" placeholder="enter body">{{ old('body') }}</textarea>
          <!-- エラーメッセージ -->
          @if ($errors->has('body'))
          <span class="error">{{ $errors->first('body') }}</span>
          @endif
        </p>
        <br>
        <p>
          <input type="submit" value="作成">
        </p>
      </form>
    </div>
  </div>


</body>
</html>