<script language="javascript" type="text/javascript">

  function comandantes(){
    var obj = document.getElementById('unidades')
	  obj.innerHTML = '<a href="#" onclick="hechi()" data-role="button"><img width="100" height="75" src="img/hechizero.jpg"> </a><a href="#" onclick="prindemo()" data-role="button"><img width="100" height="75" src="img/principe-demonio.jpg"></a> <a href="#" onclick="senorcaos()" data-role="button"><img width="100" height="75" src="img/senorcaos.jpg"></a>'
	var obj2 = document.getElementById('esta')
	  obj2.innerHTML = ''
   }
   
  function heroes(){
	  var obj = document.getElementById('unidades')
	  obj.innerHTML = 'Se muestra una lista con los <b>Heroes</b>'
	  var obj2 = document.getElementById('esta')
	  obj2.innerHTML = ''
   }
   
   function basicas(){
	  var obj = document.getElementById('unidades')
	  obj.innerHTML = 'Se muestra una lista con las unidades <b>basicas</b>'
	  var obj2 = document.getElementById('esta')
	  obj2.innerHTML = ''
   }
   
   function nobasicas(){
	  var obj = document.getElementById('unidades')
	  obj.innerHTML = 'Se muestra una lista con las unidades <b>NO basicas</b>'
	  var obj2 = document.getElementById('esta')
	  obj2.innerHTML = ''
   }
   
   function especiales(){
	  var obj = document.getElementById('unidades')
	  obj.innerHTML = 'Se muestra una lista con las unidades <b>Especiales</b>'
	  var obj2 = document.getElementById('esta')
	  obj2.innerHTML = ''
   }
   
   function singulares(){
	  var obj = document.getElementById('unidades')
	  obj.innerHTML = 'Se muestra una lista de las unidades <b>Singulares</b>'
	  var obj2 = document.getElementById('esta')
	  obj2.innerHTML = ''
   } 
   
</script>
