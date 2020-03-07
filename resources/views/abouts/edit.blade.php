<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Edit Portfolio</title>
  <link rel="stylesheet" href="/css/new.css">
</head>
<body>

  <div class="header">
    <a href="{{ url('/') }}" class="header-back">Back</a>
    <a href="{{ url('/') }}" class="header-back">Logout</a>
    <a href="{{ url('/') }}" class="header-back">Config</a>
    <a href="{{ url('/') }}" class="header-back">Contact</a>
    <a href="{{ url('/') }}" class="header-back">Resume</a>
    <a href="{{ action('AboutsController@edit', $post->id ) }}" class="header-back">About</a>
    <a href="{{ url('/') }}" class="header-back">Blog</a>
    <a href="{{ url('/') }}" class="header-back">Study</a>
    <a href="{{ url('/') }}" class="header-back">Works</a>
    <!-- <a href="{{ url('/') }}" class="header-back">Skills</a> -->
    <a href= "{{ action('PostsController@edit', $post->id ) }}" class="header-back">Title</a>
  </div>

  <div class="container container-main">
    <div class="container-main__title">
      <h1>Edit About</h1>
    </div>
    <div class="container-main__message">
      <h3>きみの存在を世界に示そう！</h3>
    </div>


    <div class="container-main__form">
      <div class="form">
        <form method="post" action= "{{ action('AboutsController@store', $post) }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <p>
            苗字
          </p>
          <p>
            <input type="text" name="family_name" placeholder="例)田中">
          </p>
          <p>
            名前
          </p>
          <p>
            <input type="text" name="first_name" placeholder="例）太郎">
          </p>
          <p>
            苗字(ローマ字)
          </p>
          <p>
            <input type="text" name="family_name_eng" placeholder="例）Tanaka">
          </p>
          <p>
            名前(ローマ字)
          </p>
          <p>
            <input type="text" name="first_name_eng" placeholder="例）Taro">
          </p>
          <p>
            拠点
          </p>
          <p>
            <input type="text" name="base" placeholder="例）福岡市">
          </p>
          <p>
            連絡先
          </p>
          <p>
            <input type="text" name="email" placeholder="例）aaa@gmail.com">
          </p>
          <p>
            開発実績
          </p>
          <p>
            <textarea name="performance" placeholder="例）HTML/CSS用いたフロントサイド開発"></textarea>
          </p>
          <p>
            プロフィール画像
          </p>
          <p>
            <input type="file" class="btn" name="image" id="images" placeholder="例）aaaa.jpg">
            <!-- <input type="file" name="image" placeholder="例）aaaa.jpg"> -->
          </p>
          <p>
            twitter
          </p>
          <p>
            <input type="text" name="twitter" placeholder="twitterアカウントのURL">
          </p>
          <p>
            facebook
          </p>
          <p>
            <input type="text" name="facebook" placeholder="facebookアカウントのURL">
          </p>
          <p>
            instagram
          </p>
          <p>
            <input type="text" name="instagram" placeholder="instagramアカウントのURL">
          </p>
          <br>
          <p>
            略歴
          </p>
          <p>
            <textarea name="message" placeholder="◯◯大学を卒業後…"></textarea>
          </p>
          <br>
          <p>
            <input type="submit" value="作成">
          </p>
        </form>
      </div>
    </div>
  </div>


</body>
</html>