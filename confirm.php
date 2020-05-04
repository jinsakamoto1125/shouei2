<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>会社概要</title>
    <link rel="stylesheet" href="common/common.css">
  </head>
  <body>
     <div class="top-wrapper-1">
         <div class="header-left" style="padding-left:5%;">
           <img src="img/shouei4.png" alt="" style=" width:70px;height:70px;">
             <h1 class="shouei"  style="position:absolute;  top:80%;">SHO-EI</h1>
         </div>
         <div class="header-right">
             <a href="index.php" style="display:inline-block;  color:white;   padding-right:30px">トップ</a>
             <a href="#href2" style="display:inline-block;  color:white;   padding-right:30px">お問い合わせ</a>
             <a href="confirm.php" style="display:inline-block;  color:white;   padding-right:30px">会社概要</a>
         </div>
     </div>
     <div class="fade fadelight">
     <div class="lesson-wrapper-4" style="padding-left:10%;  margin:0 auto; width:60%;  padding-top:10%;">
      <h1 style="font-size:80px; float:left;  color:white;">COMPANY</h1>
      <h2 style=" float:left; padding-top:7%;  font-size:25px; padding-left:5%; color:white;">会社概要</h2>
     <div class="clear">
      </div>
    </div>
   </div>
    <div class="fed">
      <div class="fed2">
        <h1 class="fed3">会社概要</h1>
      </div>
      <ul class="fed5">
        <li>
          <p class="red">屋号</p>
          <div class="blue">
            <p>株式会社昭栄電気産業</p>
          </div>
          <br  class="clear">
        </li>
        <li>
          <p class="red">所在地</p>
          <div class="blue">
            <p>東京都葛飾区鎌倉3-58-3</p>
          </div>
          <br  class="clear">
        </li>
        <li>
          <p class="red">売上高</p>
          <div class="blue">
            <p>??億</p>
          </div>
          <br  class="clear">
        </li>
        <li>
          <p class="red">社員数</p>
          <div class="blue">
            <p>??名</p>
          </div>
          <br  class="clear">
        </li>
        <li>
          <p class="red">社員数</p>
          <div class="blue">
            <p>??名</p>
          </div>
          <br  class="clear">
        </li>
        <li>
          <p class="red">社員数</p>
          <div class="blue">
            <p>??名</p>
          </div>
          <br  class="clear">
        </li>
        <li>
          <p class="red">社員数</p>
          <div class="blue">
            <p>??名</p>
          </div>
          <br  class="clear">
        </li>
      </ul>
    </div>
   </div>
 </div>
           <!--<div class="hed">
       <h1 style="color:white; position:absolute; top:12%;  left:10%; font-size:90px;  letter-spacing:5px;  float:left;">ABOUT</h1>
       <h2 style="color:white; position:absolute; top:12%;  left:40%; font-size:90px;  letter-spacing:5px; font-size:90px;">US</h2>
       <p style="color:white;position:absolute; top:27%;  left:10%;  font-weight:1000;">私たちについて</p>
     </div>-->
    <!--<div class="lesson-wrapper">
    <div class="lesson-wrapper-2" style="margin:0  auto;  width:90%;  margin-bottom:10%;">
      <div class="lesson-wrapper-1"  style=" display: flex;justify-content: space-between;">
        <div class="lesson-wrapper-5" style="float:left;">
        <img src="img/IMG_2657.JPG" alt="" style="width:500px; height:500px; padding-top:20%;">
      </div>
      <div class="lesson-wrapper-9" style="float:left;margin-top:9%;  color:#192f60;">
        <div class="lesson-wrapper-8" style="border-bottom:3px solid #192f60; margin-top:30px;" >
          <h1 style="font-size:17px; letter-spacing:6px;">電気設備の保守事業で半世紀</h1>
          <h2 style="font-size:30px;">株式会社昭栄電気産業</h2>
        </div>
        <div class="lesson-wrapper-10" style="padding-top:20%">
          <div class="lesson-wrapper-3" style="float:left;   width:120px;">
            <p style="font-size:17px; padding-bottom:20px;">屋号</p>
            <p style="font-size:17px; padding-bottom:20px;">所在地</p>
            <p style="font-size:17px; padding-bottom:20px;">売上高</p>
            <p style="font-size:17px; padding-bottom:20px;">社員数</p>
          </div>
          <div class="lesson-wrapper-3" style=" float:left;">
            <p style="font-size:17px; padding-bottom:20px;">昭栄電気産業</p>
            <p href="#" style="font-size:17px; padding-bottom:20px;color:black;">東京都葛飾区鎌倉3-58-2</p>
            <p style="font-size:17px; padding-bottom:20px;">??億</p>
            <p style="font-size:17px;padding-bottom:20px;">？？数</p>
          </div>
          <div class="clear">
          </div>
        </div>
      </div>
      <div class="clear">
      </div>
    </div>
  </div>
</div>-->
 <script src="common/js/jquery.js"></script>
 <script type="text/javascript">
 $('.fadelight').addClass('active');
 $(function () {
     $(window).scroll(function () {
         //新しくずらして表示するためのクラスを追加して、
         // その領域に入った時を条件にする
         $('.fed5').each(function () {
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
