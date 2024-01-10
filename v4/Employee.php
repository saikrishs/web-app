<?php

class EmployeeData
{
    public function getStaticData(): array
    {
        return [
            [
                'userId' => 1,
                'id' => 101,
                'title' => 'Employee Title 1',
                'body' => 'Employee Body 1',
                // Add more fields as needed
            ],
            [
                'userId' => 2,
                'id' => 102,
                'title' => 'Employee Title 2',
                'body' => 'Employee Body 2',
                // Add more fields as needed
            ],
            // Additional employee records with similar structure
        ];
    }

    public function getApiData(): array
    {
        $url = 'https://jsonplaceholder.typicode.com/posts';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseJson = curl_exec($ch);
        curl_close($ch);

        return json_decode($responseJson, true);
    }
}