<?php
/* caracteristicas */

$GHnombre="Gran Hechizero";
$GHpuntos=235;
$GHm=4;
$GHha=5;
$GHhp=3;
$GHf=4;
$GHr=4;
$GHh=3;
$GHi=5;
$GHa=3;
$GHl=8;
$GHsv=0;
$GHsve=0;
$GHreg=0;


/* si es alguna caracteristica 0 se pondra "-" */
if ($GHm==0)  $GHm="-";
if ($GHha==0)	$GHha="-";
if ($GHhp==0)	$GHhp="-";
if ($GHf==0)	$GHf="-";
if ($GHr==0)	$GHr="-";
if ($GHh==0)	$GHh="-";
if ($GHa==0)	$GHa="-";
if ($GHl==0)	$GHl="-";
if ($GHsv==0)	$GHsv="-";
if ($GHsve==0)	$GHsve="-";
if ($GHreg==0)	$GHreg="-";




?>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
<script language="javascript" type="text/javascript">

function sv3(){
    $GHsv=3;
	var obj = document.getElementById('esta')
	obj.innerHTML = '<table> <tr> <td><b>Nombre</b></td> <td><b>Puntos</b></td> <td><b>M</b></td> <td><b>HA</b></td> <td><b>HP</b></td> <td><b>F</b></td> <td><b>R</b></td> <td><b>H</b></td> <td><b>I</b></td> <td><b>A</b></td> <td><b>L</b></td> <td><b>Sv</b></td> <td><b>SvE</b></td> <td><b>Reg</b></td> </tr> <tr> <td><?php echo $GHnombre ?></td> <td><center><?php echo $GHpuntos ?></center></td> <td><center><?php echo $GHm ?></center></td> <td><center><?php echo $GHha ?></center></td> <td><center><?php echo $GHhp ?></center></td> <td><center><?php echo $GHf ?></center></td> <td><center><?php echo $GHr ?></center></td> <td><center><?php echo $GHh ?></center></td> <td><center><?php echo $GHi ?></center></td> <td><center><?php echo $GHa ?></center></td> <td><center><?php echo $GHl ?></center></td> <td><center><?php echo $GHsv ?></center></td> <td><center><?php echo $GHsve ?></center></td> <td><center><?php echo $GHreg ?></center></td> </tr> </table> <a href="#" onclick="hechiOK()" data-role="button" data-icon="check" data-iconpos="notext" data-theme="c" data-inline="true">Agregar</a> <a href="#" onclick="hechiED()" data-role="button" data-icon="check" data-iconpos="notext" data-theme="c" data-inline="true">Editar</a>  '
	}

   function hechi(){
	  var obj = document.getElementById('esta')
	  obj.innerHTML = '<table> <tr> <td><b>Nombre</b></td> <td><b>Puntos</b></td> <td><b>M</b></td> <td><b>HA</b></td> <td><b>HP</b></td> <td><b>F</b></td> <td><b>R</b></td> <td><b>H</b></td> <td><b>I</b></td> <td><b>A</b></td> <td><b>L</b></td> <td><b>Sv</b></td> <td><b>SvE</b></td> <td><b>Reg</b></td> </tr> <tr> <td><?php echo $GHnombre ?></td> <td><center><?php echo $GHpuntos ?></center></td> <td><center><?php echo $GHm ?></center></td> <td><center><?php echo $GHha ?></center></td> <td><center><?php echo $GHhp ?></center></td> <td><center><?php echo $GHf ?></center></td> <td><center><?php echo $GHr ?></center></td> <td><center><?php echo $GHh ?></center></td> <td><center><?php echo $GHi ?></center></td> <td><center><?php echo $GHa ?></center></td> <td><center><?php echo $GHl ?></center></td> <td><center><?php echo $GHsv ?></center></td> <td><center><?php echo $GHsve ?></center></td> <td><center><?php echo $GHreg ?></center></td> </tr> </table> <a href="#" onclick="hechiOK()" data-role="button" data-icon="check" data-iconpos="notext" data-theme="c" data-inline="true">Agregar</a> <a href="#" onclick="hechiED()" data-role="button" data-icon="check" data-iconpos="notext" data-theme="c" data-inline="true">Editar</a>  '
   }
   
   function hechiOK(){
	  var obj = document.getElementById('lista')
	  obj.innerHTML = obj.innerHTML+'<table> <tr> <td><b>Nombre</b></td> <td><b>Puntos</b></td> <td><b>M</b></td> <td><b>HA</b></td> <td><b>HP</b></td> <td><b>F</b></td> <td><b>R</b></td> <td><b>H</b></td> <td><b>I</b></td> <td><b>A</b></td> <td><b>L</b></td> <td><b>Sv</b></td> <td><b>SvE</b></td> <td><b>Reg</b></td> </tr> <tr> <td><?php echo $GHnombre ?></td> <td><center><?php echo $GHpuntos ?></center></td> <td><center><?php echo $GHm ?></center></td> <td><center><?php echo $GHha ?></center></td> <td><center><?php echo $GHhp ?></center></td> <td><center><?php echo $GHf ?></center></td> <td><center><?php echo $GHr ?></center></td> <td><center><?php echo $GHh ?></center></td> <td><center><?php echo $GHi ?></center></td> <td><center><?php echo $GHa ?></center></td> <td><center><?php echo $GHl ?></center></td> <td><center><?php echo $GHsv ?></center></td> <td><center><?php echo $GHsve ?></center></td> <td><center><?php echo $GHreg ?></center></td> </tr> </table>'
   }
   
  function hechiED(){
	  var obj = document.getElementById('edit')
	  obj.innerHTML = '<input type="button" value="Sv +3" onClick="sv3()">'   
  }
  
</script>
