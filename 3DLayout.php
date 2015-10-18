 
<script type="text/javascript">
	function myFunction(){

		var value = document.getElementById('InsertPassword');
		console.log("value: "+value.elements[0].value);
		if(value.elements[0].value == "EdwardSujonoNTU"){
			var xhttp = new XMLHttpRequest();
  			xhttp.onreadystatechange = function() {
    		if (xhttp.readyState == 4 && xhttp.status == 200) {
      			document.getElementById("PlayObject").innerHTML = xhttp.responseText;
    		}
  			}
  			xhttp.open("GET", "Play.php", true);
 			xhttp.send();
		}
	}
</script>

<style type="text/css">
	#name{
		color: #fff;
	}
</style>

 <form id="InsertPassword">
 	<label for="inputName" id="name">Name</label>
 	<input type="text" name="inputName"></input>
 	<label for="submitting">Submit</label>
 	
 </form>
<button type="button" onclick="myFunction()">Submit</button>


<div id="PlayObject">

</div>
