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

    <div class="container__contact-form">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <form class="contact-form php-mail-form" method="post" action= "{{ url('/posts') }}">
            {{ csrf_field() }}
            <div class="form-group">
              <input type="hidden" name="user_id" value="1">
              <input type="" name="title" class="form-control" id="contact-name" placeholder="Title" data-rule="minlen:4">
              <!-- エラーメッセージ -->
              @if ($errors->has('title'))
              <span class="error">{{ $errors->first('title') }}</span>
              @endif
            </div>

            <div class="form-group">
              <textarea class="form-control" name="body" id="contact-message" placeholder="Catch Copy" rows="5"></textarea>
              <!-- エラーメッセージ -->
              @if ($errors->has('body'))
              <span class="error">{{ $errors->first('body') }}</span>
              @endif
            </div>

            <div class="form-send">
              <button type="submit" class="btn btn-large">Create</button>
            </div>

          </form>
        </div>
      </div>
     </div>


</body>
</html>