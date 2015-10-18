<style type="text/css">

	#VirtualRealityApps img{
		width: 56%;
	}
	#VirtualRealityApps{
		padding-left: 30px;
	}
	#VirtualRealityApps h3{
		font-size: 20px;
		font-family: 'Righteous', cursive;
	}

	#VirtualRealityApps a{
		font-size: 80px;
		text-decoration: none;
		padding-right: 20%;
		color: #94b1c4;
	}	
</style>


<script type="text/javascript">
	$(document).ready(function(){
		console.log("VRApps content");
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
				url: "Story.php",
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
<style type="text/css">
	table{
		padding-left: 5%;
		padding-top: 5%;
		height: 900px;
	}
	table td{
		width: 50%;
		padding-left: 5%;
	}

	table {
		color: #fff;
		font-family: 'Righteous', cursive;
		padding-bottom: 100px;
	}
	table td img{
		width: 100%;
		padding-right: 10px;
		height: 70%;
	}

	table td h3{
		padding-bottom: 30%;
		line-height: 35px;
	}

	table td a{
		padding-top: 2%;
	}

	#VirtualRealityApps h2{
		color: #fff;
		font-family: 'Righteous', cursive;
		padding-left: 50%;
	}	

	.PreviousProject{
		position: absolute;
		bottom: 10px;
		right: 85%;
	}
</style>
<!--
<div id="VirtualRealityApps">
	
			<h2 id="VirtualrealityAppsTitle">Virtual Reality</h2>	
			<img src="Image\VRApps.png">
				<div id="FirstVRAppsContent">
					<h3>Have you ever heard AirBnB before ??</h3>
					<h3>I bet more than few of you have heard about it</h3>
					<h3>Simply speaking, AirBnB is website that give service</h3>
					<h3>to tourist or visitor who want to rent a room with low budget</h3>
					<h3>But there has a lot of problem with that service because</h3>
					<h3>they just see the room from picture</h3>
					<h3>but now with this apps they will know how exactly the room</h3>
					<h3>is going to be like</h3>
					<a href="#">VR Room</a>
				</div>
				<div class="SkillApplied">
						<p>(credit: jason susanto(designer))Skill applied:</p>
						<p>c#,Unity3D,javascript,VR API,3D design</p>
				</div>
				<p></p>
			<div class="LeftContent">
				<img class="LeftButtonImage" src="Image\NextButton.png" style= "width: 100px; height: 100px;">
				<h2 class ="PreviousProject">Previous Project</h2>
			</div>
			<div id="NextContent">
				<img class="NextButtonImage" src="Image\NextButton.png" style="width: 100px; height: 100px;">
				<h2 class="NextProject">Experience</h2>
			</div>

</div>
-->
<div id="VirtualRealityApps">
	<h2 id="VirtualrealityAppsTitle">Virtual Reality</h2>	
	<table>
		<tr>
			<td><img src="Image\VRApps.png"></td>
			<td>
				<h3>Have you ever heard AirBnB before ??<br/>
				I bet more than few of you have heard about it<br/>
				Simply speaking, AirBnB is website that give service<br/>
				to tourist or visitor who want to rent a room with low budget<br/>
				But there has a lot of problem with that service because<br/>
				they just see the room from picture<br/>
				but now with this apps they will know how exactly the room<br/>
				is going to be like</h3><br/>
				<a href="#">VR Room</a>
			</td>
		</tr>
	</table>
	<div class="LeftContent">
			<img class="LeftButtonImage" src="Image\NextButton.png" style= "width: 100px; height: 100px;">
			<h2 class ="PreviousProject">Back Home</h2>
		</div>
</div>