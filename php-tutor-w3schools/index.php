<?php
$txt = "W3Schools.com";
echo "I love $txt!";
?>
<br>
<h1>variabel scope</h1>
<?php
function add()
{
    static $add = 0;
    echo $add;
    $add++;
}

add();
add();
add();
?>
<h1>string</h1>
<?php
$x = "kevin";
echo "halo $x<br>";
echo 'halo $x<br>';
echo 'panjang $x = ' . strlen($x) . '<br>';
echo "'halo semuanya nama saya kevin' panjang kata yaitu = ";
echo str_word_count("halo semuanya nama saya kevin") . '<br>'; //untuk menghitung jumlah kata pada string
echo strpos('halo semunya', 'nya') . '<br>'; //berguna untuk mencari posisi 'kata' yang terkandung pada string teks
echo strtoupper("halo semuanya nama saya kevin<br>"); //berguna untuk mengubah string menjadi uppercase semua\
echo strtolower("PMR, SEA, PMI") . '<br>'; //berguna untuk mengubah string menjadi lowercase semua
echo str_replace('kevin', 'gibran', $x) . '<br>'; //mengganti kata dengan kata lain namun tidak mengubah value sebelumnya secara permanen
echo strrev('halo semuanya nama saya kevin') . '<br>'; //mengreverse string
echo trim("          halo     semuanya    nama    saya kevin    ") . '<br>'; //menghapus semua whitespace yang lebih dari 1 whitespace
$x = "halo semuanya, nama saya kevin";
$y = explode(',', $x); //memecah atau split string menjadi array
print_r($y);
//concat string
$x = 'hello';
$y = ' nama saya kevin';
echo '<br>' . $x . $y; // '.' adalah operator concat layaknya + pada js
echo "<br> $x $y <br>"; // lebih simpel menggunakan double quotes
//substring
$x = "halo nama saya";
echo substr($x, 1, 5) . '<br>';
echo substr($x, 6) . '<br>';
?>
<h1>PHP Number</h1>
<p>There are three main numeric types in PHP:</p>
<ul>
    <li><span style="color: red; background-color: rgba(0, 0, 0, 0.1)">integer</span></li>
    <li><span style="color: red; background-color: rgba(0, 0, 0, 0.1)">float</span></li>
    <li><span style="color: red; background-color: rgba(0, 0, 0, 0.1)">number string</span></li>
</ul>
<p>In addition, PHP has two more data types used for numbers:</p>
<ul>
    <li><span style="color: red; background-color: rgba(0, 0, 0, 0.1)">infinity</span></li>
    <li><span style="color: red; background-color: rgba(0, 0, 0, 0.1)">NAN</span></li>
</ul>
<?php
$a = 3; //ini integer
$b = 3.9999; //ini float
$c = '3'; //ini number string
var_dump("$a adalah integer " . is_int($a) . '<br>');
var_dump("$c adalah numeris " . is_numeric($c) . '<br>');
?>
<h1>PHP Casting</h1>
<ul>
    <li><span style="color: red; background-color: rgba(0, 0, 0, 0.1)">(string)</span> - Converts to data type String</li>
    <li><span style="color: red; background-color: rgba(0, 0, 0, 0.1)">(int)</span> - Converts to data type Integer</li>
    <li><span style="color: red; background-color: rgba(0, 0, 0, 0.1)">(float)</span> - Converts to data type Float</li>
    <li><span style="color: red; background-color: rgba(0, 0, 0, 0.1)">(bool)</span> - Converts to data type Boolean</li>
    <li><span style="color: red; background-color: rgba(0, 0, 0, 0.1)">(array)</span> - Converts to data type Array</li>
    <li><span style="color: red; background-color: rgba(0, 0, 0, 0.1)">(object)</span> - Converts to data type Object</li>
    <li><span style="color: red; background-color: rgba(0, 0, 0, 0.1)">(unset)</span> - Converts to data type NULL</li>
</ul>
<?php
$a = 3;
$b = "halo";
$b = (int)$b;
var_dump($a);
var_dump((string)$a);
var_dump($b);
?>
<h1>PHP Math</h1>
<?php
echo pi() . '<br>';
echo "<b>angka terkecil dan terbesar dari array ini 0, 150, 30, 20, -8, -200 yaitu</b><br>";
echo (min(0, 150, 30, 20, -8, -200)) . '<br>';
echo (max(0, 150, 30, 20, -8, -200)) . "<br>";
echo "<b>random angka dari 10 hingga 100</b><br>";
echo rand(10, 100);
?>
<h1>PHP constant</h1>
<p>A constant is an identifier (name) for a simple value. The value cannot be changed during the script. <br>
    A valid constant name starts with a letter or underscore (no $ sign before the constant name). <br>
    Note: Unlike variables, constants are automatically global across the entire script.</p>
