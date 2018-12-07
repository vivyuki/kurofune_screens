<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title>サイトについて WABISABI-JAPAN</title>

  <style type="text/css">
      /* 全体(デスクトップPCとスマホ)に適用するCSS */
      .main
      {
          width: 618px ;
          padding: 20px ;					/* 上下左右に20pxの余白 */
          border: 0px solid rgba(0,0,0,.1) ;		/* 枠線 */
      }

      /* スマホだけに適用するCSS */
      @media screen and (max-width:479px)
      {
          .main
          {
              width: auto ;
              padding: 0 ;		/* 余白 */
              border: none ;		/* 枠線 */
          }

      }

      .video{
          position:relative;
          width:50%;
          padding-top:40%;
      }
      .video iframe{
          position:absolute;
          top:0;
          right:0;
          width:100%;
          height:100%;
      }

  </style>

</head>

<body>
<div align="center">
  <h1>コンテンツ詳細</h1>
    <div class="main">
        <div align="left">
        <h2>コンテンツ詳細</h2>
        </div>
        <p style="float: left"><img src="../img_practice/handshake-2056021_1920.jpg" width="120" height="120"/></p>
        <p>ようこそWABISABI-JAPANへ、私たちは様々な日本企業とつながり日本を魅力的な国として発信し、さらに海外労働者の働きやすい環境を整えることで 優秀な人材から日本で働くことを選んでもらい、日本の国際的</p>
    </div>

    <div class="main">
        <div align="left">
            <h2>コンテンツ詳細</h2>
        </div>
        <p>ようこそWABISABI-JAPANへ、私たちは様々な日本企業とつながり日本を魅力的な国として発信し、さらに海外労働者の働きやすい環境を整えることで 優秀な人材から日本で働くことを選んでもらい、日本の国際的</p>
    </div>

    <div class="video">
    <iframe src="https://www.youtube.com/embed/eTerw_uEun4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>


    <button class="btn" type="button" onclick="location.href='移動先のファイルのパスを書く'">学習完了</button>
</div>

    <link rel="stylesheet" type="text/css" href="../common/style_practice.css">


    </body>
    </html>