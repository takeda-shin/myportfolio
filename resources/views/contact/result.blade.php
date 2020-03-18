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
  <div class="container">
    <h1 class="site-title">Thanks.</h1>
    <p class="site-description">Your email has been successfully sent.</p>
    <div class="buttons">
      <a class="button" href="{{ url()->previous() }}">Back</a>
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>