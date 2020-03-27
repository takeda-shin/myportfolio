<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" conyent="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>My Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href= "/css/normalize.css">
  <link rel="stylesheet" href= "/css/create_portfolio.css">
</head>
<body>
  <header class="header">
    <h1 class="site-title">Create Portfolio</h1>
    <form method="POST" action= "{{ url('/posts') }}" class="contact-form php-mail-form">
    {{ csrf_field() }}
    <div class="form-group">
      <input type="hidden" name="user_id" value="{{ $user_id }}">
      <input type="text" name="title" placeholder="ポートフォリオのタイトル" data-rule="minlen:4">
      <!-- エラーメッセージ -->
      @if ($errors->has('title'))
      <span class="error">{{ $errors->first('title') }}</span>
      @endif
    </div>

    <div class="form-group">
      <textarea name="body" id="contact-message" placeholder="ポートフォリオのキャッチコピー" rows="5"></textarea>
      <!-- エラーメッセージ -->
      @if ($errors->has('body'))
      <span class="error">{{ $errors->first('body') }}</span>
      @endif
    </div>
    <input type="submit" value="CREATE">
  </header>
  <script src="/js/placeholders.min.js"></script>
  <script src="/js/main.js"></script>
</body>
</html>