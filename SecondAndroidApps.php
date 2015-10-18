<style type="text/css">
	#SecondAndroidAppsContent{
		padding-top: 100px;
	}

	h3{
		font-family: 'Righteous', cursive;
	}

	#SecondAndroidAppsContent a{
		font-size: 100px;
		text-decoration: none;
		color: #94b1c4;
		padding-right: 250px;
	}

	.SkillApplied{
		top: 1650px;
		left: 50%;

	}

</style>

<script type="text/javascript">
	$(document).ready(function(){
		console.log("Android Apps Content");
		$('.DropDownImage').mouseover(function(){
			$('.AnotherAndroidProject').css("display","block");
		});

		$('.DropDownImage').mouseout(function(){
			$('.AnotherAndroidProject').css("display","none");
		});

		$('.LeftContent').mouseover(function(){
			$('.PreviousProject').css("display","block");
		});

		$('.LeftContent').mouseout(function(){
			$('.PreviousProject').css("display","none");
		});

		$('.LeftButtonImage').click(function(){
				$.ajax({
					url:"AndroidApps.php",
					success: function(result){
						$('#AndroidApps').html(result);	
					}
				});
		});

		$('.DropDownImage').click(function(){
			$.ajax({
				url: "ThirdAndroidApps.php",
				success:function(result){
					$('#AndroidApps').html(result);
				}

			});
		});
	});
</script>
<!--
<div id="SecondAndroidApps">
	<h2 id="AndroidAppsTitle">Android Apps</h2>
	<img src="Image\PewPewIcon.png">
	<div id="SecondAndroidAppsContent">
		<h3>First mini  games that i made </h3>
		<h3>Are you sure with your agility, step up from the ordinary obstacle game</h3>
		<h3>In this game you need to avoid all obstacle that thrown to you</h3>
		<h3>Grab this Game As Soon As Possible</h3>
		<h3>Click this link below to see how you can play this Game</h3>
		<a href="#">Pew Pew 1.0</a>
	</div>
	<div class="SkillApplied">
			<p>Skill applied:</p>
			<p>java,libGDX(FrameWork),Adobe Photoshop,Eclipse</p>
	</div>
	<div class="LeftContent">
		<img class="LeftButtonImage" src="Image\NextButton.png" style= "width: 100px; height: 100px;">
		<h2 class ="PreviousProject">Previous Android Project</h2>
	</div>
	<div class="DropContent">
		<img class="DropDownImage" src="Image\NextButton.png" style= "width: 100px; height: 100px;">
		<h2  class="AnotherAndroidProject">Next Anroid Project</h2>
	</div>
</div>
-->
<style>
	table{
		padding-left: 5%;
	}
	table td{
		width: 50%;
	}

	table {
		color: #fff;
		font-family: 'Righteous', cursive;
	}

	table td h3{
		padding-bottom: 30%;
		line-height: 35px;
	}

	#AndroidTable a{
		font-size: 40px;
		text-decoration: none;
		color: #94b1c4;
	}

	.LeftContent h2{
		padding-left: 10%; 
	}

	.DropContent h2{
		padding-left: 58%;
	}
</style>
<table id="AndroidTable">
	<h2 id="AndroidAppsTitle">Android Apps</h2>
	<tr>
		<td><img src="Image\PewPewIcon.png" style="width: 100%;"></td>
		<td>
			<h3>Are you sure with your agility, step up from the ordinary obstacle game
			In this game you need to avoid all obstacle that thrown to you
			Grab this Game As Soon As Possible
			Click this link below to see how you can play this Game</h3>
			<a href="#">Pew Pew 1.0</a>
		</td>
	</tr>
	<div class="LeftContent">
		<img class="LeftButtonImage" src="Image\NextButton.png" style= "width: 100px; height: 100px;">
		<h2 class ="PreviousProject">Previous Android Project</h2>
	</div>
	<div class="DropContent">
		<img class="DropDownImage" src="Image\NextButton.png" style= "width: 100px; height: 100px;">
		<h2  class="AnotherAndroidProject">Next Anroid Project</h2>
	</div>
</table>
