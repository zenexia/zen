<?php
foreach ($projects as $project)
{
    $class = "";
    if(!empty($project["dsets"])){
        $class = "has-children";
        ?>
        <li class="<?php echo $class; ?>">
            <input type="checkbox" name ="p-<?php echo $project["id"]; ?>" id="p-<?php echo $project["id"]; ?>">
            <label onclick="showProjectDetail(<?php echo $project["id"]; ?>)" for="p-<?php echo $project["id"]; ?>"><?php echo $project["name"]; ?></label>
            <ul>
                <?php
                foreach ($project["dsets"] as $dset){
                    ?>
                    <li><a href="#"><?php echo $dset["name"]; ?></a></li>
                    <?php
                }
                ?>
            </ul>
            </li>
        <?php
    } else {
        ?>
        <li>
            <a href="javascript:showProjectDetail(<?php echo $project["id"]; ?>)"><?php echo $project["name"]; ?></a>
        </li>
        <?php
    }
}
?>
