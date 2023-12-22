<?php namespace Application\Controller;

class ValidatePdf
{
    function validate($model, $client)
    {
        $FILLED = [];
        foreach($model as $field => $rules)
        {
            $value = @$client[$field];
            if ($rules['mandatory'] === true && !$value) return "missing field '$field'";
            if (is_array($rules['mandatory'])) {
                foreach ($rules['mandatory'] as $subfield => $subvalues) {
                    foreach ($subvalues as $subvalue) {
                        if (!isset($value) && $subvalue === $client[$subfield]) return "missing field '$field'";
                    }
                }
            }
            if (isset($value)) {
                if ($rules['type'] === 'date' && !isValidDate($value)) {
                    return "incompatible date format for field '$field'";
                }
                if ($rules['type'] !== 'date' && gettype($value) !== $rules['type']) {
                    return "incompatible type for field '$field'";
                }
                if (isset($rules['dependency'])) {
                    $dependency = $rules['dependency']['field'];
                    foreach ($rules['dependency']['values'][$client[$dependency]] as $subfield => $subvalue) {
                        if ($rules['type'] === 'date') {
                            $FILLED[$subfield] = DateTime::createFromFormat('Y-m-d', $value)->format($subvalue);
                        } else {
                            $FILLED[$subfield] = $subvalue;
                        }
                    }
                } else {
                    $FILLED[$rules['field']] = $value;
                }
            }
        }
        return $FILLED;
    }
}

