function validacionLogin(){
	//trae el elemento nombre
	var nom = document.getElementById('user').value;
	//trae el elemento email
	var contra = document.getElementById('password').value;
	if (nom == '' || contra =='') {
		document.getElementById('mensaje').innerHTML = 'El campo Usuario y Password son obligatorios!';
		document.getElementById('mensaje').style.display = 'block';
		return false;
	}else{
		return true;
	}
}

function validacionSubida(){
	//trae el elemento nombre
	var nom = document.getElementById('nom').value;
	//trae el elemento email
	var contra = document.getElementById('imagen').value;
	if (nom == '' || contra =='') {
		document.getElementById('mensaje').innerHTML = 'El campo Nombre y la imgen son obligatorios';
		document.getElementById('mensaje').style.display = 'block';
		return false;
	}else{
		return true;
	}
}