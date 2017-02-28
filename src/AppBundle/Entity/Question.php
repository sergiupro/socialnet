<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question", indexes={@ORM\Index(name="fk_question_assessment1_idx", columns={"assessment_id1"})})
 * @ORM\Entity
 */
class Question
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
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=45, nullable=true)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="string", length=45, nullable=true)
     */
    private $answer;

    /**
     * @var \Assessment
     *
     * @ORM\ManyToOne(targetEntity="Assessment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="assessment_id1", referencedColumnName="id")
     * })
     */
    private $assessment1;


}

