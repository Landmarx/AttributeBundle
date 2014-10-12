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
}
