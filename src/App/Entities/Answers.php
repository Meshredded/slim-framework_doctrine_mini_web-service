<?php
/**
 * Created by PhpStorm.
 * User: MacBook
 * Date: 18/10/2016
 * Time: 22:07
 */

namespace App\Entities;


use App\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="answers")
 */
class Answers extends Entity{

    /**
     * @ORM\ManyToOne(targetEntity="\App\Entities\FormAnswered", inversedBy="answers")
     * @ORM\JoinColumn(name="form_answered_id", nullable=false, referencedColumnName="id", onDelete="CASCADE")
     */
    private $formAnswered;

    /**
     * @ORM\ManyToOne(targetEntity="\App\Entities\Questions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $question;

    /**
     * @ORM\Column(type="string", length=32)
     * @var string
     */
    protected $answer;




    /**
     * @return mixed
     */
    public function getFormAnswered()
    {
        return $this->formAnswered;
    }

    /**
     * @param mixed $formAnswered
     */
    public function setFormAnswered($formAnswered)
    {
        $this->formAnswered = $formAnswered;
    }

    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param mixed $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * @param string $answer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }

    public function toArray()
    {
        return array_merge(parent::toArray(),[
            "related_form_Answered"=>$this->formAnswered->getId(),
            "related_question"=>$this->getQuestion()->getQuestion(),
            "answer"=>$this->getAnswer()

        ]);
    }


}