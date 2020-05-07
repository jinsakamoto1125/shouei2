<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>昭栄電気産業</title>
    <link rel="stylesheet" href="common/common.css">
    <meta name="viewport" content="width=device-wide, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<div class="top-wrapper-1">
    <div class="header-left">
      <img src="img/shouei4.png" alt="">
        <h1>SHO-EI</h1>
    </div>
    <div class="header-right">
        <a href="#href">採用情報</a>
        <a href="#href2">お問い合わせ</a>
        <a href="confirm.php">会社概要</a>
    </div>
</div>
<br class="clear">
<div class="top-wrapper fadenight">
    <div class="top-wrapper-2">
        <h1>街を照らせ、</h1>
        <h2>Illuminate the world</h2>
    </div>
</div>
<div class="fadein NEWS">
  <h3 class="section-title">NEWS</h3>
  </div>
   <div class="news">
     <div class="new3 fadein">
       <p>Recent Situation</p>
     </div>
          <ul class="delayFadein">
            <li  class="delayFadein2">
              <div class="newtime">
                <p class="newtime2">2020.04.19</p>
              <p class="newtime3">「第72回日本産婦人科学会」現地開催中止のお知らせ</p>
              <br class="clear">
            </div>
           </li>
           <li class="delayFadein2">
             <div class="newtime">
               <p class="newtime2">2020.04.19</p>
             <p class="newtime3">「第72回日本産婦人科学会」現地開催中止のお知らせ</p>
             <br class="clear">
           </div>
          </li>
          <li class="delayFadein2">
            <div class="newtime">
              <p class="newtime2">2020.04.19</p>
            <p class="newtime3">「第72回日本産婦人科学会」現地開催中止のお知らせ</p>
            <br class="clear">
          </div>
         </li>
         <li class="delayFadein2">
           <div class="newtime">
             <p class="newtime2">2020.04.19</p>
           <p class="newtime3">「第72回日本産婦人科学会」現地開催中止のお知らせ</p>
           <br class="clear">
         </div>
        </li>
        <li class="delayFadein2">
          <div class="newtime">
            <p class="newtime2">2020.04.19</p>
          <p  id="href" class="newtime3">「第72回日本産婦人科学会」現地開催中止のお知らせ</p>
          <br class="clear">
        </div>
       </li>
      </ul>
    </div>
   <br class="clear">
<div class="message-wrapper">
<div class="message-wrapper-2 pcWrap">
      <h1 class="fadein">RECRUIT</h1>
        <ul class="recruitFadein">
            <li>
                <div class="item-2">
                    <a href="menu.php">
                      <img src="img/IMG_2774.JPG" alt="">
                        <p>中途採用</p>
                    </a>
                </div>
            </li>
            <li>
                <div class="item-2">
                    <a href="less.php">
                      <img src="img/IMG_2819.JPG" alt="">
                        <p>アルバイト・パート</p>
                    </a>
                </div>
            </li>
        </ul>
    </div>
   <div class="clear">
   </div>
</div>
<div class="message-wrapper spWrap">
<div class="message-wrapper-2">
      <h1 class="fadein">RECRUIT</h1>
        <ul class="recruitFadein">
            <li>
                <div class="item-2">
                    <a href="menu.php">
                      <img src="img/IMG_2774.JPG" alt="">
                        <p>中途採用</p>
                    </a>
                </div>
            </li>
            <li>
                <div class="item-2">
                    <a href="less.php">
                      <img src="img/IMG_2819.JPG" alt="">
                        <p>アルバイト・パート</p>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="COMPANY fadein">
    <a href="confirm.php">
      <img src="img/IMG_2820.JPG" alt="">
      <p>会社概要</p>
    </a>
</div>
<div class="contact" id="href2">
    <div class="contact-2  fadein">
        <h2>ENTRY</h2>
        <p>昭栄電気産業に関する募集要項とエントリーフォームはこちら。</p>
        <div class="contact-3">応募する</div>
        <div class="clear">
        </div>
    </div>
