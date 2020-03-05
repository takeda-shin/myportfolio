<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

  <div class="container">
    <h1>
      <a href="{{ url('/posts/create') }}" class="header-back">New</a>
      My Portfolio
    </h1>
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