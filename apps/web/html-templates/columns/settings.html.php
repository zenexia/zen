<?php
$settings = $vm->settings();
if(!empty($settings))
{
    ?>


    <table class="simple-table">
        <thead>
        <tr>
            <th>Item</th>
            <th style="min-width: 300px">Value</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Column</td>
            <td><?php echo $vm->columnName(); ?></td>
        </tr>
        <tr>
            <td>Label</td>
            <td>
                <div class="left-data" id="field_label-<?php echo $settings["id"]; ?>">
                    <?php echo $settings["field_label"]; ?>
                </div>
                <div class="left-data field_label-form" hidden>
                    <input class="d-field" id="val-field_label-<?php echo $settings["id"]; ?>" value="<?php echo $settings["field_label"]; ?>">
                </div>

                <div class="right-data save-btn field_label-form" hidden>
                    <a href='javascript:saveItem("field_label", <?php echo $settings["id"]; ?>)'>
                        <i class="fa fa-save"></i>
                    </a>
                </div>

                <div class="field_label-btns right-data del-btn">
                    <a href='javascript:removeItem("field_label", <?php echo $settings["id"]; ?>)'>
                        <i class="fa fa-trash"></i>
                    </a>
                </div>

                <div class="field_label-btns right-data btn-spacer">
                    |
                </div>

                <div class="field_label-btns right-data edit-btn">
                    <a  href='javascript:editItem("field_label", <?php echo $settings["id"]; ?>)'>
                        <i class="fa fa-edit"></i>
                    </a>
                </div>


            </td>
        </tr>
        <tr>
            <td>Data Type</td>
            <td>
                <div class="left-data" id="data_type-<?php echo $settings["id"]; ?>">
                    <?php echo $settings["data_type"]; ?>
                </div>
                <div class="left-data data_type-form" hidden>
                    <input class="d-field" id="val-data_type-<?php echo $settings["id"]; ?>" value="<?php echo $settings["data_type"]; ?>">
                </div>

                <div class="right-data save-btn data_type-form" hidden>
                    <a href='javascript:saveItem("data_type", <?php echo $settings["id"]; ?>)'>
                        <i class="fa fa-save"></i>
                    </a>
                </div>

                <div class="data_type-btns right-data del-btn">
                    <a href='javascript:removeItem("data_type", <?php echo $settings["id"]; ?>)'>
                        <i class="fa fa-trash"></i>
                    </a>
                </div>

                <div class="data_type-btns right-data btn-spacer">
                    |
                </div>

                <div class="data_type-btns right-data edit-btn">
                    <a  href='javascript:editItem("data_type", <?php echo $settings["id"]; ?>)'>
                        <i class="fa fa-edit"></i>
                    </a>
                </div>


            </td>
        </tr>
        <tr>
            <td>Min Value</td>
            <td>
                <div class="left-data" id="min_vl-<?php echo $settings["id"]; ?>">
                    <?php echo $settings["min_vl"]; ?>
                </div>
                <div class="left-data min_vl-form" hidden>
                    <input class="d-field" id="val-min_vl-<?php echo $settings["id"]; ?>" value="<?php echo $settings["min_vl"]; ?>">
                </div>

                <div class="right-data save-btn min_vl-form" hidden>
                    <a href='javascript:saveItem("min_vl", <?php echo $settings["id"]; ?>)'>
                        <i class="fa fa-save"></i>
                    </a>
                </div>

                <div class="min_vl-btns right-data del-btn">
                    <a href='javascript:removeItem("min_vl", <?php echo $settings["id"]; ?>)'>
                        <i class="fa fa-trash"></i>
                    </a>
                </div>

                <div class="min_vl-btns right-data btn-spacer">
                    |
                </div>

                <div class="min_vl-btns right-data edit-btn">
                    <a  href='javascript:editItem("min_vl", <?php echo $settings["id"]; ?>)'>
                        <i class="fa fa-edit"></i>
                    </a>
                </div>


            </td>
        </tr>
        <tr>
            <td>Max Value</td>
            <td>
                <div class="left-data" id="max_vl-<?php echo $settings["id"]; ?>">
                    <?php echo $settings["max_vl"]; ?>
                </div>
                <div class="left-data max_vl-form" hidden>
                    <input class="d-field" id="val-max_vl-<?php echo $settings["id"]; ?>" value="<?php echo $settings["max_vl"]; ?>">
                </div>

                <div class="right-data save-btn max_vl-form" hidden>
                    <a href='javascript:saveItem("max_vl", <?php echo $settings["id"]; ?>)'>
                        <i class="fa fa-save"></i>
                    </a>
                </div>

                <div class="max_vl-btns right-data del-btn">
                    <a href='javascript:removeItem("max_vl", <?php echo $settings["id"]; ?>)'>
                        <i class="fa fa-trash"></i>
                    </a>
                </div>

                <div class="max_vl-btns right-data btn-spacer">
                    |
                </div>

                <div class="max_vl-btns right-data edit-btn">
                    <a  href='javascript:editItem("max_vl", <?php echo $settings["id"]; ?>)'>
                        <i class="fa fa-edit"></i>
                    </a>
                </div>


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
    <form method="post" id="new-col-settings" action="column-settings/<?php echo $vm->id(); ?>">

        <input type="hidden" id="item-id" name="id" value="<?php echo $vm->id(); ?>">

        <div class="form-group">
            <label>Field Label
                <input name="field_label" class="form-field" type="text" placeholder="Name to show on the form">
            </label>
        </div>
        <div class="clearfix"></div>

        <div class="form-group">
            <label>Value Type
                <select name="field_data_type" class="form-field" onchange="javascript:updateForm(event)">
                    <option value="text">Text</option>
                    <option value="bool">Boolean</option>
                    <option value="int">Integer</option>
                </select>
            </label>
        </div>

        <div class="clearfix"></div>

        <?php
        if($vm->columnType() == "INTEGER")
        {
            ?>
            <div id="min-value" class="form-group minvalue">
                <label>Min Value
                    <input name="min_vl" class="form-field" type="number" placeholder="Minimum value">
                </label>
            </div>
            <div class="clearfix"></div>

            <div id="max-value" class="form-group maxvalue">
                <div class="clearfix"></div>
                <label>Max Value
                    <input name="max_vl" class="form-field" type="number" placeholder="Maximum value">
                </label>
            </div>
            <div class="clearfix"></div>
            <?php
        } elseif ($vm->columnType() == "STRING"){
            ?>
            <div id="min-length" class="form-group minvalue">
                <label>Min Length
                    <input name="min_vl" class="form-field" type="number" placeholder="Minimum length">
                </label>
            </div>
            <div class="clearfix"></div>

            <div id="max-length" class="form-group maxvalue">
                <div class="clearfix"></div>
                <label>Max Length
                    <input name="max_vl" class="form-field" type="number" placeholder="Maximum length">
                </label>
            </div>
            <div class="clearfix"></div>

            <?php
        }
        ?>

        <div class="form-group">
            <label>Type Check
                <select name="type_check" class="form-field" onchange="javascript:updateForm(event)">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </label>
            <div class="clearfix"></div>
        </div>

        <div class="form-group">
            <label>Constraints
                <select name="field_data_type" class="form-field" onchange="javascript:updateForm(event)" multiple>
                    <option value="min">Min</option>
                    <option value="max">Max</option>
                    <option value="cat">Categorical</option>
                </select>
            </label>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
<div class="help-text" hidden>
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
</div>
        <div class="form-field">
            <input class="sub-btn" type="submit" value="save">
        </div>

    </form>
</div>
<script type="text/javascript">
    function createSettings(id) {
        $(".status-alert").hide();
        $(".create-settings-form").slideDown();
        autosize(document.querySelectorAll('textarea'));
    }

    function updateForm(e) {
        let selectedItem = $(e.target).val();
        if (selectedItem == "text") {

        } else if (selectedItem == "bool") {

        } else if (selectedItem == "cat") {

        }
    }

    function updateUI() {
        console.log("here");
        $(".current-col").find("div").click();
    }

    $( document ).ready(function() {
        let options = {
            target:        '#column-detail',
            success:       updateUI  // post-submit callback
        };
        $("#new-col-settings").ajaxForm(options);
    });


    function editItem(itemType, itemID) {
        $("." + itemType + "-form").show();
        $("." + itemType + "-btns").hide();
        $("#" + itemType + "-" + itemID).html("");
    }
    function removeItem(itemType, itemID) {

    }

    function saveItem(itemType, itemID) {

        const formData = new FormData();
        formData.append("id", itemID);
        formData.append("_method", "PUT");
        formData.append("item_name", itemType);
        let newVal = $("#val-" + itemType + "-" + itemID).val();
        formData.append("item_val", newVal);


        (async function() {
            let response = await fetch('column-settings/' + itemID, {
                credentials: 'same-origin',
                method: 'post',
                body: formData
            });
            let txt = await response.text();
            if(txt > 0){
                $("." + itemType + "-form").hide();
                $("." + itemType + "-btns").show();
                $("#" + itemType + "-" + itemID).html(newVal);
            }
        })();

    }

</script>