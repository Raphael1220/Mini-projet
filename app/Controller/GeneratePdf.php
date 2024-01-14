<?php namespace Application\Controller;
use mikehaertl\pdftk\Pdf;

class GeneratePdf
{
    public function generate($data){
        if (@$data[0] === "SOC" || @$data['type'] === "SOC"){
            $this->entrepriseGenerate($data);
        }
        else if(@$data[0] === "IND" || @$data['type'] === "IND") {
            $this->individualGenerate($data);
        }
    }

    // Fonction pour générer le pdf entreprise 
    // avec $data correspondant à la donnée json
    public function entrepriseGenerate($data)
    {
        $pdfEG = new Pdf('./pdf/cerfa_16216_01.pdf');
        $pdfEG->fillForm(
            $data
        )
        ->needAppearances()
        ->saveAs('./pdfGenerated/newSOC.pdf');
    }

    // Fonction pour générer le pdf particulier 
    // avec $data correspondant à la donnée json
    public function individualGenerate($data)
    {
        $pdfIG = new Pdf('./pdf/cerfa_11580_05.pdf');
        $resultIG = $pdfIG->fillForm(
            $data
        )
        ->needAppearances()
        ->saveAs('./pdfGenerated/newIND.pdf');
    }
}