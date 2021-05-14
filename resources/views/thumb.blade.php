<html>

<head>
  <title>Hello, world!</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link rel="stylesheet" type="text/css" href="/css/control.css">
  <style>
    /* 
    ================================
        Best Viewed In Full Page
https://codepen.io/AbubakerSaeed/full/qBOjZqK
    ================================
*/

    /* Hover over... */

    /* DEFAULTS */
    /* ====================================================== */
    *,
    *::before,
    *::after {
      margin: 0;
      box-sizing: border-box;
    }

    html {
      font-size: 62.5%;
    }

    body {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;



      padding: 4rem;
      min-height: 100vh;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    /* MAIN */
    /* ====================================================== */
    .crd {
      margin: 1rem;

      position: relative;
      width: 34rem;
      height: 50rem;
      overflow: hidden;
    }

    .crd-img {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
    }

    .crd-info {
      color: hsl(0, 0%, 90%);
      position: absolute;
      bottom: 40px;
      left: 30px;
    }

    .crd-heading {
      font-size: 4rem;
      letter-spacing: 2px;
      text-transform: uppercase;
      opacity: .8;
      font-weight: 900;
    }

    .crd-text {
      font-size: 1.6rem;
      opacity: .6;
      padding-left: 1rem;
    }

    /* EFFECTS */
    /* ====================================================== */

    /* effect-1 */
    .crd--effect-1 .crd-img {
      transform: scale(.9);
      transition: .4s;
    }

    .crd--effect-1:hover .crd-img {
      transform: scale(1);
    }


    /* effect-2 */
    .crd--effect-2 .crd-info {
      top: 50%;
      left: 50%;
      bottom: unset;
      text-align: center;
      transform: translate(-50%, -50%);
    }

    .crd--effect-2 .crd-heading {
      transform: scale(2);
      opacity: 0;
      transition: .5s;
    }

    .crd--effect-2 .crd-text {
      padding-left: 0;
      transform: scale(1.2);
      opacity: 0;
      transition: .4s;
    }

    .crd--effect-2:hover .crd-heading {
      opacity: .8;
      transform: scale(1);
    }

    .crd--effect-2:hover .crd-text {
      opacity: .6;
      transform: scale(1);
    }


    /* effect-3 */
    .crd--effect-3 .crd-heading {
      position: relative;
      color: hsla(0, 0%, 90%, .5);
    }

    .crd--effect-3 .crd-heading span {
      color: hsl(0, 0%, 90%);
      position: absolute;
      right: 0;
      top: 0;
      opacity: 0;
      transform: scale(1.4);
      transition: .5s;
    }

    .crd--effect-3:hover .crd-heading span {
      opacity: 1;
      transform: scale(1);
    }

    .crd--effect-3 .crd-info {
      text-align: right;
      right: 30px;
      left: unset;
    }

    .crd--effect-3 .crd-text {
      padding-left: 0;
      padding-right: 1rem;
    }

    .crd--effect-3 .crd-img {
      transform: scale(.9);
      transition: .4s;
    }

    .crd--effect-3:hover .crd-img {
      transform: scale(.9);
    }


    /* effect-4 */
    .crd--effect-4 {
      display: block;
      width: 100%;
      max-width: 80rem;
    }

    .crd--effect-4 .crd-img {
      transition: .8s;
    }

    .crd--effect-4:hover .crd-img {
      filter: saturate(0);
    }

    .crd--effect-4 .crd-heading {
      transition: .9s;
    }

    .crd--effect-4:hover .crd-heading {
      color: hsl(194, 93%, 52%);
    }


    /* ABS */
    /* ====================================================== */
    .abs-site-link {
      position: fixed;
      bottom: 20px;
      left: 20px;
      color: hsla(0, 0%, 100%, .3);
      font-size: 16px;
    }
  </style>
</head>






<body>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <!-- effect-1 -->
  <div class="crd crd--effect-1">

    <div class="crd-img" style='background-image: url("/Images/wallpaperflare.com_wallpaper.jpg" );'></div>

    <div class="crd-info">
      <!-- lumière means 'light' (French) -->
      <h2 class="crd-heading">Lumière</h2>
      <p class="crd-text">And then that begins...</p>
    </div>

  </div>

  <!-- effect-2 -->
  <div class="crd crd--effect-2">

    <div class="crd-img" style='background-image: url("/Images/wallpaperflare.com_wallpaper.jpg");'></div>

    <div class="crd-info">
      <!-- Nubes means 'clouds' (German) -->
      <h2 class="crd-heading">Wolken</h2>
      <p class="crd-text">And then that begins...</p>
    </div>

  </div>

  <!-- effect-3 -->
  <div class="crd crd--effect-3">

    <div class="crd-img" style='background-image: url("https://images.unsplash.com/photo-1503517296638-b2b666927c0d?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=500&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=340")'></div>

    <div class="crd-info">
      <!-- الأشجار means 'trees' (Arabic) -->
      <h2 class="crd-heading">الأشجار<span>الأشجار</span></h2>
      <!-- ...ثم يبدأ ذلك means 'and then that begins...' (Arabic)-->
      <p class="crd-text">...ثم يبدأ ذلك</p>
    </div>

  </div>

  <!-- effect-4 -->
  <div class="crd crd--effect-4">

    <div class="crd-img" style='background-image: url("https://images.unsplash.com/photo-1523441888894-57962297f940?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=500&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=800");'></div>

    <div class="crd-info">
      <!-- keine Worte means 'no words' (German) -->
      <h2 class="crd-heading">Keine Worte.</h2>
      <p class="crd-text">And then that begins...</p>
    </div>

  </div>

  <a href="https://abubakersaeed.netlify.app/designs/d14-image-hover-effects" class="abs-site-link" rel="nofollow noreferrer" target="_blank">abs/designs/d14-image-hover-effects</a>



  @yield('content')




</body>




</html>