<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="<?=url('username') ?>">
    <label for="username">username</label>
    <input type="text" >
    <input type="submit" value="send">
    <input type="hidden" name="_token" value="<?=csrf_token()?>">
</form>
</body>
</html>
