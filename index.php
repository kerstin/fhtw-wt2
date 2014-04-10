
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
            font-size: 0.8em;
            font-family: "Comic Sans MS";
        }

         .desktopicon {
            margin: 10px;
            /*float: left;*/
            background-color: green;
            width: 75px;
            height: 75px;
         }

         .icontest {
            z-index: 100;

         }

         .popupwindow {
            position: absolute;
            width: 500px;
            height: 200px;
            border: 2px solid fuchsia;
            border-color: fuchsia;
            background-color: pink;
         }

         .popuptopbar {
            height: 25px;
            padding-left: 5px;
            padding-top: 5px;
            color: white;
            background-color: grey;

         }
         .popupcontent {
            overflow: scroll;
            background-color: lightyellow;
            padding: 10px;
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
         }
         #kontoapp {
            top: 100px;
            left: 250px;
         }

         #someapp {
            top: 150px;
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
                    phpinfo<br>
                </div>
            </div>
            text
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
            <div class="popupwindow" id="someapp">
                <div class="popuptopbar">
                    some other app
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
            </div>

    </body>
</html>
