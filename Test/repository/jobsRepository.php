<?php

require_once('./helper/constants.php');


/******************************************************************************
     *                              GET                                           *
******************************************************************************/

/**
     * 
     * @lastUpdate
     * @param 
     * @return 
     *      */

    function getJobs()
    {
        $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

        if($conn -> connect_error)
        {
            die ("Connection failed: ". $conn->connect_error);
        }

        $petition = ('SELECT * FROM jobs' );
        $response = $conn->query($petition);

        return $response;
        
    }     
    

    /******************************************************************************
     *                              UPDATE                                           *
******************************************************************************/
    /**
     * 
     * @lastUpdate
     * @param 
     * @return 
     *      */

    function updateJobs($params)
    {

        $key = $params['key'];
        $value = $params['value'];
        $id = $params['id'];

        $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

        if($conn -> connect_error)
        {
            die ("Connection failed: ". $conn->connect_error);
        }

        $petition = "UPDATE jobs SET $key = '$value' WHERE id='$id'";
        $response = $conn->query($petition);

        return $response;
        
    }    
    


    /******************************************************************************
     *                              INSERT                                        *
    ******************************************************************************/
    
    /**
     * 
     * @lastUpdate
     * @param 
     * @return 
     *      */

    function insertJobs($values)
    {

        $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

        if($conn -> connect_error)
        {
            die ("Connection failed: ". $conn->connect_error);
        }

        $name = $values['name'];
        $url = $values['url'];
        $img = $values ['img'];

        $petition = "INSERT INTO jobs (name, url, img) VALUES ('$name', '$url', '$img')";
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
     * 
     * @lastUpdate
     * @param 
     * @return 
     *      */

    function deleteJobs($id)
    {

        $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

        if($conn -> connect_error)
        {
            die ("Connection failed: ". $conn->connect_error);
        }

        $petition = "DELETE FROM jobs WHERE id = $id";

        if($conn->query($petition))
        {
            return TRUE;
        } else {
            echo "Error: ". $petition . "<br>" .$conn -> error;
        }
        
    }    


    ?>