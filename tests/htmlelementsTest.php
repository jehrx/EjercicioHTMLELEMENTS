<?php
use PHPUnit\Framework\TestCase;
use ITEC\DAW\PROGRAMACION\HTMLELEMENTS;

final class htmlelementsClassTest extends TestCase{

   public function DPtesthtmlelementsClass(){
        $p = new \ITEC\DAW\PROGRAMACION\HTMLELEMENTS\htmlElements\htmlelementsClass("p", [], "texto.", false);           

        return[
            "TEST BR"=>[
                "<br>",
                "br",
                [],
                null,
                true
            ],

            "TEST P" =>[
                '<p id="p1" class="párrafo">Lorem ipsum dolor sit',
                "p",
                ["id" => "p1", "class"=> "parrafo"],
                "Lorem ipsum dolor sit",
                false 
            ],
            "TEST NESTED Element"=>[
                'div id="container"><p id="p1" class="parrafo"> texto.</p> </div>',
                "div",
                ["id" => "container"],
                [
                    $p
                ],
                false
            ]
        ];
        
    }

    /**
     * @dataProvider DPtesthtmlelementsClass
     */
    public function testhtmlelementsClasss($codeHTMLesperado, $tagname, $attributes, $content, $isEmpty){
        $tagObject = new \ITEC\DAW\PROGRAMACION\HTMLELEMENTS\htmlElements\htmlelementsClass($tagname, $attributes, $content, $isEmpty);
        $this->assertEquals(
            $codeHTMLesperado,
            $tagObject->getHtml()
        );
    }
}

?>