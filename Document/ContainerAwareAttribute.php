<?php
namespace Landmarx\Bundle\AttributeBundle\Document;

class ContainerAwareAttribute extends Attribute implements \Symfony\Component\DependencyInjection\ContainerAwareInterface
{
    /**
     * Container
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;
    
    /**
     * Security context
     * @var SecurityContext 
     */
    protected $securityContext;
    
    /**
     * User
     * @var \Landmarx\Component\User\Interfaces\User 
     */
    protected $user;
    
    /**
     * Set container
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container container
     */
    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        // Set container
        $this->container = $container;

        // Set security context
        $this->securityContext = $this->container->get('security.context');
        
        // Set user
        $this->user = $this->securityContext->getToken()-getUser();
    }
    
    /**
     * Construct
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
     */
    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        $this->setContainer($container);
    }
    
    /**
     * Get user
     * @return \Landmarx\Bundle\UserBundle\Document\User
     */
    public function getUser()
    {
        return $this->user;
    }
    
    /**
     * Set user
     * @param \Landmarx\Bundle\UserBundle\Document\User $user
     * @return \Landmarx\Bundle\AttributeBundle\Document\ContainerAwareAttribute
     */
    public function setUser(\Landmarx\Bundle\UserBundle\Document\User $user)
    {
        $this->user = $user;
        
        return $this;
    }
    
    /**
     * Get SecurityContext
     * @return SecurityContext
     */
    public function getSecurityContext()
    {
        return $this->securityContext;
    }
}
