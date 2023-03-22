<?php
include_once('./repository/jobsRepository.php');
include_once('./helper/functionsHelper.php');

/**
* Principal function that manages jobs
* @lastUpdate 22/03/2023
* */
function manageJobs()
{
    if(isset($_POST['action'])){
        switch($_POST['action'])
        {
            case 'update':
                updateJob();
            break;
            case 'new':
                newJob();
            break;
            case 'delete':
                deleteJob();
            break;
        }
    }

    showJobs();
}

/**
* Function that gets all jobs
* @lastUpdate 22/03/2023
* */
function showJobs()
{
    $allJobs = getJobs();

}


/**
* Function that gets the information needed to update a job
* @lastUpdate 22/03/2023
* */
function updateJob()
{
    //corroborates that it gets the information needed to update a job
    if(isset($_POST['position']) && !empty($_POST['position']) && isset($_POST['iniDate']) && !empty($_POST['iniDate'])){
        $jobs['position'] = cleanString($_POST['position']);
        $jobs['description'] = $_POST['description'];
        $jobs['company'] = $_POST['company'];
        $jobs['iniDate'] = $_POST['iniDate'];
        $jobs['endDate'] = $_POST['endDate'];

        //updates it
        updateJobs($jobs);
        
    }
}

/**
* Function that gets the information needed to insert a new job
* @lastUpdate 22/03/2023
* */
function newJob()
{
    //corroborates that it gets the information needed to insert a new job
    if(isset($_POST['position']) && !empty($_POST['position']) && isset($_POST['iniDate']) && !empty($_POST['iniDate'])){
        $jobs['position'] = cleanString($_POST['position']);
        $jobs['description'] = $_POST['description'];
        $jobs['company'] = $_POST['company'];
        $jobs['iniDate'] = $_POST['iniDate'];
        $jobs['endDate'] = $_POST['endDate'];

        //inserts it
        insertJobs($jobs);
        
    }
}

/**
* Function that deletes a job
* @lastUpdate 22/03/2023
* */
function deleteJob()
{    
    //corroborates that it gets the id needed to delete a job
    if(isset($_POST['id']) && !empty($_POST['id'])){
        $id = $_POST['id'];

        //deletes it
        deleteJobs($id);
    }
}
?>