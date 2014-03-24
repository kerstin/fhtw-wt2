<?
?>
<!DOCTYPE html>
<html>
    <head>
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

        </script>
    </head>

    <body>
        <div id="taskbar">
            <div id="startbutton" class="icon">&nbsp;
            </div>
        </div>
        <div id="icon1" class="icon">&nbsp;
        </div>
        <div id="icon2" class="icon">&nbsp;
        </div>
        <div id="icon3" class="icon">&nbsp;
        </div>
    </body>
</html>
