<?
// start the session
session_start();

include("login.php");
include("positions.php");

// logout
// destroy session & unset cookie on click on logout link

// get coordinates from elements via JS

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Webtop</title>
        <script src="js/jquery-1.10.2"></script>
        <script src="js/jquery-ui-1.10.4.custom.js"></script>
        <script src="js/jquery-ui-1.10.4.custom.min"></script>

        <!-- <link href="css/webtop.css" rel="stylesheet" type="text/css"> -->
        <!-- <script src="js/webtop.js"></script> -->

        <style>

        body {
            overflow: hidden;
            margin: 0px;
            font-size: 14px;
            font-family: "Comic Sans MS";
            color: black;
            background-color: white;
            background-image: url("img/bg_trollfaces.jpg");
        }

        a {
            color: white;
            text-decoration: underline;
        }

        .visible {
            display: block;
        }

        .hidden {
            display: none;
        }

         .desktopicon {
            margin: 10px;
            /*float: left;*/
            width: 75px;
            height: 75px;
         }

         .popupwindow {
            position: absolute;
            width: 500px;
            height: 200px;
            border: 2px solid fuchsia;
            border-color: black;
            background-color: pink;
         }

         .popuptopbar {
            height: 25px;
            padding-left: 5px;
            padding-top: 5px;
            color: white;
            border-bottom: 2px solid black;
            background-color: grey;
         }
         .popupcontent {
            overflow: scroll;
            height: 158px;
            padding: 5px;
            background-color: lightgreen;
         }
         .popupclose {
            position: absolute;
            right: 0px;
            top: 0px;
            height: 20px;
            width: 20px;
            padding: 5px;
            text-align: center;
            background-color: lightblue;
         }

         #phpinfo {
            top: <? echo $_SESSION['phpappY']; ?>px;
            left: <? echo $_SESSION['phpappX']; ?>px;
         }
         #kontoapp {
            top: <? echo $_SESSION['kontoappY']; ?>px;
            left: <? echo $_SESSION['kontoappX']; ?>px;
         }
         #photoapp {
            top: <? echo $_SESSION['photoappY']; ?>px;
            left: <? echo $_SESSION['photoappX']; ?>px;
         }

         #placeholdercontainer {
            float: left;
            width: 50%;
            height: 500px;
            margin-left: 110px;

/*            background-color: white;
            border: 2px solid grey;*/

         }
         #logincontainer {
            position: absolute;
            left: 40%;
            top: 25%;
            width: 220px;
            height: 320px;
/*            background-color: white;
            border: 2px solid grey;*/

         }
         #loginform {
            padding: 20px;
            background-color: white;
            border: 2px solid grey;
         }

         .formrow {
            padding: 5px;
         }
         .formlabel {
            font-size: 0.8em;

/*            float: left;
*/         }
         .checkbox {
            float: left;
            text-align: top;
         }

         #maincontainer {
            position: absolute;
            width: 100%;
            height: 100%;
            padding: 15px;
            /*background-color: lightyellow;*/
            overflow: hidden;
         }

         #taskbar {
            position: absolute;
            bottom: 0px;
            width: 100%;
            height: 50px;
            background: rgba(4,4,4,0.9);
            opacity: 0.8;
         }
         #starticon {
            float: left;
            margin: 10px;
            height: 30px;
            width: 30px;
         }
         #taskbarcontents {
            float: left;
            margin-top: 10px;
            margin-bottom: 10px;
            height: 30px;
         }
         #startmenu {
            position: absolute;
            bottom: 50px;
            left: 0px;
            background-color: turquoise;
