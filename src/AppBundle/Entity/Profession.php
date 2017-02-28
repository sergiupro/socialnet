<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profession
 *
 * @ORM\Table(name="profession")
 * @ORM\Entity
 */
class Profession
{
    /**
     * @var integer
     *
     * @ORM\Column(name="profession_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $professionId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="work_here", type="boolean", nullable=true)
     */
    private $workHere;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="star_year", type="date", nullable=true)
     */
    private $starYear;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_month", type="date", nullable=true)
     */
    private $startMonth;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_year", type="date", nullable=true)
     */
    private $endYear;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_month", type="date", nullable=true)
     */
    private $endMonth;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=true)
     */
    private $description;


}

