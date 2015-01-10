<?php
namespace Landmarx\Bundle\AttributeBundle\Document;

class InputAttribute extends ContainerAwareAttribute
{
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
     * Construct
     */
    public function __construct()
    {
        $this->isEditable(true);
        parent::construct();
    }
}
