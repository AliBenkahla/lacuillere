<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;


/**
 * restaurant
 *
 * @ORM\Table(name="restaurant")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\restaurantRepository")
 */
class restaurant
{

    use ORMBehaviors\Sluggable\Sluggable;


    /**
     *
     * @ORM\OneToMany(targetEntity="comment", mappedBy="restaurant", cascade={"persist"})
     */
    protected $comments;

    /**
     * @ORM\OneToMany(targetEntity="photo", mappedBy="restaurant", cascade={"persist"})
     */
    protected $photos;

    public function __construct()
    {
        $this->photos = new ArrayCollection();
        $this->comment = new ArrayCollection();

    }




    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=20, nullable=true)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=20, nullable=true)
     */
    private $city;

    /**
     * @var int
     *
     * @ORM\Column(name="averagePrice", type="integer", length=10, nullable=true)
     */
    private $averagePrice;

    /**
     * @var string
     *
     * @ORM\Column(name="mainFood", type="string", length=20, nullable=true)
     */
    private $mainFood;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNumber", type="string", length=20, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="metroWay", type="string", length=20, nullable=true)
     */
    private $metroWay;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return restaurant
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
     * Set region
     *
     * @param string $region
     *
     * @return restaurant
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return restaurant
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set averagePrice
     *
     * @param integer $averagePrice
     *
     * @return restaurant
     */
    public function setAveragePrice($averagePrice)
    {
        $this->averagePrice = $averagePrice;

        return $this;
    }

    /**
     * Get averagePrice
     *
     * @return integer
     */
    public function getAveragePrice()
    {
        return $this->averagePrice;
    }

    /**
     * Set mainFood
     *
     * @param string $mainFood
     *
     * @return restaurant
     */
    public function setMainFood($mainFood)
    {
        $this->mainFood = $mainFood;

        return $this;
    }

    /**
     * Get mainFood
     *
     * @return string
     */
    public function getMainFood()
    {
        return $this->mainFood;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return restaurant
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set metroWay
     *
     * @param string $metroWay
     *
     * @return restaurant
     */
    public function setMetroWay($metroWay)
    {
        $this->metroWay = $metroWay;

        return $this;
    }

    /**
     * Get metroWay
     *
     * @return string
     */
    public function getMetroWay()
    {
        return $this->metroWay;
    }

    /**
     * Add comment
     *
     * @param comment $comment
     *
     * @return restaurant
     */
    public function addComments(comment $comment = null)
    {

        $this->comments[] = $comment;
       // $comment->setRestaurant($this); // Add this line

        return $this;
    }

    /**
     * Remove comment
     *
     * @param comment $comment
     */
    public function removeComments(comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

    // traits doctrine behaviors
    public function getSluggableFields()
    {
        return [ 'name' ];
    }


    public function generateSlugValue($values)
    {
        return implode('-', $values);
    }

    /**
     * Add photo
     *
     * @param photo $photo
     *
     * @return restaurant
     */
    public function addPhoto(photo $photo = null)
    {
        $this->photos[] = $photo;
     //   $this->photos->add($photo);
        $photo->setRestaurant($this); // Add this line

        return $this;
    }

    /**
     * Remove photo
     *
     * @param photo $photo
     */
    public function removePhoto(photo $photo)
    {
        $this->photos->removeElement($photo);
    }

    /**
     * @return Collection|photo[]
     */
    public function getPhotos()
    {
        return $this->photos;
    }


}
