<?php
session_start();
$base_url = 'http://' . $_SERVER['HTTP_HOST'] . '/Hacettepe-KDSE-BPYS';
if (!isset($_SESSION['userlogin'])) {
    header("Location: login-student.php");
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION);
    header("Location: main.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>KDSE-BPYS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Template Stylesheet -->
    <link href="../style.css" rel="stylesheet">
    <style>
    table {
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
        padding: 10px;
    }

    th {
        background-color: #eee;
    }

    h1 {
        text-align: center;
    }

    tr,
    td {
        width: 200px;
    }
    </style>

<body>
    <div class="container-fluid pt-4 px-4">
        <div class="send-patient">
            <span class='close closeBtn' id='closeBtn1'>&times;</span>
            <h1 class="form-header">Günlük Bakım Planı</h1>
            <div class="input-section-item">
                <div class="patients-save">
                    <form action="" method="POST" class="patients-save-fields">
                        <div class="input-section d-flex">
                            <p class="usernamelabel">Uygulama Giriniz</p>
                            <input type="text" class="form-control" required name="applications" id="diger"
                                placeholder="Uygulama Giriniz" maxlength="200">
                        </div>
                        <div class="input-section d-flex">
                            <p class="usernamelabel">Saat :</p>
                            <input type="time" class="form-control" required name="hours" id="diger">
                        </div>
                        <div class="input-section d-flex">
                            <p class="usernamelabel">Açıklama Giriniz</p>
                            <input type="text" class="form-control" required name="description" id="diger"
                                placeholder="Açıklama Giriniz" maxlength="2000">
                        </div>
                        <input type="submit" class="form-control submit" name="submit" id="submit" value="Kaydet">
                    </form>
                </div>
            </div>
        </div>


    </div>
    <script>
    $(function() {
        $('#closeBtn1').click(function(e) {
            let patient_id = <?php
                                    $userid = $_GET['patient_id'];
                                    echo $userid
                                    ?>;
            let patient_name = "<?php
                                    echo urldecode($_GET['patient_name']);
                                    ?>";
            var url = "<?php echo $base_url; ?>/updateForms/showAllForms.php?patient_id=" + patient_id +
                "&patient_name=" + encodeURIComponent(patient_name);
            $("#content").load(url);

        })
    });
    </script>
    <script>
    $(function() {
        $('#submit').click(function(e) {
            e.preventDefault()
            var valid = this.form.checkValidity();

            if (valid) {
                var id = <?php
                                $userid = $_SESSION['userlogin']['id'];
                                echo $userid
                                ?>;
                var name = $('#name').val();
                var surname = $('#surname').val();
                var age = $('#age').val();
                var not = $('#not').val();
                let form_num = 15;
                var patient_id = <?php
                                        $userid = $_GET['patient_id'];
                                        echo $userid
                                        ?>;
                let patient_name = "<?php
                                        echo urldecode($_GET['patient_name']);
                                        ?>";
                let yourDate = new Date();
                let creationDate = yourDate.toISOString().split('T')[0];
                let updateDate = yourDate.toISOString().split('T')[0];
                let applications = $("input[name='applications']").val();
                let hours = $("input[name='hours']").val();
                let description = $("input[name='description']").val();
                console.log("values initiated")

                $.ajax({
                    type: 'POST',
                    url: '<?php echo $base_url; ?>/submitOrUpdateGunlukbakim_form15.php',
                    data: {
                        id: id,
                        name: name,
                        surname: surname,
                        age: age,
                        not: not,
                        form_num: form_num,
                        patient_id: patient_id,
                        patient_name: patient_name,
                        creation_date: creationDate,
                        update_date: updateDate,
                        applications: applications,
                        hours: hours,
                        description: description
                    },
                    success: function(data) {
                        console.log(data);
                        alert(data);
                        let url =
                            "<?php echo $base_url; ?>/updateForms/showAllForms.php?patient_id=" +
                            patient_id + "&patient_name=" + encodeURIComponent(
                            patient_name);
                        $("#content").load(url);
                    },
                    error: function(data) {
                        console.log(data)
                    }
                })



            }
        })

    });
    </script>
    <script src=""></script>
</body>

</html>