<script type="text/javascript">
$(document).ready(function(){
	console.log("document has been loaded");
	$i = 0;

	$('#printEdward').click(function(){
		$('#FirstImage').fadeIn(500, function(){
			$('#FirstImage').attr('src',"Image/GrayScale.jpg");			
		});
	});

	$('.LeftButtonImage').mouseover(function(){
		console.log("test hovering");
		$('.BackHome').css("display","block");
	});

	$('.LeftButtonImage').mouseout(function(){
		console.log("test not hovering");
		$('.BackHome').css("display","none");
	});

	$('.LeftButtonImage').click(function(){
		console.log("Left Button Image has been clicked");
		$.ajax({
		url: "Home.php",
		success: function(result){
			$('#ChangeValue').html(result);
		}
	});
	});

	$('#LinkRollBoards').click(function(){
		console.log("Play!!");
		$.ajax({
			url: "3DLayout.php",
			success: function(result){
				$('#ChangeValue').html(result);
			}
		});
	})
	

	window.setInterval(function(){
		
	},3000);

});
</script>
<style type="text/css">
	table td{
		width: 50%;
	}

</style>
<!--
<div  id="WebApps">
			
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
					
				</div>
			</div>
			<div id = "BackButton">
				<img class="LeftButtonImage" src="Image\NextButton.png">
				<h2 class="BackHome"> Back Home</h2>
			</div>
</div>
-->
<style type="text/css">
	#SocialMediaTable{
		
	}

	#SocialMediaTable td img{
		padding-left: 3%;
		width: 100%;
	}
	
</style>
<div id="WebApps">
	<h2 id="SocialMedia"><p>Social Media Apps</p></h2>
<table id="SocialMediaTable">
	<tr>
		<td><img id="LoginPageImage" src="Image\LoginPage.JPG"></td>
		<td>
			<div id="FirstWebAppsContent">
					<h3>Have you ever worried how to make your own event with ease?</h3>
					<h3>Have you ever wondered how many contact line you need to dial just to make 1 simple event for my brother</h3>
					<p id="LinkRollBoards">RollBoards</p>
					<img id="Arrow" src="https://www.websitedesignlancaster.com/sites/default/files/up-left-arrow-drop-shadow.png" style="width:200px; height:200px;">
					<p >Start your journey here</p>
			</div>
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<div class="SkillApplied">
					<p>Skill applied:</p>
					<p>html5,css,javascript,jquery,ajax,php,mysql</p>
			</div>
		</td>
	</tr>
</table>
<div id = "BackButton">
				<img class="LeftButtonImage" src="Image\NextButton.png">
				<h2 class="BackHome" style="position: absolute; top: 1880px; display:'block'"> Back Home</h2>
</div>
</div>