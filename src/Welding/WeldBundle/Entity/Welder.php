<?php
namespace Welding\WeldBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity(repositoryClass="WelderRepository")
 * @ORM\Table(name="welder")
 */
class Welder
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * ID weld
     * @ORM\ManyToOne(targetEntity="Welding\WeldBundle\Entity\Weld", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weld_id", referencedColumnName="id")})
     */
    protected $weldId;

    /**
     * ID material
     * @ORM\ManyToOne(targetEntity="Welding\WeldBundle\Entity\Material", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="material_id", referencedColumnName="id")})
     */
    protected $materialId;

    /**
     * ID depth
     * @ORM\ManyToOne(targetEntity="Welding\WeldBundle\Entity\Depth", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="depth_id", referencedColumnName="id")})
     */
    protected $depthId;

    /**
     * ID nozzle
     * @ORM\ManyToOne(targetEntity="Welding\WeldBundle\Entity\Nozzle", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nozzle_id", referencedColumnName="id")})
     */
    protected $nozzleId;

    /**
     * ID wolfram
     * @ORM\ManyToOne(targetEntity="Welding\WeldBundle\Entity\Wolfram", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="wolfram_id", referencedColumnName="id")})
     */
    protected $wolframId;

    /**
     * ID gas
     * @ORM\ManyToOne(targetEntity="Welding\WeldBundle\Entity\Gas", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gas_id", referencedColumnName="id")})
     */
    protected $gasId;

    /**
     * ID current
     * @ORM\ManyToOne(targetEntity="Welding\WeldBundle\Entity\Current", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="current_id", referencedColumnName="id")})
     */
    protected $currentId;

    /**
     * ID advice
     * @ORM\ManyToOne(targetEntity="Welding\WeldBundle\Entity\Advice", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="advice_id", referencedColumnName="id")})
     */
    protected $adviceId;

    /**
     * ID additive
     * @ORM\ManyToOne(targetEntity="Welding\WeldBundle\Entity\Additive", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="additive_id", referencedColumnName="id")})
     */
    protected $additiveId;



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
     * Set weldId
     *
     * @param integer $weldId
     * @return Welder
     */
    public function setWeldId($weldId)
    {
        $this->weldId = $weldId;

        return $this;
    }

    /**
     * Get weldId
     *
     * @return integer
     */
    public function getWeldId()
    {
        return $this->weldId;
    }

    /**
     * Set materialId
     *
     * @param integer $materialId
     * @return Welder
     */
    public function setMaterialId($materialId)
    {
        $this->materialId = $materialId;

        return $this;
    }

    /**
     * Get materialId
     *
     * @return integer
     */
    public function getMaterialId()
    {
        return $this->materialId;
    }

    /**
     * Set depthId
     *
     * @param integer $depthId
     * @return Welder
     */
    public function setDepthId($depthId)
    {
        $this->depthId = $depthId;

        return $this;
    }

    /**
     * Get depthId
     *
     * @return integer
     */
    public function getDepthId()
    {
        return $this->depthId;
    }

    /**
     * Set nozzleId
     *
     * @param integer $nozzleId
     * @return Welder
     */
    public function setNozzleId($nozzleId)
    {
        $this->nozzleId = $nozzleId;

        return $this;
    }

    /**
     * Get nozzleId
     *
     * @return integer
     */
    public function getNozzleId()
    {
        return $this->nozzleId;
    }

    /**
     * Set wolframId
     *
     * @param integer $wolframId
     * @return Welder
     */
    public function setWolframId($wolframId)
    {
        $this->wolframId = $wolframId;

        return $this;
    }

    /**
     * Get nozzleId
     *
     * @return integer
     */
    public function getWolframId()
    {
        return $this->wolframId;
    }

    /**
     * Set gasId
     *
     * @param integer $gasId
     * @return Welder
     */
    public function setGasId($gasId)
    {
        $this->gasId = $gasId;

        return $this;
    }

    /**
     * Get gasId
     *
     * @return integer
     */
    public function getGasId()
    {
        return $this->gasId;
    }

    /**
     * Set currentId
     *
     * @param integer $currentId
     * @return Welder
     */
    public function setCurrentId($currentId)
    {
        $this->currentId = $currentId;

        return $this;
    }

    /**
     * Get currentId
     *
     * @return integer
     */
    public function getCurrentId()
    {
        return $this->currentId;
    }

    /**
     * Set adviceId
     *
     * @param integer $adviceId
     * @return Welder
     */
    public function setAdviceId($adviceId)
    {
        $this->advice = $adviceId;

        return $this;
    }

    /**
     * Get adviceId
     *
     * @return integer
     */
    public function getAdviceId()
    {
        return $this->adviceId;
    }

    /**
     * Set additiveId
     *
     * @param integer $additiveId
     * @return Welder
     */
    public function setAdditive($additiveId)
    {
        $this->additiveId = $additiveId;

        return $this;
    }

    /**
     * Get additiveId
     *
     * @return integer
     */
    public function getAdditiveId()
    {
        return $this->additiveId;
    }






    /**
     * Add WeldId
     *
     * @param \Welding\weldBundle\Entity\Weld $weldId
     * @return Welder
     */
    public function addWeldId(\Welding\weldBundle\Entity\Weld $weldId)
    {
       if (!$this->weldId)
       {
            $this->weldId = $weldId;
           $weldId->addWelder($this);
       }

        return $this;
    }
    /**
     * Add NozzleId
     *
     * @param \Welding\WeldBundle\Entity\Nozzle $nozzle
     * @return Welder
     */
    public function addNozzleId(\Welding\weldBundle\Entity\Nozzle $nozzle)
    {
        if (!$this->nozzleId)
        {
            $this->nozzleId = $nozzle;
            $nozzle->addWelder($this);
        }

        return $this;
    }

    /**
     * Add AdviceId
     *
     * @param \Welding\WeldBundle\Entity\Advice $advice
     * @return Welder
     */
    public function addAdviceId(\Welding\weldBundle\Entity\Advice $advice)
    {
        if (!$this->adviceId)
        {
            $this->adviceId = $advice;
            $advice->addWelder($this);
        }

        return $this;
    }

    /**
     * Add CurrentId
     *
     * @param \Welding\WeldBundle\Entity\Current $current
     * @return Welder
     */
    public function addCurrentId(\Welding\weldBundle\Entity\Current $current)
    {
        if (!$this->currentId)
        {
            $this->currentId = $current;
            $current->addWelder($this);
        }

        return $this;
    }

    /**
     * Add DepthId
     *
     * @param \Welding\WeldBundle\Entity\Depth $depth
     * @return Welder
     */
    public function addDepthId(\Welding\weldBundle\Entity\Depth $depth)
    {
        if (!$this->depthId)
        {
            $this->depthId = $depth;
            $depth->addWelder($this);
        }

        return $this;
    }

    /**
     * Add GasId
     *
     * @param \Welding\WeldBundle\Entity\Gas $gas
     * @return Welder
     */
    public function addGasId(\Welding\weldBundle\Entity\Gas $gas)
    {
        if (!$this->gasId)
        {
            $this->gasId = $gas;
            $gas->addWelder($this);
        }

        return $this;
    }

    /**
     * Add MaterialId
     *
     * @param \Welding\WeldBundle\Entity\Material $material
     * @return Welder
     */
    public function addMaterialId(\Welding\weldBundle\Entity\Material $material)
    {
        if (!$this->materialId)
        {
            $this->materialId = $material;
            $material->addWelder($this);
        }

        return $this;
    }

    /**
     * Add WolframId
     *
     * @param \Welding\WeldBundle\Entity\Wolfram $wolfram
     * @return Welder
     */
    public function addWolframId(\Welding\weldBundle\Entity\Wolfram $wolfram)
    {
        if (!$this->wolframId)
        {
            $this->wolframId = $wolfram;
            $wolfram->addWelder($this);
        }

        return $this;
    }
    /**
     * Add additive
     *
     * @param \Welding\weldBundle\Entity\Additive $additive
     * @return Welder
     */
    public function addAdditive(\Welding\weldBundle\Entity\Additive $additive)
    {
        if (!$this->additiveId)
        {
            $this->additiveId = $additive;
            $additive->addWelder($this);
        }

        return $this;
    }

}
/**
 * @ORM\Entity
 * @ORM\Table(name="weld")
 */
