<?php
include_once('./repository/coursesRepository.php');

/**
* Principal function that manages Courses
* @lastUpdate 22/03/2023
* */
function manageCourses()
{
    if(isset($_POST['action'])){
        switch($_POST['action'])
        {
            case 'update':
                updateCourse();
            break;
            case 'new':
                newCourse();
            break;
            case 'delete':
                deleteCourse();
            break;
        }
    }

    showCourses();
}

/**
* Function that gets all courses
* @lastUpdate 22/03/2023
* */
function showCourses()
{
    $allCourses = getCourses();

}


/**
* Function that gets the information needed to update a course
* @lastUpdate 22/03/2023
* */
function updateCourse()
{
    //corroborates that it gets the information needed to update a course
    if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['institution']) && !empty($_POST['institution'])){
        $course['name'] = $_POST['name'];
        $course['institution'] = $_POST['institution'];

        //updates it
        updateCourses($course);
        
    }
}

/**
* Function that gets the information needed to insert a course
* @lastUpdate 22/03/2023
* */
function newCourse()
{
     //corroborates that it gets the information needed to insert a new course
    if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['institution']) && !empty($_POST['institution'])){
        $course['name'] = $_POST['name'];
        $course['institution'] = $_POST['institution'];

        //inserts it
        insertCourses($course);
        
    }
}

/**
* Function that deletes a course
* @lastUpdate 22/03/2023
* */
function deleteCourse()
{
    //corroborates that it gets the id needed to delete a course
    if(isset($_POST['id']) && !empty($_POST['id'])){
        $id = $_POST['id'];

        //deletes it
        deleteCourses($id);
        
    }
}

?>