/*            padding-top: 7px;
            padding-bottom: 10px;*/
         }
         .startmenu_item {
            border: 2px solid grey;
            padding: 6px 10px 7px 10px;
         }

         #useraccount {
            position: absolute;
            right: 5px;
            height: 30px;
            margin-top: 10px;
            margin-bottom: 10px;
            color: white;
            background-color: purple;
         }
         #username {
            float: left;
            padding: 5px;
            font-size: 1.2em;
            font-weight: bold;
            text-transform: uppercase;
         }
         #logout {
            float: left;
            padding: 9px;
            font-size: 0.8em;
         }

        </style>

        <script>
            $(function() {
            $( ".draggable" ).draggable();
            });

            window.onresize = bgresize

            function bgresize () {
              w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
              h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0)
              document.getElementsByTagName('body')[0].style.backgroundSize = '' +w+ 'px ' +h+ 'px'
              taskbar(w,h)
            }

            function taskbar(width,height) {
              somesize = Math.random()*100
            }

            function displayStartmenu() {
                element = 'startmenu'
                switchDisplay(element)
            }
            function displayPHPWindow() {
                element = 'phpinfo_container'
                switchDisplay(element)
            }
            function displayKontoApp() {
                element = 'kontoapp_container'
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
                document.getElementById("starticon").addEventListener('click', displayStartmenu)
                document.getElementById("closebutton").addEventListener('click', displayPHPWindow)
                // document.getElementById("closebutton2").addEventListener('click', displayKontoApp)
                document.getElementById("icon1").addEventListener('dblclick', displayPHPWindow)
                document.getElementById("icon3").addEventListener('dblclick', displayKontoApp)
            }
        </script>
    </head>

    <body>
<?
if ($thisuser != ''):
?>
        <div id="maincontainer">
            <div class="icontest">
            <img class="desktopicon draggable" src="img/icon_grumpycat.png">
            </div>
            <img class="desktopicon draggable" src="img/icon_doge.png">
            <img class="desktopicon draggable" src="img/icon_revengebaby.png">

            <div class="popupwindow draggable" id="phpinfo">
                <div class="popuptopbar">
                phpinfo
                    <div class="popupclose">
                    x
                    </div>
                </div>
                <div class="popupcontent">
<!--                     <object class="" type="text/html" data="<? include ("prog_phpinfo.php"); ?>"></object> -->
                </div>
            </div>
            <div class="popupwindow draggable" id="kontoapp">
                <div class="popuptopbar">
                    konto app
                    <div class="popupclose">
                    x
                    </div>
                </div>
                <div class="popupcontent">
                    Squid put a bird on it yr kale chips YOLO, fingerstache quinoa master cleanse. Raw denim fixie quinoa, meggings mustache authentic Banksy four loko Truffaut hoodie tousled dreamcatcher Wes Anderson gentrify. PBR&B bespoke small batch umami, leggings fap post-ironic mumblecore sartorial retro Tumblr letterpress jean shorts organic. Four loko flexitarian selfies, Austin keffiyeh flannel Portland tote bag fixie American Apparel. Tousled selfies Austin meh, flannel stumptown scenester leggings flexitarian slow-carb lo-fi Carles. Locavore craft beer Pitchfork, Banksy Wes Anderson gentrify bespoke pop-up High Life. Banksy cred Neutra organic, banjo cliche twee Pinterest locavore cornhole paleo viral aesthetic PBR&B.
                </div>
            </div>
            <div class="popupwindow draggable" id="photoapp">
                <div class="popuptopbar">
                    photo app
                    <div class="popupclose">
                    x
                    </div>
                </div>
                <div class="popupcontent">
                    app content
                </div>
            </div>
        </div>
        <div id="taskbar">
            <div id="starticon">
                <img class="" src="img/icon_trolllaugh.png">
            </div>
            <div id="taskbarcontents">
                &nbsp;
            </div>
            <div id="useraccount">
                <div id="username">
                <?
                    echo $_SESSION['user'];
                ?>
                </div>
                <div id="logout">
                    <a href="?logout=1">logout</a>
                </div>
            </div>
        </div>
        <div id="startmenu" class="hidden">
            <div class="startmenu_item">Item 1</div>
            <div class="startmenu_item">Item 2</div>
            <div class="startmenu_item">Item 3 has a longer name</div>
        </div>
<?
else:
    include("loginscreen.php");
endif;
?>
    </body>
</html>
