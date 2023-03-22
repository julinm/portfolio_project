<?php
include_once('./repository/skillsRepository.php');

/**
* Principal function that manages skills
* @lastUpdate 22/03/2023
* */
function manageSkills()
{
    if(isset($_POST['action'])){
        switch($_POST['action'])
        {
            case 'update':
                updateSkill();
            break;
            case 'new':
                newSkill();
            break;
            case 'delete':
                deleteSkill();
            break;
        }
    }

    showSkills();
}


/**
* Function that gets all skills
* @lastUpdate 22/03/2023
* return array $skills
* */
function showSkills()
{
    $skills['soft'] = getSoftSkills();
    $skills['hard']= getHardSkills();

    return $skills;

}

/**
* Function that gets the information needed to update a skill
* @lastUpdate 22/03/2023
* */
function updateSkill()
{
    //corroborates that it has the information to update the skill
    if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['level']) && !empty($_POST['level'])){
        $skills['name'] = $_POST['name'];
        $skills['level'] = $_POST['level'];

        //updates it
        updateSkills($skills);
        
    }
}

/**
* Function that gets the information needed to insert a new skill
* @lastUpdate 22/03/2023
* */
function newSkill()
{
    //corroborates that it has the information to insert a new skill
    if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['level']) && !empty($_POST['level'])){
        $skills['name'] = $_POST['name'];
        $skills['level'] = $_POST['level'];

        //updates it
        insertSkills($skills);
    }
}

/**
* Function that deletes a skill
* @lastUpdate 22/03/2023
* */
function deleteSkill()
{
    //corroborates that it has the id needed to delete a skill
    if(isset($_POST['id']) && !empty($_POST['id'])){
        $id = $_POST['id'];

        //deletes it
        deleteSkills($id);
        
    }
}
?>