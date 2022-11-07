This part of the project documentation focuses on the **SCDO** API
. Terms from the **SCDO** is accessible through an API endpoint.The **SCDO** API is organized around REST. Our API has predictable resource-oriented URLs, returns JSON-encoded responses, and uses standard HTTP response codes, authentication, and verbs.
{: style="font-size:0.2rem;"}

## API Request in Python

Displayed below is the code you would use to execute this API request in Python.

    import json
    import requests

    URL = 'https://f4db-41-157-180-219.sa.ngrok.io'

    # sending get request and saving the response as response object
    r = requests.get(url=URL)

    # extracting data in json format
    data = r.json()

    print(data['result'])

## API Request in PHP

Displayed below is the code you would use to execute this API request in PHP.

    <?php

    $ch = curl_init();

    $url = "https://f4db-41-157-180-219.sa.ngrok.io";

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $resp = curl_exec($ch);

    if($e = curl_exec($ch)){
        echo $e;
    }
    else {
        $decoded = json_decode($resp, true);
        print_r($decoded);
        return $decoded;
    }

    curl_close($ch);

## Return

Both API requests return a **JSON** array of **SCDO** terms and their descriptions.

    {
        "result": [
            [
                1,
                "SCDO:0000005",
                "Abdominal Ultrasound",
                "A method of ultrasound imaging in which the ultrasound probe is pressed against the skin of the abdomen in order to create an image of the abdominal organs."
            ],
            [
                2,
                "SCDO:0000006",
                "Ability to Carry Out Activities of Daily Living",
                "The performance of the basic activities of self care, such as dressing, ambulation, or eating."
            ],