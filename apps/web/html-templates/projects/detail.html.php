<?php
if(empty($dataSets)){
    ?>
    <div>No datasets found</div>
    <div><input type="button" value="Fetch DataSets" onclick="fetchDataSets(<?php echo $id; ?>)"></div>

    <?php
}else {

    foreach ($dataSets as $dataSet)
    {

        echo  $dataSet["name"];
        ?>

        <?php
    }
}