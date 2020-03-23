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
      edit WORKS
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
      <a class="button" href="#others">OTHERS</a>
      <a class="button" href="{{ action('PostsController@show', $post->id ) }}">BACK</a>
    </div>
  </div>
  <div class="container">
    <div class="box-one">
      <div class="add-box">
        <div class="image add-image">
          <a class="add-link" href="{{ action('WorksController@create', $post->id ) }}"></a>
          <i class="icon fa fa-plus"></i>
        </div>
        <p>WORKを追加</p>
      </div>
    </div>

    <!-- <div class="box-line">
      <div class="box"> -->
    <div class="box-line">
      @foreach ($post->works as $work)
      <div class="box">
        <div class="image">
        <a href="{{ action('WorksController@edit', $work->id ) }}"><img src="{{ asset('storage/image/' . $work->image) }}" alt="" style="height: 100%; width: 80%;" /></a>
        </div>
        <p>{{ $work->title }}</p>
      </div>
      @endforeach
    </div>
  </div>
</body>
</html>
