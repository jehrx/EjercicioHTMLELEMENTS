<?php

class htmlElements{
    private string $tagname;
    private array $atributos;
    private array $contenidos;
    private bool $vacio;

    public function __construct(string $tagname, array $atributos = [], array $contenidos = [], bool $vacio = true){
    $this->tagname = $tagname;
    $this->atributos = $atributos;
    $this->contenidos = $contenidos;
    $this->vacio = $vacio;
    }



    //MÉTODOS

    public function getTagname(): string {
        return $this->tagname;
    }   
    public function isEmpty(): bool {
        return $this->isEmpty;
    } 
    //addAttribute
    public function addAttributes(string $attname, string $attvalue){
        $this->attributes[$attname] = $attvalue;
    //::FIN addAttribute::
    }
    //BORRAR ATRIBUTO
    public function removeAttributes(string $attname){ 
        if (isset($this->attributes[$attname])) //Comprueba si existe la variable, si es NULL
            unset($this->attributes[$attname]); //Borra la variable.   
    }
    //:::FIN BORRAR ATRIBUTO:::


    // ::::FIN MÉTODOS::::

    //CREACIÓN DE OBJETO



    //::::FIN CREACIÓN DE OBJETO::::

    //CON ESTO ESTÁS DICIENDO QUE:





    public function isSameTag(htmlElements $htmlelement): bool{
        return $this->tagname == $htmlelement->getTagname();
    }

    public function addContent(array|string $content){  //Se está diciendo que el contenido tiene que ser una array y string
        $this->contenidos = $content;

    }

   

}



echo $tag1->getTagname(); /* Dentro del tag1 está accediento al "div" porque es el tagname, y 
                            como el tagname está el primero pues detecta que es el "div" en este caso */

echo $tag2->getTagname(); /* Aquí hace lo mismo, solo que coge el p. */

// Esto lo que hace es imprimir en pantalla. 

$tag1 = new HTMLelements("div", ["id"=>"div1", "class"=>"divclass"], [], false);

$tag2 = new HTMLelementos("p", ["id"=>"p", "class"=>"pclass"], [], false);





?>