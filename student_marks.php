<?php

class Student {
    public $marks;
    public $passMarks;

    public function __construct($marks, $passMarks = 33) {
        $this->marks = $marks;
        $this->passMarks = $passMarks;
    }

    public function result() {
        if ($this->marks >= $this->passMarks) {
            return "Pass";
        } else {
            return "Fail";
        }
    }

    public function display() {
        echo "Marks: " . $this->marks . "<br>";
        echo "Result: " . $this->result() . "<br><br>";
    }
}

$student1 = new Student(60);
$student2 = new Student(30);

$student1->display();
$student2->display();

?>
