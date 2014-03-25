<?
// start the session
session_start();

$allowedusername = "kay";
$allowedpassword = "1234";

if ($_POST['yourusername'] && $_POST['yourpassword']) {
    $username = $_POST['yourusername'];
    $password = $_POST['yourpassword'];

    if ( ($username == $allowedusername) && ($password == $allowedpassword) ) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['login'] = 1;
    }
}

($_SESSION['login'] == 1) ? ($login = "ok") : '';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
<?
    if (login != "ok") {
        echo "Login";
    } else {
        echo "WT2 Webtop";
    }
?>
        </title>
        <link href="css/webtop.css" rel="stylesheet" type="text/css">
        <script src="js/webtop.js">
        </script>
        <script>

            window.onresize = bgresize

            function bgresize () {
              w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
              h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0)
              document.getElementsByTagName('body')[0].style.backgroundSize = '' +w+ 'px ' +h+ 'px'
              taskbar(w,h)
            }

            function taskbar(width,height) {
              somesize = Math.random()*100
              // document.getElementById('taskbar').style.backgroundColor = '#5623f5'
              // document.getElementById('taskbar').style.width = width + 'px'
              // document.getElementById('taskbar').style.height = height-300 + 'px'
            }

            function displayStartmenu() {
                element = 'startmenu'
                switchDisplay(element)
            }
            function displayPHPWindow() {
                element = 'phpinfo_container'
                switchDisplay(element)
            }

            function switchDisplay(element) {
                thiselement = element
                theseClasses = document.getElementById(thiselement).className

                if (theseClasses.indexOf('hidden') != -1) {
                    newClasses = theseClasses.replace('hidden', 'visible');
                    document.getElementById(thiselement).className = newClasses;
                } else  {
                    newClasses = theseClasses.replace('visible','hidden');
                    document.getElementById(thiselement).className = newClasses;
                }
            }

            window.onload = function() {
                document.getElementById("startbutton").addEventListener('click', displayStartmenu);
                document.getElementById("closebutton").addEventListener('click', displayPHPWindow);
                document.getElementById("icon1").addEventListener('dblclick', displayPHPWindow);
            }
        </script>
    </head>

    <body>
<?
if ($login == "ok"):
    include("desktop.php");
else:
    include("login.php");

endif;
?>

    </body>
</html>
