<!DOCTYPE html>
<html>
<head>
	<title> Coba JSON 2</title>
	<script type="text/javascript">
	function ajax_get_json(){
		var results = document.getElementById("results"); 
		var hr = new XMLHttpRequest();
		var url = "my_json_list.php";
		hr.open("GET", url, true);
		hr.setRequestHeader("Content-type", "application/json";
		hr.onreadystatechange = function(){
			if(hr.readyState == 4 && hr.status == 200){
				var data = JSON.parse(hr.responseText);
				// results.innerHTML = data.u1.user+" is "+data[1].age+" and lives in "+data[1].country+"<br />";
				// results.innerHTML = data.u2.user;
				results.innerHTML ="";
				for(var obj in data){
					results.innerHTML += data[obj].user+" is "+data[obj].age+" and lives in "+data[obj].country+"<hr />";
				}
			}
		}
		hr.send(null); 
		results.innerHTML= "requesting . . . .";
	}
</script>
</head>
<body>
	<div id="results"></div>
	<script type="text/javascript">ajax_get_json();</script>
</body>
</html>

