 window.onscroll = function() {
               scrollFunction()
           };
           function scrollFunction() {
             if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
               document.getElementById("header").style.background = "#100F73";
             } else {
               document.getElementById("header").style.background = "none";
             }
           }
