<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserEducation
 *
 * @ORM\Table(name="user_education", indexes={@ORM\Index(name="fk_user_education_user1_idx", columns={"user_id_user"}), @ORM\Index(name="fk_user_education_education1_idx", columns={"education_education_id"})})
 * @ORM\Entity
 */
class UserEducation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_education_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userEducationId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="degree_degree_id", type="integer", nullable=false)
     */
    private $degreeDegreeId;

    /**
     * @var \Education
     *
     * @ORM\ManyToOne(targetEntity="Education")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="education_education_id", referencedColumnName="education_id")
     * })
     */
    private $educationEducation;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id_user", referencedColumnName="id_user")
     * })
     */
    private $userUser;


}

