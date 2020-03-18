<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Edit Portfolio</title>
  <link rel="stylesheet" href="/css/new.css">
</head>
<body>

  <div class="header">
    <a href="{{ url('/') }}" class="header-back">Back</a>
    <a href="{{ url('/') }}" class="header-back">Logout</a>
    <a href="{{ url('/') }}" class="header-back" data-id= "{{ $post->id }}">Delete</a>
    <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
      {{ csrf_field() }}
      {{ method_field('delete') }}
    </form>
    <a href="{{ url('/') }}" class="header-back">Config</a>
    <a href="{{ url('/') }}" class="header-back">Contact</a>
    <a href="{{ url('/') }}" class="header-back">Resume</a>
    <a href="{{ action('AboutsController@edit', $post->id ) }}" class="header-back">About</a>
    <a href="{{ url('/') }}" class="header-back">Blog</a>
    <a href="{{ url('/') }}" class="header-back">Works</a>
    <a href= "{{ action('PostsController@edit', $post->id ) }}" class="header-back">Title</a>
  </div>

  <div class="container container-main">
    <div class="container-main__title">
      <h1>Edit Title</h1>
    </div>
    <div class="container-main__message">
      <h3>きみの存在を世界に示そう！</h3>
    </div>

    <div class="form">
      <form method="post" action= "{{ url('/posts', $post->id) }}">
        {{ csrf_field() }}
        {{ method_field('patch') }}
        <p>
          タイトル
        </p>
        <p>
          <input type="text" name="title" placeholder="enter title" value="{{ old('title', $post->title) }}">
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
          <textarea name="body" placeholder="enter body">{{ old('body', $post->body ) }}</textarea>
          <!-- エラーメッセージ -->
          @if ($errors->has('body'))
          <span class="error">{{ $errors->first('body') }}</span>
          @endif
        </p>
        <br>
        <p>
          <input type="submit" value="更新">
        </p>
      </form>
    </div>
  </div>


</body>
</html>