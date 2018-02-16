<?php
$settings = $vm->settings();
if(!empty($settings))
{
    ?>


    <table class="zen-table">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th style="min-width: 300px">Value</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Title</td>
            <td>
                <div style="float: left" id="cs-<?php echo $settings["id"]; ?>">Some data</div>
                <a style="float: right" href="javascript:editSetting(<?php echo $settings["id"]; ?>)">Edit</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Min Value</td>
            <td class="column-name">
                <a href="javascript:columnDetail(<?php echo $column["id"]; ?>)">
                    <div >
                        <?php echo $settings["title"]; ?>
                    </div>
                </a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Max Value</td>
            <td class="column-name">
                <a href="javascript:columnDetail(<?php echo $column["id"]; ?>)">
                    <div >
                        <?php echo $settings["title"]; ?>
                    </div>
                </a>
            </td>
        </tr>
        </tbody>
    </table>
    <?php
}else{
    ?>

    <div class="status-alert">
    <div>No Settings associated with this column</div>
    <a href="javascript:createSettings(<?php echo $vm->id(); ?>)">Create</a>
    </div>
    <?php
}
?>
<div class="create-settings-form" hidden>
    <form id="new-col-settings">

        <div class="form-group">
            <label>Form Title
                <input class="form-field" type="text" placeholder="Name to show on the form">
            </label>
        </div>
        <div class="clearfix"></div>

        <?php
        if($vm->columnType() == "INTEGER")
        {
            ?>
            <div class="form-group">
                <label>Minimum Value
                    <input class="form-field" type="number" placeholder="Minimum vlaue">
                </label>
            </div>
            <div class="form-group">
                <div class="clearfix"></div>
                <label>Maximum Value
                    <input class="form-field" type="number" placeholder="Maximum vlaue">
                </label>
            </div>
            <div class="clearfix"></div>
            <?php
        }
        ?>
        <div class="form-group">
            <label>Data Style
                <select class="form-field">
                    <option>Free Text</option>
                    <option>Categorical</option>
                </select>
            </label>
        </div>

        <div class="clearfix"></div>

        <div class="form-group">
            <label>Value Sets
                <textarea class="form-field" type="text" placeholder="Accepted Values"></textarea>
                <div class="clearfix"></div>
            </label>
        </div>

        <div class="clearfix"></div>
        <hr>
        <div>
            Accepted Value Sets
            <p>
                Range <br>
                [1-100]<br>
                [45-76]
            </p>
            <hr>
            <p>
                Name value pairs <br>
                北海道:'01'<br>
                青森:'02'<br>
            </p>
            <hr>
            <p>
                Name value arrays <br>
                [北海道,青森]:['01','02']<br>
                [北海道,青森, ...]:[1-47]<br>
            </p>
            <hr>
            <p>
                Range with label and value with label<br>
                [1-12]月:[1-12]<br>

            </p>
        </div>

    </form>
</div>
<script type="text/javascript">
    function createSettings(id) {
        $(".status-alert").hide();
        $(".create-settings-form").slideDown();
        autosize(document.querySelectorAll('textarea'));
    }
</script>