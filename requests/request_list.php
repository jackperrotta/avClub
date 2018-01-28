<?php include '../view/header.php'?>
<table border="1">
    <tr>
        <th>Request Id</th>
        <th>Teacher First Name</th>
        <th>Teacher Last Name</th>
        <th>Room</th>
        <th>Problem Type</th>
        <th>Comments</th>
        <th>Status</th>
        <th>Action</th>        
    </tr>
<?php
foreach($requests as $request)
{
    $requestid = $request['request_id'];
    $firstname = $request['firstname'];
    $lastname = $request['lastname'];
    $room = $request['room'];
    $problem_type = $request['problem_type'];
    $comments = nl2br(htmlspecialchars($request['comments']));
    $status = $request['status'];
    
    echo "<tr>
        <td>$requestid</td>
        <td>$firstname</td>
        <td>$lastname</td>
        <td>$room</td>
        <td>$problem_type</td>
        <td>$comments</td>
        <td>$status</td>
        <td><a href='index.php?id=$requestid'>Close this</a></td>
    </tr>";
}
?>
</table>
<p><a href="../people/index.php?logout">Logout</a></p>
    
<?php include '../view/footer.php'?>