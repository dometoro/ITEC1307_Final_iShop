<?php
	include('topmenu.php');
?>
<head>
    <style>
      p{
        text-align: center;
		font-size: 3em;
      }
	  #p1{
        text-align: center;
		font-size: 3em;
		color : #336666;
      }
      #img_smartphone{
       
	   height: 500px;
	   width: 1000px;
	   display: table-cell;
	   vertical-align: middle;
	 }
	 #img_smartphone img{
	   height: 400px;
	   margin: auto auto;
	   display: block;
	 }
	  #img_labtop{
       
        height: 500px;
        width: 900px;
        display: table-cell;
        vertical-align: middle;
      }
      #img_labtop img{
        height: 450px;
        margin: auto auto;
        display: block;
      }
	 
    </style>
</head>
<body>
			<br>
			<div id="p1">MyStore</div>
			<br><br><br><br>
			<div id="img_smartphone">
			<a href="itemlist.php?category=CellPhone">
			<p>Smart Phones </p>
			<br>
			<br>
			<br>
			<img src="images/MicromaxKnight2E471.jpg" />
			<br>
			<br>
			<br>
			<img src="images/MicrosoftLumia640XL.jpg" />
			</a>
    		</div>
			<div id="img_labtop">
			<a href="itemlist.php?category=Laptop">
			<p>Labtop </p>
			<img src="images/LenovoIdeapadG50.jpg"/>
			<img src="images/HPProbook6570.jpg"/>
			</a>
    		</div>


			
	
		<!-- <span id="crossfade">
			<a href="itemlist.php?category=CellPhone">
			<img class="bottom" src="images/logo.jpeg" style="max-width:350px;max-height:350px;width:auto; height:auto;" />
			<img class="top" src="images/MicromaxKnight2E471.jpg" style="max-width:350px;max-height:350px;width: auto;height: auto;" /></a>
		</span> -->

		<!-- <span id="crossfade">
			<a href="itemlist.php?category=CellPhone">
			<img class="bottom" src="images/MicrosoftLumia640XL.jpg" style="max-width:350px;max-height:350px;width:auto; height: auto;" />
			<img class="top" src="images/XperiaT3White.jpg" style="max-width:350px;max-height:350px;width:auto;height: auto;" /></a>
		</span>

		<span id="crossfade">
			<a href="itemlist.php?category=Laptop">
			<img class="bottom" src="images/DellVostro153558.jpg" style="max-width:350px;max-height:350px;width:auto;height: auto;" />
			<img class="top" src="images/HPProbook6570.jpg" style="max-width:350px;max-height:350px;width:auto;height: auto;" /></a>
		</span>	 -->
	</body>
	
</html>
