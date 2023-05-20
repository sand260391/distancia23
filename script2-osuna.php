<?php

/**

* Esto es un ejemplo de documentación de PHP

* @author Sandra Osuna Montes

* @version 1.0.1

*@access public

*

*/

 

/**

 * Este script muestra una clase simple en PHP con dos métodos de ejemplo.

 * La clase permite saludar y despedirse utilizando un nombre proporcionado.

 */

class MiClase {

    /**

     * @var string El nombre utilizado para saludar y despedirse.

     */

    private $nombre;

 

    /**

     * Constructor de la clase.

     *

     * @param string $nombre El nombre a utilizar.

     */

    public function __construct($nombre) {

        $this->nombre = $nombre;

    }

 

    /**

     * Saluda utilizando el nombre almacenado.

     */

    public function saludar() {

        echo "¡Hola, {$this->nombre}!";

    }

 

    /**

     * Se despide utilizando el nombre almacenado.

     */

    public function despedir() {

        echo "¡Hasta luego, {$this->nombre}!";

    }

}

echo "Ejemplo de la clase en PHP</br>";

$miObjeto = new MiClase("Juan");

echo "<br/> ¡Hola, {$this->nombre}!";

echo "<br/>¡Hasta luego, {$this->nombre}!";

echo "<br/> Hasta pronto!!<br/>";

?>
