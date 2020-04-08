<!doctype html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport" />



  <?php 
  include('PHP/users.php');
  include('PHP/median.php');
  include('PHP/Highest.php');
  include('PHP/lowest.php');

   ?>



  <link href="https://fonts.googleapis.com/css?family=Spartan&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">

  
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/1.1.0/progressbar.min.js"></script>

  <title>FaceMash</title>



  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="https://use.typekit.net/oew5oyf.css">
</head>

<body>
  <div class="device">
  
    <header>

    <div class="firstMenuDiv">

        <ul class="firstMenu">
            <li><a href="#filosofi1">Ladda Upp Bild</a></li>
            <li><a href="#filosofi2">Skapa Konto</a></li>
            <li><a href="#filosofi3">Logga In</a></li>
          </ul>
        
    </div>

    <div class="secondMenuDiv">

        <ul class="secondMenu">
            <li><a  class="current" href="#filosofi.1">Alla</a></li>
            <li><a href="#filosofi.2">Män</a></li>
            <li><a href="#filosofi.3">Kvinnor</a></li>
          </ul>
<!--

          <ul class="thirdMenu">
            <li><a href="#filosofi">Alla klasser</a></li>
            <li><a href="#filosofi">Skapa egen klass (Egna Bilder)</a></li>
            <li><a href="#filosofi">Sök</a></li>
          </ul>
-->

        
    </div>


    </header>




    <div class="vidare" id="vidare">
  <li class="currentss" id="currentss"><a  class="currents" href="#filosofi.1">Vidare</a></li>
</div>

<div class="average" id="">

<p class="averageP"> Högst <br> <?php echo round($sumOfMax * $realNum, 1); ?>  </p>


<p class="averageP">Genomsnitt  <br> <?php echo round($TrueRowMedian[0] * $realNum, 1); ?> </p>


<p class="averageP"> Lägst <br> <?php echo round($sumOfMin * $realNum, 1); ?> </p>

</div>


    <div class="split left">
		<!-- SHOW IF PRESSED !-->
	<div class="boomber">
	<div class="text"><h1 class="votes"> <?php Versus(0, poang, 0);?> <span class="votesSpan"> Röster <span></h1></div>
	<div id="container">	
</div>

</div>

        <div class=" centered leftContent">
            <h1 class="Ocolor h1 leftH1">
            <?php Versus(0, NAMN, 0);?>
            </h1>
            <img class="img" src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png" alt="">
	  
			<div class="idk">

</div>




<div class="form">
<form method="post" id="poll_form">
						<div class="radio">
							<label>            <img class="pickImg" src="https://image.flaticon.com/icons/svg/1533/1533908.svg" alt="">
<input type="radio" name="poll_option" class="poll_option" value="<?php Versus(0, NAMN, 0);
 ?>" /> </label>
						</div>
					</form>


</div>


        <!-- GLÖM INTE TRYCKA VIDARE KNAPP-->    
    
    
    
    
        </div>


    
    </div>


    <div class="split right">
	
	<div class="boomberRight">
	<div class="text"><h1 class="votes"> <?php Versus(1, poang, 0); ?> <span class="votesSpan"> Röster <span></h1></div>
	<div id="containerRight"> </div>
</div>

        <div class=" centered rightContent">
            <h1 class="Ocolor h1 rightH1"><?php Versus(1, NAMN, 0); ?>
</h1>
            <img class="img" src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png" alt="">
          <div class="idk">
          
            
        </div>
        <div class="form">
        <div class="radio">
							<label><img class="pickImg" src="https://image.flaticon.com/icons/svg/1533/1533908.svg" alt=""><input type="radio" name="poll_option" form="poll_form" class="poll_option" value="<?php Versus(1, NAMN, 0);?>" /></label>
						</div>
        </div>
        <!-- GLÖM INTE TRYCKA VIDARE KNAPP-->    
    
    
    
    
        </div>
    
    
        
    
    
    </div>

</div>
<div class="tillfalligmobil">

<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>:(</h1>
			</div>
			<h2>Tyvärr</h2>
			<p>FaceMash är för tillfället bara tillgängligt på datorer. <br> Mobila verisionen kommer snart! </p>
		
		</div>
	</div>


















</div>
 
 <div class="bit"></div>

</body>



</html>


<script>  
$(document).ready(function(){

  $('#poll_form').one('submit', function() {


        $(".boomber").show();
        $(".boomberRight").show();
        $(".vidare").show();
        $(".average").show();

        $('#currentss').on('click', function() {
         
                   $(".boomber").hide();
        $(".boomberRight").hide();
        $(".vidare").hide();
        $(".average").hide();

        $(".bit").load("PHP/test.php");




        $('#poll_form').one('submit', function() {
          $(".boomber").show();
        $(".boomberRight").show();
        $(".vidare").show();
        $(".average").show();
        });


});




       

var bar = new ProgressBar.Line(container, {
  strokeWidth: 4,
  easing: 'easeInOut',
  duration: 1400,
  color: '#FFEA82',
  trailColor: '#eee',
  trailWidth: 1,
  svgStyle: {width: '100%', height: '100%'},
  text: {
    style: {
      // Text color.
      // Default: same as stroke color (options.color)
      color: '#999',
      position: 'absolute',
      right: '0',
      top: '30px',
      padding: 0,
      margin: '0px 200px 0px 0px',
      transform: null
    },
    autoStyleContainer: false
  },
  from: {color: '#FFEA82'},
  to: {color: '#ED6A5A'},
  step: (state, bar) => {
    bar.setText('' + Math.round(bar.value() * 100) / 10 + '');
  }
});


bar.animate(<?php Versus(0, poang, SUM) ?>);  // Number from 0.0 to 1.0




var bar = new ProgressBar.Line(containerRight, {
  strokeWidth: 4,
  easing: 'easeInOut',
  duration: 1400,
  color: '#FFEA82',
  trailColor: '#eee',
  trailWidth: 1,
  svgStyle: {width: '100%', height: '100%'},
  text: {
    style: {
      // Text color.
      // Default: same as stroke color (options.color)
      color: '#999',
      position: 'absolute',
      right: '0',
      top: '30px',
      padding: 0,
      margin: 0,
      transform: null
    },
    autoStyleContainer: false
  },
  from: {color: '#FFEA82'},
  to: {color: '#ED6A5A'},
  step: (state, bar) => {
    bar.setText(Math.round(bar.value() * 100) / 10 + '');
  }
});


bar.animate(<?php Versus(1, poang, SUM) ?>);  // Number from 0.0 to 1.0


});

  $( "input[type='radio']" ).css( "display", "none" );

  $('.poll_option').click(function() {
     $('#poll_form').submit();
});

	$('#poll_form').on('submit', function(event){
		event.preventDefault();
		var poll_option = '';
		$('.poll_option').each(function(){
			if($(this).prop("checked"))
			{
				poll_option = $(this).val();
			}
		});
		if(poll_option != '')
		{
			$('#poll_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"PHP/regularVote.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#poll_form')[0].reset();
					$('#poll_button').attr('disabled', false);
		
				}
			});
		}
		else
		{
false;
		}
	});
	
	
}); 


/* IF PRESSED*/



</script>  

