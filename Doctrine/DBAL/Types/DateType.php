<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Doctrine\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\ConversionException;

/**
 * Class DateType
 * @package UniceSIL\SyllabusApogeeImporterBundle\Doctrine\DBAL\Types
 */
class DateType extends \Doctrine\DBAL\Types\DateType
{
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        if ($value === null || $value instanceof \DateTime) {
            return $value;
        }

        $val = \DateTime::createFromFormat('d/m/Y', $value);
        if ( ! $val instanceof \DateTime) {
            throw ConversionException::conversionFailed($value, $this->getName());
        }

        return $val;
    }
}