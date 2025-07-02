<?php
class Student
{
    private $name;
    private $age;
    private $course;
    private $email;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getProfileHTML()
    {
        return "<div class='card'>
            <h2>{$this->name}</h2>
            <p><strong>Age:</strong> {$this->age}</p>
            <p><strong>Course:</strong> {$this->course}</p>
            <p><strong>Email:</strong> {$this->email}</p>
        </div>";
    }
}