<?php
class Student {
//Defining functions which return array value
    public function getStudentData(): array
    {
        return [
            'sai' => [
                'ssc' => 480,
                'inter' => 910,
                'btech' => 640,
                'ms' => 990
            ],
            'vamsi' => [
                'ssc' => 500,
                'inter' => 810,
                'btech' => 680,
                'ms' => 890
            ],
            'gopi' => [
                'ssc' => 550,
                'inter' => 910,
                'btech' => 650,
                'ms' => 880
            ]
        ];
    }

//Function which takes name and return SSC score
    public function getSSCScore($name): int
    {
        $result = null;
        $studentData = $this->getstudentData();
        //Integrating student array
        foreach ($studentData as $key => $value) {
            if ($key === $name) {
                $result = $value['ssc'];
            }
        }
        return $result;
    }

//Function which takes name and return Inter score

    public function getInterScore($name): int
    {
        $studentData = $this->getstudentData();
        foreach ($studentData as $key => $value) {
            if ($key === $name) {
                $result = $value['inter'];
            }
        }
        return $result;
    }
//Function which takes name and return BTech score
    public function getBTechScore($name):int
    {
        $result = 'null';
        $studentData = $this->getStudentData();
        foreach ($studentData as $key =>$value) {
            if ($key===$name){
                $result = $value ['btech'];
            }
        }
        return $result;
    }

//Function which takes name and return MS score
    public function getMSScore($name):int
    {
        $result = 'null';
        $studentData = $this->getstudentData();
        foreach ($studentData as $key =>$value) {
            if ($key===$name){
                $result = $value ['ms'];
            }
        }
        return $result;
    }
}
