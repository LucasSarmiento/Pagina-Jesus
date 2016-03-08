function confirmar() 
{
	var conf = confirm("¿Quieres eliminar este registro?");
	return conf;
}

function informe()
{

	var cont = 0;
	myvar = setInterval(myTimer, 1000);

function myTimer()
{
		cont++;

	if (cont <= 5) 
	{
		document.getElementById('info').innerHTML = "Elemento eliminado correctamente";
	}
	else
	{
		document.getElementById('info').innerHTML = ""
		clearInterval(myvar);
	}
	
}

}