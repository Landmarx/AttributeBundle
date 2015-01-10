<?php
namespace Landmarx\Bundle\AttributeBundle\Model;

class Attribute
{
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
     * Gropus
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $groups;
    
    /**
     * Visibility
     * @var boolean
     */
    protected $visibility;
    
    /**
     *Slug
     * @var string
     */
    protected $slug;
    
    /**
     * Created at
     * @var \Datetime
     */
    protected $createdAt;
    
    /**
     * Updated at
     * @var \Datetime
     */
    protected $updatedAt;
    
    /**
     * Created by
     * @var \Landmarx\Bundle\UserBundle\Model\User
     */
    protected $createdBy;
    
    /**
     * Updated by
     * @var \Landmarx\Bundle\UserBundle\Model\User
     */
    protected $updatedBy;
    
    /**
     * Construct
     */
    public function __construct()
    {
        $this->options = new \Doctrine\Common\Collections\ArrayCollection();
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get name
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * @return \Landmarx\Bundle\AttributeBundle\Model\Attribute
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    /**
     * Get options
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getOptions()
    {
        return $this->options;
    }
    
    /**
     * Get option
     * @param string $option
     * @return \Landmarx\Bundle\AttributeBundle\Model\Option
     */
    public function getOption($option)
    {
        return $this->options->get($option);
    }
    
    /**
     * Has option
     * @param string $option
     * @return boolean
     */
    public function hasOption($option)
    {
        return $this->options->contains($option);
    }
    
    /**
     * Get gropus
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getGroups()
    {
        return $this->groups;
    }
    
    /**
     * Get group
     * @param string $group
     * @return \Landmarx\Bundle\AttributeBundle\Model\Group
     */
    public function getGroup($group)
    {
        return $this->groups->get($group);
    }
    
    /**
     * Has groups
     * @param string $group
     * @return boolean
     */
    public function hasGroup($group)
    {
        return $this->groups->contains($group);
    }
    
    /**
     * Get created at
     * @return \Datetime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    /**
     * Get updated at
     * @return \Datetime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    
    /**
     * Get created by
     * @return \Landmarx\Bundle\UserBundle\Model\User
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
    
    /**
     * Get updated by
     * @return \Landmarx\Bundle\UserBundle\Model\User
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
    
    /**
     * Get slug
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
    
    /**
     * Get visibility
     * @return boolean
     */
    public function getVisibility()
    {
        return (boolean) $this->visibility;
    }
    
    /**
     * Is visible
     * @param boolean|null $visible
     * @return \Landmarx\Bundle\AttributeBundle\Model\Attribute|boolean
     */
    public function isVisible($visible = null)
    {
        if (null !== $visible) {
            if (is_bool($visible)) {
                $this->visibility = $visible;
            }
            return $this;
        }
        
        return (boolean) $this->visibility;
    }
    
    /**
     * Set name
     * @param string $name
     * @return \Landmarx\Bundle\AttributeBundle\Model\Attribute
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * Set description
     * @param string $description
     * @return \Landmarx\Bundle\AttributeBundle\Model\Attribute
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    /**
     * Set options
     * @param array $options
     * @return \Landmarx\Bundle\AttributeBundle\Model\Attribute
     */
    public function setOptions(array $options)
    {
        $this->options = new \Doctrine\Common\Collections\ArrayCollection($options);
        
        return $this;
    }
    
    /**
     * Add option
     * @param \Landmarx\Bundle\AttributeBundle\Model\Option $option
     * @return \Landmarx\Bundle\AttributeBundle\Model\Attribute
     */
    public function addOption(\Landmarx\Bundle\AttributeBundle\Model\Option $option)
    {
        $this->options->add($option);
        
        return $this;
    }
    
    /**
     * Set groups
     * @param array $groups
     * @return \Landmarx\Bundle\AttributeBundle\Model\Attribute
     */
    public function setGroups(array $groups)
    {
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection($groups);
        
        return $this;
    }
    
    /**
     * Add group
     * @param \Landmarx\Bundle\AttributeBundle\Model\Group $group
     * @return \Landmarx\Bundle\AttributeBundle\Model\Attribute
     */
    public function addGroup(\Landmarx\Bundle\AttributeBundle\Model\Group $group)
    {
        $this->groups->add($group);
        
        return $this;
    }
    
    /**
     * Set slug
     * @param string $slug
     * @return \Landmarx\Bundle\AttributeBundle\Model\Attribute
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        
        return $this;
    }
    
    /**
     * Set created at
     * @param \Datetime $createdAt
     * @return \Landmarx\Bundle\AttributeBundle\Model\Attribute
     */
    public function setCreatedAt(\Datetime $createdAt)
    {
        $this->createdAt = $createdAt;
        
        return $this;
    }
    
    /**
     * Set updated at
     * @param \Datetime $updatedAt
     * @return \Landmarx\Bundle\AttributeBundle\Model\Attribute
     */
    public function setUpdatedAt(\Datetime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
        
        return $this;
    }
    
    /**
     * Set created by
     * @param \Landmarx\Bundle\UserBundle\Model\User $user
     * @return \Landmarx\Bundle\AttributeBundle\Model\Attribute
     */
    public function setCreatedBy(\Landmarx\Bundle\UserBundle\Model\User $user)
    {
        $this->createdBy = $user;
        
        return $this;
    }
    
    /**
     * Set updated by
     * @param \Landmarx\Bundle\UserBundle\Model\User $user
     * @return \Landmarx\Bundle\AttributeBundle\Model\Attribute
     */
    public function setUpdatedBy(\Landmarx\Bundle\UserBundle\Model\User $user)
    {
        $this->updatedBy = $user;
        
        return $this;
    }
    
    public function setVisibility(boolean $visible)
    {
        $this->visibility = $visible;
        
        return $this;
    }
}
