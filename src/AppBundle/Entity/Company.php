<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company", indexes={@ORM\Index(name="fk_company_location1_idx", columns={"location_id_location"})})
 * @ORM\Entity
 */
class Company
{
    /**
     * @var integer
     *
     * @ORM\Column(name="company_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $companyId;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=45, nullable=true)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="annual_sales", type="text", length=16777215, nullable=true)
     */
    private $annualSales;

    /**
     * @var \Location
     *
     * @ORM\ManyToOne(targetEntity="Location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_id_location", referencedColumnName="id_location")
     * })
     */
    private $locationLocation;


}

