<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

  <div class="container container-main">
    <div class="container-main__title">
      <h1>
        ア　イ　ム　ヒ　ア
      </h1>
    </div>

    <div class="container-main__subtitle">
      <h2>
        I am here. Next is...
      </h2>
    </div>

    <div class="container-main__command">
      <a href="{{ url('/posts/create') }}" class="header-back">新規作成</a>
      <a href="#" class="header-back">ログイン</a>
    </div>


    <ul>
      @foreach ($posts as $post)
      <li>
        <a href="{{ action('PostsController@show', $post->id ) }}">{{ $post->title }}</a>
        <a href= "{{ action('PostsController@edit', $post->id ) }}" class="edit">[Edit]</a>
        <a href= "#" class="del" data-id= "{{ $post->id }}" >[×]</a>
        <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
          {{ csrf_field() }}
          {{ method_field('delete') }}
        </form>
      </li>
      @endforeach
    </ul>
    <script src="/js/main.js"></script>
</body>
</html>