<?php
/**
 * Definición de MyClass
 */
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo "<br>";
        echo $this->protected;
        echo "<br>";
        echo $this->private;
        echo "<br>";
    }
}

$obj = new MyClass();
echo $obj->public;    // Funciona bien
echo "<br>";
echo $obj->protected; // Error Fatal
echo "<br>";
echo $obj->private;   // Error Fatal
echo "<br>";
$obj->printHello();   // Muestra Public, Protected y Private


/**
 * Definición de MyClass2
 */
class MyClass2 extends MyClass
{
    // Se pueden redeclarar las propiedades pública y protegida, pero no la privada
    public $public = 'Public2';
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;
        echo "<br>";
        echo $this->protected;
        echo "<br>";
        echo $this->private;
    }
}
echo "<br>";
$obj2 = new MyClass2();
echo $obj2->public;    // Funciona bien
echo "<br>";
echo $obj2->protected; // Error Fatal
echo "<br>";
echo $obj2->private;   // Undefined
echo "<br>";
$obj2->printHello();   // Muestra Public2, Protected2, Undefined

?>