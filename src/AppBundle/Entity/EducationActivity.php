<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EducationActivity
 *
 * @ORM\Table(name="education_activity", indexes={@ORM\Index(name="fk_education_activity_education1_idx", columns={"education_education_id"}), @ORM\Index(name="fk_education_activity_activity1_idx", columns={"activity_activity_id"})})
 * @ORM\Entity
 */
class EducationActivity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="education_activity_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $educationActivityId;

    /**
     * @var string
     *
     * @ORM\Column(name="education_activity", type="string", length=45, nullable=true)
     */
    private $educationActivity;

    /**
     * @var \Activity
     *
     * @ORM\ManyToOne(targetEntity="Activity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activity_activity_id", referencedColumnName="activity_id")
     * })
     */
    private $activityActivity;

    /**
     * @var \Education
     *
     * @ORM\ManyToOne(targetEntity="Education")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="education_education_id", referencedColumnName="education_id")
     * })
     */
    private $educationEducation;


}

