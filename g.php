<?php
$f = $_POST['fname'];
$g = $_POST['lname'];


$a = mysqli_connect("localhost", "root", "");
mysqli_select_db($a, 'class');
$b = mysqli_query($a, "select * from `voria` where fname='$f'");
$c = mysqli_fetch_array($b);

echo("<style>
body{
    background-image:url('voriaaa.jpg');
    font color='white'
}
</style>
    ");

if (isset($c["fname"]) && isset($c["lname"])) {
    echo ("<center>");
    echo ("<table border='4' bordercolor='#a6adb0' bgcolor='#ccd5d6' color='white' ><br><br><br><br><br><br><br><br><br><br><br><br><br>
<tr>
<th> First Name </th>
<th> Last Name </th>
<th> Age </th>
<th> Blood Type </th>
");
    echo ("<tr>");
    echo ("<td>" . $c['fname'] . "</td>" .
        "<td>" . $c['lname'] . "</td>" .
        "<td>" . $c['age'] . "</td>" .
        "<td>" . $c['blood type'] . "</td>");
        echo ("</center>");
}
// $f=$c['fname'] && $g=$c['lname']
else {echo ("<center>");
    echo ("اطلاعات مربوطه پیدا نشد:(");
    echo ("</center>");
}

?>