<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class UsersController extends Controller
{
    //
    function getData(/*Request $req*/)
    {
        /*return $req->input();*/
        /*if($_POST["username"] == 2)
        {
            return $_POST["username"];
        }
        else if($_POST["username"] == 3)
        {
            echo "<h3>siker</h3>";
        } */  
        //Grabbing the n-th secret, depending on the n number given in the form.

    //$person_json = file_get_contents("secretsAPI.json");
    //$person_json = File::get(storage_path('app/resources/views/secretsAPI.json'));
    //$doesfileexist = File::exists(storage_path('resources/views/secretsAPI.json'));
    //Storage::setVisibility('secretsAPI.json', 'public');
    //$person_json = Storage::disk('local')->get('secretsAPI.json');
    //$person_json = Storage::get('secretsAPI.json');

    //If the second parameter is false, then an object is returned.
    //Otherwise, an array is the return.
    //Storage::path
    //storage_path()
    //public_path()
    $person_json = File::get(storage_path('app/public/secretsAPI.json'));  //only this way works (also the json file is in the storage folder)
    $decoded_json = json_decode($person_json, true);

    //Helper variables to construct the random generated url.
    $first_tag = "https://www.";
    $middle_tag = "secret";
    $end_tag = ".com";
    //Writing out secret
    /*if(isset($_POST["username"]))
    {
        echo "siker";
    }
    else
    {
        echo "hiba";
    }*/
    if($_POST["username"]== 1)
    {
        if(!isset($decoded_json["secrets"][0]["secretText"])) 
        {
            echo "<h1>404</h1>";
            echo "<h3>Secret cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the secret!</h4>";
            header("Status: 404 Not Found");
            /*if($decoded_json)
            {
                echo "siker";
            }
            else
            {
                echo "hiba";
            }*/
        }
        else
        {
            $number_generated = $_POST["username"];
            echo "<h1>The secret of <i>$first_tag$middle_tag$number_generated$end_tag</i> :</h1>";
            $letmehaveit = $decoded_json["secrets"][0]["secretText"];
            echo "<h3>$letmehaveit</h3>";
        }
    }
    else if ($_POST["username"] == 2)
    {
        if(!isset($decoded_json["secrets"][1]["secretText"])) 
        {
            echo "<h1>404</h1>";
            echo "<h3>Secret cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the secret!</h4>";
            header("Status: 404 Not Found");
        }
        else
        {
            $number_generated = $_POST["username"];
            echo "<h1>The secret of <i>$first_tag$middle_tag$number_generated$end_tag</i> :</h1>";
            $letmehaveit = $decoded_json["secrets"][1]["secretText"];
            echo "<h3>$letmehaveit</h3>";
        }
    }
    else if ($_POST["username"] == 3)
    {
        if(!isset($decoded_json["secrets"][2]["secretText"])) 
        {
            echo "<h1>404</h1>";
            echo "<h3>Secret cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the secret!</h4>";
            header("Status: 404 Not Found");
        }
        else
        {
            $number_generated = $_POST["username"];
            echo "<h1>The secret of <i>$first_tag$middle_tag$number_generated$end_tag</i> :</h1>";
            $letmehaveit = $decoded_json["secrets"][2]["secretText"];
            echo "<h3>$letmehaveit</h3>";
        }
    }
    else if ($_POST["username"] == 4)
    {
        if(!isset($decoded_json["secrets"][3]["secretText"])) 
        {
            echo "<h1>404</h1>";
            echo "<h3>Secret cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the secret!</h4>";
            header("Status: 404 Not Found");
        }
        else
        {
            $number_generated = $_POST["username"];
            echo "<h1>The secret of <i>$first_tag$middle_tag$number_generated$end_tag</i> :</h1>";
            $letmehaveit = $decoded_json["secrets"][3]["secretText"];
            echo "<h3>$letmehaveit</h3>";
        }
    }
    else if ($_POST["username"] == 5)
    {
        if(!isset($decoded_json["secrets"][4]["secretText"])) 
        {
            echo "<h1>404</h1>";
            echo "<h3>Secret cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the secret!</h4>";
            header("Status: 404 Not Found");
        }
        else
        {
            $number_generated = $_POST["username"];
            echo "<h1>The secret of <i>$first_tag$middle_tag$number_generated$end_tag</i> :</h1>";
            $letmehaveit = $decoded_json["secrets"][4]["secretText"];
            echo "<h3>$letmehaveit</h3>";
        }
    }
    else if($_POST["username"] == 6)
    {
        if(!isset($decoded_json["0"]["secretText"]))
        {
            echo "<h1>404</h1>";
            echo "<h3>Secret cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the secret!</h4>";
            header("Status: 404 Not Found");

                $current_data= File::get(storage_path('app/public/secretsAPI.json'));
                $array_data=json_decode($current_data, true);
                
                $extra=array(
                    'name' => "New Secret",
                    'secretText' => $_POST["name"],
                    'createdAt' => date("Y.m.d"),
                    'expiresAt' => date("2023.12.31"),
                    'remainingViews' => 3
                );
                $array_data[]=$extra;
                echo "File expansion made<br/>"; //This echo is for checking.
                Storage::disk('public')->put('secretsAPI.json', json_encode($array_data));
                //return json_encode($array_data);
                //$current_data = json_encode($array_data, JSON_PRETTY_PRINT);
                //Storage::disk('local')->put("secretsAPI.json",json_encode($array_data));
                //$decoded_json["0"]["secretText"] = $extra["secretText"];   
        }
        else
        {
            $number_generated = $_POST["username"];
            echo "<h1>The secret of <i>$first_tag$middle_tag$number_generated$end_tag</i> :</h1>";
            $letmehaveit = $decoded_json["0"]["secretText"];
            echo "<h3>$letmehaveit</h3>";
        }
    }   
    else if($_POST["username"] == 7)
    {
        if(!isset($decoded_json["1"]["secretText"]))
        {
            echo "<h1>404</h1>";
            echo "<h3>Secret cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the secret!</h4>";
            header("Status: 404 Not Found");

                $current_data= File::get(storage_path('app/public/secretsAPI.json'));
                $array_data=json_decode($current_data, true);
                
                $extra=array(
                    'name' => "New Secret",
                    'secretText' => $_POST["name"],
                    'createdAt' => date("Y.m.d"),
                    'expiresAt' => date("2023.12.31"),
                    'remainingViews' => 3
                );
                $array_data[]=$extra;
                echo "File expansion made<br/>"; //This echo is for checking.
                Storage::disk('public')->put('secretsAPI.json', json_encode($array_data));
                //return json_encode($array_data);
                //$current_data = json_encode($array_data, JSON_PRETTY_PRINT);
                //Storage::disk('local')->put("secretsAPI.json",json_encode($array_data));
                //$decoded_json["0"]["secretText"] = $extra["secretText"];   
        }
        else
        {
            $number_generated = $_POST["username"];
            echo "<h1>The secret of <i>$first_tag$middle_tag$number_generated$end_tag</i> :</h1>";
            $letmehaveit = $decoded_json["1"]["secretText"];
            echo "<h3>$letmehaveit</h3>";
        }
    }
    else if($_POST["username"] == 8)
    {
        if(!isset($decoded_json["2"]["secretText"]))
        {
            echo "<h1>404</h1>";
            echo "<h3>Secret cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the secret!</h4>";
            header("Status: 404 Not Found");

                $current_data= File::get(storage_path('app/public/secretsAPI.json'));
                $array_data=json_decode($current_data, true);
                
                $extra=array(
                    'name' => "New Secret",
                    'secretText' => $_POST["name"],
                    'createdAt' => date("Y.m.d"),
                    'expiresAt' => date("2023.12.31"),
                    'remainingViews' => 3
                );
                $array_data[]=$extra;
                echo "File expansion made<br/>"; //This echo is for checking.
                Storage::disk('public')->put('secretsAPI.json', json_encode($array_data));
                //return json_encode($array_data);
                //$current_data = json_encode($array_data, JSON_PRETTY_PRINT);
                //Storage::disk('local')->put("secretsAPI.json",json_encode($array_data));
                //$decoded_json["0"]["secretText"] = $extra["secretText"];   
        }
        else
        {
            $number_generated = $_POST["username"];
            echo "<h1>The secret of <i>$first_tag$middle_tag$number_generated$end_tag</i> :</h1>";
            $letmehaveit = $decoded_json["2"]["secretText"];
            echo "<h3>$letmehaveit</h3>";
        }
    }
    else if($_POST["username"] == 9)
    {
        if(!isset($decoded_json["3"]["secretText"]))
        {
            echo "<h1>404</h1>";
            echo "<h3>Secret cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the secret!</h4>";
            header("Status: 404 Not Found");

                $current_data= File::get(storage_path('app/public/secretsAPI.json'));
                $array_data=json_decode($current_data, true);
                
                $extra=array(
                    'name' => "New Secret",
                    'secretText' => $_POST["name"],
                    'createdAt' => date("Y.m.d"),
                    'expiresAt' => date("2023.12.31"),
                    'remainingViews' => 3
                );
                $array_data[]=$extra;
                echo "File expansion made<br/>"; //This echo is for checking.
                Storage::disk('public')->put('secretsAPI.json', json_encode($array_data));
                //return json_encode($array_data);
                //$current_data = json_encode($array_data, JSON_PRETTY_PRINT);
                //Storage::disk('local')->put("secretsAPI.json",json_encode($array_data));
                //$decoded_json["0"]["secretText"] = $extra["secretText"];   
        }
        else
        {
            $number_generated = $_POST["username"];
            echo "<h1>The secret of <i>$first_tag$middle_tag$number_generated$end_tag</i> :</h1>";
            $letmehaveit = $decoded_json["3"]["secretText"];
            echo "<h3>$letmehaveit</h3>";
        }
    }
    else if($_POST["username"] == 10)
    {
        if(!isset($decoded_json["4"]["secretText"]))
        {
            echo "<h1>404</h1>";
            echo "<h3>Secret cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the secret!</h4>";
            header("Status: 404 Not Found");

                $current_data= File::get(storage_path('app/public/secretsAPI.json'));
                $array_data=json_decode($current_data, true);
                
                $extra=array(
                    'name' => "New Secret",
                    'secretText' => $_POST["name"],
                    'createdAt' => date("Y.m.d"),
                    'expiresAt' => date("2023.12.31"),
                    'remainingViews' => 3
                );
                $array_data[]=$extra;
                echo "File expansion made<br/>"; //This echo is for checking.
                Storage::disk('public')->put('secretsAPI.json', json_encode($array_data));
                //return json_encode($array_data);
                //$current_data = json_encode($array_data, JSON_PRETTY_PRINT);
                //Storage::disk('local')->put("secretsAPI.json",json_encode($array_data));
                //$decoded_json["0"]["secretText"] = $extra["secretText"];   
        }
        else
        {
            $number_generated = $_POST["username"];
            echo "<h1>The secret of <i>$first_tag$middle_tag$number_generated$end_tag</i> :</h1>";
            $letmehaveit = $decoded_json["4"]["secretText"];
            echo "<h3>$letmehaveit</h3>";
        }
    }

    //Adding secret content to the json file
    //experimental code
    //TODO
    /*if(isset($_POST["name"]))
    {
        function get_data() 
        {
            $file_name = File::get(storage_path('secretsAPI.json'));;
    
            if(file_exists("$file_name")) 
            { 
                $current_data=file_get_contents("$file_name");
                $array_data=json_decode($current_data, true);
                
                $extra=array(
                    'name' => "New Secret",
                    'secretText' => $_POST['name'],
                    'createdAt' => date("Y.m.d"),
                    'expiresAt' => date("2023.05.31"),
                    'remainingViews' => 3
                );
                $array_data[]=$extra;
                echo "file exist<br/>"; //This echo is for checking.
                return json_encode($array_data);
            }
            else 
            {
                $datae=array();
                $datae[]=array(
                    'name' => "New Secret",
                    'secretText' => $_POST['name'],
                    'createdAt' => date("Y.m.d"),
                    'expiresAt' => date("2023.05.31"),
                    'remainingViews' => 3
                );
                echo "file not exist<br/>";
                return json_encode($datae);   
            }
        }
  
        //If it has the name like above, then the existing file will be overwritten in a way of getting expanded with the new data.
        $file_name='secretsAPI'. '.json';
        
        if(file_put_contents("$file_name", get_data())) 
        {
            echo '<h3>Secret created successfully! Please go back to the forms section!</h3>';
        }                
        else 
        {
            echo 'There is some error! Secret could not be created!';                
        }
    }*/
    }
}
