<style type="text/css">
	#storyInternship h3{
		font-size: 20px;
		font-family: 'Righteous', cursive;
		line-height: 45px;
	}

	#StoryUreca h3{
		font-size: 20px;
		font-family: 'Righteous', cursive;
		line-height: 45px;
	}

	.SkillApplied{
		left: 10px;
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
				url: "",
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
<div id="InternshipExperience">
	
			<h2 id="InternShipExperienceTitle">Internship experience</h2>	
			<div id="storyInternship">
				<h3>I am doing my first internship when i was in first year in 
					NTU, <br/>in here i just want to tell you what am i doing there
					i cannot publish the apps or showcase the apps <br/>because 
					it break the rule of the company, in that internship i am 
					building Apps <br/>that will control many robot toys using your 
					android,iphone,windows phone this apps is similar to the 
					product from MIT <br/>but my apps is quite different with that
					and you will never see apps like this <br/>because this is probably
					the first in the world,<br/>that apps also can control microcontroller
					like arduino,rasberry pie
			</div>
			<h2 id="Ureca">URECA</h2>
			<div id="StoryUreca">
				<h3>currently i am also working under professor in NTU for 
					my Ureca project to build Game that quite amazing, the amazing area that i want to share to you 
					guys is <br/>the controlling system of the game, using EEG now you can 
					control the character <br/>of the game just using your mind,
					yes when you think the character to move forward,<br/> the character
					will move forward for real, this project is still in progress
				</h3>
			</div>

			<div class="SkillApplied">
						<p>Skill applied:</p>
						<p>Unity3D,c#,javascript,node js,Arduino Development,
						   Serial Port communication,Emotiv Epoc
						</p>
				</div>
			<div class="LeftContent">
				<img class="LeftButtonImage" src="Image\NextButton.png" style= "width: 100px; height: 100px;">
				<h2 class ="PreviousProject">Previous Project</h2>
			</div>
			<div class="DropContent">
				<img class="DropDownImage" src="Image\NextButton.png" style= "width: 100px; height: 100px;">
				<h2  class="AnotherAndroidProject">Business(unaccessable now)</h2>
			</div>
			<div id="NextContent">
				<img class="NextButtonImage" src="Image\NextButton.png" style="width: 100px; height: 100px;">
				<h2 class="NextProject">Next Project</h2>
			</div>

</div>
-->
<style type="text/css">
	h2{
		color: #fff;
		font-family: 'Righteous', cursive;
	}

	#InternshipExperience{
		padding-left: 2%;
		height: 500px;
	}

	table tr td h3{
		color: #fff;
		font-family: 'Righteous', cursive;
		padding-left: 20px;
		line-height: 38px;
	}

	table{
		height: 500px;
	}

	#MoreInternship{
		font-size: 40px;
	}

</style>
<div id="InternshipExperience">
	<h2>Past Internship</h2>
	<table>
		<tr>
			<td><img src="Image\tbxLogo.png"/></td>
			<td>
			<h3>
			I have been working in TBX before, basically this company <br/>
			business model is to make all research that someone had to<br/>
			be business by providing supported products, most product <br/>
			of this company is apps.<br/>
			
			In this internship i make Apps to control some Robot toy<br/>
			and Arduino, i cannot give details of the product because it breaks <br/>
			the rule of the company, but to give you rough idea of the apps <br/>
			i make cross platform apps similar to one of the MIT apps but twisted it little <br/>
			bit so it has diffent purpose. <br/>
		</h3>
		</td>
		</tr>
		<tr>
			<td><h2 id="MoreInternship">
				Waiting For More Internship ..........
			</h2></td>
		</tr>
	</table>
	<div class="LeftContent">
			<img class="LeftButtonImage" src="Image\NextButton.png" style= "width: 100px; height: 100px;">
			<h2 class ="PreviousProject">Back Home</h2>
	</div>
	

</div>