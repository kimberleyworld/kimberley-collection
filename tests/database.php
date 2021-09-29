<?php
require '../database.php';
use PHPUnit\Framework\TestCase;



class Database extends TestCase{
    public function testgenerateHtml(){
        $testdata = [[
            "name" => "jane",
            "main-colour" => "plain",
            "category"=> "insaine",
            "material" => "human",
            "size" => "big",
            "heavyness" => "normal",
            "img-url" => "her.png",
            ]];
        $case = generateHtml($testdata);
        $expected = '<div class="weightInfo">';
        $expected .= "<img src='her.png'/><br>";
        $expected .='<div><h1>jane</h1>';
        $expected .= '<p>Colour: plain</p>';
        $expected .='<p>Category: insaine</p>';
        $expected .='<p>Material: human</p>';
        $expected .='<p>Size: big</p>' ;
        $expected .='<p>Heavyness: normal</p></div>' ;
        $expected .='</div>';
        $this->assertEquals($case, $expected);
    }
    public function testFailuregenerateHtml() {
        $fakeArray = [];
        $expected = 'No info';
        $case = generateHtml($fakeArray);
        $this->assertEquals($expected, $case);
    }
    public function testMalformedgenerateHtml()
    {
        $this->expectException(TypeError::class);
        generateHtml(3);
    }
}
?>