<?php include("templates/header.php"); ?>
<body>
<?php include("templates/nav.php"); ?>
<div class="header">
    <h1>Header</h1>
</div>
<div class="row">
    <div class="content">
        <h3>Our Projects</h3>

<p id="demo"></p>

<script>
    document.getElementById("demo").innerHTML="Printed with JS";
</script>

<button onclick="document.getElementById('myImage').src='images/lights/buld_on.jpg';">Turn On The Light</button>

<img id="myImage" src="images/lights/buld_off.jpg" />

<button onclick="document.getElementById('myImage').src='images/lights/buld_off.jpg';">Turn Off The Light</button>

<br>
<br>
<br>
<br>
<br>

<script>
    document.write("This is a JS String");
</script>
<br>
<br>
<br>
<br>

<script>
    document.write("This is a JS String");
</script>
<br>
<br>

<script>
    let fname = "Alex Okama";
    document.write(fname);

</script>
<br>
<br>

<?php
// indexed array (numeric array)
$arr = array(34, 76, 89, 56, 'Alex', 'Peter', '2024-03-08');
print '<pre>';
print_r($arr);
print '</pre>';

// 

$arr_assoc = array('name' => 'Alex', 'email' => 'aokama@yahoo.com', 'address' => 'Mada');

print '<pre>';
print_r($arr_assoc);
print '</pre>';
?>
<br>
<br>
<?php
print $arr_assoc['email'];
?><br>
<?php
print $arr[2];
?>
<br>
<?php
// while loop

$init = 5;
$s = 5;
while( $init <= $s){
    print $init . '<br>'; $init++;
}

?>
<br>
<?php
// do-while loop

$i = 10;
do{
    print $i . '<br>'; $i++;
}
while( $i <= $s);
?>
<br>


<br>
<select>
<?php
    print "<option>".date("d")."</option>";
for($m=1; $m<=31; $m++){
    print "<option>$m</option>";
}
?>
</select>
<select>
<?php
// foreach
$months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Sep', 'Oct', 'Nov', 'Dec'];
print "<option>".date("M")."</option>";
foreach($months AS $month){
    print "<option>$month</option>";
}
?>
</select>
<select>
<?php
$max = date('Y') - 64;
$min = date('Y') - 18;
for($y=$min; $y>=$max; $y--){
    print "<option>$y</option>";
}
?>
</select>
    </div>
    <div class="side_bar">
        <h3>Sign In</h3>
        
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
</div>
<?php include("templates/footer.php"); ?>