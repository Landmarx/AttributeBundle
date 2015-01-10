<?php
namespace Landmarx\Bundle\AttributeBundle\Model;

class Option
{
    /**
     * Name
     * @var string
     */
    protected $name;
    
    /**
     * Descripton
     * @var string
     */
    protected $description;
    
    /**
     * Values
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $values;
    
    /**
     * Default value
     * @var \Landmarx\Bundle\AttributeBundle\Document\Value 
     */
    protected $value;
    
    /**
     * Attributes
     * @var 
     * Doctrine\Common\Collections\ArrayColelction
     */
    protected $attributes;
    
    /**
     * Get name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set name
     * @param string $name
     * @return \Landmarx\Bundle\AttributeBundle\Document\Option
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * Get description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Set description
     * @param string $description
     * @return \Landmarx\Bundle\AttributeBundle\Document\Option
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    /**
     * Get values
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getValues()
    {
        return $this->values;
    }
    
    /**
     * Get value
     * @param string $value
     * @return \Landmarx\Bundle\AttributeBundle\Document\Option
     */
    public function getValue($value = null)
    {
        if (null == $value) {
            return $this->getDefaultValue();
        }
        
        return $this->values->get($value);
    }
    
    /**
     * Get default value
     * @return type
     */
    public function getDefaultValue()
    {
        return $this->value;
    }
    
    public function setDefaultValue($value)
    {
        if (in_array($value, $this->values)) {
            $this->value = $value;
            
            return $this;
        }
        
        return false;
    }
}
