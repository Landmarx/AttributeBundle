<?php
namespace Landmarx\Bundle\AttributeBundle\Document;

abstract class ChoiceAttribute extends \Landmarx\Bundle\AttirbuteBundle\Document\COntainerAwareAttribute implements \Landmarx\Component\Attribute\Interfaces\AttributeInterface
{
    /**
     * Multi-selectable
     * @var boolean
     */
    protected $multi_selectable;
        
    /**
     * Is multi-selectable
     * @param boolean|null $multiselect
     * @return \Landmarx\Bundle\AttributeBundle\Document\ChoiceAttribute|boolean
     */
    public function isMultiSelectable($multiselect = null)
    {
        if (null == $multiselect) {
            return (boolean) $this->multi_selectable;
        }
        
        $this->multi_selectable = (boolean) $multiselect;
        
        return $this;
    }
    
    /**
     * Construct
     */
    public function __construct()
    {
        $this->isMultiSelectable(false);
    }
}
