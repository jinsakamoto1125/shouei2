<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>会社概要</title>
    <link rel="stylesheet" href="common/common.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  </head>
  <body>
      <div class="top-wrapper-1">
         <div class="header-left" style="padding-top:1%;padding-left:5%;">
           <img src="img/shouei4.png" alt="" style=" width:70px;height:70px;">
             <h1 class="shouei"  style="position:absolute;  top:80%;">SHO-EI</h1>
         </div>
         <div class="header-right">
             <a href="index.php" style="display:inline-block;  color:white;   padding-right:30px">トップ</a>
             <a href="#href2" style="display:inline-block;  color:white;   padding-right:30px">お問い合わせ</a>
             <a href="confirm.php" style="display:inline-block;  color:white;   padding-right:30px">会社概要</a>
         </div>
       </div>
         <div class="top2 fadelight">
           <div class="lesson-wrapper-4" style="padding-left:10%;  margin:0 auto; width:60%;  padding-top:10%;">
             <h1 style="font-size:80px; float:left;  color:white;">RECRUIT</h1>
             <h2 style=" float:left; padding-top:7%;  font-size:25px; padding-left:5%; color:white;">アルバイト・パート</h2>
             <div class="clear">
            </div>
          </div>
        </div>
    <div class="fed">
      <div class="fed2">
        <h1 class="fed3">アルバイト・パート</h1>
      </div>
      <ul class="fed0">
        <li>
          <div class="job">
            <p class="red">仕事内容</p>
          </div>
          <div class="bike">
            <p class="company" style="padding-bottom:3%; padding-top:5%;">電気の点検日程の変更連絡を、電話受付するお仕事です。</p>
            <p class="company1"  style="padding-bottom:3%">受付した日程を現場スタッフへ定型メールにて連絡します。</p>
            <p class="company2"  style="padding-bottom:1%;">★★★　大手電力会社のお仕事なので安心　★★★</p>
            <p class="company3"  style="padding-bottom:1%;">マニュアル完備、現場の先輩がしっかりお仕事を教えてくれます！</p>
            <p class="company4"  style="padding-bottom:3%;">３０～５０代の主婦の方達が活躍しています。</p>
            <p class="company5"  style="padding-bottom:5%;">ご興味ありましたら、03-3671-1666（採用担当）までご連絡ください</p>
          </div>
         </li>
        <li>
          <div class="job">
            <p class="red">募集人数・募集背景</p>
          </div>
          <div class="bike">
          <p style="padding-bottom:5%; padding-top:5%;">欠員募集</p>
        </div>
        </li>
        <li>
          <div class="job">
            <p class="red">勤務地</p>
          </div>
          <div class="bike">
          <p style="padding-bottom:3%; padding-top:5%;"><i class="far fa-check-circle"  style="color:green;"></i>駅から徒歩5分以内</p>
          <p style="padding-bottom:3%;">株式会社 昭栄電気産業 本社</p>
          <p style="padding-bottom:3%;">東京都葛飾区鎌倉3-58-2（最寄駅：京成小岩）</p>
        </div>
        </li>
        <li>
          <div class="job">
            <p class="red">アクセス</p>
          </div>
          <div class="bike">
          <p style="padding-bottom:5%; padding-top:5%;">京成本線　京成小岩駅から徒歩5分</p>
        </div>
        </li>
        <li>
          <div class="job">
            <p class="red">勤務時間</p>
          </div>
          <div class="bike">
          <p style="padding-bottom:3%; padding-top:3%;">※13時～17時に働ける方大歓迎！！</p>
        </div>
        </li>
        <li>
          <div class="job">
            <p class="red">給与</p>
          </div>
          <div class="bike">
          <p style="padding-bottom:1%; padding-top:5%;">時給　1,013円　～　1,100円</p>
          <p style="padding-bottom:3%;">締日：毎月２０日</p>
          <p style="padding-bottom:3%;">支払：毎月末日</p>
        </div>
        </li>
        <li>
          <div class="job">
            <p class="red">休日休暇</p>
          </div>
          <div class="bike">
          <p style=" padding-top:5%;">週休二日制 毎週</p>
          <p style=" padding-top:2%;">日祝休み</p>
          <p style=" padding-top:2%;">夏季休暇：あり</p>
          <p style=" padding-top:2%;">年末年始休暇：あり</p>
          <p style=" padding-top:2%;padding-bottom:3%;">有給休暇：あり</p>
        </div>
        </li>
        <li>
          <div class="job">
            <p class="red">福利厚生</p>
          </div>
          <div class="bike">
          <p style="padding-top:5%;padding-bottom:2%;">
            <i class="far fa-check-circle"  style="color:green;"></i>交通費支給あり
          </p>
          <p style="padding-bottom:2%;">通勤手当（実費)</p>
          <p style="padding-bottom:2%;">制服貸与：あり</p>
          <p style="padding-bottom:2%;">昇給：あり</p>
          <p style="padding-bottom:2%;">賞与：あり</p>
          <p style="padding-bottom:2%;">社会保険完備（ご希望により加入できます）</p>
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
