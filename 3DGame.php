<style type="text/css">
	#GameProject3D{
		height: 900px;
	}

	#First3DGame{
		position: absolute;
		top: 1130px;
		color: #cc0000;
		font-size: 20px;
		left: 60%;
		font-family: 'Righteous', cursive;
	}
	
	h2{

	 color:#cc0000;	
	 text-shadow: 0 0 5px rgba(1,0,0,1);
 	font-family: 'Denk One', sans-serif;
  	text-transform: uppercase;
 	 letter-spacing: 2px;
 	 padding-left: 5%;

 	 	
	}

	@import url(http://fonts.googleapis.com/css?family=Denk+One);

	a{
		font-size: 100px;
		text-decoration: none;
		color: #660000;
		padding-right: 25%;		
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
			console.log("");
				$.ajax({
					url:"Home.php",
					success: function(result){
						$('#ChangeValue').html(result);	
					}
				});
		});
		$('.NextButtonImage').mouseover(function(){
			$('.NextProject').css("display","block");
		});

		$('.NextButtonImage').mouseout(function(){
			$('.NextProject').css("display","none");
		});

		$('.NextButtonImage').click(function(){
			$.ajax({
				url: "VRApps.php",
				success: function(result){
					$('#AndroidApps').html(result);
				}
			});
		});

		$('.DropDownImage').click(function(){
			$.ajax({
				url: "SecondAndroidApps.php",
				success:function(result){
					$('#AndroidApps').html(result);
				}

			});
		});
	});
</script>
<!--
<div id="GameProject3D">
	
			<h2 id="3DGameTitle">3D Horror Game</h2>	
			<img src="Image\HorrorGame.jpg" style="height: 720px;">
				<div id="First3DGame">
					<h3>Some times people feel scared on their life</h3>
					<h3>Some people really hate that kind experience</h3>
					<h3>But some people really like it because it is really challanging</h3>
					<h3>if you are second type of person, test your courage here</h3>
					<h3>I make it into mobile apps before but in this month i want to change it into </h3>
					<h3>Desktop Apps</h3>
					<a href="#">Isolation</a>
				</div>
				<div class="SkillApplied">
						<p>Skill applied:</p>
						<p>3DS max ,Unity3D, C# , javascript , 3D modelling</p>
				</div>
				<p></p>
			<div class="LeftContent">
				<img class="LeftButtonImage" src="Image\NextButton.png" style= "width: 100px; height: 100px;">
				<h2 class ="PreviousProject">Previous Project</h2>
			</div>
			
			<div id="NextContent">
				<img class="NextButtonImage" src="Image\NextButton.png" style="width: 100px; height: 100px;">
				<h2 class="NextProject">Next Project</h2>
			</div>

</div>
-->

<style>
	table{
		padding-left: 5%;
	}
	table td{
		width: 50%;
		padding-left: 5%;
	}

	table {
		color: #fff;
		font-family: 'Righteous', cursive;
	}
	table td img{
		width: 100%;
		padding-right: 10px;
		height: 80%;
	}

	table td h3{
		padding-bottom: 30%;
		line-height: 35px;
	}

	#Game3DTable a{
		font-size: 80px;
		text-decoration: none;
		color: #fe252c;
	}

	.LeftContent h2{
		padding-left: 10%; 
	}

	.DropContent h2{
		padding-left: 58%;
	}

	table{
		height: 800px;
	}
</style>
<div id="GameProject3D">
		<h2 id="3DGameTitle">3D Horror Game</h2>	
		<table id="Game3DTable">
			<tr>
				<td><img src="Image\HorrorGame.jpg" style="width:100%.;"></td>
				<td><h3>Some times people feel scared on their life
					Some people really hate that kind experience
					<br/>But some people really like it because it is really challanging
					<br/>if you are second type of person, test your courage here
					<br/>I make it into mobile apps before but in this month i want to change it into 
					<br/>Desktop Apps</h3>
					<a href="#">Isolation</a></td>
			</tr>
		</table>
		<div class="LeftContent">
				<img class="LeftButtonImage" src="Image\NextButton.png" style= "width: 100px; height: 100px;">
				<h2 class ="PreviousProject">Back Home</h2>
		</div>
</div>	