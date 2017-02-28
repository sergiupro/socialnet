<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CareerTrackRecommandation
 *
 * @ORM\Table(name="career_track_recommandation", indexes={@ORM\Index(name="fk_career_track_recommandations_recommendation_request1_idx", columns={"recommendation_request_id_recommendation_request"})})
 * @ORM\Entity
 */
class CareerTrackRecommandation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_career_track_recommandation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCareerTrackRecommandation;

    /**
     * @var string
     *
     * @ORM\Column(name="career_track_recommandation_text", type="string", length=45, nullable=true)
     */
    private $careerTrackRecommandationText;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="career_track_recommandation_date", type="date", nullable=true)
     */
    private $careerTrackRecommandationDate;

    /**
     * @var \RecommendationRequest
     *
     * @ORM\ManyToOne(targetEntity="RecommendationRequest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recommendation_request_id_recommendation_request", referencedColumnName="id_recommendation_request")
     * })
     */
    private $recommendationRequestRecommendationRequest;


}

