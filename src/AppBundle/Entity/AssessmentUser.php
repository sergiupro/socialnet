<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AssessmentUser
 *
 * @ORM\Table(name="assessment_user", indexes={@ORM\Index(name="fk_assessment_user_assessment1_idx", columns={"assessment_id1"}), @ORM\Index(name="fk_assessment_user_user1_idx", columns={"user_id_user"})})
 * @ORM\Entity
 */
class AssessmentUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="assessment_id", type="integer", nullable=true)
     */
    private $assessmentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="qualified", type="string", length=45, nullable=true)
     */
    private $qualified;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_taken", type="date", nullable=true)
     */
    private $dateTaken;

    /**
     * @var string
     *
     * @ORM\Column(name="visibility", type="string", length=45, nullable=true)
     */
    private $visibility;

    /**
     * @var integer
     *
     * @ORM\Column(name="score", type="integer", nullable=true)
     */
    private $score;

    /**
     * @var \Assessment
     *
     * @ORM\ManyToOne(targetEntity="Assessment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="assessment_id1", referencedColumnName="id")
     * })
     */
    private $assessment1;

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

