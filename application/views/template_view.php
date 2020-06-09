<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> <?php echo $countent_view; ?> </title>
</head>
<body>
<h1> меню </h1>

<?php if(Session::get('loggedIn') == true):?>
    login done!
<?php else: ?>
    <p><a href="/main/login"> login </a></p>
<?php endif; ?>
<hr>
<?php include './application/views/'.$countent_view; ?>
</body>
</html>




