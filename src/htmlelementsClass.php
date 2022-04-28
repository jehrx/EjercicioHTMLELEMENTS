<?php
namespace ITEC\DAW\PROGRAMACION\HTMLELEMENTS;
class htmlelementsClass{
    private string $tagname;
    private array $atributos;
    private array|string $contenidos;
    private bool $vacio;

    public function __construct(string $tagname, array $atributos = [], array|string $contenidos = [], bool $vacio = true){
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

    //GetHTML - Convertir el objeto en HTML

    public function getHTML(){
        $html = "<".$this->tagname;
        foreach ($this->attributes as $attname => $attvalue){
            $html.=" ".$attname."=\"".$attvalue."\"";
        }
    if($this->isEmpty){
        $html .=" />";
    }else{
        $html .= " />";
        if(is_array($this->content)){
            foreach($this->content as $content){
                $html .= $content->getHTML();
            }


        }else{
            $html .= $this->content;
        }
        $html .= "</".$this->tagname.">";
    }
    return $html;
    }



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