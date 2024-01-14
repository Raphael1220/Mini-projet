<?php namespace Application\Controller;

use DateTime;

class ValidatePdf
{
    private static string $TYPE_INDIVIDUAL = "IND";
    private static string $TYPE_SOCIETY = "SOC";
    private static string $PATH;
    private static string $DATE_FORMAT = "Y-m-d";
    private array $data;
    private string $type;

    public function __construct(string $jsonClient)
    {
        self::$PATH = __DIR__."/../../pdf/";
        $parsed_jsonClient = json_decode($jsonClient, true);

        if (is_array($parsed_jsonClient) && array_key_exists("type", $parsed_jsonClient)) {
            $type = $parsed_jsonClient["type"];
            $this->type = $type;
        }
        $this->data = $parsed_jsonClient;
    }

    public static function allTypes(): array
    {
    	return [
    		self::$TYPE_INDIVIDUAL => self::$PATH . 'cerfa_11580_05.pdf',
    		self::$TYPE_SOCIETY => self::$PATH . 'cerfa_16216_01.pdf',
    	];
    }

    public static function isValidDate($dateString) {
        $dateTime = DateTime::createFromFormat('Y-m-d', $dateString);
        return $dateTime && $dateTime->format('Y-m-d') === $dateString;
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
            $value = @$this->data[$field];
            $mandatory = isset($rules['mandatory']) && $rules['mandatory'] === true && !$value;
            if ($field == 'organismType') {
                // Logger::getInstance()->info($value);
                // Logger::getInstance()->info($rules['dependency']['field']);
                // Logger::getInstance()->info($this->data[$rules['dependency']['field']]);
                // Logger::getInstance()->info(array_keys($rules['dependency']['values']));
            }
            
            $dependency = isset($rules['dependency']) && (in_array($this->data[$rules['dependency']['field']], array_keys($rules['dependency']['values'])) && !$value);
            if ($mandatory || $dependency) {
                throw new \Exception("missing field '$field'");
            }
            if (isset($value)) {
                if ($rules['type'] === 'date' && !ValidatePdf::isValidDate($value)) {
                    throw new \Exception("incompatible date format for field '$field'");
                }
                // echo gettype($value);
                if ($rules['type'] !== 'date' && gettype($value) !== $rules['type']) {
                    // Logger::getInstance()->info(gettype($value));
                    // Logger::getInstance()->info($value);
                    throw new \Exception("incompatible type for field '$field'");
                }
                if (isset($rules['dependency'])) {
                    $dependency = $rules['dependency']['field'];
                    if (isset($rules['dependency']['values'][$this->data[$dependency]]))
                        foreach ($rules['dependency']['values'][$this->data[$dependency]] as $subfield => $subvalue) {
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
            // print_r($result);
        }
        return $result;
    }
}

