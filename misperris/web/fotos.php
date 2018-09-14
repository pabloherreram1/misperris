
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/fonts.css">
    </head>
    <body>
        
        <div class="main">
            <div class="slides">
                <img src="img/adoptados/Apolo.jpg" alt="">
                <img src="img/adoptados/Duque.jpg" alt="">
                <img src="img/adoptados/Tom.jpg" alt="">
            </div>
            
        </div>
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="js/jquery.slides.js"></script>
        <script>
                        $(function(){
             $(".slides").slidesjs({
               play: {
                 active: true,
                   // [boolean] Generate the play and stop buttons.
                   // You cannot use your own buttons. Sorry.
                 effect: "slide",
                   // [string] Can be either "slide" or "fade".
                 interval: 3000,
                   // [number] Time spent on each slide in milliseconds.
                 auto: true,
                   // [boolean] Start playing the slideshow on load.
                 swap: true,
                   // [boolean] show/hide stop and play buttons
                 pauseOnHover: false,
                   // [boolean] pause a playing slideshow on hover
                 restartDelay: 2500
                   // [number] restart delay on inactive slideshow
               }
             });
           });
        </script>
        
        
    </body>
</html>
