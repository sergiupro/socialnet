<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserQuestionAnswer
 *
 * @ORM\Table(name="user_question_answer", indexes={@ORM\Index(name="fk_user_question_answer_assessment_user1_idx", columns={"assessment_user_id"})})
 * @ORM\Entity
 */
class UserQuestionAnswer
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
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_id", type="integer", nullable=true)
     */
    private $questionId;

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="string", length=45, nullable=true)
     */
    private $answer;

    /**
     * @var \AssessmentUser
     *
     * @ORM\ManyToOne(targetEntity="AssessmentUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="assessment_user_id", referencedColumnName="id")
     * })
     */
    private $assessmentUser;


}

