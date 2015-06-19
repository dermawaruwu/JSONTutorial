<!DOCTYPE html>
<html>
<head>
	<title> Coba JSON 2</title>
	<link rel="stylesheet" type="text/css" href="cobajson5.css">
	<script type="text/javascript">
	function ajax_json_gallery(folder){
		
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
	<div id="pagetop">Dynamic JSON Ajax PHP Driven Image Galery</div>
	<div id="thumbnailbox"></div>
	<div id="pictureframe"></div>
	<div id="albummenubox"> 
		<h3>My Photo Album</h3>
		<a href="#" onclick="return false" onmousedown="ajax_json_gallery('gallery1')"> Gallery 1 </a><br />
		<a href="#" onclick="return false" onmousedown="ajax_json_gallery('gallery2')"> Gallery 2 </a><br />
		<a href="#" onclick="return false" onmousedown="ajax_json_gallery('gallery3')"> Gallery 3 </a><br />
	</div>
	<script type="text/javascript">ajax_json_gallery('gallery1');</script>
</body>
</html>

