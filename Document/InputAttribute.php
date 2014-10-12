<?php
namespace Landmarx\Bundle\AttributeBundle\Document;

abstract class InputAttribute extends ContainerAwareAttribute implements \Landmarx\Component\Attribute\Interfaces\AttributeInterface
{
    use \Landmarx\Bundle\CoreBundle\Traits\BlameableTrait;
    
    /**
     * Editable
     * @var boolean 
     */
    protected $editable;
    
    /**
     * Is editable
     * @param boolean|null $editable
     * @return \Landmarx\Bundle\AttributeBundle\Document\InputAttribute|boolean
     */
    public function isEditable($editable = null)
    {
        if (null != $editable) {
            $this->editable = (boolean) $editable;
            
            return $this;
        }
        
        return (boolean) $this->editable;
    }
    
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
     * Construct
     */
    public function __construct()
    {
        $this->isEditable(true);
    }
}
