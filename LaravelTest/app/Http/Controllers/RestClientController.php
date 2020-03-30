// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use GuzzleHttp\Client;

// class RestClientController extends Controller
// {
//     public function index(){
        
        
//         $serviceURL = "http://localhost:8888/LaravelTest/";
//         $api = "usersrest";
//         $param = "";
//         $uri = $api . "/" . $param;
//         try
//         {
//             //Make REST call
//             $client = new Client(['base_uri' => $serviceURL]);
//             $response = $client->request('GET', $uri);
            
//             //Return JSON on ERROR
//             if($response->getStatusCode() == 200) {
//                 return $response->getBody();
//             } else {
//                 return "There was an error: " . $response->getStatusCode();
//             }
            
//         }
//         catch(ClientException $e){
//             //Return an Error
//             return "There was an exception: " . $e->getMessage();
//         }
        
        
//     }
   
    
// }
