<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Work</title>
  <link rel="stylesheet" href="{{ asset('css/saintize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <script src="https://kit.fontawesome.com/cf74f62674.js" crossorigin="anonymous"></script>
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <h1 class="site__ttl">
        My Work
      </h1>
      <nav class="nav">
        <ul class="nav-list">
          <li class="nav__item"><a href="#about" class="nav-name">About</a></li>
          <li class="nav__item"><a href="#works" class="nav-name">Works</a></li>
          <li class="nav__item"><a href="#news" class="nav-name">News</a></li>
          <li class="nav__item"><a href="#contact" class="nav-name">Contact</a></li>
          <li class="nav__item"><a href="https://www.instagram.com/" target="brank" class="nav-name">
            <i class="fa-brands fa-instagram"></i></a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="main">
    <div class="header-img">
      <img src="/storage/top.jpg" alt="トップ画像">
    </div>

    <section id="about" class="about">
      <div class="about__inner">
        <h2 class="content__ttl">About</h2>

        <div class="content">
          <p class="content-item">Xxxxx Ashley</p>
          <p class="content-item">2th Floor xxxxx Building x-x-x Nishiazabu, Minato-ku, Tokyo 106-0031 Japan</p>
          <p class="content-item">tel: 000-0000-0000</p>
          <p class="content-item">url: www.xxxxxx.jp</p>
          <p class="content-item">mail: xxx@xxxxxx.jp</p>
          <p class="content-item">プロフィールテキストテキストテキストテキストテキストテキストテキストテキストテキストスト テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
      </div>
    </section>

    <section id="works" class="works">
      <div class="works__inner">
        <h2 class="content__ttl">Works</h2>
        <div class="img-area">
          <div class="img-item">
            <img src="/storage/1.jpg" alt="画像1">
          </div>
          <div class="img-item">
            <img src="/storage/2.jpg" alt="画像2">
          </div>
          <div class="img-item">
            <img src="/storage/3.jpg" alt="画像3">
          </div>
          <div class="img-item">
            <img src="/storage/4.jpg" alt="画像4">
          </div>
          <div class="img-item">
            <img src="/storage/5.jpg" alt="画像5">
          </div>
          <div class="img-item">
            <img src="/storage/6.jpg" alt="画像6">
          </div>
        </div>
      </div>
    </section>

    <section id="news" class="news">
      <div class="news__inner">
        <h2 class="content__ttl">News</h2>
          <table class="news-table">
            <tr class="news-table--row">
              <td class="news-table--date">2020.XX.XX</td>
              <td class="news-table--item">デザイン雑誌「ＸＸＸＸＸＸ Vol.11』に掲載していただきました。</td>
            </tr>
            <tr class="news-table--row">
              <td class="news-table--date">2020.XX.XX</td>
              <td class="news-table--item">ＸＸ月ＸＸ日から写真集「ＸＸＸＸＸＸＸ」の販売を開始します。</td>
            </tr>
            <tr class="news-table--row">
              <td class="news-table--date">2019.XX.XX</td>
              <td class="news-table--item">【イベント開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト</td>
            </tr>
            <tr class="news-table--row">
              <td class="news-table--date">2019.XX.XX</td>
              <td class="news-table--item">デザイン雑誌「ＸＸＸＸＸＸ Vol.10』に掲載していただきました。</td>
            </tr>
          </table>
      </div>
    </section>

    <section id="contact" class="contact">
      <div class="contact__inner">
        <h2 class="content__ttl">Contact</h2>
        <form action="/contacts/confirm" class="form" method="post">
          @csrf
          <div class="form__group">
            <span class="form__group--ttl">NAME</span>
            <input type="text" name="name" class="form__input--name" value={{ old('name') }}>
          </div>
          <div class="form__error">
            @error('name')
            {{ $message }}
            @enderror
          </div>
          <div class="form__group">
            <span class="form__group--ttl">E-mail</span>
            <input type="text" name="email" class="form__input--email" value={{ old('email') }}>
          </div>
          <div class="form__error">
            @error('email')
            {{ $message }}
            @enderror
          </div>
          <div class="form__group">
            <span class="form__group--ttl">MESSAGE</span>
            <textarea class="form__input--textarea" name="content"></textarea>
          </div>
              <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面
                </button>
              </div>
        </form>
      </div>
    </section>
  </main>
  <footer class="footer">
    <p class="footer-text">
      &copy; 2024 My Work
    </p>
  </footer>
</body>
</html>