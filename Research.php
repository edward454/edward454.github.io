
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
<style type="text/css">
	h3{
		color: #fff;
		font-family: 'Righteous', cursive;
	}

	h2{
		color: #fff;
		font-family: 'Righteous', cursive;
	}

	table{
		padding-left: 20px;
	}

	table{
		line-height: 40px;
	}


</style>
<div id="Research Experience">
	<table>
		<tr>
			<td>
				<center>
				<img src="Image\URECA.jpg">
				</center>
			</td>
		</tr>
		<tr>
			<td>
				<h3>
					i am NTU student majoring in Computer Science
					, in NTU there has prestigious programme for top student 
					that interested to have research, currently i am taking
					that programme, My research topic is "How to detect ADHD for children through Game"
					my role in that research is to develop the Game using Emotiv EPOC(EEG) which means 
					i am making Game that can be controlled by using Brain Wave then to 
					detect ADHD we can observe their brainwave because it turns out that
					children with ADHD has quite different brain wave, my intention for having
					this Research aside for helping children is to upgrade my current
					VR apps project because as a developer and user to control character in VR World
					is quite tedious, so that i want to combine VR technology and
					Emotiv Epoc technology , so inside the virtual world you can walk
					just as you think you are going to walk in the real world,
					because i have just started this research from the end of August so i
					cannot tell you much about my experience yet.<br/>
				</h3>
			</td>	
		</tr>
		<tr>
			<td><h2>Coming Soon For More of my experience</h2></td>
		</tr>
	</table>
	<div class="LeftContent">
			<img class="LeftButtonImage" src="Image\NextButton.png" style= "width: 100px; height: 100px;">
			<h2 class ="PreviousProject">Back Home</h2>
	</div>
</div>