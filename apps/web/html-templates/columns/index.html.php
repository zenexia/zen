<?php
$columns = $vm->columns();
?>
<table class="zen-table">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Type</th>
        <th>Mode</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i=0;
    foreach ($columns as $column)
    {
        $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td class="column-name">
                <a href="javascript:void(0)" onclick="columnDetail(event, <?php echo $column["id"]; ?>)">
                    <div >
                        <?php echo $column["name"]; ?>
                    </div>
                </a>
            </td>
            <td><?php echo $column["type"]; ?></td>
            <td><?php echo $column["mode"]; ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>