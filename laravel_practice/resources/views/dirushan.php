<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1> <?=$names?></h1>
  <h1> <?=$names2?></h1>


<form action="<?=url('diru')?>" method="POST">
<label for="username">username</label>
<input type="text" name="username">
<input type="submit"  value="send">
<input type="hidden" name="_token" value="<?=csrf_token()?>">

<?=session('msg')?>




</form>
</body>
</html>
