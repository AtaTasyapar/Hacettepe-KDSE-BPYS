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
    <link href="img/favicon.ico" rel="icon">


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
            <h1 class="form-header">ALDIĞI ÇIKARDIĞI İZLEMİ</h1>
            <div class="input-section-item">
                <div class="patients-save">
                    <form action="" method="POST" class="patients-save-fields">
                        <div class="input-section d-flex">
                            <p class="usernamelabel">zaman aralığını seçin: </p>
                            <div class="form-check">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="time_range" id="time_range"
                                        value="08.00-16.00">
                                    <label class="form-check-label" for="ÖdemŞiddeti">
                                        <span class="checkbox-header">08.00-16.00</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="time_range" id="time_range"
                                        value="16.00-24.00">
                                    <label class="form-check-label" for="ÖdemŞiddeti">
                                        <span class="checkbox-header">16.00-24.00</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="time_range" id="time_range"
                                        value="24.00-08.00">
                                    <label class="form-check-label" for="ÖdemŞiddeti">
                                        <span class="checkbox-header">24.00-08.00</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <h2 class="form-header">Aldığı</h2>
                        <div class="input-section d-flex">
                            <p class="usernamelabel">IV:</p>
                            <div class='d-flex flex-column w-75'>
                                <input type="number" class="form-control mt-2" required name="iv_input1" id="diger"
                                    placeholder="IV" min="0" max="10000">
                                <input type="number" class="form-control mt-2" required name="iv_input2" id="diger"
                                    placeholder="IV" maxlength="5" min="0" max="10000">
                                <input type="number" class="form-control mt-2" required name="iv_input3" id="diger"
                                    placeholder="IV" maxlength="5" min="0" max="10000">
                                <input type="number" class="form-control mt-2" required name="iv_input4" id="diger"
                                    placeholder="IV" maxlength="5" min="0" max="10000">
                            </div>
                        </div>
                        <div class="input-section d-flex">
                            <p class="usernamelabel">Kan Ürünü:</p>
                            <div class='d-flex flex-column w-75'>
                                <input type="number" class="form-control mt-2" required name="blood_product1" id="diger"
                                    placeholder="Kan Ürünü" maxlength="5" min="0" max="10000">
                                <input type="number" class="form-control mt-2" required name="blood_product2" id="diger"
                                    placeholder="Kan Ürünü" maxlength="5" min="0" max="10000">
                                <input type="number" class="form-control mt-2" required name="blood_product3" id="diger"
                                    placeholder="Kan Ürünü" maxlength="5" min="0" max="10000">
                                <input type="number" class="form-control mt-2" required name="blood_product4" id="diger"
                                    placeholder="Kan Ürünü" maxlength="5" min="0" max="10000">
                            </div>
                        </div>
                        <div class="input-section d-flex">
                            <p class="usernamelabel">Oral:</p>
                            <div class='d-flex flex-column w-75'>
                                <input type="number" class="form-control mt-2" required name="oral1" id="diger"
                                    placeholder="Oral" maxlength="5" min="0" max="10000">
                                <input type="number" class="form-control mt-2" required name="oral2" id="diger"
                                    placeholder="Oral" maxlength="5" min="0" max="10000">
                                <input type="number" class="form-control mt-2" required name="oral3" id="diger"
                                    placeholder="Oral" maxlength="5" min="0" max="10000">
                                <input type="number" class="form-control mt-2" required name="oral4" id="diger"
                                    placeholder="Oral" maxlength="5" min="0" max="10000">
                            </div>
                        </div>


                        <h2 class="form-header">Çıkardığı</h2>
                        <div class="input-section d-flex">
                            <p class="usernamelabel">İdrar:</p>
                            <div class='d-flex flex-column w-75'>
                                <input type="number" class="form-control mt-2" required name="idrar_input1" id="diger"
                                    placeholder="İdrar" maxlength="5" min="0" max="10000">
                                <input type="number" class="form-control mt-2" required name="idrar_input2" id="diger"
                                    placeholder="İdrar" maxlength="5" min="0" max="10000">
                                <input type="number" class="form-control mt-2" required name="idrar_input3" id="diger"
                                    placeholder="İdrar" maxlength="5" min="0" max="10000">
                                <input type="number" class="form-control mt-2" required name="idrar_input4" id="diger"
                                    placeholder="İdrar" maxlength="5" min="0" max="10000">
                            </div>
                        </div>
                        <div class="input-section d-flex">
                            <p class="usernamelabel">Gaita :</p>
                            <div class='d-flex flex-column w-75'>
                                <input type="number" class="form-control mt-2" required name="gaita_input1" id="diger"
                                    placeholder="Gaita" maxlength="5" min="0" max="10000">
                                <input type="number" class="form-control mt-2" required name="gaita_input2" id="diger"
                                    placeholder="Gaita" maxlength="5" min="0" max="10000">
                                <input type="number" class="form-control mt-2" required name="gaita_input3" id="diger"
                                    placeholder="Gaita" maxlength="5" min="0" max="10000">
                                <input type="number" class="form-control mt-2" required name="gaita_input4" id="diger"
                                    placeholder="Gaita" maxlength="5" min="0" max="10000">
                            </div>
                        </div>
                        <input class="form-control submit" type="submit" name="submit" id="submit" value="Kaydet">
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
            console.log("clicked")
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
                let form_num = 10;
                let patient_name = "<?php
                                        echo urldecode($_GET['patient_name']);
                                        ?>";
                let patient_id = <?php
                                        $userid = $_GET['patient_id'];
                                        echo $userid
                                        ?>;
                let yourDate = new Date()
                let creationDate = yourDate.toISOString().split('T')[0];
                let updateDate = yourDate.toISOString().split('T')[0];
                let time_range = $("input[type='radio'][name='time_range']:checked").val();
                let iv_input1 = parseInt($("input[name='iv_input1']").val())
                let iv_input2 = parseInt($("input[name='iv_input2']").val())
                let iv_input3 = parseInt($("input[name='iv_input3']").val())
                let iv_input4 = parseInt($("input[name='iv_input4']").val())
                let blood_product1 = parseInt($("input[name='blood_product1']").val())
                let blood_product2 = parseInt($("input[name='blood_product2']").val())
                let blood_product3 = parseInt($("input[name='blood_product3']").val())
                let blood_product4 = parseInt($("input[name='blood_product4']").val())
                let oral1 = parseInt($("input[name='oral1']").val())
                let oral2 = parseInt($("input[name='oral2']").val())
                let oral3 = parseInt($("input[name='oral3']").val())
                let oral4 = parseInt($("input[name='oral4']").val())
                let idrar_input1 = parseInt($("input[name='idrar_input1']").val())
                let idrar_input2 = parseInt($("input[name='idrar_input2']").val())
                let idrar_input3 = parseInt($("input[name='idrar_input3']").val())
                let idrar_input4 = parseInt($("input[name='idrar_input4']").val())
                let gaita_input1 = parseInt($("input[name='gaita_input1']").val())
                let gaita_input2 = parseInt($("input[name='gaita_input2']").val())
                let gaita_input3 = parseInt($("input[name='gaita_input3']").val())
                let gaita_input4 = parseInt($("input[name='gaita_input4']").val())
                let aldigi_total1 = iv_input1 + blood_product1 + oral1;
                let aldigi_total2 = iv_input2 + blood_product2 + oral2;
                let aldigi_total3 = iv_input3 + blood_product3 + oral3;
                let aldigi_total4 = iv_input4 + blood_product4 + oral4;
                let cikardigi_total1 = idrar_input1 + gaita_input1;
                let cikardigi_total2 = idrar_input2 + gaita_input2;
                let cikardigi_total3 = idrar_input3 + gaita_input3;
                let cikardigi_total4 = idrar_input4 + gaita_input4;
                let total = aldigi_total1 + aldigi_total2 + aldigi_total3 + aldigi_total4 +
                    cikardigi_total1 + cikardigi_total2 + cikardigi_total3 + cikardigi_total4;

                $.ajax({
                    type: 'POST',
                    url: '<?php echo $base_url; ?>/submitOrUpdateAldigi_form11.php',
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
                        time_range: time_range,
                        iv_input1: iv_input1,
                        iv_input2: iv_input2,
                        iv_input3: iv_input3,
                        iv_input4: iv_input4,
                        oral1: oral1,
                        oral2: oral2,
                        oral3: oral3,
                        oral4: oral4,
                        blood_product1: blood_product1,
                        blood_product2: blood_product2,
                        blood_product3: blood_product3,
                        blood_product4: blood_product4,
                        idrar_input1: idrar_input1,
                        idrar_input2: idrar_input2,
                        idrar_input3: idrar_input3,
                        idrar_input4: idrar_input4,
                        gaita_input1: gaita_input1,
                        gaita_input2: gaita_input2,
                        gaita_input3: gaita_input3,
                        gaita_input4: gaita_input4,
                        aldigi_total1: aldigi_total1,
                        aldigi_total2: aldigi_total2,
                        aldigi_total3: aldigi_total3,
                        aldigi_total4: aldigi_total4,
                        cikardigi_total1: cikardigi_total1,
                        cikardigi_total2: cikardigi_total2,
                        cikardigi_total3: cikardigi_total3,
                        cikardigi_total4: cikardigi_total4,
                        total: total
                    },
                    success: function(data) {
                        alert(data);
                        let url =
                            "<?php echo $base_url; ?>/updateForms/showAllForms.php?patient_id=" +
                            patient_id + "&patient_name=" + encodeURIComponent(
                                patient_name);
                        $("#content").load(url);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                })
            }
        })

    });
    </script>
    <script src=""></script>
</body>

</html>