<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" conyent="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>My Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href= "/css/normalize.css">
  <link rel="stylesheet" href= "/css/portfolio_design.css">
</head>

<body>
  <div class="menu-bar">
    <a href="{{ url('/') }}" class="menu-button">Back</a>
    <a href= "{{ action('PostsController@edit', $post->id ) }}" class="menu-button">Edit</a>
  </div>
  
  <header class="header">
    <p class="site-title-sub">Web engineer's portfolio</p>
    <h1 class="site-title">{{ $post->title }}</h1>
    <p class="site-description">{!! nl2br(e($post->body)) !!}</p>
    <div class="buttons">
      <a class="button" href="#about">LEARN MORE</a>
      <a class="button button-showy" href="#contact">SEND MESSAGE</a>
    </div>
  </header>

  @foreach ($post->abouts as $post)
  <!-- 表示するものがなければ項目ごと隠す -->
  @isset($post)
  <section class="about" id="about">
    <h2 class="heading heading-black">ABOUT ME</h2>
    
    <div class="container__about">
    <div class="container__about__person">
      <div class="container__about__person__left">
        <div class="container__about__person__left__img">
        <img src="{{ asset('storage/image/' . $post->image) }}" alt="" style="height: 100%; width: 80%;" />
        </div>
      </div>
      <div class="container__about__person__right">
        <div class="container__about__person__right__name">
          <div class="container__about__person__right__name__jp">
            {{ $post->family_name }} {{ $post->first_name }}
          </div>
          <div class="container__about__person__right__name__eng">
            {{ $post->first_name_eng }} {{ $post->family_name_eng }}
          </div>
        </div>
        <div class="container__about__person__right__info">
          <div class="container__about__person__right__info__title">
            拠点
          </div>
          <div class="container__about__person__right__info__text">
            {{ $post->base }}
          </div>
        </div>
        <div class="container__about__person__right__info">
          <div class="container__about__person__right__info__title">
            連絡先
          </div>
          <div class="container__about__person__right__info__text">
            {{ $post->email }}
          </div>
        </div>
        <div class="container__about__person__right__info">
          <div class="container__about__person__right__info__title">
            開発実績
          </div>
          <div class="container__about__person__right__info__text__dev">
            {{ $post->performance }}
          </div>
        </div>
      </div>
    </div>
    <div class="container__about__biography">
      {{ $post->message }}
    </div>
    
    </div>
  </section>
  @endisset
  @endforeach

  <section class="works">
    <h2 class="heading">WORKS</h2>
    <div class="works-wrapper">
      <div class="work-box tree">
        <img class="work-image" src="images/tree.jpg" alt="制作事例１">
        <div class="work-description">
          <div class="work-description-inner">
            <p class="work-text">
              ひとつめの制作事例が入ります。<br>
              簡単な説明が入ります。<br>
              使用ツール：XXX, XXX, XXX<br>
              <a href="#" class="button button-ghost">READ MORE</a>
            </p>
          </div>
        </div>
      </div>
      <div class="work-box building">
        <img class="work-image" src="images/building.jpg" alt="制作事例２">
        <div class="work-description">
          <div class="work-description-inner">
            <p class="work-text">
              ふたつめの制作事例が入ります。<br>
              簡単な説明が入ります。<br>
              使用ツール：XXX, XXX, XXX<br>
              <a href="#" class="button button-ghost">READ MORE</a>
            </p>
          </div>
        </div>
      </div>
      <div class="work-box lake">
        <img class="work-image" src="images/lake.jpg" alt="制作事例３">
        <div class="work-description">
          <div class="work-description-inner">
            <p class="work-text">
              みっつめの制作事例が入ります。<br>
              簡単な説明が入ります。<br>
              使用ツール：XXX, XXX, XXX<br>
              <a href="#" class="button button-ghost">READ MORE</a>
            </p>
          </div>
        </div>
      </div>
      <div class="work-box sky">
        <img class="work-image" src="images/sky.jpg" alt="制作事例４">
        <div class="work-description">
          <div class="work-description-inner">
            <p class="work-text">
              よっつめの制作事例が入ります。<br>
              簡単な説明が入ります。<br>
              使用ツール：XXX, XXX, XXX<br>
              <a href="#" class="button button-ghost">READ MORE</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <h2 class="heading">CONTACT</h2>
    <form method="POST" action="{{ route('contact.send', $post->id) }}" class="contact-form">
      {{ csrf_field() }}

      <input type="text" name="name" value="{{ old('name') }}" placeholder="NAME">
      @if ($errors->has('name'))
          <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
          </span>
      @endif

      <input type="email" name="email" value="{{ old('email') }}" placeholder="E-MAIL">
      @if ($errors->has('email'))
          <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif

      <textarea name="message" placeholder="MESSAGE" value="{{ old('message') }}">{{ old('message') }}</textarea>
      @if ($errors->has('message'))
          <span class="help-block">
              <strong>{{ $errors->first('message') }}</strong>
          </span>
      @endif
      <input type="submit" value="SEND">
    </form>
  </section>
  <script src="/js/placeholders.min.js"></script>
</body>
</html>