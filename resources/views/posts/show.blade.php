<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>{{ $post->title }}</title>
  <!-- <link rel="stylesheet" href="/css/styles.css"> -->
  <link rel="stylesheet" href="/css/portfolio.css">
</head>
<body>
  <!-- <div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{!! nl2br(e($post->body)) !!}</p>
  </div> -->

  <div class="header">
    <a href="{{ url('/') }}" class="header-back">Back</a>
    <a href= "{{ action('PostsController@edit', $post->id ) }}" class="header-back">Edit</a>
  </div>

  <div class="container container-main">
    <div class="container-main__title">
      <h1>{{ $post->title }}</h1>
    </div>
    <div class="container-main__message">
      <p>{!! nl2br(e($post->body)) !!}</p>
    </div>
  </div>

  <!-- <div class="container container-skills">
    <div class="container__title">
      <h1>SKILLs</h1>
    </div>
    <div class="container-skills-box">
      <div class="container-skills__title">
        <h3>program</h3>
      </div>
      <div class="container-skills__skills">
        aaa
      </div>
    </div>
    <div class="container-skills-box">
      <div class="container-skills__title">
        <h3>design</h3>
      </div>
      <div class="container-skills__skills">
        aaa
      </div>
    </div>
  </div> -->

  <div class="container container-works">
    <div class="container__title">
      <h1>WORKs</h1>
    </div>
    <div class="container__contents">
      <div class="container__contents__item">
        <div class="container__contents__item__image">
        </div>
        <div class="container__contents__item__title">
          <h3>program</h3>
        </div>
      </div>
      <div class="container__contents__item">
        <div class="container__contents__item__image">
        </div>
        <div class="container__contents__item__title">
          <h3>program</h3>
        </div>
      </div>
      <div class="container__contents__item">
        <div class="container__contents__item__image">
        </div>
        <div class="container__contents__item__title">
          <h3>program</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="container container-study">
    <div class="container__title">
      <h1>STUDY</h1>
    </div>
    <div class="container__contents">
      <div class="container__contents__item">
        <div class="container__contents__item__image">
        </div>
        <div class="container__contents__item__title">
          <h3>program</h3>
        </div>
      </div>
      <div class="container__contents__item">
        <div class="container__contents__item__image">
        </div>
        <div class="container__contents__item__title">
          <h3>program</h3>
        </div>
      </div>
      <div class="container__contents__item">
        <div class="container__contents__item__image">
        </div>
        <div class="container__contents__item__title">
          <h3>program</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="container container-blog">
    <div class="container__title">
      <h1>BLOG</h1>
    </div>
    <div class="container__contents">
      <div class="container__contents__item">
        <div class="container__contents__item__image">
        </div>
        <div class="container__contents__item__title">
          <h3>program</h3>
        </div>
      </div>
      <div class="container__contents__item">
        <div class="container__contents__item__image">
        </div>
        <div class="container__contents__item__title">
          <h3>program</h3>
        </div>
      </div>
      <div class="container__contents__item">
        <div class="container__contents__item__image">
        </div>
        <div class="container__contents__item__title">
          <h3>program</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="container container-about">
    <div class="container__title">
      <h1>ABOUT</h1>
    </div>
    <div class="container__about">
    <div class="container__about__person">

      <div class="container__about__person__left">
        <div class="container__about__person__left__img">
          <img class="logo" src="image/image.jpg" alt="logo">
        </div>
        <div class="container__about__person__left__sns">
          <div class="container__about__person__left__sns__link">
          </div>
          <div class="container__about__person__left__sns__link">
          </div>
          <div class="container__about__person__left__sns__link">
          </div>
        </div>
      </div>

      <div class="container__about__person__right">
        @foreach ($post->abouts as $about)
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
        @endforeach
      </div>

    </div>
    @foreach ($post->abouts as $about)
    <div class="container__about__biography">
      {{ $about->message }}
    </div>
    @endforeach
    </div>
  </div>

  <div class="container container-jobsearch">
    <div class="container__title">
      <h1>JOB SEARCH</h1>
    </div>
    <div class="container__contents">
      <div class="container__contents__item">
        <div class="container__contents__item__image">
        </div>
        <div class="container__contents__item__title">
          <h3>program</h3>
        </div>
      </div>
      <div class="container__contents__item">
        <div class="container__contents__item__image">
        </div>
        <div class="container__contents__item__title">
          <h3>program</h3>
        </div>
      </div>
      <div class="container__contents__item">
        <div class="container__contents__item__image">
        </div>
        <div class="container__contents__item__title">
          <h3>program</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="container container-contact">
    <div class="container__title">
      <h1>CONTACT</h1>
    </div>
  </div>

</body>
</html>