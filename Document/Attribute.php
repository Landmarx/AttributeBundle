<?php
namespace Landmarx\Bundle\AttributeBundle\Document;

class Attribute implements \Landmarx\Component\Attribute\Interfaces\AttributeInterface
{
    use \Landmarx\Bundle\CoreBundle\Traits\ToggleVisibilityTrait;
    use \Landmarx\Bundle\CoreBundle\Traits\TimestampableTrait;
    use \Landmarx\Bundle\CoreBundle\Traits\SluggableTrait;
    
    /**
     * Name
     * @var string
     */
    protected $name;
    
    /**
     * Description
     * @var string
     */
    protected $description;
    
    /**
     * Options
     * @var \Doctrine\Common\Collections\ArrayCollection 
     */
    protected $options;
    
    /**
     * Groups
     * @var \Doctrine\Common\Collections\ArrayCollection 
     */
    protected $groups;
    
    /**
     * @inheritdocs
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @inheritdocs
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @inheritdocs
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * @inheritdocs
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    /**
     * @inheritdocs
     */
    public function getOptions()
    {
        return $this->options;
    }
    
    /**
     * @inheritdocs
     */
    public function getOption($option)
    {
        return $this->options->get($option);
    }
    
    /**
     * @inheritdocs
     */
    public function hasOptions()
    {
        return (boolean)count($this->options);
    }
    
    /**
     * @inheritdocs
     */
    public function hasOption($option)
    {
        return (boolean) $this->options->get($option);
    }
    
    /**
     * @inheritdocs
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
        
        return $this;
    }
    
    /**
     * @inheritdocs
     */
    public function addOption(\Landmarx\Bundle\AttributeBundle\Document\Option $option)
    {
        $this->options->add($option);
        
        return $this;
    }
    
    /**
     * @inheritdocs
     */
    public function getGroups()
    {
        return $this->groups;
    }
    
    /**
     * @inheritdocs
     */
    public function getGroup($group)
    {
        return $this->groups->get($group);
    }
    
    /**
     * @inheritdocs
     */
    public function hasGroups()
    {
        return (boolean)count($this->groups);
    }
    
    /**
     * @inheritdocs
     */
    public function hasGroup($group)
    {
        return (boolean) $this->groups->get($group);
    }
    
    /**
     * @inheritdocs
     */
    public function setGroups(array $groups)
    {
        $this->groups = $groups;
        
        return $this;
    }
    
    /**
     * @inheritdocs
     */
    public function addGroup(\Landmarx\Bundle\AttributeBundle\Document\Group $group)
    {
        $this->groups->add($group);
        
        return $this;
    }
}
