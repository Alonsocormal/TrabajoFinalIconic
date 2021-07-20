<!--/.Footer-->
<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="logo">
                        <a class="logo-ft scroll-top" href="#"><em>I</em>conic</a>
                        <p>Copyright &copy; 2021 Iconic 
                       <br>Web Designer: Alonso André Córdova Málaga</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="location">
                        <h4>Ubicación</h4>
                        <ul>
                            <li>Calle Beaterio 225
                            <li>Arequipa/Perú
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="contact-info">
                        <h4>Mas Información</h4>
                        <ul>
                            <li><em>Teléfono</em>: 932363920</li>
                            <li><em>Email</em>: iconicboutiqueaqp.<br>contacto@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="connect-us">
                        <h4>Nuestras Redes Sociales</h4>
                        <ul>
                            <li><a href="https://instagram.com/iconicboutiqueaqp?utm_medium=copy_link"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/IconicBoutiqueAQP"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
  
      <script src="js/vendor/bootstrap.min.js"></script>
  
      <script src="js/plugins.js"></script>
      <script src="js/main.js"></script>
  
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
      <script type="text/javascript">
      $(document).ready(function() 
      {
          // navigation click actions 
          $('.scroll-link').on('click', function(event){
              event.preventDefault();
              var sectionID = $(this).attr("data-id");
              scrollToID('#' + sectionID, 750);
          });
          // scroll to top action
          $('.scroll-top').on('click', function(event) {
              event.preventDefault();
              $('html, body').animate({scrollTop:0}, 'slow');         
          });
          // mobile nav toggle
          $('#nav-toggle').on('click', function (event) {
              event.preventDefault();
              $('#main-nav').toggleClass("open");
          });
      });
      // scroll function
      function scrollToID(id, speed){
          var offSet = 50;
          var targetOffset = $(id).offset().top - offSet;
          var mainNav = $('#main-nav');
          $('html,body').animate({scrollTop:targetOffset}, speed);
          if (mainNav.hasClass("open")) {
              mainNav.css("height", "1px").removeClass("in").addClass("collapse");
              mainNav.removeClass("open");
          }
      }
      if (typeof console === "undefined") {
          console = {
              log: function() { }
          };
      }
      </script>