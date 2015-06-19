<!DOCTYPE html>
<html>
<head>
	<title> Coba JSON 2</title>
	<script type="text/javascript">
	function ajax_get_json(){
		var results = document.getElementById("results"); 
		var hr = new XMLHttpRequest();
		var url = "my_json_list4.php";
		hr.open("POST", url, true);
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		hr.onreadystatechange = function(){
			if(hr.readyState == 4 && hr.status == 200){
				var data = JSON.parse(hr.responseText);
				results.innerHTML ="";
				for(var obj in data){
					results.innerHTML += "Property A = "+data[obj].propertyA+"<hr />";
					results.innerHTML += "Property B = "+data[obj].propertyB+"<hr />";
				}
			}
		}
		hr.send("var1=birds&var2=bees"); 
		results.innerHTML= "requesting . . . .";
	}
</script>
</head>
<body>
	<div id="results"></div>
	<script type="text/javascript">ajax_get_json();</script>
</body>
</html>

