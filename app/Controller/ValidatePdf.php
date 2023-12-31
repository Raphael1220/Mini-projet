<?php namespace Application\Controller;

class ValidatePdf
{
    private string $TYPE_INDIVIDUAL = "IND";
    private string $TYPE_SOCIETY = "SOC";
    private string $PATH = __DIR__."/../../pdf/";

    public function type(){
        $this->type=$type;
    }

    public function __construct(string $jsonClient)
    {
    	$parsed_jsonClient = json_decode($jsonClient, true);
        $this->data = $parsed_jsonClient;
    }

    public static function allTypes(): array
    {
    	return [
    		self::$TYPE_INDIVIDUAL => self::$PATH . 'cerfa_11580_05.pdf',
    		self::$TYPE_SOCIETY => self::$PATH . 'cerfa_16216_01.pdf',
    	];
    }

    public function validate()
    {
        if (!in_array($this->type, array_keys(self::allTypes()))) {
            throw new \Exception("incompatible type for field 'type'");
        }
        $result = [];
        $model = json_decode(file_get_contents(self::$PATH ."model_". $this->type .'.json'), true);
        foreach($model as $field => $rules)
        {
            $value = $this->{$field};
            $mandatory = isset($rules['mandatory']) && $rules['mandatory'] === true && !$value;
            $dependency = isset($rules['dependency']) && (in_array($client[$rules['dependency']['field']], array_keys($rules['dependency']['values'])) && !$value);
            if ($mandatory || $dependency) {
                throw new \Exception("missing field '$field'");
            }
            if (isset($value)) {
                if ($rules['type'] === 'date' && !isValidDate($value)) {
                    throw new \Exception("incompatible date format for field '$field'");
                }
                if ($rules['type'] !== 'date' && gettype($value) !== $rules['type']) {
                    throw new \Exception("incompatible type for field '$field'");
                }
                if (isset($rules['dependency'])) {
                    $dependency = $rules['dependency']['field'];
                    if (isset($rules['dependency']['values'][$client[$dependency]]))
                        foreach ($rules['dependency']['values'][$client[$dependency]] as $subfield => $subvalue) {
                            if ($rules['type'] === 'date') {
                                $result[$subfield] = DateTime::createFromFormat(self::$DATE_FORMAT, $value)->format($subvalue);
                            } else {
                                $result[$subfield] = $subvalue;
                            }
                        }
                } else {
                    $result[$rules['field']] = $value;
                }
            }
        }
        return $result;
    }
}

