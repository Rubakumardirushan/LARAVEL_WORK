<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=session('massage');
  //  echo "massage";

    ?>
    <h1>
        <?=$dirushan?>
    </h1>
<form method="POST" action="<?=url('username') ?>">
    <label >username <input type="text" name="name" ></label>

    <input type="submit" value="send">
    <input type="hidden" name="_token" value="<?=csrf_token()?>">
</form>
</body>
</html>
