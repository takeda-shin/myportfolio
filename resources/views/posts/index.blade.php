<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" conyent="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>My Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href= "/css/normalize.css">
  <link rel="stylesheet" href= "/css/home-style.css">
</head>
<body>
  <header class="header">
    <p class="site-title-sub">５秒で作れる自分専用のポートフォリオ</p>
    <h1 class="site-title">MY Portfolio</h1>
    <p class="site-description">I am here. Next is...</p>
    <div class="buttons">
      @guest
        <a href="{{ route('login') }}" class="button">ログイン</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="button button-showy">新規登録</a>
        @endif
      @else
      @empty($user_post)
        <a href="{{ url('/posts/create') }}" class="button">ポートフォリオを作る</a>
      @else
        <a href="{{ url('/posts', $user_post->id) }}" class="button">ポートフォリオを確認</a>
      @endif
        <a href="{{ route('logout') }}" class="button button-showy"
          onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            ログアウト
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      @endguest
    </div>
  </header>
  <!-- トップ画面にポートフォリオ一覧を表示させる場合は以下を利用 -->
  <!-- <div class="container-main__content">
    <ul>
      @if(count($post) > 0)
        @foreach ($post as $post)
        <li>
          <a href="{{ action('PostsController@show', $post->id ) }}">{{ $post->title }}</a>
          <a href= "#" class="del" data-id= "{{ $post->id }}" >[×]</a>
          <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
            {{ csrf_field() }}
            {{ method_field('delete') }}
          </form>
        </li>
        @endforeach
      @endif
    </ul>
  </div> -->
  <script src="/js/placeholders.min.js"></script>
  <script src="/js/main.js"></script>
</body>
</html>
