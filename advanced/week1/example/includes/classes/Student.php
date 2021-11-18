<?php

/**
 * Class Student
 */
class Student
{
    public string $name;
    public string $number;
    public string $classNumber;

    /**
     * Student constructor.
     *
     * @param string $name
     * @param string $number
     * @param string $classNumber
     */
    public function __construct(string $name, string $number, string $classNumber)
    {
        $this->name = $name;
        $this->number = $number;
        $this->classNumber = $classNumber;
    }
}
