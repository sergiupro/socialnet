<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Degree
 *
 * @ORM\Table(name="degree", indexes={@ORM\Index(name="fk_degree_user_education1_idx", columns={"user_education_user_education_id"})})
 * @ORM\Entity
 */
class Degree
{
    /**
     * @var integer
     *
     * @ORM\Column(name="degree_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $degreeId;

    /**
     * @var string
     *
     * @ORM\Column(name="degree", type="string", length=45, nullable=true)
     */
    private $degree;

    /**
     * @var \UserEducation
     *
     * @ORM\ManyToOne(targetEntity="UserEducation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_education_user_education_id", referencedColumnName="user_education_id")
     * })
     */
    private $userEducationUserEducation;


}

