<?php

namespace Yoda\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Serializable;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 *
 * @ORM\Table(name="yoda_user")
 * @ORM\Entity(repositoryClass="Yoda\UserBundle\Entity\UserRepository")
 * @UniqueEntity(fields="email", message="That email is taken!")
 * @UniqueEntity(fields="username", message="That username is taken!")
 * 
 */
class User implements AdvancedUserInterface, Serializable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

      /**
     * @Assert\NotBlank(message="Put in a username you rebel scum!")
     * @Assert\Length(min="3", minMessage="Give us at least 3 characters")
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;
    
    
    /**
     *
     * @var array
     * 
     * @ORM\Column(name="roles", type="json_array")
     */
    private $roles = array();

    
      /**
     *
     * @ORM\OneToMany(targetEntity="Yoda\EventBundle\Entity\Event",
     * mappedBy="owner")
     */
    private $events;
    
    public function __construct() {
        $this->events = new ArrayCollection();
    }
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;
    
    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Email
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;
    
    /**
     *
     * @var boolean
     * 
     * @ORM\column(name="is_active", type="boolean")
     */
    private $isActive = true;

    /**
     * @Assert\NotBlank()
     * @Assert\Regex(
     *              pattern="/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/",
     *              message="Use 1 upper case letter, 1 lower case letter, and 1 number")
     * @var string
     */
    private $plainPassword;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function eraseCredentials() {
        $this->setPlainPassword(null);
    }

    public function setRoles(array $roles) {
     $this->roles = $roles;   
     
     return $this;
    }
    
    public function getRoles() {
     $roles = $this->roles; 
     $roles[] = 'ROLE_USER';
     
     return array_unique($roles);
    }

    public function getSalt() {
        return null;
    }
    
     /**
     * 
     * @param boolean $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    
    public function isAccountNonExpired()
    {
        return true;
    }
    
    public function isAccountNonLocked()
    {
        return true;
    }
    
    public function isCredentialsNonExpired()
    {
        return true;
    }
    
    public function isEnabled()
    {
        return $this->getIsActive();
    }



    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
        ));
    }

    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
        ) = unserialize($serialized);
    }
    
    /**
     *
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;

         $this->setPassword(null);
         
         return $this;
    }

    
    /**
     *
     * @return mixed 
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }
    
    /**
     *
     * @return mixed 
     */
    public function getEvents()
    {
        return $this->events;
    }
    
    public function __toString()
    {
    return (string) $this->getUsername();
    }
    
  }
