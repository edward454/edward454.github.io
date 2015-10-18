<!DOCTYPE html>
<html>
<head><title>Edward Profile</title></head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Kreon|Inconsolata' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>

document.addEventListener('DOMContentLoaded',function(){
	var WelcomeText = document.getElementById('printEdward');
	var FirstImage = document.getElementById('FirstImage');

	WelcomeText.addEventListener('click',function(){
		console.log("printEdward is clicked");
		FirstImage.style.src = "Image\GrayScale.jpg";
	});
});

</script>

<script type="text/javascript">
	document.addEventListener('DOMContentLoaded',function(){
		var LoginPageImage = document.getElementById('LoginPageImage');
		var AfterLoginImage  = document.getElementById('AfterLoginImage');
		var FirstDisplayImage = document.getElementById('FirstDisplayImage');
	});

</script>

<script type="text/javascript">
$(document).ready(function(){
	$('#LinkWebApps').click(function(){
		console.log("Web apps has been clikcked");
		$.ajax({
			url: "WebApps.php",
			success: function(result){
				$('#ChangeValue').html(result);
			}
		});
	});

	$('#LinkAndroidApps').click(function(){
		console.log("Android Apps has been clicked");
		$.ajax({
			url: "AndroidApps.php",
			success: function(result){
				$('#ChangeValue').html(result);
			}
		});
	});

	$('#LinkGame3D').click(function(){
		console.log("Game3D has been clicked");
		$.ajax({
			url: "3DGame.php",
			success: function(result){
				$('#ChangeValue').html(result);
			}
		});
	});

	$('#LinkVRApps').click(function(){
		console.log("VrApps has been clicked");
		$.ajax({
			url: "VRApps.php",
			success: function(result){
				$('#ChangeValue').html(result);
			}
		});
	});

	$('#LinkInternship').click(function(){
		console.log("InternshipExperience has been clicked");
		$.ajax({
			url: "Story.php",
			success: function(result){
				$('#ChangeValue').html(result);
			}
		});
	})

	$('#LinkResearch').click(function(){
		console.log("ResearchExperience has been clicked");
		$.ajax({
			url: "Research.php",
			success: function(result){
				$('#ChangeValue').html(result);
			}
		});
	})

	$('#printEdward').click(function(){
		$('#FirstImage').attr("src",'Image/GrayScale.jpg');
	})



});
</script>
<style type="text/css">
	.AllContents{
		height: 600px;

	}

	#HomeTable{
		color: #fff;
		padding-left: 27%;
	}

	#HomeTable td{
		width: 38%;
		height: 300px;
		font-family: 'Righteous', cursive;
	}

	#HomeTable img{
		width: 100px;
		height: 100px;
		cursor: pointer;
		transition: all .2s ease-in-out;
	}

	.nameContent{
		padding-top: 20px;
	}

	#HomeTable img:hover{
		transform: scale(1.4);
	}
</style>
<body>
	<div id="header">
		<div id="MyProject">
			<h3>Edward's Project</h3>
		</div>
		<ul id="MainMenu">
		<li style="font-size: 20px;">Welcome to my portofolio</li>
		</ul>
	</div>
	<div id="FirstBackground">
		<img id="FirstImage"src="Image\FirstBackground.jpg">
		<p id="WelcomeText">
			<h1 id="printEdward">scanf("who is Edward Sujono");</h1>
		</p>
	</div>
	<div class="AllContents">
		<div id="ChangeValue">
		<!--
		<div  id="WebApps">
			<h2 id="SocialMedia"><p>Social Media Apps</p></h2>
			<div id="WebAppsSlideShow">
				<div id="FirstWebApps">
					<img id="LoginPageImage" src="Image\LoginPage.JPG">
					<img id="AfterLoginImage" src="Image\AfterLogin.jpg">
					<img id="FirstDisplayImage" src="Image\FirstDisplay.jpg">
					<div id="FirstWebAppsContent">
						<h3>Have you ever worried how to make your own event with ease?</h3>
						<h3>Have you ever wondered how many contact line you need to dial just to make 1 simple event for my brother</h3>
						<p id="LinkRollBoards">RollBoards</p>
						<img id="Arrow" src="https://www.websitedesignlancaster.com/sites/default/files/up-left-arrow-drop-shadow.png" style="width:200px; height:200px;">
						<p>Start your journey here</p>
					</div>
					<div class="SkillApplied">
						<p>Skill applied:</p>
						<p>html5,css,javascript,jquery,ajax,php,mysql</p>
					</div>
				</div>
			</div>
			<div id = "nextButton">
				<img id= "NextButtonImage" src="Image\NextButton.png">
				<h2 id="NextProjectText"> next Project</h2>
			</div>
		</div>
		
		-->
		<table id="HomeTable">
			<tr>
				<td>
					<div id="SocialMedia">
					<center>
						<img id="LinkWebApps" src="Image\WebsiteLogo.png">
						<div class="nameContent">
						Social Media Apps
						</div>
					</center>
					</div>
				</td>
				<td>
					<center>
						<img id="LinkAndroidApps" src="Image\AndroidLogo.png">
						<div class="nameContent">
						Android Apps
						</div>
					</center>
				</td>
				<td>
					<center>
						<img id="LinkGame3D" src="Image\3DGameLogo.png">
						<div class="nameContent">
						3DGame
						</div>
					</center>
				</td>
			</tr>
			<tr>
				<td>
					<center>
						<img id="LinkVRApps" src="Image\VRAppsLogo.png">
						<div class="nameContent">
						VR Apps
						</div>
					</center>
				</td>
				<td>
					<center>
						<img id="LinkInternship" src="Image\InternshipLogo.jpg">
						<div class="nameContent">
							Internship Experience
						</div>
					</center>
				</td>
				<td>
					<center>
						<img id="LinkResearch" src="Image\ResearchLogo.png">
						<div class="nameContent">
							Research Experience
						</div>
					</center>
				</td>
			</tr>

		</table>
	</div>
</div>


</body>
</html>