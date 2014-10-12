<?php
namespace Landmarx\Bundle\AttributeBundle\Document;

class BameableValue extends Value implements \Landmarx\Component\Attribute\Interfaces\ValueInterface
{
    use \Landmarx\Bundle\CoreBundle\Traits\BlameableTrait;
}
