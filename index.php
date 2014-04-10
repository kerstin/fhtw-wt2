<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Webtop</title>

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

         .desktopicon {
            margin: 10px;
            /*float: left;*/
            width: 75px;
            height: 75px;
         }
/*
         .icontest {
            z-index: 100;
         }*/

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
            top: 50px;
            left: 300px;
            /*z-index: 100;*/
         }
         #kontoapp {
            top: 150px;
            left: 250px;
         }
         #photoapp {
            top: 250px;
            left: 450px;
         }
         #maincontainer {
            position: absolute;
            width: 100%;
            height: 100%;
            padding: 15px;
            background-color: lightyellow;
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
        </script>
    </head>

    <body>
        <div id="maincontainer">
            <div class="icontest">
            <img class="desktopicon" src="img/icon_grumpycat.png">
            </div>
            <img class="desktopicon" src="img/icon_doge.png">
            <img class="desktopicon" src="img/icon_revengebaby.png">

            <div class="popupwindow" id="phpinfo">
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
            <div class="popupwindow" id="kontoapp">
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
            <div class="popupwindow" id="photoapp">
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
                // echo username
                ?>
                Kay
                </div>
                <div id="logout">
                    logout
                </div>
            </div>

        </div>
        <div id="startmenu">
            <div class="startmenu_item">Item 1</div>
            <div class="startmenu_item">Item 2</div>
            <div class="startmenu_item">Item 3 has a longer name</div>
        </div>
    </body>
</html>
