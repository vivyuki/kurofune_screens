<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ログイン(兼用)</title>
</head>

<body>
<h1>ログイン</h1>
<div align="center">
  <table border="1">
    <form action="list.html" method="get">
      <tr>
        <th>
          ユーザID
        </th>
        <td>
          <input type="text" name="user_id" value="" size="24">
        </td>
      </tr>
      <tr>
        <th>
          パスワード
        </th>
        <td>
          <input type="password" name="password" value="" size="24">
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <div align="center">
            <input type="submit" value="ログイン">
          </div>
        </td>
      </tr>
    </form>
  </table>
</div>

<!--<link rel="stylesheet" type="text/css" href="./common/style.css">!-->
<link rel="stylesheet" type="text/css" href="../common/style.css">

</body>
</html>