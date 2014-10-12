<?php
namespace Landmarx\Bundle\AttributeBundle\Document;

class Value implements \Landmarx\Component\Attribute\Interfaces\ValueInterface
{
    /**
     * Value
     * @var string
     */
    protected $value;
    
    /**
     * Description
     * @var string
     */
    protected $description;
    
    /**
     * @inheritdoc
     */
    public function getValue()
    {
        return $this->value;
    }
    
    /**
     * @inheritdoc
     */
    public function setValue(\Landmarx\Bundle\AttributeBundle\Document\Value $value)
    {
        $this->value = $value;
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
     * @return \Landmarx\Bundle\AttributeBundle\Document\Value
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    /**
     * @inheritdoc
     */
    public function isPublic($public = null)
    {
        if (null == $public) {
            return (boolean) $this->public;
        }
        
        $this->public = (boolean) $public;
        
        return $this;
    }
}
