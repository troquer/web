<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>troquer - トロケ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" />

        <!-- bootstrap -->
        <link rel="stylesheet" href="../resources/assets/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="../resources/assets/bootstrap/bootstrap-grid.css">

        <!-- FontAwesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- jQuery -->
        <script src="../resources/assets/js/jquery-3.2.1.min.js" charset="utf-8"></script>

        <!-- Styles -->
        <style>
            html, body {
                font-family: "Mplus 1p";
                /*font-family: sans-serif;*/
                /*font-weight: 100;*/
                /*height: 100vh;*/
                 /*'Raleway', */
                margin: 0;
                background-color: #ffffff;
            }

            .roman {
              font-family: sans-serif;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #welcome-top {
              background-image: url(../resources/assets/img/welcome_top.jpg);
              background-repeat: no-repeat;
              background-size: cover;
            }

            #welcome-logo {
              font-size: 40px;
              color: #f4aeb3;
              position: fixed;
              top: 40px;
              left: 40px;
              /*padding-top: 20px;
              padding-left: 20px;*/
            }


            #welcome-top-message {
              color: white;
              line-height: 40px;
            }

            #welcome-top-container {
              padding-top: 28vh;
            }

            @media(max-width: 680px){
              #welcome-top-message {
                font-size: 27px;
                line-height: 30px;
              }
              #second-message {
                font-size: 23px;
              }
              #welcome-logo{
                top: 10px;
                left: 10px;
              }

            }

            .second-message {
              background: linear-gradient(transparent 70%, rgba(221, 88, 102, 0.58));
            }

            .second-message {
              position: relative;
              padding: 0.6em;
              background: -webkit-repeating-linear-gradient(-45deg, #fff5df, #fff5df 4px,#ffe4b1 3px, #ffe4b1 8px);
              background: repeating-linear-gradient(-45deg, #fff5df, #fff5df 4px,#ffe4b1 3px, #ffe4b1 8px);
              border-radius: 7px;
            }

            .second-message:after {
              position: absolute;
              content: '';
              top: 100%;
              left: 30px;
              border: 15px solid transparent;
              border-top: 15px solid #ffebbe;
              width: 0;
              height: 0;
            }

            .fukidashi {
              position: relative;/*相対位置*/
              padding-left: 1.2em;/*アイコン分のスペース*/
              line-height: 1.4;/*行高*/
              }

              .fukidashi:before{ font-family: FontAwesome;/*忘れずに*/
              content: "\f075";/*アイコンのユニコード*/
              position: absolute;/*絶対位置*/
              font-size: 1em;/*サイズ*/
              left: 0;/*アイコンの位置*/
              top: 0;/*アイコンの位置*/
              color: #f4aeb3; /*アイコン色*/
            }


            #third-image {
              background-image:url(../resources/assets/img/cafe.jpg);
            }


            @media(max-width: 680px){
              #third-image {
                background-image:url(../resources/assets/img/cafe-sm.jpg);
              }
            }

            .no-sm {
              display: block;
            }

            .no {
              display: none;
            }

            @media(max-width:680px){
              .no{
                display: block;
              }

              .no-sm {
                display: none;
              }
            }

            .good-point{
              border-radius: 30px;
            }

            .good-point:hover {
              background-color: #f4aeb3;
            }


            /*ご利用の流れ*/
            dt{
              background-color : #90EE90;
              padding-top : 10px;
              padding-bottom : 10px;
              padding-left : 10px;
              width : 150px;
            /* 左寄せ */
              float : left;
            /* float解除 */
              clear : both;
            }

            dd{
              background-color : #A9A9A9;
              padding-top : 10px;
              padding-left : 10px;
              padding-right : 10px;
              padding-bottom : 10px;
              width : 400px;
            /* dtの幅分の設定 */
              margin-left : 160px;
            }

            .wide-pink {
              height: 250px;
              background-color: #f4aeb3;
              width: 100%;
              display: block;
              padding: 110px 0;
              text-align: center;
              color: white;
            }

        </style>

    </head>
    <body>
      <h1 style="z-index: 50;" id="welcome-logo">troquer</h1>
      <div class="full-height" id="welcome-top">
        <div class="container" id="welcome-top-container">
          <div class="row">
            <div class="col-md-8 offset-md-1">
              <div class="col-md-12" style="margin-bottom:15px;">
                  <h2 id="welcome-top-message">さあ学ぼう、<br>そしてトロケよう、<br>タダで。</h2>
                  <a href="{{ url('/register') }}" class="btn" style="width: 200px; background-color: #f4aeb3; color: white; padding-top: 12px;">新規登録</a>
              </div>
              <div class="col-md-12">
                <a href="{{ url('/login') }}" class="btn" style="width: 200px; border: 2px solid #f4aeb3; padding-top: 12px; color: white;">ログイン</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="" id="welcome-second">
        <div class="container">
          <div class="row">
            <div class="col-md-12" style="text-align: center; padding: 25px 0;">
              <h2 class="second-message">トロケは学びのマッチングプラットホーム</h2>
              <img style="width:100%;" src="../resources/assets/img/change.jpeg" alt="">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12" style="text-align: center; padding: 25px 0;">
              <h2 class="second-message">知識は、物々交換する時代。</h2>
              <p style="padding: 20px 10px; line-height: 50px;">troquer(トロケ)はフランス語で「物々交換をする」という意味です。<br>そしてこのサービスはその名の通り、知識の物々交換ができるマッチングサービスです。<br>
                今までのように、あなたはただ教わるだけではありません。<br>あなたは教わるだけではなく、相手に教えることがトロケのルールです。<br>そして反対に、<br>今までのように、あなたはただ教えるだけではありません
                <br>あなたは教えるだけではなく、相手に教わることがトロケのルールです。<br>このサービスをきっかけに、素敵な出会いが生まれることを願っています。
              </p>
            </div>
          </div>
        </div>
        <div id="third-image" style="height: 500px; background-size:cover;">
          <p style="font-size:30px; padding:200px 0; text-align:center; color:white;">あなたの先生は<br class="no">意外と近くにいるかも？<br>
          <a href="{{ url('/register') }}" class="btn" style="width: 200px; background-color: #f4aeb3; color: white; padding-top: 12px;">さあ、トロケよう。</a></p>

        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12" style="padding:15px 0;">
              <h2 style="text-align:center;" class="second-message">トロケを使うとこんな良いことが！</h2>
            </div>
          </div>
          <div class="row">
            <div class="good-point col-md-4" style="text-align:center;">
              <img style="padding:10px 4px;" width="50%" src="../resources/assets/img/shakehand.png" alt="">
              <h4 class="fukidashi">人脈が広がった！</h4>
              <p>ビジネスにおいても遊びにおいても人脈はとても大切です。トロケで幅広い分野に人脈を広げましょう！</p>
            </div>
            <div class="good-point col-md-4" style="text-align:center;">
              <img style="padding:10px 4px;" width="50%" src="../resources/assets/img/book.png" alt="">
              <h4 class="fukidashi">独学で諦めていたことを学べた！</h4>
              <p>独学を諦めたものはありませんか？トロケですぐに質問できる友達を探しましょう！</p>
            </div>
            <div class="good-point col-md-4" style="text-align:center;">
              <img style="padding:10px 4px;" width="50%" src="../resources/assets/img/free.png" alt="">
              <h4 class="fukidashi">お金をかけずに学べた！</h4>
              <p>トロケであれば、教え教わるのでお金はかかりません。必要なのはトロケる(物々交換する)ことです。</p>
            </div>
          </div>
          <div class="row">
            <div class="good-point col-md-4 offset-md-2" style="text-align:center;">
              <img style="padding:10px 4px;" width="50%" src="../resources/assets/img/hon.png" alt="">
              <h4 class="fukidashi">自分の知識が深まった！</h4>
              <p>人に教えるという体験を通してあなたの知識はより深く、厚みのあるものになることは間違いないでしょう。</p>
            </div>
            <div class="good-point col-md-4" style="text-align:center;">
              <img style="padding:10px 4px;" width="50%" src="../resources/assets/img/work.png" alt="">
              <h4 class="fukidashi">トロケでの実績で仕事がもらえた！</h4>
              <p>トロケでは、トロケにおける実績をもとに仕事を受注できる仕組みづくりに取り組んでいます。</p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12" style="padding:15px 0;">
              <h2 style="text-align:center;" class="second-message">トロケのご利用方法</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4" style="padding:15px 0; text-align:center;">
              <img src="../resources/assets/img/register.png" width="50%" alt="">
            </div>
            <div class="col-md-8" style="padding:50px 0;">
              <h4>ステップ1 : アカウントを登録して、自分のスキルを登録。</h4>
              <p>まず本ページからトロケに新規登録します。また、登録時に自分のスキルを登録します。スキルはなんでも構いません。<span class="no-sm">
              あなたが何でも無いように思っていることを学びたい人はたくさんいます。例えば語学やITスキルなどはもちろん、早食いや早寝早起き、節約だって立派なスキルです。ぜひ何でも登録してみてください。</span></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4" style="padding:15px 0; text-align:center;">
              <img src="../resources/assets/img/search.png" width="50%" alt="">
            </div>
            <div class="col-md-8" style="padding:50px 0;">
              <h4>ステップ2 : 学びたいスキルを探す。</h4>
              <p>独学で挫折したもの、新しく獲得してみたいスキルをトロケで探してみましょう。気軽に先生を見つけることができます。</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4" style="padding:15px 0; text-align:center;">
              <img src="../resources/assets/img/calendar.png" width="50%" alt="">
            </div>
            <div class="col-md-8" style="padding:50px 0;">
              <h4>ステップ3 : 予定を合わせて、トロケる！</h4>
              <p>見つけた先生と予定を合わせたら、いざトロケましょう!(知識の物々交換をしましょう！)。お互いに相手の能力に期待しすぎず、違う分野に友達を増やす思いでトロケってくださいね♪</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4" style="padding:15px 0; text-align:center;">
              <img src="../resources/assets/img/stars.png" width="50%" alt="">
            </div>
            <div class="col-md-8" style="padding:50px 0;">
              <h4>ステップ4 : お互いのレビューを記入しましょう。</h4>
              <p>相手から学んだことや人柄など、あなたのトロケった体験を記入してください。そのレビューはトロケった相手の今後の活動の大きな財産になります！</p>
            </div>
          </div>
        </div>
      </div>
      <div class="wide-pink">
        <h2>さあ、トロケよう！</h2>
        <a href="{{ url('/login') }}" class="btn" style="width: 200px; background-color: #eb6463; padding-top: 12px; color: white;">新規登録</a>
      </div>
      <footer style="height: 80px;">
        <!-- 会社情報とか必要かな -->
      </footer>
    </body>
</html>

<!-- <script>
  $(document).ready(function(){
    $(window).on("load resize", function(){
      w = $(window).width();
      h = $(window).height();
      $("#welcome-top-container").css({
        "padding-top": h/4
      })
    })

  })

</script> -->
