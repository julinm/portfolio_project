<?php
include_once('./repository/personalDataRepository.php');
include_once('./helper/functionsHelper.php');

/**
* Principal function that manages PersonalData
* @lastUpdate 22/03/2023
* */
function managePersonalData()
{
    if(isset($_POST['action'])){
        switch($_POST['action'])
        {
            case 'update':
                updateData();
            break;
            case 'new':
                newData();
            break;
            case 'delete':
                deleteData();
            break;
        }
    }

    showData();
}

/**
* Function that gets personal data
* @lastUpdate 22/03/2023
* */
function showData()
{
    $allPersonalData = getPersonalData();

}

/**
* Function that gets the information needed to update the personal data
* @lastUpdate 22/03/2023
* */
function updateData()
{
    //corroborates that it has the information needed to update personal data
    if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['lastname']) && !empty($_POST['lastname'])){
        $data['name'] = cleanString($_POST['name']);
        $data['lastname'] = cleanString($_POST['lastname']);
        $data['phone'] = $_POST['phone'];
        $data['email'] = $_POST['email'];

        //updates it
        updatePersonalData($data);
        
    }
}

/**
* Function that gets the information needed to insert new personal data
* @lastUpdate 22/03/2023
* */
function newData()
{
    //corroborates that it has the information needed to insert new data
    if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['lastname']) && !empty($_POST['lastname'])){
        $data['name'] = cleanString($_POST['name']);
        $data['lastname'] = cleanString($_POST['lastname']);
        $data['phone'] = $_POST['phone'];
        $data['email'] = $_POST['email'];

        //inserts it
        insertPersonalData($data);
        
    }
}


/**
* Function that deletes personal data
* @lastUpdate 22/03/2023
* */
function deleteData()
{
    //corroborates that it has the id needed to delete personal data
    if(isset($_POST['id']) && !empty($_POST['id'])){
        $id = $_POST['id'];

        //deletes it
        deletePersonalData($id);
        
    }
}
?>