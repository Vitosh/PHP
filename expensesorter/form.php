<?php
mb_internal_encoding('UTF-8');
$pageTitle = 'Форма';
include 'includes/header.php';

if($_POST){
    $name=trim($_POST['name']);
    $name=  str_replace('!', '', $name);
    $cost=trim($_POST['cost']);
    $cost=  (float)str_replace('!', '', $cost);
    $selectedGroup=(int)$_POST['group'];
    $error=false;
    if(mb_strlen($name)<2){
        echo '<p>The name is too short! Please, try again!</p>';
        $error=true;
    }
    
    if($cost<0){
        echo '<p>Invalid sum</p>';
        $error=true;
    }    
    if(!array_key_exists($selectedGroup, $groups)){
        echo '<p>Invalid Group</p>';
        $error=true;
    }
    $today = getdate();
//        print_r($today);
    if(!$error){
        $result=$today['mday'].'.'.$today['mon'].'.'.$today['year'].'!'.$name.'!'.$cost.'!'.$selectedGroup."\n\r";
        if(file_put_contents('data.txt', $result,FILE_APPEND))
        {
            echo 'Success';
        }
    }
}
?>
<a href ="index.php">Show list</a>
<form method="POST">
    <div>Description:<input type="text" name="name" /></div>
    <div>Price:<input type="text" name="cost" /></div>
    <div>
        <span>Type:</span>
        <select name="group">
            <?php
            foreach ($groups as $key => $value) {
                echo '<option value="' . $key . '">' . $value .
                '</option>';
            }
            ?>
        </select>           
    </div>        
    <div><input type="submit" value="Add" /></div>
</form>
<?php
include 'includes/footer.php';
?>
