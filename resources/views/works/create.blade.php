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
      add WORKS
    </div>
    <div class="button-box">
      <a class="button" href="{{ action('PostsController@edit', $post->id ) }}">TITLE</a>
      @foreach ($post->abouts as $about)
      @isset($about)
        <a href="{{ action('AboutsController@edit', $post->id ) }}" class="button">ABOUTS</a>
      @else
        <a href="{{ action('AboutsController@create', $post->id ) }}" class="button">ABOUTS</a>
      @endisset
      @endforeach
      <a class="button" href="{{ action('WorksController@index', $post->id) }}">WORKS</a>
      <a class="button" href="{{ action('PostsController@show', $post->id ) }}">BACK</a>
    </div>
  </div>
  <div class="container">
    <section class="add-contents" id="contact">
      <form method="POST" action="{{ action('WorksController@store', $post) }}" class="add-form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="title">
          <span>制作物のタイトル</span>
          <span class="required">必須</span>
        </div>
        <input type="text" name="title" value="{{ old('title') }}" placeholder="TITLE">
        @if ($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif

        <div class="title">
          <span>紹介文</span>
          <span class="required">必須</span>
        </div>
        <textarea name="introduction" placeholder="例）phpの練習を兼ねて作成しました。" value="{{ old('introduction') }}">{{ old('introduction') }}</textarea>
        @if ($errors->has('introduction'))
            <span class="help-block">
                <strong>{{ $errors->first('introduction') }}</strong>
            </span>
        @endif

        <div class="title">
          <span>開発言語・ソフトウェアなど</span>
          <span class="required">必須</span>
        </div>
        <textarea name="language" placeholder="例）HTML,CSS,PHP..." value="{{ old('language') }}">{{ old('language') }}</textarea>
        @if ($errors->has('language'))
            <span class="help-block">
                <strong>{{ $errors->first('language') }}</strong>
            </span>
        @endif

        <div class="title">
          <span>制作物イメージ画像</span>
          <span class="required">必須</span>
        </div>
        <input type="file" class="btn" name="image" id="images" placeholder="例）aaaa.jpg">
        @if ($errors->has('image'))
            <span class="help-block">
                <strong>{{ $errors->first('image') }}</strong>
            </span>
        @endif

        <div class="title">
          <span>制作物 URL</span>
          <span class="required">必須</span>
        </div>
        <input type="url" name="link" value="{{ old('link') }}" placeholder="http://...">
        @if ($errors->has('link'))
            <span class="help-block">
                <strong>{{ $errors->first('link') }}</strong>
            </span>
        @endif

        <div class="title">
          <span>Github URL</span>
          <span class="any">任意</span>
        </div>
        <input type="url" name="github" value="{{ old('github') }}" placeholder="http://...">
        @if ($errors->has('github'))
            <span class="help-block">
                <strong>{{ $errors->first('github') }}</strong>
            </span>
        @endif

        <input type="submit" value="SEND">
      </form>
    </section>
  </div>
</body>
</html>
