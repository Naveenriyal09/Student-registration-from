<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table , th, td {
    border : 2px solid black;
    padding: 14px;
}
.tr{
    margin-top: 20px;

}
    </style>
</head>
<body>
<table>
  <tr>
    <th>ID</th>
    <th>First_name</th>
    <th>Last_name</th>
    <th>Emai_address</th>
    <th>password</th>
  </tr>
  <?php

    for ($i=0; $i<sizeof($users); $i++) {
        echo "<tr>
            <td>" . $users[$i]['ID'] ."</td>
            <td>" . $users[$i]['First_name'] . "</td>
            <td>" . $users[$i]['Last_name'] . "</td>
            <td>" . $users[$i]['Email'] . "</td>
            <td>" . $users[$i]['Password'] . "</td>
            <td><a href='http://localhost/CODEIGNITER/DAY1/index.php/Welcome/DeleteData/".$users[$i]['ID']."'>Delete</a></td>
            <td><a href='http://localhost/CODEIGNITER/DAY1/index.php/Welcome/editUserData/".$users[$i]['ID']."'>edit</a></td>
            </tr>";
        }
        ?>
  
</table>
</body>
</html>




