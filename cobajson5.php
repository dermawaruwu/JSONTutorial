<!DOCTYPE html>
<html>
<head>
	<title> Coba JSON 2</title>
	<link rel="stylesheet" type="text/css" href="cobajson5.css">
	<script type="text/javascript">
	function ajax_json_gallery(folder){
		document.getElementById("pagetop").innerHTML = "Dynamic JSON Ajax PHP Driven Image Galery";
		var thumbnailbox = document.getElementById("thumbnailbox");
		var pictureframe = document.getElementById("pictureframe") ;
		var hr = new XMLHttpRequest();
		var url = "json_gallery_data.php";
		hr.open("POST", url, true);
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		hr.onreadystatechange = function(){
			if(hr.readyState == 4 && hr.status == 200){
				var d = JSON.parse(hr.responseText);
				pictureframe.innerHTML = "<img src='"+d.img1.src+"'>"
				thumbnailbox.innerHTML = "";
				for(var o in d){
					if (d[o].src) { // if in data d, there is source o
						thumbnailbox.innerHTML += '<div onclick="putinframe(\''+d[o].src+'\')"><img src="'+d[o].src+'"></div>';
					}
				}
			}
		}
		hr.send("folder="+folder); 
		thumbnailbox.innerHTML= "requesting . . . .";
	}
	function putinframe(src){
		var pictureframe = document.getElementById("pictureframe");
		pictureframe.innerHTML = '<img src="'+src+'">';
	}
</script>
</head>
<body>
	<div id="pagetop"></div>
	<div id="thumbnailbox"></div>
	<div id="pictureframe"></div>
	<script type="text/javascript">ajax_json_gallery('gallery1');</script>
</body>
</html>

