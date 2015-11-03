<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Language;
use Doctrine\ORM\Mapping as ORM;

/**
 * Config
 *
 * @ORM\Table(name="config", indexes={
 *      @ORM\Index(name="IDX_D48A2F7CC6E53F91", columns={"index_page_id"}),
 *      @ORM\Index(name="IDX_D48A2F7CF9A46EE1", columns={"default_lang_id"})
 * })
 * @ORM\Entity
 */
class Config
{
    /**
     * @var integer
     *
     * @ORM\Column(name="index_articles_quantity", type="integer", nullable=false)
     */
    private $indexArticlesQuantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="config_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var Language
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Language")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_lang_id", referencedColumnName="id")
     * })
     */
    private $defaultLang;

    /**
     * @var \AppBundle\Entity\Statics
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Statics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="index_page_id", referencedColumnName="id")
     * })
     */
    private $indexPage;



    /**
     * Set indexArticlesQuantity
     *
     * @param integer $indexArticlesQuantity
     *
     * @return Config
     */
    public function setIndexArticlesQuantity($indexArticlesQuantity)
    {
        $this->indexArticlesQuantity = $indexArticlesQuantity;

        return $this;
    }

    /**
     * Get indexArticlesQuantity
     *
     * @return integer
     */
    public function getIndexArticlesQuantity()
    {
        return $this->indexArticlesQuantity;
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
     * Set defaultLang
     *
     * @param Language $defaultLang
     *
     * @return Config
     */
    public function setDefaultLang(Language $defaultLang = null)
    {
        $this->defaultLang = $defaultLang;

        return $this;
    }

    /**
     * Get defaultLang
     *
     * @return Language
     */
    public function getDefaultLang()
    {
        return $this->defaultLang;
    }

    /**
     * Set indexPage
     *
     * @param \AppBundle\Entity\Statics $indexPage
     *
     * @return Config
     */
    public function setIndexPage(\AppBundle\Entity\Statics $indexPage = null)
    {
        $this->indexPage = $indexPage;

        return $this;
    }

    /**
     * Get indexPage
     *
     * @return \AppBundle\Entity\Statics
     */
    public function getIndexPage()
    {
        return $this->indexPage;
    }
}
