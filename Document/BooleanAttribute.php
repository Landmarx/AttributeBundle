<?php
namespace Landmarx\Bundle\AttributeBundle\Document;

class BooleanAttribute extends \Landmarx\Bundle\AttributeBundle\Document\Attribute
{
    /**
     * Get option
     * @return \Landmarx\Bundle\AttributeBundle\Document\Option
     */
    public function getOption()
    {
        return $this->options->filter(array('created_by' => $this->user));
    }
    
    /**
     * Set option
     * @param \Landmarx\Bundle\AttributeBundle\Document\Option $option
     * @return \Landmarx\Bundle\AttributeBundle\Document\InputAttribute
     */
    public function setOption(\Landmarx\Bundle\AttributeBundle\Document\Option $option)
    {
        $this->options = array($option);
        
        return $this;
    }
    
    /**
     * Get value
     * @return type
     */
    public function getValue()
    {
        return (boolean) $this->getOption()->getValue();
    }
    
    /**
     * Set value
     * @param boolean $value
     * @return \Landmarx\Bundle\AttributeBundle\Document\BooleanAttribute
     */
    public function setValue($value)
    {
        $this->getOption()->setValue((boolean) $value);
        
        return $this;
    }
}