<?php
define("GREETING", "Welcome to W3Schools.com!", true); //disarankan menggunakan yang ini saja;
//true pada argument ketiga berguna untuk mengaktifkan case-sensitive pada fungsi define
//default nya constan itu case-insensitive
echo GREETING . '<br>';
//atau
const HAI = "halo semua <br>";
echo HAI;
function halo()
{
    echo GREETING . "<br>";
}
halo();
?>
<h1>PHP Magic Constans</h1>
<p>NOTE:</p>
<p>The magic constants are case-insensitive, meaning __LINE__ returns the same as __line__.</p>
<?php
echo __FILE__ . "<br>";
?>
<h1>PHP Operator</h1>
<p>php operator sama seperti operator pemograman lainnya pada dasar nya <br>tapi ada yang berbeda di php ada operator yang menurut saya keren yaitu <code>$x <=> $y</code></p>
<?php
$x = 1;
$y = 2;
echo "pada operator <=> jika $x < $y dia akan mengembalikan nilai";
var_dump($x <=> $y);
echo '<br>';
$x = 2;
$y = 2;
echo "pada operator <=> jika $x = $y dia akan mengembalikan nilai";
var_dump($x <=> $y);
echo '<br>';
$x = 3;
$y = 2;
echo "pada operator <=> jika $x > $y dia akan mengembalikan nilai";
var_dump($x <=> $y);
echo '<br>';
?>
<h1>foreach loop array di php</h1>
<?php
$arr = array('kevin', 'rama', 'yefta', 'dape', 'dapa', 'sajidan');
echo '$arr = ';
foreach ($arr as $nama) {
    echo $nama;
}
echo '<br>';
foreach ($arr as $nama) {
    if ($nama == 'yefta') $nama = 'lengkong'; // array item tidak berubah walaupun di ganti array item nya di dalam loop
}
var_dump($arr);
echo '<br>';
foreach ($arr as &$nama) {
    if ($nama == 'rama') $nama = 'welly'; // array item berubah karena di ganti array item nya di dalam loop yang di mana $nama di jadikan refrensi menggunakan &
}
var_dump($arr);
?>
<h1>funtion php</h1>





</p>
<?php
function add_five(&$value) //Ketika argumen fungsi dilewatkan sebagai referensi, perubahan pada argumen tersebut juga mengubah variabel yang dilewatkan. Untuk mengubah argumen fungsi menjadi referensi, & operator berikut digunakan:
{
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>

<h1>array pada PHP</h1>
<h3>PHP Array Types</h3>
<p></p>
In PHP, there are three types of arrays:
<ul>
    <li><u><b>Indexed arrays</b></u> - Arrays with a numeric index</li>
    <li><u><b>Associative arrays</b></u> - Arrays with named keys</li>
    <li><u><b>Multidimensional arrays</b></u> - Arrays containing one or more arrays</li>
</ul>
<p>$varr = array(value1, value2, value3, ...);
    <br>
    or you can also <br>
    $varr = [value1, value2, value3, ...];
</p>
<?php
    $varr = array("Volvo", 15, ["apples", "bananas"]);
    $varr = ["Volvo", 15, ["apples", "bananas"]];
    var_dump($varr);
?>  
<p>ini adalah array function: <br>
$varr = array("Volvo", 15, ["apples", "bananas"]); <br>
    count($varr); <br>
    output: 
    <?php
        echo count($arr)
    ?>
</p>

<?php
    $car = [
        "brand" => "Ford",
        "model" => "Mustang",
        "year" => 1964
      ];
    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

    foreach ($car as $x => $y) {
      echo "$x: $y <br>";
    }
?>
<?php
    function myFunction() {
        echo "I come from a function!";
      }
      
      $myArr = array("Volvo", 15, myFunction());
      
      $myArr[2];
?>

<p>
<h3>PHP - Sort Functions For Arrays</h3>
In this chapter, we will go through the following PHP array sort functions: <br>
<ul>
<li>sort() - sort arrays in ascending order <br></li>
<li>rsort() - sort arrays in descending order <br></li>
<li>asort() - sort associative arrays in ascending order, according to the value <br></li>
<li>ksort() - sort associative arrays in ascending order, according to the key <br></li>
<li>arsort() - sort associative arrays in descending order, according to the value <br></li>
<li>krsort() - sort associative arrays in descending order, according to the key <br></li>
</ul>

</p>