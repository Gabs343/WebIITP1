<?php

/*Funcion de redireccionamiento de paginas*/

function redirect($pURL) 
{	
	if (strlen($pURL) > 0) 
	{ 
		if (headers_sent()) 
		{
			echo "<script>document.location.href='".$pURL."';</script>\n"; 
		}else 
		{
			header("Location: " . $pURL);
		}
 
		exit();
	}	
}
 

//redimencionar imagen
/* 
	$tamanhos = array(0 => array('nombre'=>'big','ancho'=>'5000','alto'=>'10000'),
					  1 => array('nombre'=>'small','ancho'=>'500','alto'=>'1000'),
					  2 => array('nombre'=>'thumb','ancho'=>'50','alto'=>'70'));
*/
				  
function redimensionar($ruta,$file_name,$uploadedfile,$id,$tamanhos){
	$filename = stripslashes($file_name);
 	$extension = getExtension($filename);
 	$extension = strtolower($extension);
	if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
 		$errors=1;
 	}else{
		$size=filesize($uploadedfile);
        
		if ($size > 2*1024){
			$change='<div class="msgdiv">You have exceeded the size limit!</div> ';
			$errors=1;
		}
		 
		if($extension=="jpg" || $extension=="jpeg" ){ 
			$src = imagecreatefromjpeg($uploadedfile);
		}else if($extension=="png"){ 
			$src = imagecreatefrompng($uploadedfile);
			imagealphablending($src, true);
			imagesavealpha($src, true);  
		}else{
			$src = imagecreatefromgif($uploadedfile);
		}
// 		echo $scr;
         
		 // $size = getimagesize($uploadedfile); --> [ancho,alto]
		 // $width = $size[0];
		 // $height = $size[1];
		 
		list($width,$height)=getimagesize($uploadedfile);
		foreach($tamanhos as $tam){
			$newwidth = $tam['ancho'];
			$newheight=($height/$width)*$newwidth;
			
			if($newheight > $tam['alto']){
				$newheight = $tam['alto'];
				$newwidth=($width/$height)*$newheight;
				if($newwidth > $tam['ancho']){
					$height = $newheight;
					$width = $newwidth;
					$newheight=($height/$width)*$newwidth;
				}
			}
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			if($extension == "png"){
				$rojo = imagecolorallocate($tmp, 234, 234, 234);
				imagefill($tmp, 0, 0, $rojo);
			}
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
			
			// img_0_small.png
			$filename = $ruta.'img_'.$id.'_'.$tam['nombre'].'.'.$extension;
			if($extension == "png"){
				$rojo = imagecolorallocate($tmp, 234, 234, 234);
				imagecolortransparent($tmp,$rojo);
				imagepng($tmp,$filename,9);
			}elseif($extension == 'gif'){
				imagegif($tmp,$filename,100);
			}else{
				imagejpeg($tmp,$filename,100);
			}
			imagedestroy($tmp);
		}
		imagedestroy($src);
		
	}
}

//funcion para obtener la extension
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
 
 //Funcion para borrar imagenes
function eliminar_archivos($carpeta,$id)
{
	$dir = '../file_sitio/'.$carpeta.'/'.$id.'/';
	if(is_dir($dir)){
		$directorio=opendir($dir); 
		while ($archivo = readdir($directorio))
		{
			if($archivo != '.' and $archivo != '..')
			{
				@unlink($dir.$archivo);
			}
		}
		closedir($directorio); 
		@rmdir($dir);
	}
}



//funcion para cortar un texto pero no las palabras.

function cortar_palabras($texto, $limite, $break=' ', $pad='...'){
	if(strlen($texto) <= $limite)
		return $texto;
	$quiebre = strpos($texto, $break, $limite);
	if( $quiebre != false){
		if($quiebre < (strlen($texto) - 1)){
			$texto = substr($texto, 0, $quiebre).$pad;
		}
	}
	return $texto;
}

//Funcion para cortar textos
function cortar($string, $maximo = 80)
{
	$cantidad = strlen($string);


	if($cantidad > $maximo)
	{
		$maximo = $maximo - 3;
		$a = cut_html(substr($string, 0, $maximo));
		$a .= "..."; //$a = $a . "...";
		return $a;
	}
	else
	{
		return $string;
	}
}

//Funcion para evitar que se cortan caracteres html
function cut_html($string)
{
    $a=$string;

    while ($a = strstr($a, '&'))
    {
        $b=strstr($a, ';');
        if (!$b)
        {
           
            $nb=strlen($a);
            return substr($string, 0, strlen($string)-$nb);
        }
        $a=substr($a,1,strlen($a)-1);
    }
    return $string;
}


function obtener_archivos($ruta){
	$file[0] = 'none';
	if(is_dir($ruta)){
		$directorio=opendir($ruta); 
		$i = 0;
		while ($archivo = readdir($directorio) ){
			if( $archivo != '.' and $archivo != '..'){
				$file[$i] =  $ruta.$archivo;
				$i++;
			}
		}
		closedir($directorio); 
	}
	return $file;
}

function obtener_imagenes($ruta){
	$galeria = '';
	if(is_dir($ruta)){
		$directorio=opendir($ruta); 
		while ($archivo = readdir($directorio) ){
			if( $archivo != '.' and $archivo != '..' and stristr($archivo,'big') !== false){
				$galeria .= '<li>
					<img src="'.$ruta.$archivo.'" alt="'.$archivo.'">
				</li>';
			}
		}
		closedir($directorio); 
	}
	return $galeria;
}



//funcion para rellenar numeros
function rellenar_izq($long_total,$valor='',$relleno=' '){
	$cadena ='';
	$long_actual = strlen($valor);
	$long_resto = $long_total - $long_actual;
	for( $i = 0 ;$i < $long_resto; $i++)
	{
		$cadena.=$relleno;
	}
	$cadena.= $valor;
	return $cadena;
}


function cant_imagenes($carpeta,$id,$base ='../' ){
	$ruta = $base.'file_sitio/'.$carpeta.'/'.$id.'/';
	$i = 0;
	if(is_dir($ruta)){
		$dh = opendir($ruta);
		while (($file = readdir($dh)) !== false){
			if ($file!="." && $file!=".."){ 
				if(stristr($file,'mini') !== false)
				$i++;
			}
		}
	}
	return $i;
}
 
?>