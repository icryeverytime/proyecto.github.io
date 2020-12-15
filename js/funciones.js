
        function tres(){
          var tres=document.getElementById("mostrar");
            tres.style.display="block";
        }
        function dos()
        {
          var dos=document.getElementById("mostrar");
          dos.style.display="none";
        }
 
        window.onscroll = function() {myFunction()};
            var navbar = document.getElementById("navbar");
            var sticky = navbar.offsetTop;
            var xl=window.matchMedia('(min-width: 1200px)');
            var l=window.matchMedia('(min-width: 992px)');
            var m=window.matchMedia('(min-width: 768px)');
            var s=window.matchMedia('(min-width: 600px)');
            var xs=window.matchMedia('(max-width: 600px)');
            
            function myFunction() {
              var dos=document.getElementById("mostrar");
              dos.style.display="none";
              if (window.pageYOffset > sticky) {
                navbar.classList.add("sticky");
                if(xl.matches)
                {
                  document.getElementById("head").style.height='120px';
                  document.getElementById("head").style.width='462px'; 
                }
                if(l.matches)
                {
                  document.getElementById("head").style.height='100px';
                document.getElementById("head").style.width='385px';
                }
                if(m.matches)
                {
                  document.getElementById("head").style.height='80px';
                document.getElementById("head").style.width='308px';
                }
                if(s.matches)
                {
                  document.getElementById("head").style.height='60px';
                document.getElementById("head").style.width='231px';
                }
                if(xs.matches)
                {
                  document.getElementById("head").style.height='40px';
                document.getElementById("head").style.width='231px';
                }  
              } else {
                navbar.classList.remove("sticky");
                if(xl.matches)
                {
                  document.getElementById("head").style.height='180px';
                  document.getElementById("head").style.width='752px'; 
                }
                if(l.matches)
                {
                  document.getElementById("head").style.height='160px';
                document.getElementById("head").style.width='616px';
                }
                if(m.matches)
                {
                  document.getElementById("head").style.height='140px';
                document.getElementById("head").style.width='539px';
                }
                if(s.matches)
                {
                  document.getElementById("head").style.height='120px';
                document.getElementById("head").style.width='462px';
                }
                if(xs.matches)
                {
                  document.getElementById("head").style.height='100px';
                document.getElementById("head").style.width='385px';
                }  
              }
            }