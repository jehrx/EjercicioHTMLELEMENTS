<?php
use PHPUnit\Framework\TestCase;
use ITEC\Presencial\DAW\tags;
final class tagsTest extends TestCase{
    public function DPatributoshtml(){ //Este nombes (testtags) tiene que ser el mismo que el @dataProvider y hay que añadirle DP antes!!!!! 

        $atributo1 = [];
        $esperado1 = "";

        $atributo2 = [
            "id" => "ParrafoIntroduccion",
            "class" => "Normal"
        ];

        $esperado2 = 'id="ParrafoIntroduccion" class="Normal"';


        $atributo3 = [
        
            "id"=>"Container",
            "class"=>"centrado rojo",
            "style"=>"position absolute"
        ];

        $esperado3 = 'id="container" class="centrado rojo" style="position:absolute;"';



        return [
            "Atributo vacío" => [$esperado, $atributo1],
            "Atributo ID CLASS"=>[$esperado2, $atributo2],
            "Atributo ID CLASS" =>[$esperado3, $atributo3]
        ];
    }

    /**
     * @dataProvider DPtesttags
     */
    public function testAtributoshtml(
        $esperado,
        $atributos
    ){
        $this->asserEquals(
            $esperado,

        );
    }
}

?>

