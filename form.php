<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="app.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200" rel="stylesheet">

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Art Gallery</title>

    <script>
        $(document).ready(function() { 

            $('a[href^="#"]').on('click', function(event) {

                var target = $( $(this).attr('href') );

                 if( target.length ) {
                    event.preventDefault();
                    $('html, body').animate({
                    scrollTop: target.offset().top
                    }, 1000);}
});

});
 
    </script>
    <script>
        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;
                var winTop = $(window).scrollTop();
             if (pos < winTop + 600) {
                $(this).addClass("slide");
    }
  });
});
    </script>
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav id="mainNavbar" class="navbar navbar-dark navbar-expand-md py-0 fixed-top text-white">
        <a href="#myPage" class="navbar-brand">UART</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLinks">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#about" class="nav-link">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a href="#pics" class="nav-link">PICSY</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="carouselExampleSlidesOnly" class="carousel" data-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active">
            <img class="d-block w-100" src="main_3.jpg" alt="First slide">
            <div class="carousel-caption">
                <p>GET INSPIRED</p>
            </div> 
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="main_4.jpg" alt="Second slide">
            <div class="carousel-caption">
                <p>BE CREATIVE</p>
            </div> 
          </div>
          
        </div>
    </div>

      <div id="about">
          <div class="content slideanim">
                <p id="title" class="text-center">ABOUT</p>
                <div class="container slideanim">
                <p class="text-center"> Site is so hipster lorem ipsum. Lorem ipsum dolor amet truffaut vape pug austin retro blog raclette plaid. Vaporware actually activated charcoal marfa locavore. Prism enamel pin freegan art party, celiac gastropub kitsch asymmetrical flexitarian lomo narwhal schlitz bespoke. Lo-fi mlkshk fam shabby chic letterpress banh mi, brooklyn portland four loko flexitarian thundercats humblebrag umami pickled actually.
                        Lomo messenger bag fixie knausgaard. Raclette palo santo ramps poke tattooed. Four loko ugh godard yr mlkshk brooklyn raclette. Unicorn pork belly tousled, chia hella chambray salvia semiotics messenger bag bitters raw denim. </p>
                </div>
            </div> 
      </div>

      <div id="pics">
          <div class="content">
              <div class="container">
              <p id="title" class="text-center">PICSY</p>
              <div class="slideanim" id="img_head">
                    <img class="d-block w-100" src="body_1.jpg" alt="Egg">
              </br>
                    <p id="color" class="text-center">Bushwick umami flannel fixie, ramps waistcoat banjo semiotics cred keffiyeh deep v. Try-hard hoodie direct trade banh mi. Fanny pack chicharrones small batch 8-bit, pitchfork yr dreamcatcher tacos. Whatever 90's lumbersexual bushwick live-edge. Stumptown blue bottle raw denim forage disrupt.</p>
              </div>
               
                
            
           
                <div class="row slideanim">
                        <div class="col-lg-4 col-md-6 flex">
                            
                            <img class="img-thumbnail" src="body_6.jpg" alt="ph_1" >

                        </div>
                        <div class="col-lg-4 col-md-6 flex ">
                            <img class="img-thumbnail" src="body_7.jpg" alt="ph_2" >
                        
                        </div>
                        <div class="col-lg-4 col-md-6 flex">
                            <img class="img-thumbnail" src="body_3.jpg" alt="ph_3">
                        
                        </div>
                </div>
            </br>
                <div class="row slideanim">
                        <div class="col-lg-4 col-md-6 flex">
                            
                            <img class="img-thumbnail" src="body_2.jpg" alt="ph_5" >
                        
                        </div>
                        <div class="col-lg-4 col-md-6 flex ">
                            <img class="img-thumbnail" src="body_5.jpg" alt="ph_6" >
                        
                        </div>
                        <div class="col-lg-4 col-md-6 flex">
                            <img class="img-thumbnail" src="body_4.jpg" alt="ph_7">
                        
                        </div>
                </div>
             </div>  
          </div>
            
        </div>

      <div id="contact" class="container">
        <p id="title" class="text-center text-white">CONTACT</p>
        <p class="text-center text-white"><em>Any questions? </br>Please, feel free to contact us</em></p>

        <div class="row">

        <div class="col-md-2"></div>
        <form id="contact-form" method="post" action="contact.php" role="form">
        <div class="col-md-8">

            <div class="row slideanim">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
            </div>
        
      <div class="col-md-2"></div>

      <textarea class="form-control slideanim" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn btn-outline-light btn-block" type="submit">Send</button>
        </div>
      </div>	
    </div>
    </form>
    <?php 
// odbieramy dane z formularza 
$name = $_POST['name']; 
$email = $_POST['email']; 
$comments=$_POST['comments'];
if($name and $email and $message) { 
     
    // łączymy się z bazą danych 
    $connection = @mysql_connect('localhost', 'id7916396_porzucekwiktoria', 'dbmilusia1') 
    or die('Brak połączenia z serwerem MySQL'); 
    $db = @mysql_select_db('test', $connection) 
    or die('Nie mogę połączyć się z bazą danych'); 
     
    // dodajemy rekord do bazy 
    $ins = @mysql_query("INSERT INTO test SET imie='$imie', email='$email', comment='$comments'"); 
     
    if($ins) echo "Rekord został dodany poprawnie"; 
    else echo "Błąd nie udało się dodać nowego rekordu"; 
     
    mysql_close($connection); 
} 

?>
  </div>
</div>


  <!-- Footer -->
    <footer class="card-footer">

        <!-- Copyright -->
        <div class="text-center">© 2018 Copyright
          <a href="mailto:porzucekwiktoria410@gmail.com"> Porzucek Wiktoria</a>
        </div>
        <!-- Copyright -->
      
    </footer>
      <!-- Footer -->

    
    
    <script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $("#mainNavbar");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
            });
        });
    </script>

    
    
        
</body>
</html>