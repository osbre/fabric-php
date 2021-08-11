<?php

namespace Osbre\Fabric\Validators;

use Attribute;
use Exception;
use Spatie\DataTransferObject\Validation\ValidationResult;
use Spatie\DataTransferObject\Validator;

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::IS_REPEATABLE)]
final class PathStructureValidator implements Validator
{
    public function validate(mixed $value): ValidationResult
    {
        foreach ($value as $moveData) {
            try {
                $this->validateMovementData($moveData);
            } catch (Exception $exception) {
                return ValidationResult::invalid($exception->getMessage());
            }
        }

        return ValidationResult::valid();
    }

    /**
     * @param  array  $data
     *  Example of the $data structure
     *  [
     *      "M",
     *      850.3655833333333,
     *      490.1292083333334
     *  ]
     *
     * @return void
     * @throws Exception
     */
    protected function validateMovementData(array $data): void
    {
        // First element is a string that defines one-letter action
        if (!is_string($data[0])) {
            throw new Exception("Movement type should be a string");
        }

        if (strlen($data[0]) !== 1) {
            throw new Exception("Movement type should be one symbol long");
        }

        // Remove first element to keep only integers/floats
        array_shift($data);

        foreach ($data as $coordinate) {
            if (!(is_float($coordinate) || is_int($coordinate))) {
                throw new Exception("Path coordinate should be float or integer");
            }
        }
    }
}
