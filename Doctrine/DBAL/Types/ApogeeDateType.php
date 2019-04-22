<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Doctrine\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\ConversionException;
use Doctrine\DBAL\Types\DateType;

/**
 * Class ApogeeDateType
 * @package UniceSIL\SyllabusApogeeImporterBundle\Doctrine\DBAL\Types
 */
class ApogeeDateType extends DateType
{

    /**
     * @param mixed $value
     * @param AbstractPlatform $platform
     * @return mixed|string
     * @throws ConversionException
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if ($value === null) {
            return $value;
        }

        if ($value instanceof \DateTimeInterface) {
            return $value->format('d/m/Y');
        }

        throw ConversionException::conversionFailedInvalidType($value, $this->getName(), ['null', 'DateTime']);
    }

    /**
     * @param mixed $value
     * @param AbstractPlatform $platform
     * @return bool|\DateTime|mixed
     * @throws ConversionException
     */
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