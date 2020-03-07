<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

  <div class="header">
    @guest
      <a href="{{ route('login') }}" class="header-back">Login</a>
      @if (Route::has('register'))
      <a href="{{ route('register') }}" class="header-back">register</a>
      @endif
    @else
     <a href="{{ url('/posts/create') }}" class="header-back">Create</a>
     <a href="{{ route('login') }}" class="header-back">Logout</a>
     <!-- <a class="header-back" href="{{ route('login') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a> -->
    @endguest
  </div>

  <div class="container container-main">
    <div class="container-main__title">
      <h1>
        My Portfolio
      </h1>
    </div>

    <div class="container-main__subtitle">
      <h2>
        I am here. Next is...
      </h2>
    </div>

    <div class="container-main__content">
      <ul>
        @foreach ($posts as $post)
        <li>
          <a href="{{ action('PostsController@show', $post->id ) }}">{{ $post->title }}</a>
          <a href= "#" class="del" data-id= "{{ $post->id }}" >[×]</a>
          <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
            {{ csrf_field() }}
            {{ method_field('delete') }}
          </form>
        </li>
        @endforeach
      </ul>
      <h3>5秒で作れる"自分専用"のポートフォリオサイト</h3>
    </div>



    <script src="/js/main.js"></script>
</body>
</html>