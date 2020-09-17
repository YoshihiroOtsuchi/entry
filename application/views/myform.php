<html>
<head>
<title>Form</title>
</head>
<body>

<?php echo validation_errors(); ?>
<?php echo form_open('form'); ?>
<p>ユーザ名</p>
<input type="text" name="username"/>
<p>パスワード</p>
<input type="password" name="password" />

<p>パスワードの確認</p>
<input type="password" name="passconf" />

<p>メールアドレス</p>
<input type="text" name="email"/>

<div><input type="submit" value="送信" /></div>

</form>

</body>
</html>
