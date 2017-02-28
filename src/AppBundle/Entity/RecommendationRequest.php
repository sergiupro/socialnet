<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecommendationRequest
 *
 * @ORM\Table(name="recommendation_request", indexes={@ORM\Index(name="fk_recommendation_request_career_track1_idx", columns={"career_track_career_track_to"}), @ORM\Index(name="fk_recommendation_request_career_track2_idx", columns={"career_track_career_track_from"})})
 * @ORM\Entity
 */
class RecommendationRequest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_recommendation_request", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRecommendationRequest;

    /**
     * @var boolean
     *
     * @ORM\Column(name="recommendation_request_status", type="boolean", nullable=true)
     */
    private $recommendationRequestStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=45, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=45, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="recommendation_requestcol", type="string", length=45, nullable=true)
     */
    private $recommendationRequestcol;

    /**
     * @var \CareerTrack
     *
     * @ORM\ManyToOne(targetEntity="CareerTrack")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="career_track_career_track_to", referencedColumnName="career_track_id")
     * })
     */
    private $careerTrackCareerTrackTo;

    /**
     * @var \CareerTrack
     *
     * @ORM\ManyToOne(targetEntity="CareerTrack")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="career_track_career_track_from", referencedColumnName="career_track_id")
     * })
     */
    private $careerTrackCareerTrackFrom;


}

