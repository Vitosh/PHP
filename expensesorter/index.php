<?php
$pageTitle = 'List';
include 'includes/header.php';

if ($_POST) {
    $selectedGroup = 0;
    $selectedGroup = (int) $_POST['filter'];
}
?>
<form method ="POST">
<a href ="form.php">Add</a>

    <select name="filter">
        <?php
        echo '<option value = "0">All</option>';
        foreach ($groups as $key => $value) {
            echo '<option value="' . $key . '">' . $value . '</option>';
        }
        ?>
    </select>
    <input type="submit" value="Filter" />
</form>
<table border ="1">
    <tr>
        <td>Date</td>
        <td>Expense</td>
        <td>Sum</td>
        <td>Type</td>
    </tr>
    <?php
    if (file_exists('data.txt')) {
        $result = file('data.txt');
        $selectedGroup = 0;
        if ($_POST) {
            $selectedGroup = (int) $_POST['filter'];
        }
        $sum = 0;
        foreach ($result as $value) {
            $columns = explode('!', $value);
            if (count($columns) < 4) {
                continue;
            }
            
            if ($selectedGroup != $columns[3] && $selectedGroup != 0) {
                continue;
            }
            $sum += (float) $columns[2];
            echo '<tr>
                <td>' . $columns[0] . '</td>
                <td>' . $columns[1] . '</td>
                <td>' . $columns[2] . '</td>
                <td>' . $groups[trim($columns[3])] . '</td>
                </tr>';
        }
        echo '<tr>
                <td>' . '---' . '</td>
                <td>' . '---' . '</td>
                <td>' . $sum . '</td>
                <td>' . '---' . '</td>
                </tr>';
    }
    ?>
</table>
<?php
include 'includes/footer.php';
?>
