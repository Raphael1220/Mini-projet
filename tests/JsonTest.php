<?php
use PHPUnit\Framework\TestCase;
use mikehaertl\pdftk\Pdf;

class JsonTest extends TestCase
{
    public function testCAC1NotEquals(): void
    {
        $pdfGenerator = new Application\Controller\GeneratePdf();
        $data = ['CAC1' => '1'];
        $dataa = ['CAC1' => '0'];

        $result1 = $pdfGenerator->entrepriseGenerate($data);
        $result2 = $pdfGenerator->entrepriseGenerate($dataa);
    
        $contentFonction = file_get_contents( (string) $result1->getTmpFile() );
        $contentTest = file_get_contents( (string) $result2->getTmpFile() );
     
        $this->assertNotEmpty($contentFonction);
        $this->assertNotEmpty($contentTest);
        $this->assertNotEquals($contentFonction, $contentTest);
    }

    public function testCAC1Equals(): void
    {
        $pdfGenerator = new Application\Controller\GeneratePdf();
        $data = ['CAC1' => '1'];

        $result1 = $pdfGenerator->entrepriseGenerate($data);
        $result2 = $pdfGenerator->entrepriseGenerate($data);
    
        $contentFonction = file_get_contents( (string) $result1->getTmpFile() );
        $contentTest = file_get_contents( (string) $result2->getTmpFile() );
     
        $this->assertNotEmpty($contentFonction);
        $this->assertNotEmpty($contentTest);
        $this->assertEquals($contentFonction, $contentTest);
    }
}