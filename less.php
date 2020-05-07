<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>会社概要</title>
    <link rel="stylesheet" href="common/common.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
     <meta name="viewport" content="width=device-wide, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
      <div class="top-wrapper-1">
         <div class="header-left">
           <img src="img/shouei4.png" alt="">
             <h1 class="shouei">SHO-EI</h1>
         </div>
         <div class="header-right">
             <a href="index.php">トップ</a>
             <a href="#href2">お問い合わせ</a>
             <a href="confirm.php">会社概要</a>
         </div>
       </div>
         <div class="top2 fadelight">
           <div class="lesson-wrapper-4">
             <h1>RECRUIT</h1>
             <h2  class="part  pcWrap">アルバイト・パート</h2>
             <div class="clear">
            </div>
          </div>
        </div>
    <div class="fed">
      <div class="fed2  pcWrap">
        <h1 class="fed3">アルバイト・パート</h1>
      </div>
      <ul class="fed0">
        <li>
          <div class="job">
            <p class="red">仕事内容</p>
          </div>
          <div class="bike">
            <p class="company">電気の点検日程の変更連絡を、電話受付するお仕事です。</p>
            <p class="company1">受付した日程を現場スタッフへ定型メールにて連絡します。</p>
            <p class="company1">★★★　大手電力会社のお仕事なので安心　★★★</p>
            <p class="company1">マニュアル完備、現場の先輩がしっかりお仕事を教えてくれます！</p>
            <p class="company1">３０～５０代の主婦の方達が活躍しています。</p>
            <p class="company6">ご興味ありましたら、03-3671-1666（採用担当）までご連絡ください</p>
          </div>
         </li>
        <li>
          <div class="job">
            <p class="red">募集人数・募集背景</p>
          </div>
          <div class="bike">
          <p class="bike1">欠員募集</p>
        </div>
        </li>
        <li>
          <div class="job">
            <p class="red">勤務地</p>
          </div>
          <div class="bike">
          <p  class="bike1"><i class="far fa-check-circle"  style="color:green;"></i>駅から徒歩5分以内</p>
          <p  class="bike2">株式会社 昭栄電気産業 本社</p>
          <p  class="bike2">東京都葛飾区鎌倉3-58-2（最寄駅：京成小岩）</p>
        </div>
        </li>
        <li>
          <div class="job">
            <p class="red">アクセス</p>
          </div>
          <div class="bike">
          <p  class="bike1">京成本線　京成小岩駅から徒歩5分</p>
        </div>
        </li>
        <li>
          <div class="job">
            <p class="red">勤務時間</p>
          </div>
          <div class="bike">
          <p  class="bike1">※13時～17時に働ける方大歓迎！！</p>
        </div>
        </li>
        <li>
          <div class="job">
            <p class="red">給与</p>
          </div>
          <div class="bike">
          <p  class="bike1">時給　1,013円　～　1,100円</p>
          <p  class="bike2">締日：毎月２０日</p>
          <p  class="bike2">支払：毎月末日</p>
        </div>
        </li>
        <li>
          <div class="job">
            <p class="red">休日休暇</p>
          </div>
          <div class="bike">
          <p class="bike1">週休二日制 毎週</p>
          <p  class="bike2">日祝休み</p>
          <p  class="bike2">夏季休暇：あり</p>
          <p  class="bike2">年末年始休暇：あり</p>
          <p  class="bike2">有給休暇：あり</p>
        </div>
        </li>
        <li>
          <div class="job">
            <p class="red">福利厚生</p>
          </div>
          <div class="bike">
          <p class="bike1">
            <i class="far fa-check-circle"></i>交通費支給あり
          </p>
          <p class="bike2">通勤手当（実費)</p>
          <p class="bike2">制服貸与：あり</p>
          <p class="bike2">昇給：あり</p>
          <p class="bike2">賞与：あり</p>
          <p class="bike2">社会保険完備（ご希望により加入できます）</p>
         </div>
        </li>
      </ul>
    </div>
   </div>
 </div>
 <script src="common/js/jquery.js"></script>
 <script type="text/javascript">
  $('.fadelight').addClass('active');
      $(function () {
          $(window).scroll(function () {
              //新しくずらして表示するためのクラスを追加して、
              // その領域に入った時を条件にする
              $('.fed0').each(function () {
                  var position = $(this).offset().top;
                  scroll = $(window). scrollTop();
                  windowHeight = $(window).height();
                  //指定した領域に入った時
                  if (scroll > position - windowHeight + 400) {
                      //ずらして表示したいclassをそれぞれ指定して 200 * ループした回数のスピード（ms）で遅らせて表示
                      //1回目 200 * 1 2回目 200* 2 ...という具合にしてます
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
 </script>
</body>
</html>
