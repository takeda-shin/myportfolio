<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" conyent="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>My Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href= "/css/normalize.css">
  <link rel="stylesheet" href= "/css/work_edit_design.css">
</head>

<body>
  <div class="menu-bar">
    <a href="{{ url('/') }}" class="menu-button">Back</a>
    <a href= "{{ action('PostsController@edit', $post->id ) }}" class="menu-button">Edit</a>
  </div>

  <div class="side-header">
    <div class="edit-title">
      edit TITLE
    </div>
    <div class="button-box">
      <a class="button" href="{{ action('PostsController@edit', $post->id ) }}">TITLE</a>
      @isset($post->about)
      <a href="{{ action('AboutsController@edit', $post->id ) }}" class="button">ABOUTS</a>
      @else
      <a href="{{ action('AboutsController@create', $post->id ) }}" class="button">ABOUTS</a>
      @endisset
      <a class="button" href="{{ action('WorksController@index', $post->id) }}">WORKS</a>
      <a class="button" href="{{ action('PostsController@show', $post->id ) }}">BACK</a>
    </div>
  </div>
  <div class="container">
    <section class="add-contents">
      <form method="POST" action="{{ url('/posts', $post->id) }}" class="add-form">
        {{ csrf_field() }}
        {{ method_field('patch') }}
        
        <div class="title">
          <span>タイトル</span>
          <span class="required">必須</span>
        </div>
        <input type="text" name="title" value="{{ old('title', $post->title) }}" placeholder="enter title">
          <!-- エラーメッセージ -->
          @if ($errors->has('title'))
          <span class="error">{{ $errors->first('title') }}</span>
          @endif

        <div class="title">
          <span>キャッチコピー</span>
          <span class="required">必須</span>
        </div>
        <textarea name="body" placeholder="enter body" value="{{ old('body', $post->body ) }}">{{ old('body', $post->body ) }}</textarea>
          <!-- エラーメッセージ -->
          @if ($errors->has('body'))
          <span class="error">{{ $errors->first('body') }}</span>
          @endif

        <input type="submit" value="SEND">
      </form>
    </section>
  </div>
</body>
</html>