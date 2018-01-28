<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function addRequest($teacher_id,$room,$problem_type,$comment){
    global $db;
    $sql = "INSERT INTO `requests`(`teacher_id`, `avtech_id`, `room`, `problem_type`, `status`, `comments`) VALUES "
            . " (:teacher_id, null, :room, :problem_type, 'In Progress', :comment)";
    $statement = $db->prepare($sql);
    $statement->bindValue(':teacher_id',$teacher_id);
    $statement->bindValue(':room',$room);
    $statement->bindValue(':problem_type',$problem_type);
    $statement->bindValue(':comment',$comment);
    $result = $statement->execute();
    $statement->closeCursor();
    
    //result is true on success, false on error
    return $result;
}

function getRequests($status){
    global $db;
    $sql = "SELECT `request_id`, `firstname`, `lastname`, `teacher_id`, `avtech_id`, `room`, `problem_type`, `status`, `comments` FROM `requests`, `people` "
            . " WHERE `status` = :status and `teacher_id` = `people_id`";
    $statement = $db->prepare($sql);
    $statement->bindValue(':status',$status);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    //result is the array of results
    return $result;    
}

function closeRequest($request_id,$avtech_id){
    global $db;
    $sql = "UPDATE `requests` SET status = 'Resolved', `avtech_id` = :avtech_id WHERE request_id = :request_id";
    $statement = $db->prepare($sql);
    $statement->bindValue(':avtech_id',$avtech_id);
    $statement->bindValue(':request_id',$request_id);
    $result = $statement->execute();
    $statement->closeCursor();
    
    //result is true on success, false on error
    return $result;
}

function getRequestTypes(){
    global $db;
    $sql = "SELECT * From `problem_types` ORDER BY sort_order";
    $statement = $db->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    //result is the array of results
    return $result;    
}


?>