class Weld
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned": true, "comment" : "ID weld"})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $type;


    /**
     * Get Id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Set type
     *
     * @param string $type
     * @return Weld
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

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }



    /**
     * Add welder
     *
     * @param \Welding\WeldBundle\Entity\Welder $id
     * @return Weld
     */
    public function addWelder(\Welding\WeldBundle\Entity\Welder $id)
    {
     if (!$this->id)
      {
            $this->id[] = $id;
            $id->addWeldId($this);
      }


        return $this;
    }

}

/**
 * @ORM\Entity
 * @ORM\Table(name="nozzle")
 */
class Nozzle
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned": true, "comment" : "ID nozzle"})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="decimal", precision=2, scale=1)
     */
    protected $nozzle;





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
     * Set nozzle
     *
     * @param string $nozzle
     * @return Nozzle
     */
    public function setNozzle($nozzle)
    {
        $this->nozzle = $nozzle;

        return $this;
    }

    /**
     * Get nozzle
     *
     * @return string
     */
    public function getNozzle()
    {
        return $this->nozzle;
    }


    public function __construct()
    {
        $this->id = new ArrayCollection();
    }

    /**
     * Add welder
     *
     * @param \Welding\WeldBundle\Entity\Welder $id
     * @return Nozzle
     */
    public function addWelder(\Welding\WeldBundle\Entity\Welder $id)
    {
        if (!$this->id)
        {
            $this->id[] = $id;
            $id->addNozzleId($this);
        }


        return $this;
    }

}



