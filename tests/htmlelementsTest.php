<?php
use PHPUnit\Framework\TestCase;
use ITEC\DAW\PROGRAMACION\HTMLELEMENTS\htmlelementsClass;

final class htmlelementsClassTest extends TestCase{

   public function DPtesthtmlelementsClass(){
        $p = new htmlelementsClass("p", [],[], false);           

        return[
            "TEST DIV"=>[
                "<div></div>",
                "div",
                [],
                [],
                false
            ],

            "TEST P" =>[
                '<p id="p1" class="parrafo">Lorem ipsum dolor sit</p>',
                "p",
                ["id" => "p1", "class"=> "parrafo"],
                "Lorem ipsum dolor sit",
                false 
            ],
            "TEST NESTED Element"=>[
                '<div id="container"><p></p></div>',
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
    public function testhtmlelementsClass($codeHTMLesperado, $tagname, $attributes, $content, $isEmpty){
        $tagObject = new htmlelementsClass($tagname, $attributes, $content, $isEmpty);
        $this->assertEquals(
            $codeHTMLesperado,
            $tagObject->getHtml()
        );
    }
}

?>