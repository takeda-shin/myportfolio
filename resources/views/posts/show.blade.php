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
  @if ($admin_id == $post->user_id)
  <div class="menu-bar">
    <a href="{{ url('/') }}" class="menu-button">Back</a>
    <a href= "{{ action('PostsController@edit', $post->id ) }}" class="menu-button">Edit</a>
  </div>
  @endif
  
  <header class="header">
    <p class="site-title-sub">Web engineer's portfolio</p>
    <h1 class="site-title">{{ $post->title }}</h1>
    <p class="site-description">{!! nl2br(e($post->body)) !!}</p>
    <div class="buttons">
      <a class="button" href="#about">LEARN MORE</a>
      <a class="button button-showy" href="#contact">SEND MESSAGE</a>
    </div>
  </header>

  @foreach ($post->abouts as $about)
  <!-- 表示するものがなければ項目ごと隠す -->
  @isset($about)
  <section class="about" id="about">
    <h2 class="heading heading-black">ABOUT ME</h2>
    
    <div class="container__about">
      <div class="container__about__person">
        <div class="container__about__person__left">
          <div class="container__about__person__left__img">
          <img src="{{ asset('storage/image/' . $about->image) }}" alt="" style="height: 100%; width: 80%;" />
          </div>
        </div>
        <div class="container__about__person__right">
          <div class="container__about__person__right__name">
            <div class="container__about__person__right__name__jp">
              {{ $about->family_name }} {{ $about->first_name }}
            </div>
            <div class="container__about__person__right__name__eng">
              {{ $about->first_name_eng }} {{ $about->family_name_eng }}
            </div>
          </div>
          <div class="container__about__person__right__info">
            <div class="container__about__person__right__info__title">
              拠点
            </div>
            <div class="container__about__person__right__info__text">
              {{ $about->base }}
            </div>
          </div>
          <div class="container__about__person__right__info">
            <div class="container__about__person__right__info__title">
              連絡先
            </div>
            <div class="container__about__person__right__info__text">
              {{ $about->email }}
            </div>
          </div>
          <div class="container__about__person__right__info">
            <div class="container__about__person__right__info__title">
              開発実績
            </div>
            <div class="container__about__person__right__info__text__dev">
              {{ $about->performance }}
            </div>
          </div>
        </div>
      </div>
      <div class="container__about__biography">
        {{ $about->message }}
      </div>
    </div>
  </section>
  @endisset
  @endforeach

  @if($works_count == 0)
  @else
  <section class="works">
    <h2 class="heading">WORKS</h2>
    @if ($works_count == 1)
    <div class="works-wrapper works-one">
    @elseif ($works_count == 2)
    <div class="works-wrapper works-two">
    @elseif ($works_count == 3)
    <div class="works-wrapper works-three">
    @elseif ($works_count == 4)
    <div class="works-wrapper works-four">
    @elseif ($works_count >= 5)
    <div class="works-wrapper works-upper-four">
    @endif
      @foreach ($post->works as $work)
      @if($works_count >= 5)
      <div class="work-box-upper-four">
      @else
      <div class="work-box">
      @endif
        <img class="work-image" src="{{ asset('storage/image/' . $work->image) }}" alt="制作事例１">
        <div class="work-description">
          <div class="work-description-inner">
            <p class="work-text">
              {{ $work->title }}<br>
              {{ $work->introduction }}<br>
              {{ $work->language }}<br>
              <a href="{{ $work->link }}" class="button button-ghost">LINK</a>
              <a href="{{ $work->github }}" class="button button-ghost">GITHUB</a>
            </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
  @endif

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