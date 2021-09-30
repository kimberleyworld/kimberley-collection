<?php
require '../database.php';
use PHPUnit\Framework\TestCase;



class Database extends TestCase{
    public function testGenerateHtml(){
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
    public function testFailureGenerateHtml() {
        $fakeArray = [];
        $expected = 'No info';
        $case = generateHtml($fakeArray);
        $this->assertEquals($expected, $case);
    }
    public function testMalformedGenerateHtml()
    {
        $this->expectException(TypeError::class);
        generateHtml(3);
    }
    public function testvalidateData(){
        $badData = ['name'=>'&hhgabd><'];
        $goodData = ['name'=>'&amp;hhgabd&gt;&lt;'];
        $case = validateData($badData);
        $expected = $goodData;
            $this->assertEquals($case, $expected);
    }
// if someone puts nothing in it should give an error
   public function testFailurevalidateData() {
        $fakeArray = [];
        $expected = ['No info'];
        $case = validateData($fakeArray);
        $this->assertEquals($expected, $case);
    }
    public function testMalformedvalidateData()
    {
        $this->expectException(TypeError::class);
        validateData(3);
    }
}
?>