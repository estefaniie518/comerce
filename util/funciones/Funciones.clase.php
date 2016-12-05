<?php

class Funciones {
    public static $DIRECTORIO_PRINCIPAL = "comercial";
        
    public static function generarHTMLReporte($htmlDatos) {
        $html = '
                    <html>
                        <head>
                            <meta charset="utf-8">
                            <link rel="stylesheet" href="'.$_SERVER["HTTP_ORIGIN"].'/'.Funciones::$DIRECTORIO_PRINCIPAL.'/vista/css/reporte.css"/>
                        </head>
                        <body>';

        $html .= $htmlDatos;
        $html .= "</body>";
        $html .= "</html>";

        return $html;
    }
	
    public static function generarReporte($html_reporte, $tipo_reporte, $nombre_archivo="reporte"){
        if ($tipo_reporte == 1){
            //Genera el reporte en HTML
            echo $html_reporte;
        }else if ( $tipo_reporte == 2 ){
            //Genera el reporte en PDF
            $archivo_pdf = "../vista/reportes/".$nombre_archivo.".pdf";
            Funciones::generaPDF($archivo_pdf, $html_reporte);
            header("location:".$archivo_pdf);
        }else{
            //Genera el reporte en Excel
            header("Content-type: application/vnd.ms-excel; name='excel'");
            header("Content-Disposition: filename=".$nombre_archivo.".xls");
            header("Pragma: no-cache");
            header("Expires: 0");

            echo $html_reporte;
        }
    }
    
    public static function mensaje($mensaje, $tipo, $archivoDestino="", $tiempo=0) {
            $estiloMensaje = "";
            
            if ($archivoDestino==""){
                $destino = "javascript:window.history.back();";
            }else{
                $destino = $archivoDestino;
            }
            
            $menuEntendido = '<div><a href="'.$destino.'">Entendido</a></div>';
            
            
            if ($tiempo==0){
                $tiempoRefrescar = 5;
            }else{
                $tiempoRefrescar = $tiempo;
            }
            
            switch ($tipo) {
                case "s":
                    $estiloMensaje = "alert success";
                    $titulo = "Hecho";
                    break;
                
                case "i":
                    $estiloMensaje = "alert-info";
                    $titulo = "Información";
                    break;
                
                case "a":
                    $estiloMensaje = "alert-warning";
                    $titulo = "Cuidado";
                    break;
                
                case "e":
                    $estiloMensaje = "alert-danger";
                    $titulo = "Error";
                    break;

                default:
                    $estiloMensaje = "alert-info";
                    $titulo = "Información";
                    break;
            }
            
            $html_mensaje = '
                    <html>
                        <head>
                            <title>Mensaje del sistema</title>
                            <meta charset="utf-8">
                            <meta http-equiv="refresh" content="'.$tiempoRefrescar.';'.$destino.'">
                                
                            <!-- Bootstrap -->
                            <link href="../util/gentelella/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
                            
                            <!-- Custom Theme Style -->
                            <link href="../util/gentelella/build/css/custom.min.css" rel="stylesheet">
                            
                            
    
                        </head>
                        <body>
                            <br>
                            <div align="center">
                            <div class="container body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="alert '.$estiloMensaje.' alert-dismissible fade in" role="alert">
                                            <h4>'.$titulo.'!</h4>
                                            <p>'.$mensaje.'</p>
                                        </div>
                                        '.$menuEntendido.'
                                    </div>
                                </div>
                            </div>
                            </div>

                        </body>
                    </html>
                ';
            
            echo $html_mensaje;
            
            exit;
            
    }
    
    public static function imprimeJSON($estado, $mensaje, $datos){
        //header("HTTP/1.1 ".$estado." ".$mensaje);
        header("HTTP/1.1 ".$estado);
        header('Content-Type: application/json');
        
        $response["estado"]	= $estado;
        $response["mensaje"]	= $mensaje;
        $response["datos"]	= $datos;
	
        echo json_encode($response);
    }

    public static function cargarArchivo($nombreArchivo, $ruta){
        try {
            if($nombreArchivo != ""){
                move_uploaded_file($nombreArchivo, $ruta);
            }            
        } catch (Exception $e) {
            throw $e;
        }        
    }

    public static function eliminarArchivo($nombreArchivo){
        try {
            if (file_exists($nombreArchivo)) {
                unlink($nombreArchivo);
            }     
        } catch (Exception $e) {
            throw $e;
        }        
    }

    public static function generaPDF($file='', $html='', $paper='a4', $format="", $download=false) {
        require_once '../util/dompdf/dompdf_config.inc.php';
        try{
            $dompdf = new DOMPDF();
            $dompdf->set_paper($paper, $format);
            $dompdf->load_html($html);
            ini_set("memory_limit","32M");
            $dompdf->render();
            file_put_contents($file, $dompdf->output());        

            if ($download){
                $dompdf->stream($file);
            }
        }catch(Exception $exc){
            echo "Error: ".$exc->getMessage();
        }
    }

    public static function limpiarString($string){
        $string = trim($string);

        $string = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $string
        );

        $string = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $string
        );

        $string = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $string
        );

        $string = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $string
        );

        $string = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $string
        );

        $string = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C',),
            $string
        );

        //Esta parte se encarga de eliminar cualquier caracter extraño
        $string = str_replace(
            array("\\", "¨", "º", "-", "~",
                 "#", "@", "|", "!", "\"",
                 "·", "$", "%", "&", "/",
                 "(", ")", "?", "'", "¡",
                 "¿", "[", "^", "`", "]",
                 "+", "}", "{", "¨", "´",
                 ">", "< ", ";", ",", ":",
                 ".", " "),
            '',
            $string
        );
        return $string;
    }
    public static function fecha_amd($fecha){
	$anio = substr($fecha,6,4);
	$mes = substr($fecha,3,2);
	$dia = substr($fecha,0,2);
	return $anio.'/'.$mes.'/'.$dia;
    }

    public static function fecha_dma($fecha){
        $anio = substr($fecha,0,4);
        $mes = substr($fecha,5,2);
        $dia = substr($fecha,8,2);
        return $dia.'/'.$mes.'/'.$anio;
    }
}