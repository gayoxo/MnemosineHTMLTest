<?php include 'top.php'; ?>
<?php $LinkAtras="index.php"; ?>
<?php include 'cabecera.php'; ?>
<?php include 'form_buscador.php'?>	
<?php include 'listanegra.php'?>	

	

	
<?php 
	
	$Basica=$_POST["BarraBasica"];
	$Basica2=$_POST["Campo"];
	
	$TypeNumber=intval($Basica2);
	
	$TypeNumber=$CamposArray->findElem($TypeNumber);
	
	$BusquedaStringLabelQ=trim($Basica);
	
	if (!empty($TypeNumber)) 
		$BusquedaStringLabelQ=$TypeNumber.":".trim($Basica);
	
	$BusquedaStringLabel="";
	
	
	
	/*
	
	foreach ($ArrayBasico as $elem)
	{
		if (preg_match("/^\".+\"$/",$elem))
		{
			$elem=str_replace("\"","",$elem);
			$incluseList=true;
		}
		
		if (!empty($elem)&&($incluseList||!listanegra($elem)))
		{
			
			if (!empty($BusquedaStringLabel))
				$BusquedaStringLabel=$BusquedaStringLabel."AND ";
			
			
			$BusquedaStringLabel=$BusquedaStringLabel.$elem." ";
			
			$elemE=$elem;
				
			if ($Inside)
				$elemE="*".$elem."*";
			
			$Busqueda= array("value"=>$elemE,"type" => $TypeNumber,"positive" => true, "and" =>true , "exacto"=>true) ;
			array_push($BusquedaArray,$Busqueda);
			
		}
	}*/
	
	/*var_dump($BusquedaArray);*/
	
	/*$Busqueda= array("type" => $TypeNumber,"positive" => true, "and" =>false) ;
	$BusquedaArray=array($Basica => $Busqueda);*/
	
	include 'buscar_codigo_general.php';
	
	
	?>
	