</div>
<footer>
    <div class="footer">
        <div class="footer-2">
            <div class="footer-3">
                <p>理念</p>
            </div>
            <div class="footer-3">
                <p><span>会社概要</span></p>
                <div class="clear">
                </div>
            </div>
            <div class="footer-3">
                <p><span>採用情報</span></p>
                <div class="clear">
                </div>
            </div>
            <div class="footer-3">
                <p><span>お問い合わせ</span></p>
            </div>
            <div class="clear">
            </div>
        </div>
        <div class="footer-4">
          <p>© 2019 HARADA CORPORATION All rights Reserved.</p>
        </div>
        <div class="clear">
        </div>
    </div>
</footer>
<script src="common/js/jquery.js"></script>
<script type="text/javascript">
    //5秒かけて表示は遅すぎません
   $('.fadenight').addClass('active');
    $(function () {
        $(window).scroll(function () {
            $('.fadein').each(function () {
                var position = $(this).offset().top;
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll > position - windowHeight + 200) {
                    $(this).addClass('active');
                }
            });
        });
    });
</script>
<script>
    //使いたい親クラスと対象のクラスを引数で渡す
    delayFadeIn(".recruitFadein",".item-2");

    //処理自体をユーザ定義関数でまとめてしまって、
    // 引数に設定されているクラス名で振る舞いの対象を変更する
    function delayFadeIn(region,item) {
        $(function () {
            $(window).scroll(function () {
                //新しくずらして表示するためのクラスを追加して、
                // その領域に入った時を条件にする
                $(region).each(function () {
                    var position = $(this).offset().top;
                    scroll = $(window). scrollTop();
                    windowHeight = $(window).height();
                    //指定した領域に入った時
                    if (scroll > position - windowHeight + 2000) {
                        //ずらして表示したいclassをそれぞれ指定して 200 * ループした回数のスピード（ms）で遅らせて表示
                        //1回目 200 * 1 2回目 200* 2 ...という具合にしてます
                        $(item).each(function (i) {
                            $(this).delay(200 * i).animate(
                                {
                                    opacity: 1
                                }
                            );
                         });
                         //イベントを発火するタイミングはBUSINESSを表示する時と一緒なのでこの中でOK

                    }
                });
            });
        });
    }
</script>
<script>
    delayFadeIn(".delayFadein",".newtime");
    function delayFadeIn(region,item) {
    $(function () {
        $(window).scroll(function () {
            //新しくずらして表示するためのクラスを追加して、
            // その領域に入った時を条件にする
            $(region).each(function () {
                var position = $(this).offset().top;
                scroll = $(window). scrollTop();
                windowHeight = $(window).height();
                //指定した領域に入った時
                if (scroll > position - windowHeight + 400) {
                    //ずらして表示したいclassをそれぞれ指定して 200 * ループした回数のスピード（ms）で遅らせて表示
                    //1回目 200 * 1 2回目 200* 2 ...という具合にしてます
                    $(item).each(function (i) {
                        $(this).delay(200 * i).animate(
                            {
                                opacity: 1
                            }
                        );
                     });
                     //イベントを発火するタイミングはBUSINESSを表示する時と一緒なのでこの中でOK
                    $(".header-right a").css("color", "black");
                    $(".header-right a").css("font-weight", "1000");
                    $(".header-left h1").css("color", "black");
                } else {
                    //BUSINESSより前のスクロール量であれば白に戻すって感じです
                    $(".header-right a").css("color", "white");
                    $(".header-left h1").css("color", "white");
                }
            });
        });
    });
}
</script>
<script>
    $('.header-right a').click(function () {
        var id = $(this).attr('href');
        var position = $(id).offset().top;
        $('html, body').animate({
            'scrollTop': position
        }, 500);
    });
</script>
<script>
</script>
</body>
</html>