/**
 * @ORM\Entity
 * @ORM\Table(name="wolfram")
 */
class Wolfram
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned": true, "comment" : "ID wolfram"})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="decimal", precision=2, scale=1)
     */
    protected $size;




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
     * Set size
     *
     * @param string $size
     * @return Wolfram
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }



    public function __construct()
    {
        $this->id = new ArrayCollection();
    }




    /**
     * Add welder
     *
     * @param \Welding\WeldBundle\Entity\Welder $id
     * @return Wolfram
     */
    public function addWelder(\Welding\WeldBundle\Entity\Welder $id)
    {
        if (!$this->id)
        {
            $this->id[] = $id;
            $id->addWolframId($this);
        }


        return $this;
    }

}

/**
 * @ORM\Entity
 * @ORM\Table(name="gas")
 */
class Gas
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned": true, "comment" : "ID gas"})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="decimal", precision=2, scale=2)
     */
    protected $value;

    /**
     * @ORM\Column(type="decimal", precision=2, scale=2)
     */
    protected $power;

    /**
     * @ORM\Column(type="integer")
     */
    protected $consumption;






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
     * Set value
     *
     * @param string $value
     * @return Gas
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set power
     *
     * @param string $power
     * @return Gas
     */
    public function setPower($power)
    {
        $this->power = $power;

        return $this;
    }

    /**
     * Get power
     *
     * @return string
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set consumption
     *
     * @param string $consumption
     * @return Gas
     */
    public function setConsumption($consumption)
    {
        $this->consumption = $consumption;

        return $this;
    }

    /**
     * Get consumption
     *
     * @return string
     */
    public function getConsumption()
    {
        return $this->consumption;
    }



    public function __construct()
    {
        $this->id = new ArrayCollection();
    }



    /**
     * Add welder
     *
     * @param \Welding\WeldBundle\Entity\Welder $id
     * @return Gas
     */
    public function addWelder(\Welding\WeldBundle\Entity\Welder $id)
    {
        if (!$this->id)
        {
            $this->id[] = $id;
            $id->addGasId($this);
        }


        return $this;
    }

}

