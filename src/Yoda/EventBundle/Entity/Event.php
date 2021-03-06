<?php

namespace Yoda\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Yoda\UserBundle\Entity\User;
use Gedmo\Mapping\Annotation as Gedmo;    
use Doctrine\Common\Collections\ArrayCollection;
 

 

/**
 * Event
 *
 * @ORM\Table(name="yoda_event")
 * @ORM\Entity(repositoryClass="Yoda\EventBundle\Entity\EventRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Event
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime")
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;
    
    /**
     * @ORM\ManyToOne(
     *       targetEntity="Yoda\UserBundle\Entity\User",
     *       inversedBy="events"
     * )
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="text", nullable=true)
     */
    private $details;
  
     /**
     * @ORM\Column(name="slug", unique=true)
     * @Gedmo\Slug(fields={"name"}, updatable=false)
     */
    private $slug;
    
        /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;
    
    
    /**
     * @ORM\ManyToMany(targetEntity="Yoda\UserBundle\Entity\User")
     * @ORM\JoinTable(
     *      joinColumns={@ORM\JoinColumn(onDelete="CASCADE")},
     *      inverseJoinColumns={@ORM\JoinColumn(onDelete="CASCADE")}
     * )
     */
    protected $attendees;

    /**
     * @ORM\ManyToMany(targetEntity="Yoda\UserBundle\Entity\User")
     * @ORM\JoinTable(
     *      joinColumns={@ORM\JoinColumn(onDelete="CASCADE")},
     *      inverseJoinColumns={@ORM\JoinColumn(onDelete="CASCADE")}
     * )
     */
    protected $suppliers;
 
    public function __construct()
    {
        $this->attendees = new ArrayCollection();
        $this->suppliers = new ArrayCollection();
    }
    
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
     * Set name
     *
     * @param string $name
     * @return Event
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     * @return Event
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Event
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set details
     *
     * @param string $details
     * @return Event
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }
    
        /**
     *  
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     *  
     *
     * @return User 
     */
    public function getOwner()
    {
        return $this->owner;
    }
    
      /**
     *  
     *
     * @param User $owner
     */
    public function setOwner(User $owner)
    {
        $this->owner = $owner;

        return $this;
    }
    
     /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    
    
    /**
     * @return mixed 
     */
    public function getSlug()
    {
        return $this->slug;
    }
    
        /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    
    
   public function getAttendees()
    {
       return $this->attendees;
    }
    
    public function hasAttendee(User $user)
    {
        return $this->getAttendees()->contains($user);
    }

    public function getSuppliers()
    {
        return $this->suppliers;
    }

    public function hasSupplier(User $user)
    {
        return $this->getSuppliers()->contains($user);
    }
    
    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        if(!$this->getCreatedAt())
        {
            $this->createdAt = new \DateTime();
        }
    }
 
    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Event
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Event
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Add attendee
     *
     * @param \Yoda\UserBundle\Entity\User $attendee
     *
     * @return Event
     */
    public function addAttendee(\Yoda\UserBundle\Entity\User $attendee)
    {
        $this->attendees[] = $attendee;

        return $this;
    }

    /**
     * Remove attendee
     *
     * @param \Yoda\UserBundle\Entity\User $attendee
     */
    public function removeAttendee(\Yoda\UserBundle\Entity\User $attendee)
    {
        $this->attendees->removeElement($attendee);
    }

    /**
     * Add Supplier
     *
     * @param \Yoda\UserBundle\Entity\User $supplier
     *
     * @return Event
     */
    public function addSupplier(\Yoda\UserBundle\Entity\User $supplier)
    {
        $this->suppliers[] = $supplier;

        return $this;
    }

    /**
     * Remove supplier
     *
     * @param \Yoda\UserBundle\Entity\User $supplier
     */
    public function removeSupplier(\Yoda\UserBundle\Entity\User $supplier)
    {
        $this->suppliers->removeElement($supplier);
    }
}
