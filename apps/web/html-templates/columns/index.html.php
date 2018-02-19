<?php
$columns = $vm->columns();
?>
<div class="btns-yaml-json">
<a href="javascript:showSchema('yaml')">YAML</a>
<a href="javascript:showSchema('json')">JSON</a>
</div>
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
                <a id="column-num-<?php echo $column["id"]; ?>" href="javascript:void(0)" onclick="columnDetail(event, <?php echo $column["id"]; ?>)">
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

<script type="text/javascript">
    function showSchema(sType) {

        (async function() {
            let response = await fetch('schema/' + <?php echo $vm->tableID(); ?> + '?displayType=' + sType, {
                credentials: 'same-origin',
                method: 'get'
            });
            let txt = await response.text();
            $("#column-detail").html(txt);
        })();
    }
</script>