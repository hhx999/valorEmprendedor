<?php
/**
 * Función que nos devuelve la fecha formateada en Español 
 *
 * @param [type] $date
 * @return void
 */
use App\Multimedia;
use App\ArtPortada;

function formatDateToEsp(){

    return "hh";

}
function subirMultimediaPortada($portada, $descPortada){
	//subir portada a multimedia
            //Asignamos las reglas de extensiones de archivos para subir
            $rules = array('jpg','png','bmp');
            //El path desde donde se envia el archivo
            $path = storage_path().DIRECTORY_SEPARATOR.$portada->getClientOriginalName();
            //Nombre del archivo
            $nombre =  pathinfo($path, PATHINFO_FILENAME);
            //Extensión del archivo
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            //Comprobamos que la extensión del archivo esté en las reglas
            if (in_array($ext, $rules)) {
                //Agregamos un registro en la tabla multimedia con su nombre y extensión original
                    $multimedia = new Multimedia;
                    $multimedia->nombre = $nombre;
                    $multimedia->extension = $ext;
                    $multimedia->save();
                //path de destino
                    $destinationPath = public_path('img/portadas/');
                //Subimos el archivo al path de destino y le asignamos un nombre nuevo mediante el id que nos provee el registro de multimedia
                    $portada->move($destinationPath, $multimedia->id.'.'.$ext);
                //asignamos el archivo a la tabla de documentación para finalizar la operación
                $art_portada = new ArtPortada;
                $art_portada->descripcion = $descPortada;
                $art_portada->multimedia_id = $multimedia->id;
                $art_portada->save();
                return $art_portada->id;
            } else {
            	return false;
            }
}