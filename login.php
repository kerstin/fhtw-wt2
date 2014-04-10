<?
/*  check for correct/allowed login data */
function authenticateuser($username, $password) {
  $allowedusername = "kay";
  $allowedpassword = "1234";

  if (($username == $allowedusername) && ($password == $allowedpassword)) {
    return TRUE;
  } else {
    return FALSE;
  }
}

/*  set cookie on correct login */
if ($_POST['yourusername'] && $_POST['yourpassword']) {
  $username = $_POST['yourusername'];
  $password = $_POST['yourpassword'];

  if (authenticateuser($username, $password)) {
    $_SESSION['user'] = $username;
    $cookiename = 'user';

    if($_POST['keeplogin']) {
        /* cookie expires in an hour */
        setcookie($cookiename, $username, time()+3600);
    } else {
        /* delete cookie*/
        setcookie($cookiename, $username, time()-3600);
    }
  }
}
/*  check for existence of cookie */
if($_COOKIE[$cookiename] && $_COOKIE[$cookiename] == 1) {
    $_SESSION['user'] = $_COOKIE[$cookiename];
}

$thisuser = $_SESSION['user'];
?>
