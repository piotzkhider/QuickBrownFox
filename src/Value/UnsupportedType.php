<?php
namespace Lapaz\QuickBrownFox\Value;

use Lapaz\QuickBrownFox\Exception\UnsupportedTypeException;

class UnsupportedType extends AbstractRandomValue
{
    /**
     * @inheritdoc
     */
    public function getAt($index)
    {
        throw new UnsupportedTypeException("Unsupported type: " . $this->column->getType()->getName());
    }
}
