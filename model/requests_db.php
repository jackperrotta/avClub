<?php

function addRequest($teacher_id,$room,$problem_type,$comment){
    global $db;
    global $last_id;
    $sql = "INSERT INTO `requests`(`teacher_id`, `avtech_id`, `room`, `problem_type`, `status`, `comments`) VALUES "
            . " (?, null, ?, ?, 'In Progress', ?)";
    $statement = $db->prepare($sql);
    $statement->bindValue(1,$teacher_id);
    $statement->bindValue(2,$room);
    $statement->bindValue(3,$problem_type);
    $statement->bindValue(4,$comment);
    $result = $statement->execute();
    $last_id = $db->lastInsertId();
    $statement->closeCursor();

    return $result;

}

function addConfirmation($confirmation,$last_id){
  global $db;
  $sql = "UPDATE `requests` SET `confirmation`=:confirm WHERE `request_id`= :id";
  $statement = $db->prepare($sql);
  $statement->bindValue(':confirm',$confirmation);
  $statement->bindValue(':id',$last_id);
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
