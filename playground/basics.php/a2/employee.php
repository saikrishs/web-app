<?php

class employee {
    public function getEmployeeData(): array
    {
      return [
          "sai" => ['ssc' => 480, 'inter' => 910, 'ms' => 510],
          "vamsi" => ['ssc' => 490, 'inter' => 960, 'ms' => 810],
          ];
    }
    public function getSSCScore($name): int
    {
      $result = null;
      $employeeData = $this->getEmployeeData();

      foreach ($employeeData as $key => $value) {
          if ($key === $name) {
              $result = $value['ssc'];
          }
      }

      return $result;
    }
    public function getInterScore($name): int
    {
        $result = null;
        $employeeData = $this->getEmployeeData();

        foreach ($employeeData as $key =>$value) {
            if ($key === $name) {
                $result = $value['inter'];
            }
        }
        return $result;
    }
    public function getMSScore($name): int
    {
        $result = null;
        $employeeData = $this->getEmployeeData();

        foreach ($employeeData as $key =>$value) {
            if ($key === $name) {
                $result = $value['ms'];
            }
        }
        return $result;
    }
}
