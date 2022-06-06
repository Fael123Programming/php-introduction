<?php 
    class Student {
        var $name;
        var $major;
        var $gpa; //Grade Point Average.

        function __construct($name, $major, $gpa) {
            $this->name = $name; //Do not use '$' when accessing attributes of an instance.
            $this->major = $major;
            $this->gpa = $gpa;
        }

        function hasHonors() {
            return $this->gpa >= 3.5;
        }
    }
?>