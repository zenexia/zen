<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Biqube :: Dashboard</title>
    <link rel="stylesheet" href="/assets/css/layout-screen-desktop.css">
    <link rel="stylesheet" href="/assets/css/fonts-screen-desktop.css">
</head>
<body>

<header>

    <div class="logo-header">
        <div class="logo">Biqube</div>
    </div>

    <div class="content-header">

        <div class="top-navi">
            <a href="logout">logout</a>
        </div>

    </div>

</header>
<nav class="side-nav">

    <div class="nav-title">
        Projects
        <a href="javascript:addProject()">
        <span class="nav-btn">
            +
        </span>
        </a>
    </div>
    <div id="project-form" hidden>

        <a href="javascript:closeForm(event)">
            <div class="btn-form-close">
                x
            </div>
        </a>
        <div id="msg"></div>
        <div class="form-fields">
            <form id="new-project-id-form">
                <input onfocus="clearError()" id="p-name" type="text" placeholder="New Project ID">
            </form>
            <input onclick="javascript:saveProject(event)" class="sub-btn" type="submit" value="ok">
        </div>
    </div>
    <div style="clear: both"></div>

    <ul id="projects-list" class="zen-accordion-menu">

    </ul>
</nav>
<main>

    <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
    </div>

    <div id="item-detail"></div>
    <div id="column-detail"></div>

</main>

<footer>Copyright (c) recruit 2017-<?php echo date("Y"); ?></footer>
<script type="text/javascript" src="/libs/jquery/dist/jquery.js"></script>
<script type="text/javascript" src="/libs/autosize/dist/autosize.min.js"></script>
<script type="text/javascript">

    $( document ).ready(function() {
        $("#project-form").hide();
        getProjectsList();
        toggleSpinner();
    });

    function addProject() {
        $("#project-form").slideDown();
    }
    function closeForm() {
        $("#project-form").slideUp();
        $("#p-name").val("");
    }
    function saveProject() {
        let pname = $("#p-name").val();

        if(!(pname.length > 0))
        {
            showError();
            setTimeout(function () {
                clearError();
            }, 3000);

        } else {

            const formData = new FormData();
            formData.append("project_name", $("#p-name").val());

            /*
            This is another way of calling the ajax with async functions
            (async function() {
                let response = await fetch('projects', {
                    credentials: 'same-origin',
                    method: 'post',
                    body: formData
                });
                let json = await response.json();
                console.log(json);
                if(json.success){
                    closeForm();
                } else {
                    showError();
                }
            })();

            */

            fetch('projects', {
                credentials: 'same-origin',
                method: 'post',
                body: formData
            }).then(function(response) {
                return response.text();
            }).then(function(text) {
                document.getElementById("item-detail").innerHTML = text;
                closeForm();
                return text;
            }).then(function (data) {
                getProjectsList();
            }).catch(function(err) {
                console.log(err);
            });
        }
    }

    function showError() {
        $("#p-name").addClass("error");
        $("#msg").html("Empty?");
    }
    function clearError() {
        $("#p-name").removeClass("error");
        $("#msg").html("");
    }

    function getMetaData() {
        fetch('metadata', {
            credentials: 'same-origin',
            method: 'get'
        }).then(function(response) {
            return response.text();
        }).then(function(text) {
            document.getElementById("item-detail").innerHTML = text;
        }).catch(function(err) {
            console.log(err);
        });
    }


    function getProjectsList() {
        fetch('projects', {
            credentials: 'same-origin',
            method: 'get'
        }).then(function(response) {
            return response.text();
        }).then(function(text) {
            document.getElementById("projects-list").innerHTML = text;
        }).catch(function(err) {
            console.log(err);
        });
    }
    function toggleSpinner() {
        $(".sk-folding-cube").toggle();
    }

    function showProjectDetail (id) {
        (async function() {
            let response = await fetch('projects/' + id, {
                credentials: 'same-origin',
                method: 'get'
            });
            let txt = await response.text();
            $("#item-detail").html(txt);

        })();
    }

    function fetchDataSets(id) {
        (async function() {
            let response = await fetch('projects/'  + id + '/data-sets', {
                credentials: 'same-origin',
                method: 'get'
            });
            let txt = await response.text();
            $("#item-detail").html(txt);

        })();
    }

    function tableDetail(e, id) {
        $(".current").removeClass("current");
        $(e.target).addClass("current");
        (async function() {
            let response = await fetch('tables/' + id, {
                credentials: 'same-origin',
                method: 'get'
            });
            let txt = await response.text();
            $("#item-detail").html(txt);

        })();
    }

    function columnDetail(e, id) {
        $(".current-col").removeClass("current-col");
        $(e.target).parent().parent().parent().addClass("current-col");
        (async function() {
            let response = await fetch('column-settings/' + id, {
                credentials: 'same-origin',
                method: 'get'
            });
            let txt = await response.text();
            $("#column-detail").html(txt);

        })();
    }

    function editSetting(id) {
        let original = $("#cs-" + id).text();
        console.log(original);
        $("#cs-" + id).html(
            `<input type="text" value="${original}">`
        );
    }

</script>
</body>
</html>