/**
 * @ORM\Entity
 * @ORM\Table(name="depth")
 */
class Depth
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned": true, "comment" : "ID depth"})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $size;




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
     * Set size
     *
     * @param string $size
     *
     * @return Depth
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }


    public function __construct()
    {
        $this->id = new ArrayCollection();
    }


    /**
     * Add welder
     *
     * @param \Welding\WeldBundle\Entity\Welder $id
     * @return Depth
     */
    public function addWelder(\Welding\WeldBundle\Entity\Welder $id)
    {
        if (!$this->id)
        {
            $this->id[] = $id;
            $id->addDepthId($this);
        }


        return $this;
    }

}


/**
 * @ORM\Entity
 * @ORM\Table(name="current")
 */
class Current
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned": true, "comment" : "ID current"})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $value;





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
     * Set value
     *
     * @param string $value
     * @return Current
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }



    public function __construct()
    {
        $this->id = new ArrayCollection();
    }



    /**
     * Add welder
     *
     * @param \Welding\WeldBundle\Entity\Welder $id
     * @return Current
     */
    public function addWelder(\Welding\WeldBundle\Entity\Welder $id)
    {
        if (!$this->id)
        {
            $this->id[] = $id;
            $id->addCurrentId($this);
        }


        return $this;
    }

}


/**
 * @ORM\Entity
 * @ORM\Table(name="advice")
 */
class Advice
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned": true, "comment" : "ID advice"})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="text")
     */
    protected $advice;
    /**
     * @ORM\Column(type="text")
     */
    protected $note;





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
     * Get advice
     *
     * @return string
     */
    public function getAdvice()
    {
        return $this->advice;
    }

    /**
     * Set advice
     *
     * @param string $advice
     *
     * @return Advice
     */
    public function setAdvice($advice)
    {
        $this->advice = $advice;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * Set note
     *
     * @param string $note
     * @return Advice
     */
     public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }


    public function __construct()
    {
        $this->id = new ArrayCollection();
    }



    /**
     * Add welder
     *
     * @param \Welding\WeldBundle\Entity\Welder $id
     * @return Advice
     */
    public function addWelder(\Welding\WeldBundle\Entity\Welder $id)
    {
        if (!$this->id)
        {
            $this->id[] = $id;
            $id->addAdviceId($this);
        }


        return $this;
    }

}

/**
 * @ORM\Entity
 * @ORM\Table(name="additive")
 */
class Additive
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned": true, "comment" : "ID additive"})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $additive;






    /**
     * Get Id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set additive
     *
     * @param string $additive
     * @return Additive
     */
    public function setAdditive($additive)
    {
        $this->additive = $additive;

        return $this;
    }

    /**
     * Get additive
     *
     * @return string
     */
    public function getAdditive()
    {
        return $this->additive;
    }

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }
    /**
     * Add welder
     *
     * @param \Welding\WeldBundle\Entity\Welder $id
     * @return Additive
     */
    public function addWelder(\Welding\WeldBundle\Entity\Welder $id)
    {
        if (!$this->id)
        {
            $this->id[] = $id;
            $id->addAdditive($this);
        }


        return $this;
    }
}
/**
 * @ORM\Entity
 * @ORM\Table(name="material")
 */
class Material
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned": true, "comment" : "ID material"})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $type;


    /**
     * Get Id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }




    /**
     * Set type
     *
     * @param string $type
     * @return Material
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



    public function __construct()
    {
        $this->id = new ArrayCollection();
    }


    /**
     * Add welder
     *
     * @param \Welding\WeldBundle\Entity\Welder $id
     * @return Material
     */
    public function addWelder(\Welding\WeldBundle\Entity\Welder $id)
    {
        if (!$this->id)
        {
            $this->id[] = $id;
            $id->addMaterialId($this);
        }


        return $this;
    }
}