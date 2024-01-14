<?php
use PHPUnit\Framework\TestCase;
use mikehaertl\pdftk\Pdf;
use Application\Controller\GeneratePdf;

class JsonTest extends TestCase
{ 
    // Generate test
    public function generateTest($data){
        $pdf = new Pdf('./pdf/cerfa_16216_01.pdf');
        $pdf->fillForm($data)
            ->needAppearances()
            ->saveAs('./pdfGenerated/test.pdf');
    }

    // Generate function
    public function generateFunction($data){
        $pdfGenerator = new Application\Controller\GeneratePdf();
        $pdfGenerator->generate($data);
    }

    // Base 64
    public function Base64($file){
        return base64_encode(file_get_contents($file));
    } 

    // Supprimer tous les fichiers du répertoire
    public function deleteFiles(){
        if (is_dir('./pdfGenerated')) {
            $files = glob('./pdfGenerated/*');
            foreach ($files as $file) {
                if (is_file($file)) {
                    unlink($file);
                }
            }
        }
    } 

    public function testCAC0_1Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC0' => '1'];

        // Génération du PDF en utilisant la méthode test
        $this->generateTest($data);
        // Génération du PDF en utilisant la méthode de la fonction
        $this->generateFunction($data);

        // Conversion des fichiers PDF en base64
        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        // Vérification que les deux PDF ne sont pas vides
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        // Comparaison des représentations base64 des fichiers PDF
        $this->assertEquals($base64Result1, $base64Result2);
        
        // Suppression des fichiers
        $this->deleteFiles();
    }

    public function testCAC0_2Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC0' => '2'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC0_3Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC0' => '3'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC0_4Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC0' => '4'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC0_5Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC0' => '5'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC0_6Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC0' => '6'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC0_7Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC0' => '7'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC1Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC1' => '1'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC2Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC2' => '0'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC3Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC3' => '0'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC4Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC4' => '0'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC5Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC5' => '0'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC6Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC6' => '0'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC7Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC7' => '0'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC8Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC8' => '0'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC9Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC9' => '0'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }


    public function testCAC10Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC10' => '0'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC11Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC11' => '0'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC12Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC12' => '0'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC13Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC13' => '0'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC14Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC14' => '0'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC15Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC15' => '0'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC16Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC16' => '0'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA1Equals(): void
    {
        $data = ['type' => 'SOC', 'a1' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA2Equals(): void
    {
        $data = ['type' => 'SOC', 'a2' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA3Equals(): void
    {
        $data = ['type' => 'SOC', 'a3' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA4Equals(): void
    {
        $data = ['type' => 'SOC', 'a4' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA5Equals(): void
    {
        $data = ['type' => 'SOC', 'a5' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA6Equals(): void
    {
        $data = ['type' => 'SOC', 'a6' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA7Equals(): void
    {
        $data = ['type' => 'SOC', 'a7' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA8Equals(): void
    {
        $data = ['type' => 'SOC', 'a8' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA9Equals(): void
    {
        $data = ['type' => 'SOC', 'a9' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA11Equals(): void
    {
        $data = ['type' => 'SOC', 'a11' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testDenominationEquals(): void
    {
        $data = ['type' => 'SOC', 'Denomination' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testFmEquals(): void
    {
        $data = ['type' => 'SOC', 'Forme juridique' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testSirenEquals(): void
    {
        $data = ['type' => 'SOC', 'Siren' => 0000];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA19Equals(): void
    {
        $data = ['type' => 'SOC', 'a19' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }
    
    public function testA20Equals(): void
    {
        $data = ['type' => 'SOC', 'a19' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA21Equals(): void
    {
        $data = ['type' => 'SOC', 'a21' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA22Equals(): void
    {
        $data = ['type' => 'SOC', 'a22' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA23Equals(): void
    {
        $data = ['type' => 'SOC', 'a23' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA24Equals(): void
    {
        $data = ['type' => 'SOC', 'a24' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA25Equals(): void
    {
        $data = ['type' => 'SOC', 'a25' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA26Equals(): void
    {
        $data = ['type' => 'SOC', 'a26' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA27Equals(): void
    {
        $data = ['type' => 'SOC', 'a27' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA28Equals(): void
    {
        $data = ['type' => 'SOC', 'a28' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA29Equals(): void
    {
        $data = ['type' => 'SOC', 'a29' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA30Equals(): void
    {
        $data = ['type' => 'SOC', 'a30' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA32Equals(): void
    {
        $data = ['type' => 'SOC', 'a32' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA33Equals(): void
    {
        $data = ['type' => 'SOC', 'a33' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA35Equals(): void
    {
        $data = ['type' => 'SOC', 'a35' => 'test'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testD12Equals(): void
    {
        $data = ['type' => 'SOC', 'd12' => '00/00/0000'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testD14Equals(): void
    {
        $data = ['type' => 'SOC', 'd14' => '00/00/0000'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA14Equals(): void
    {
        $data = ['type' => 'SOC', 'a14' => '00/00/0000'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA15Equals(): void
    {
        $data = ['type' => 'SOC', 'a15' => '00/00/0000'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA16Equals(): void
    {
        $data = ['type' => 'SOC', 'a16' => '00/00/0000'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA17Equals(): void
    {
        $data = ['type' => 'SOC', 'a17' => '00/00/0000'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testA18Equals(): void
    {
        $data = ['type' => 'SOC', 'a18' => '00/00/0000'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testD13Equals(): void
    {
        $data = ['type' => 'SOC', 'd13' => '00/00/0000'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC17_1Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC17' => '1'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC17_2Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC17' => '2'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC17_3Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC17' => '3'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }

    public function testCAC17_4Equals(): void
    {
        $data = ['type' => 'SOC', 'CAC17' => '4'];

        $this->generateTest($data);
        $this->generateFunction($data);

        $base64Result1 = $this->Base64('./pdfGenerated/test.pdf');
        $base64Result2 = $this->Base64('./pdfGenerated/newSOC.pdf');
        
        $this->assertNotEmpty($base64Result1);
        $this->assertNotEmpty($base64Result2);
        $this->assertEquals($base64Result1, $base64Result2);
        
        $this->deleteFiles();
    }
}