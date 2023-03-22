<?php
include_once('./repository/languagesRepository.php');

/**
* Principal function that manages languages
* @lastUpdate 22/03/2023
* */
function manageLanguages()
{
    if(isset($_POST['action'])){
        switch($_POST['action'])
        {
            case 'update':
                updateLanguage();
            break;
            case 'new':
                newLanguage();
            break;
            case 'delete':
                deleteLanguage();
            break;
        }
    }

    showLanguages();
}

/**
 * Function that shows all language
 * @lastUpdate 22/03/2023
 * */
function showLanguages()
{
    $languages = getLanguages();

}

/**
* Function that gets the information needed to update a language
* @lastUpdate 22/03/2023
* */
function updateLanguage()
{
    //corroborates if it gets the information needed to update a language
    if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['level']) && !empty($_POST['level'])){
        $languages['name'] = $_POST['name'];
        $languages['level'] = $_POST['level'];

        //updates it
        updatelanguage($languages);
        
    }
}

/**
* Function thats get the information needed to insert a new language
* @lastUpdate 22/03/2023
* */
function newlanguage()
{
    //corroborates that it gets the information needed to insert a new language
    if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['level']) && !empty($_POST['level'])){
        $languages['name'] = $_POST['name'];
        $languages['level'] = $_POST['level'];

        //inserts it
        insertLanguage($languages);
        
    }
}

/**
* Function that deletes a language
* @lastUpdate 22/03/2023
* */
function deleteLanguage()
{
    //corroborates that it gets the id needed to delete a language
    if(isset($_POST['id']) && !empty($_POST['id'])){
        $id = $_POST['id'];

        //deletes it
        deleteLanguage($id);
        
    }
}

?>
