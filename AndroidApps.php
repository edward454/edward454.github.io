
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
				url: "3DGame.php",
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
<div id="AndroidApps">
	
			<h2 id="AndroidAppsTitle">Android Apps</h2>	
			<img src="Image\promo.png">
				<div id="FirstAndroidAppsContent">
					<h3>Have you ever had homework on statistic<br/>but you dont know how to check your answer</h3>
					<h3>Don't Worry click this link to see how you can use this apps</h3>
					<a href="https://play.google.com/store/apps/details?id=school.com.statisticcalculator">Statistic Calculator</a>
				</div>
				<div class="SkillApplied">
						<p>Skill applied:</p>
						<p>java,xml(android),Adobe photoshop,Android Studio</p>
				</div>
				<p></p>
			<div class="LeftContent">
				<img class="LeftButtonImage" src="Image\NextButton.png" style= "width: 100px; height: 100px;">
				<h2 class ="PreviousProject">Previous Project</h2>
			</div>
			<div class="DropContent">
				<img class="DropDownImage" src="Image\NextButton.png" style= "width: 100px; height: 100px;">
				<h2  class="AnotherAndroidProject">Another Anroid Project</h2>
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
<div id="AndroidApps">
	<h2 id="AndroidAppsTitle">Android Apps</h2>	
	<table id="AndroidTable" valign="top">
		<tr>
			<td><img src="Image\promo.png" style="width: 100%;"></td>
			<td>
				<div  id="AndroidContent" style="vertical-align: top;">
					<h3>Have you ever had homework on statistic<br/>but you dont know how to check your answer
					<br/>whether your answer is true or not							
					<br/>Don't Worry click this link to see how you can use this apps</h3>
					
					<a id="googleStore" href="https://play.google.com/store/apps/details?id=school.com.statisticcalculator">Statistic Calculator</a>
				</div>
			</td>
		</tr>
	</table><br/>
	<div class="LeftContent">
				<img class="LeftButtonImage" src="Image\NextButton.png" style= "width: 100px; height: 100px;">
				<h2 class ="PreviousProject">Back Home</h2>
	</div>
	<div class="DropContent">
				<img class="DropDownImage" src="Image\NextButton.png" style= "width: 100px; height: 100px;">
				<h2  class="AnotherAndroidProject">Another Anroid Project</h2>
	</div>
</div>









