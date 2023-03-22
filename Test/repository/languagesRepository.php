<?php

require_once('./helper/constants.php');



/******************************************************************************
     *                              GET                                           *
******************************************************************************/

    /**
    * Function that returns all languages
    * @lastUpdate 22/03/2023
    * @return array
    */

    function getLanguages()
    {
        $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

        if($conn -> connect_error)
        {
            die ("Connection failed: ". $conn->connect_error);
        }

        $petition = ('SELECT * FROM Language WHERE type = 0' );
        $response = $conn->query($petition);

        return $response;
        
    }     
    

    /******************************************************************************
     *                              UPDATE                                           *
******************************************************************************/
    /**
     * Function that updates the language data
     * @lastUpdate 22/03/2023
     * @param array $params
     * @return array  
     * */

    function updateLanguage($params)
    {

        $key = $params['key'];
        $value = $params['value'];
        $id = $params['id'];

        $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

        if($conn -> connect_error)
        {
            die ("Connection failed: ". $conn->connect_error);
        }

        $petition = "UPDATE Language SET $key = '$value' WHERE id='$id'";
        $response = $conn->query($petition);

        return $response;
        
    }    
    


    /******************************************************************************
     *                              INSERT                                        *
    ******************************************************************************/
    
    /**
     * Function that inserts a language in the table
     * @lastUpdate 22/03/2023
     * @param array $values
     * @return bool
     * */

    function insertLanguage($values)
    {

        $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

        if($conn -> connect_error)
        {
            die ("Connection failed: ". $conn->connect_error);
        }

        $name = $values['name'];
        $url = $values['url'];
        $img = $values ['img'];

        $petition = "INSERT INTO Language (name, url, img) VALUES ('$name', '$url', '$img')";
        if($conn->query($petition))
        {
            return TRUE;
        } else {
            echo "Error: ". $petition . "<br>" .$conn -> error;
        }
        
    }     

    /******************************************************************************
     *                              DELETE                                        *
    ******************************************************************************/
    
    /**
     * Function that deletes a language
     * @lastUpdate 22/03/2023
     * @param $id
     * @return bool
     * */

    function deleteLanguage($id)
    {

        $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

        if($conn -> connect_error)
        {
            die ("Connection failed: ". $conn->connect_error);
        }

        $petition = "DELETE FROM Language WHERE id = $id";

        if($conn->query($petition))
        {
            return TRUE;
        } else {
            echo "Error: ". $petition . "<br>" .$conn -> error;
        }
        
    }    


    ?>