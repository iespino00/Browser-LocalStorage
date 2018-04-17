<!-- Autor: Ignacio Espino-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Local Storage</title>
	<link rel="stylesheet" href="">

<script type="text/javascript" charset="utf-8" async defer>
	
if (typeof(Storage) !== "undefined") 
{
      // LocalStorage disponible
        console.log('LocalStorage soportado....Guardando en Storage');
		saveInStorage();
		getStorage();
} 

else {
	    console.log('LocalStorage NO soportado');
    // LocalStorage no soportado en este navegador
     }

	function saveInStorage()
	{
     localStorage.setItem("Autor", "IEspino");
     localStorage.setItem("Estado", "Michoacán");
	}

	function getStorage()
	{
		// Conseguir elemento
       localStorage.getItem("Autor");
       console.log('El autor guardado en Sotorage es: '+localStorage.getItem("Autor"));
	}

	function saveJSONobj()
	{
		localStorage.setItem("usuario", JSON.stringify(mi_objeto));
	}

	function getJSONobj()
	{
		/*Recordemos que:
		JSON.parse() es para parsear o convertir algo a un objeto JSON usable por JavaScript.
		JSON.stringify() es para crear un JSON string de un objeto o un array.*/
	  JSON.parse(localStorage.getItem("usuario"));
	}

	function deleteElementStorage()
	{
		localStorage.removeItem("Estado");
	}

	function deleteAllStorage()
	{
		localStorage.clear();
	}
</script>

</head>
<body>
	<CENTER><h1>USANDO LOCALSTORAGE DEL BROWSER</h1></CENTER>
</body>
</html>