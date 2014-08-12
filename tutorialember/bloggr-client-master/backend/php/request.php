<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 8/8/14
 * Time: 5:27 PM
 */

class Requester {
    var $json_data;
    var $response = 'Not ok!';
    var $isOK = false;

    function __construct($jsonFile) {
        if (file_exists($jsonFile)) {
            $this->response = 'File found!';
            $data = file_get_contents($jsonFile);
            $this->json_data = json_decode($data, true);
            $this->handleJSON();
        }
    }

    public function handleJSON() {
        foreach ($this->json_data as $key => $value) {
            switch ($key) {
                case 'pages':
                    $this->json_data[$key]++;
                    $this->isOK = true;
                    break;
                case 'people':
                    break;
                default:
                    break;
            }
        }
    }


    public function returnValue() {
        if ($this->isOK == true) {
            header('Content-Type: application/json');
            echo json_encode($this->json_data);
        } else {
            echo $this->response;
        }
    }
}


// get the q parameter from URL
$q=$_REQUEST["q"];
$hint="";

$file = "../../json/content.json";
$response = 'File not found!';

$req = new Requester($file);

$req->returnValue();

//if (file_exists($file)) {
//    $response = 'File found!';
//    $data = file_get_contents($file);
//    $json = json_decode($data, true);
//    handleJSON($json);
//
//}
//
//function handleJSON($json) {
//    foreach ($json as $key => $value) {
//        switch ($key) {
//            case 'page':
//                $json[$key]++;
//                break;
//            case 'people':
//
//                break;
//            default:
//                break;
//
//        }
//    }
//}
//
//function handlePeople($people) {
//    $contents = 'nothing';
//    foreach($people as $key => $value) {
//        $contents = $contents . $key;
//    }
//    return $contents;
//}

// lookup all hints from array if $q is different from ""
//if ($q !== "") {
//
//
//}


//header('Content-Type: application/json');
//echo json_encode($json);

//sleep(5);
//
//header('Content-Type: application/json');
//echo json_encode($json);
