<?php

class StudentData
{
    public function getStaticData(): array
    {
        return [
            [
                'firstName' => 'John',
                'lastName' => 'Doe',
                'email' => 'john.doe@example.com',
                'phone' => '123-456-7890',
                'dateOfBirth' => '1995-05-15'
                // Add more fields as needed
            ],
            [
                'firstName' => 'Jane',
                'lastName' => 'Smith',
                'email' => 'jane.smith@example.com',
                'phone' => '987-654-3210',
                'dateOfBirth' => '1990-08-22'
                // Add more fields as needed
            ],
            [
                'firstName' => 'Bob',
                'lastName' => 'Johnson',
                'email' => 'bob.johnson@example.com',
                'phone' => '555-123-4567',
                'dateOfBirth' => '1998-03-10'
                // Add more fields as needed
            ],
            [
                'firstName' => 'Alice',
                'lastName' => 'Williams',
                'email' => 'alice.williams@example.com',
                'phone' => '111-222-3333',
                'dateOfBirth' => '1993-11-05'
                // Add more fields as needed
            ],
            [
                'firstName' => 'Chris',
                'lastName' => 'Davis',
                'email' => 'chris.davis@example.com',
                'phone' => '999-888-7777',
                'dateOfBirth' => '1997-01-25'
                // Add more fields as needed
            ],
            [
                'firstName' => 'Sai',
                'lastName' => 'Srungavarapu',
                'email' => 'sai.srungavarapu@gmail.com',
                'phone' => '9059075702',
                'dateOfBirth' => '1996-01-01'
                // Add more fields as needed
            ]
        ];
    }

    public function getApiData(): array
    {
        $url = 'https://jsonplaceholder.typicode.com/users';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseJson = curl_exec($ch);
        curl_close($ch);

        return json_decode($responseJson, true);
    }
}