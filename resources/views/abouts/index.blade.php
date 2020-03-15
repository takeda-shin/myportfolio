<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" conyent="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>My Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href= "/css/normalize.css">
  <link rel="stylesheet" href= "/css/style.css">
</head>
<body>
  <header class="header">
    <p class="site-title-sub">Web desiner's portfolio</p>
    <h1 class="site-title">HI, MY NAME IS...</h1>
    <p class="site-description">Check out some of my works.</p>
    <div class="buttons">
      <a class="button" href="#about">LEARN MORE</a>
      <a class="button button-showy" href="#contact">SEND MESSAGE</a>
    </div>
  </header>
  <section class="about" id="about">
    <h2 class="heading">ABOUT ME</h2>
    <p class="about-text">
      はじめまして。日本でWebデザイナーをしています。<br>
      デザインの専門学校を卒業し、制作会社での業務経験を経て、現在はフリーランスとして働いています。
    </p>
    <p class="about-text">
      このサイトは、「HTML/CSS モダンコーディング」という書籍のサンプルとして作られた、架空のデザイナーのポートフォリオサイトです。<br>
      このサンプルのようなサイトをいちから作る過程を通して、HTMLとCSSの実践的なコーディングノウハウを学ぶことが出来ます。
    </p>
  </section>
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
  </section>
  <section class="skills">
    <h2 class="heading">MY SKILLS</h2>
    <div class="skills-wrapper">
      <div class="skill-box">
        <i class="skill-icon fa fa-lightbulb-o"></i>
        <div class="skill-title">IDEA</div>
        <p class="skill-text">
          何かを考えることが好きです。<br>
          新しい事を思いついては試しています。<br>
          ディレクションの経験もあります。
        </p>
      </div>
      <div class="skill-box">
        <i class="skill-icon fa fa-paint-brush"></i>
        <div class="skill-title">DESIGN</div>
        <p class="skill-text">
          見た目の綺麗さだけじゃなくて、<br>
          使いやすさ、情報の伝わりやすさなど、<br>
          その先まで考えることを意識しています。
        </p>
      </div>
      <div class="skill-box">
        <i class="skill-icon fa fa-code"></i>
        <div class="skill-title">CODING</div>
        <p class="skill-text">
          HTML/CSSコーディングも行います。<br>
          正しく美しいマークアップと、<br>
          今後の変更への強さを考慮しています。
        </p>
      </div>
    </div>
  </section>
  <section class="contact" id="contact">
    <h2 class="heading">CONTACT</h2>
    <form class="contact-form">
      <input type="text" name="name" placeholder="NAME">
      <textarea name="message" placeholder="MESSAGE"></textarea>
      <input type="submit" value="SEND">
    </form>
  </section>
  <footer class="footer">
    ©︎ sample site
  </footer>
  <script src="/js/placeholders.min.js"></script>
</body>
</html>
