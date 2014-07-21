<?php

namespace Netgen\LiveVotingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 */
class Event
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $stateName;

    /**
     * @var string
     */
    private $stateValue = null;


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
     * Set stateName
     *
     * @param string $stateName
     * @return Event
     */
    public function setStateName($stateName)
    {
        $this->stateName = $stateName;

        return $this;
    }

    /**
     * Get stateName
     *
     * @return string 
     */
    public function getStateName()
    {
        return $this->stateName;
    }

    /**
     * Set stateValue
     *
     * @param string $stateValue
     * @return Event
     */
    public function setStateValue($stateValue)
    {
        $this->stateValue = $stateValue;

        return $this;
    }

    /**
     * Get stateValue
     *
     * @return string 
     */
    public function getStateValue()
    {
        return $this->stateValue;
    }

    public function __toString()
    {
        return $this->getName();
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $presentations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->presentations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add presentations
     *
     * @param \Netgen\LiveVotingBundle\Entity\Presentation $presentations
     * @return Event
     */
    public function addPresentation(\Netgen\LiveVotingBundle\Entity\Presentation $presentations)
    {
        $this->presentations[] = $presentations;

        return $this;
    }

    /**
     * Remove presentations
     *
     * @param \Netgen\LiveVotingBundle\Entity\Presentation $presentations
     */
    public function removePresentation(\Netgen\LiveVotingBundle\Entity\Presentation $presentations)
    {
        $this->presentations->removeElement($presentations);
    }

    /**
     * Get presentations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPresentations()
    {
        return $this->presentations;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $presentation;


    /**
     * Get presentation
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPresentation()
    {
        return $this->presentation;
    }
}
