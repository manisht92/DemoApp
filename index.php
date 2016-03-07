<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Ajax Demo</title>
		<script type="text/javascript">
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange=function(){
				if(xhr.readyState===4)
				{
					document.getElementById('ajax').innerHTML=xhr.responseText;
				}
			};
			xhr.open('GET','sidebar.html');
			function sendAjax()
			{
			xhr.send();
			console.log('hi');
			}
		</script>
	</head>
	<body>
		<button type="button" onclick="sendAjax()">Click Here</button>
		<br>
		<div id="ajax">
		</div>
	</body>
</html>