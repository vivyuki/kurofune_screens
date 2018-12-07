<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>会員登録</title>
</head>

<body>
<h1>会員登録を行います</h1>
<form method="POST" action="hoge.php"></form>
<table border="1">
  <tr>
    <td>氏名</td>
    <td><input type="text" name="name" size="50"></td>
  </tr>
  <tr>
    <td>日本語レベル</td>
    <td>
      <select name="faculty">
        <option value="">選択してください。</option>
        <option>N1</option>
        <option>N2</option>
        <option>N3</option>
        <option>N4</option>
        <option>N5</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td><input type="text" name="mail" size="50"></td>
  </tr>
  <tr>
    <td>居住地</td>
    <td>
      <select name="residence">
        <option value="">選択してください。</option>
        <option>日本</option>
        <option>ベトナム</option>
        <option>ミャンマー</option>
        <option>その他</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>卒業予定(在籍)校</td>
    <td><input type="text" name="graduateSchool" size="50"></td>
  </tr>
  <tr>
    <td>学部・学科</td>
    <td><select name="">
        <option value="graduateFaculty">選択してください。</option>
        <option>工学部</option>
        <option>理学部</option>
        <option>その他</option>
      </select>
      <select name="graduateDepartment">
        <option value="">選択してください。</option>
        <option>情報工学科</option>
        <option>その他</option>
      </select>
    </td>
  </tr>
  <td>出身(入学)校</td>
  <td><input type="text" name="almaMater" size="50"></td>
  </tr>
  <tr>
    <td>学部・学科</td>
    <td><select name="almaMaterFaculty">
        <option value="">選択してください。</option>
        <option>工学部</option>
        <option>理学部</option>
        <option>その他</option>
      </select>
      <select name="almaMaterDepartment">
        <option value="">選択してください。</option>
        <option>情報工学科</option>
        <option>その他</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>Visa種別</td>
    <td><select name="visaType">
        <option value="">選択してください。</option>
        <option>就労visa(技術人文知識国際業務) </option>
        <option>特定活動visa</option>
        <option>留学visa</option>
        <option>特定機能Visa</option>
        <option>その他(日本のみ)</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>Visa有効期限</td>
    <td><input type="date">
    </td>
  </tr>
  <tr>
    <td>在留カード写真</td>
    <td><input type="file" name="visaPicture" size="50">
  </tr>
  <tr>
    <td>Pass word</td>
    <td><input type="password" name="pass" size="50">
  </tr>
  <tr>
    <td>Pass word(確認用)</td>
    <td><input type="password" name="confirmationPass" size="50">
  </tr>
</table>
<br>
<br>

<div align="center">
  <a href="">
    <img src="../img/registButton.png" alt="登録">
  </a>
</div >
<!--<link rel="stylesheet" type="text/css" href="./common/style.css">!-->
<link rel="stylesheet" type="text/css" href="../common/style.css">


</body>
</html>

<?php
?>