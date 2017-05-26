<?php
/**
 * Created by PhpStorm.
 * User: Olu Amowe
 * Date: 5/26/2017
 * Time: 10:35 AM
 */
include_once '../myfirstproject/classes/DbController.php';
$connect = new DB_connection();
$country = $_POST['country'];
$result = $connect->select($country);
foreach($result as $key => $value){
    $res = $value['name'];
    $emailres = $value['email'];

    echo "
                    <tr><td><span style='color:orange'>$res</span></td>
                    <td><span style='color:orange'>$emailres</span></td></tr>";
}
?>