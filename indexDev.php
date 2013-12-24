<?php
    include 'prepend.php';
    include INCPATH . 'header.php';
    $index = true;
 ?>
        <div class="pageContainer">
            <div id="wrapper">
                <div id="slideshow">
                    <img src="/img/buycraft/background.png" name="DwDCommunities" width=900; height=200 />
                </div>
                <div id="container">
                    <h1>TEst Area, Put my content here. DWD</h1>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            var step = 1
            function SlideShow(){
                //var step = 1
                if(!document.images)
                return
                document.images.DwDCommunities.src = eval("image"+step+".src")
                if(step<4)
                step++
                else
                step=1
                setTimeout("SlideShow()",4000)
            }
            SlideShow()
        </script>
    </body>
</html>