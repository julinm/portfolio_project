<?php
include_once('./repository/projectsRepository.php');

/**
* Principal function that manages Projects
* @lastUpdate 22/03/2023
* */
function manageProjects()
{
    if(isset($_POST['action'])){
        switch($_POST['action'])
        {
            case 'update':
                updateProject();
            break;
            case 'new':
                newProject();
            break;
            case 'delete':
                deleteProject();
            break;
        }
    }

    showProjects();
}

/**
* Function that gets all projects
* @lastUpdate 22/03/2023
* */
function showProjects()
{
    $allProjects = getProjects();
}


/**
 * Function that gets the information needed to updatea project
* @lastUpdate 22/03/2023
* */
function updateProject()
{
    //corroborates that it gets the information needed to update a project information
    if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['date']) && !empty($_POST['date'])){
        $projects['name'] = $_POST['name'];
        $projects['url'] = $_POST['url'];
        $projects['img'] = $_POST['img'];
        $projects['date'] = $_POST['date'];

        //updates it
        updateProjects($projects);
        
    }
}

/**
* Function that gets the information needed to insert a new project
* @lastUpdate 22/03/2023
* */
function newProject()
{
    //corroborates that it gets the information needed to insert a new project
    if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['date']) && !empty($_POST['date'])){
        $projects['name'] = $_POST['name'];
        $projects['url'] = $_POST['url'];
        $projects['img'] = $_POST['img'];
        $projects['date'] = $_POST['date'];

        //updates it
        insertProjects($projects);
        
    }
}


/**
* Function that deletes a project
* @lastUpdate 22/03/2023
* */
function deleteProject()
{    
    //corroborates that it gets the id needed to delete a project
    if(isset($_POST['id']) && !empty($_POST['id'])){
        $id = $_POST['id'];

        //deletes it
        deleteProjects($id);
        
    }
}

?>
