<?php
class Scholar extends Student
{
    private $scholarshipAmount;

    public function setScholarshipAmount($amount)
    {
        $this->scholarshipAmount = $amount;
    }

    public function getScholarshipAmount()
    {
        return $this->scholarshipAmount;
    }

    public function getProfileHTML()
    {
        return "<div class='card'>
            <h2>{$this->getName()}</h2>
            <p><strong>Age:</strong> {$this->getAge()}</p>
            <p><strong>Course:</strong> {$this->getCourse()}</p>
            <p><strong>Email:</strong> {$this->getEmail()}</p>
            <p><strong>Scholarship: </strong> ₱{$this->scholarshipAmount}</p>
        </div>";
    }
}