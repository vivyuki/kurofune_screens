<!DOCTYPE html>
<html lang="ja">
<head>
  <style type="text/css">
    .box2, .box3
    {
        border: solid 8px red;
        box-sizing: border-box;
        line-height: 75px;
        width: 300px;
        float: left;
        border-color: gray;
    }
    /* 全体(デスクトップPCとスマホ)に適用するCSS */
    .main
    {
        width: 618px ;
        height:300px ;
        padding: 5px ;					/* 上下左右に20pxの余白 */
        margin:40px ;
        border: 1px solid rgba(0,0,0,.1) ;		/* 枠線 */
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

    /* pulldown design */
    .cp_ipselect {
        overflow: hidden;
        width: 80%;
        margin: 0em auto;
        text-align: center;
    }
    .cp_ipselect select {
        width: 100%;
        padding-right: 0em;
        cursor: pointer;
        text-indent: 0.01px;
        text-overflow: ellipsis;
        border: none;
        outline: none;
        background: transparent;
        background-image: none;
        box-shadow: none;
        -webkit-appearance: none;
        appearance: none;
    }
    .cp_ipselect select::-ms-expand {
        display: none;
    }
    .cp_ipselect.cp_sl01 {
        position: relative;
        border: 1px solid #bbbbbb;
        border-radius: 2px;
        background: #ffffff;
    }
    .cp_ipselect.cp_sl01::before {
        position: absolute;
        top: 0.8em;
        right: 0.9em;
        width: 0;
        height: 0;
        padding: 0;
        content: '';
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-top: 6px solid #666666;
        pointer-events: none;
    }
    .cp_ipselect.cp_sl01 select {
        padding: 3px 38px 3px 14px;
        color: #666666;
    }
  </style>
  <meta charset="UTF-8">
  <title>企業案件一覧</title>
</head>
<body>
<div align="center">
    <h1>企業案件一覧</h1>
    <table width="350" height="75" cellpadding="10">
  <tr>
    <td bgcolor="#a9a9a9">氏名</td>
    <td><input type="text" name="name" size="50" style="height:20px;width:150px"></td>
  </tr>
    <tr>
    <td bgcolor="#a9a9a9">日本語レベル</td>
    <td>
        <div class="cp_ipselect cp_sl01">
        <select name="faculty">
        <option value="">選択してください。</option>
        <option>N1</option>
        <option>N2</option>
        <option>N3</option>
        <option>N4</option>
        <option>N5</option>
      　</select>
        </div>
    </td>
  　</tr>
    <tr>
    <td bgcolor="#a9a9a9">E-mail</td>
    <td><input type="text" name="mail" size="50" style="height:20px;width:150px"></td>
  </tr>
  <tr>
    <td bgcolor="#a9a9a9">居住地</td>
    <td>
        <div class="cp_ipselect cp_sl01">
        <select name="residence">
        <option value="">選択してください。</option>
        <option>日本</option>
        <option>ベトナム</option>
        <option>ミャンマー</option>
        <option>その他</option>
      　</select>
        </div>
    </td>
  </tr>
  <tr>
    <td bgcolor="#a9a9a9">卒業予定(在籍)校</td>
    <td><input type="text" name="graduateSchool" size="50" style="height:20px;width:150px"></td>
  </tr>
</table>
  <button class="btn" type="button" onclick="location.href='移動先のファイルのパスを書く'">検索</button>

<div class="main">
    <p style="float: left"><img src="../img_practice/handshake-2056021_1920.jpg" width="120" height="120"/></p>
    <h2>コンテンツ詳細</h2>
    <p>ようこそWABISABI-JAPANへ、私たちは様々な日本企業とつながり日本を魅力的な国として発信し、testtesttesttesttesttettesttesttesttesttesttesttettest</p>
    <div class="box2">box2</div>
    <div class="box3">box3</div>
</div>

<div class="main">
    <p style="float: left"><img src="../img_practice/handshake-2056021_1920.jpg" width="120" height="120"/></p>
    <h2>コンテンツ詳細</h2>
    <p>ようこそWABISABI-JAPANへ、私たちは様々な日本企業とつながり日本を魅力的な国として発信し、testtesttesttesttesttettesttesttesttesttesttesttettest</p>
    <div class="box2">box2</div>
    <div class="box3">box3</div>
</div>

<div class="main">
    <p style="float: left"><img src="../img_practice/handshake-2056021_1920.jpg" width="120" height="120"/></p>
    <h2>コンテンツ詳細</h2>
    <p>ようこそWABISABI-JAPANへ、私たちは様々な日本企業とつながり日本を魅力的な国として発信し、testtesttesttesttesttettesttesttesttesttesttesttettest</p>
    <div class="box2">box2</div>
    <div class="box3">box3</div>
</div>
</div>



<link rel="stylesheet" type="text/css" href="../common/style_practice.css">




</body>
</html>