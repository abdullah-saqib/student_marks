<?php

class Student {
    public $first_name;
    public $last_name;
    public $DOB;
    public $math_marks;
    public $computer_marks;
    public $science_marks;
    public $english_marks;
    public $urdu_marks;
    public $marks;
    public $result;

    public function __construct($first_name, $last_name, $DOB, $math_marks, $computer_marks, $science_marks, $english_marks, $urdu_marks) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->DOB = $DOB;
        $this->math_marks = $math_marks;
        $this->computer_marks = $computer_marks;
        $this->science_marks = $science_marks;
        $this->english_marks = $english_marks;
        $this->urdu_marks = $urdu_marks;

       
        $this->marks = $math_marks + $computer_marks + $science_marks + $english_marks + $urdu_marks;

    
        $this->calculate_result();
    }

    public function calculate_result() {
        if ($this->math_marks < 33 || $this->computer_marks < 33 || $this->science_marks < 33 || $this->english_marks < 33 || $this->urdu_marks < 33) {
            $this->result = "Fail";
        } else {
            $this->result = "Pass";
        }
    }

    public function get_full_name() {
        return $this->first_name . ' ' . $this->last_name;
    }
}

$student1 = new Student("Abdullah", "Saqib", "2005-03-15", 80, 30, 90, 85, 70);
echo $student1->get_full_name(). "<br>" ; 
echo "\nResult: " . $student1->result. "<br>"  ;  
echo "\nTotal Marks: " . $student1->marks ;

?>