<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gestionnaire de tache</title>
</head>
<body>
<input type="text" name="text" id="input">
<button id="ajoute">ajoute</button>
<ul id="ul"></ul>


<script>
	let ajoute = document.getElementById('ajoute');
    let ul = document.getElementById('ul');
	//ajout du text
	ajoute.addEventListener('click',function(){
     let input = document.getElementById('input').value;
     let li = document.createElement('li');
     li.textContent = input;
     ul.appendChild(li);
	})
</script>
</body>
</html>