<?php
foreach ($vm->projects() as $project)
{
    if(!empty($project["data_sets"])){
        ?>
        <li class="has-children">
            <input type="checkbox" name ="p-<?php echo $project["id"]; ?>" id="p-<?php echo $project["id"]; ?>">
            <label for="p-<?php echo $project["id"]; ?>"><?php echo $project["name"]; ?></label>
            <ul>
                <?php
                foreach ($project["data_sets"] as $dataSet){
                    if(!empty($dataSet["tables"])){
                        ?>
                        <li class="has-children">
                            <input type="checkbox" name ="d-<?php echo $dataSet["id"]; ?>" id="d-<?php echo $dataSet["id"]; ?>">
                            <label for="d-<?php echo $dataSet["id"]; ?>"><?php echo $dataSet["name"]; ?></label>
                            <ul>
                                <?php
                                foreach ($dataSet["tables"] as $table){
                                    ?>
                                    <li><a href="javascript:void(0)" onclick="tableDetail(event, <?php echo $table["id"]; ?>)"><?php echo $table["name"]; ?></a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li>
                            <a href="javascript:datasetDetail(<?php echo $dataSet["id"]; ?>)"><?php echo $dataSet["name"]; ?></a>
                        </li>
                        <?php
                    }
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
