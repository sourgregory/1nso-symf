<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="static", indexes={@ORM\Index(name="IDX_80C02825727ACA70", columns={"parent_id"})})
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"page" = "Page", "category" = "Category", "article" = "Article"})
 *
 */

abstract class Statics
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="show_in_menu", type="boolean", nullable=false)
     */
    private $showInMenu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_published", type="boolean", nullable=false)
     */
    private $isPublished;

    /**
     * @var integer
     *
     * @ORM\Column(name="sort_weight", type="integer", nullable=false)
     */
    private $sortWeight;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="NOW()"})
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="static_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Statics
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Statics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\StaticContent", mappedBy="static")
     */
    private $content;

    /**
     * Set showInMenu
     *
     * @param boolean $showInMenu
     *
     * @return Statics
     */
    public function setShowInMenu($showInMenu)
    {
        $this->showInMenu = $showInMenu;

        return $this;
    }

    /**
     * Get showInMenu
     *
     * @return boolean
     */
    public function getShowInMenu()
    {
        return $this->showInMenu;
    }

    /**
     * Set isPublished
     *
     * @param boolean $isPublished
     *
     * @return Statics
     */
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    /**
     * Get isPublished
     *
     * @return boolean
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Statics
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set sortWeight
     *
     * @param integer $sortWeight
     *
     * @return Statics
     */
    public function setSortWeight($sortWeight)
    {
        $this->sortWeight = $sortWeight;

        return $this;
    }

    /**
     * Get sortWeight
     *
     * @return integer
     */
    public function getSortWeight()
    {
        return $this->sortWeight;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Statics
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Statics
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return Statics
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
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
     * Set parent
     *
     * @param \AppBundle\Entity\Statics $parent
     *
     * @return Statics
     */
    public function setParent(Statics $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \AppBundle\Entity\Statics
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set parent
     *
     * @param array $content
     * @return Statics
     *
     */
    public function setContent(array $content = null)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Get parent
     *
     * @return \AppBundle\Entity\StaticContent
     */
    public function getContent()
    {
        return $this->content;
    }


}
