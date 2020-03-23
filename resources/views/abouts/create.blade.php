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
      add ABOUTS
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
      <a class="button" href="{{ action('WorksController@index', $post->id ) }}">WORKS</a>
      <a class="button" href="{{ action('PostsController@show', $post->id ) }}">BACK</a>
    </div>
  </div>
  <div class="container">
    <section class="add-contents">
      <form method="POST" action="{{ action('AboutsController@store', $post) }}" class="add-form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="title">
          <span>苗字</span>
          <span class="required">必須</span>
        </div>
        <input type="text" name="family_name" value="{{ old('family_name') }}" placeholder="例) 田中">
        @if ($errors->has('family_name'))
            <span class="help-block">
                <strong>{{ $errors->first('family_name') }}</strong>
            </span>
        @endif

        <div class="title">
          <span>名前</span>
          <span class="required">必須</span>
        </div>
        <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="例）太郎">
        @if ($errors->has('first_name'))
            <span class="help-block">
                <strong>{{ $errors->first('first_name') }}</strong>
            </span>
        @endif

        <div class="title">
          <span>苗字(ローマ字)</span>
          <span class="required">必須</span>
        </div>
        <input type="text" name="family_name_eng" value="{{ old('family_name_eng') }}" placeholder="例）Tanaka">
        @if ($errors->has('family_name_eng'))
            <span class="help-block">
                <strong>{{ $errors->first('family_name_eng') }}</strong>
            </span>
        @endif

        <div class="title">
          <span>名前(ローマ字)</span>
          <span class="required">必須</span>
        </div>
        <input type="text" name="first_name_eng" value="{{ old('first_name_eng') }}" placeholder="例）Taro">
        @if ($errors->has('first_name_eng'))
            <span class="help-block">
                <strong>{{ $errors->first('first_name_eng') }}</strong>
            </span>
        @endif

        <div class="title">
          <span>拠点</span>
          <span class="required">必須</span>
        </div>
        <input type="text" name="base" value="{{ old('base') }}" placeholder="例）福岡市">
        @if ($errors->has('base'))
            <span class="help-block">
                <strong>{{ $errors->first('base') }}</strong>
            </span>
        @endif

        <div class="title">
          <span>連絡先</span>
          <span class="required">必須</span>
        </div>
        <input type="text" name="email" value="{{ old('email') }}" placeholder="例）aaa@gmail.com">
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      
        <div class="title">
          <span>開発実績</span>
          <span class="required">必須</span>
        </div>
        <textarea name="performance" placeholder="例）HTML/CSS用いたフロントサイド開発" value="{{ old('performance') }}">{{ old('performance') }}</textarea>
        @if ($errors->has('performance'))
            <span class="help-block">
                <strong>{{ $errors->first('performance') }}</strong>
            </span>
        @endif

        <div class="title">
          <span>プロフィール画像</span>
          <span class="required">必須</span>
        </div>
        <input type="file" class="btn" name="image" id="image" placeholder="例）aaaa.jpg" value="{{ old('image') }}">
        @if ($errors->has('image'))
            <span class="help-block">
                <strong>{{ $errors->first('image') }}</strong>
            </span>
        @endif

        <div class="title">
          <span>twitter</span>
          <span class="required">必須</span>
        </div>
        <input type="text" name="twitter" value="{{ old('twitter') }}" placeholder="twitterアカウントのURL">
        @if ($errors->has('twitter'))
            <span class="help-block">
                <strong>{{ $errors->first('twitter') }}</strong>
            </span>
        @endif

        <div class="title">
          <span>facebook</span>
          <span class="required">必須</span>
        </div>
        <input type="text" name="facebook" value="{{ old('facebook') }}" placeholder="facebookアカウントのURL">
        @if ($errors->has('facebook'))
            <span class="help-block">
                <strong>{{ $errors->first('facebook') }}</strong>
            </span>
        @endif

        <div class="title">
          <span>instagram</span>
          <span class="required">必須</span>
        </div>
        <input type="text" name="instagram" value="{{ old('instagram') }}" placeholder="instagramアカウントのURL">
        @if ($errors->has('instagram'))
            <span class="help-block">
                <strong>{{ $errors->first('instagram') }}</strong>
            </span>
        @endif

        <div class="title">
          <span>略歴</span>
          <span class="required">必須</span>
        </div>
        <textarea name="message" placeholder="◯◯大学を卒業後…" value="{{ old('message') }}">{{ old('message') }}</textarea>
        @if ($errors->has('message'))
            <span class="help-block">
                <strong>{{ $errors->first('message') }}</strong>
            </span>
        @endif

        <input type="submit" value="SEND">
      </form>
    </section>
  </div>
</body>
</html>