<?php
namespace Landmarx\Bundle\AttributeBundle\Document;

abstract class ChoiceAttribute extends \Landmarx\Bundle\AttirbuteBundle\Document\COntainerAwareAttribute implements \Landmarx\Component\Attribute\Interfaces\AttributeInterface
{
    /**
     * Options
     * @var \Doctrine\Common\Collections\ArrayCollection 
     */
    protected $options;
    
    /**
     * Value
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $values;
    
    /**
     * Multi-selectable
     * @var boolean
     */
    protected $multi_selectable;
    
    /**
     * Get values
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getValues()
    {
        return $this->values;
    }
    
    /**
     * 
     * @param string value
     * @return \Landmarx\Bundle\AttributeBundle\Document\Value
     */
    public function getValue($value)
    {
        return $this->values->get($value);
    }
    
    /**
     * Set values
     * @param array $values
     * @return \Landmarx\Bundle\AttributeBundle\Document\ChoiceAttribute
     */
    public function setValues(array $values)
    {
        $this->values = $values;
        
        return $this;
    }
    
    /**
     * Add Value
     * @param \Landmarx\Bundle\AttributeBundle\Document\Value $value
     * @return \Landmarx\Bundle\AttributeBundle\Document\ChoiceAttribute
     */
    public function addValue(\Landmarx\Bundle\AttributeBundle\Document\Value $value)
    {
        $this->values->add($value);
        
        return $this;
    }
    
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
}
