<?php
session_start();
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
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>e-BYRYS-KKDS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <style>
        .send-patient{align-self: center;}
    </style>

</head>

<body>
    <div class="container-fluid pt-4 px-4" >
        <div class="send-patient" >
            <span class='close closeBtn' id='closeBtn'>&times;</span>
            <h1 class="form-header">Düşme Riski Değerlendirmesi</h1>
            <div class="input-section-item">
                <div class="patients-save">
                    <form action="" method="POST" class="patients-save-fields">

                        <div class="input-section-item" style="justify-content:space-between; padding: 5%">
                            <p class="usernamelabel" style="font-weight: bold;">Gözleri Açabilme</p>
                        </div>

                        <div class="input-section d-flex" style="justify-content:space-between; padding-inline: 15% 15%;">
                            <p class="usernamelabel">Spontan Açabiliyor:</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="GözleriAçabilme" id="GözleriAçabilme" value="option1">
                                <label class="form-check-label" for="GözleriAçabilme">
                                    <span class="checkbox-header">(4 puan)</span>
                                </label>
                            </div>
                        </div>

                        <div class="input-section d-flex" style="justify-content:space-between; padding-inline: 15% 15%;">
                            <p class="usernamelabel">Sözel Emirle Açabiliyor:</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="GözleriAçabilme" id="GözleriAçabilme" value="option1">
                                <label class="form-check-label" for="GözleriAçabilme">
                                    <span class="checkbox-header">(3 puan)</span>
                                </label>
                            </div>
                        </div>

                        <div class="input-section d-flex" style="justify-content:space-between; padding-inline: 15% 15%;">
                            <p class="usernamelabel">Ağrılı Uyaranla Açabiliyor:</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="GözleriAçabilme" id="GözleriAçabilme" value="option1">
                                <label class="form-check-label" for="GözleriAçabilme">
                                    <span class="checkbox-header">(2 puan)</span>
                                </label>
                            </div>
                        </div>

                        <div class="input-section d-flex" style="justify-content:space-between; padding-inline: 15% 15%;">
                            <p class="usernamelabel">Açmıyor:</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="GözleriAçabilme" id="GözleriAçabilme" value="option1">
                                <label class="form-check-label" for="GözleriAçabilme">
                                    <span class="checkbox-header">(1 puan)</span>
                                </label>
                            </div>
                        </div>

                        <div class="input-section-item" style="justify-content:space-between; padding: 5%">
                            <p class="usernamelabel" style="font-weight: bold;">Motor Cevap</p>
                        </div>

                        <div class="input-section d-flex" style="justify-content:space-between; padding-inline: 15% 15%;">
                            <p class="usernamelabel">Emirler Uyuyor:</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="MotorCevap" id="MotorCevap" value="option1">
                                <label class="form-check-label" for="MotorCevap">
                                    <span class="checkbox-header">(6 puan)</span>
                                </label>
                            </div>
                        </div>

                        <div class="input-section d-flex" style="justify-content:space-between; padding-inline: 15% 15%;">
                            <p class="usernamelabel">Ağrıya lokalize (Ağrılı uyaranı uzaklaştırmaya çalışıyor):</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="MotorCevap" id="MotorCevap" value="option1">
                                <label class="form-check-label" for="MotorCevap">
                                    <span class="checkbox-header">(5 puan)</span>
                                </label>
                            </div>
                        </div>

                        <div class="input-section d-flex" style="justify-content:space-between; padding-inline: 15% 15%;">
                            <p class="usernamelabel">Çekme (Ekstremitesini ağrılı uyarandan uzaklaştırmaya/çekmeye çalışıyor):</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="MotorCevap" id="MotorCevap" value="option1">
                                <label class="form-check-label" for="MotorCevap">
                                    <span class="checkbox-header">(4 puan)</span>
                                </label>
                            </div>
                        </div>

                        <div class="input-section d-flex" style="justify-content:space-between; padding-inline: 15% 15%;">
                            <p class="usernamelabel">Fleksiyon (Dekortike duruş):</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="MotorCevap" id="MotorCevap" value="option1">
                                <label class="form-check-label" for="MotorCevap">
                                    <span class="checkbox-header">(3 puan)</span>
                                </label>
                            </div>
                        </div>

                        <div class="input-section d-flex" style="justify-content:space-between; padding-inline: 15% 15%;">
                            <p class="usernamelabel">Ekstansiyon (Deserebre duruş):</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="MotorCevap" id="MotorCevap" value="option1">
                                <label class="form-check-label" for="MotorCevap">
                                    <span class="checkbox-header">(2 puan)</span>
                                </label>
                            </div>
                        </div>

                        <div class="input-section d-flex" style="justify-content:space-between; padding-inline: 15% 15%;">
                            <p class="usernamelabel">Tepki yok :</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="MotorCevap" id="MotorCevap" value="option1">
                                <label class="form-check-label" for="MotorCevap">
                                    <span class="checkbox-header">(1 puan)</span>
                                </label>
                            </div>
                        </div>

                        <div class="input-section-item" style="justify-content:space-between; padding: 5%">
                            <p class="usernamelabel" style="font-weight: bold;">Sözel Tepki</p>
                        </div>

                        <div class="input-section d-flex" style="justify-content:space-between; padding-inline: 15% 15%;">
                            <p class="usernamelabel">Oryante:</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="SözelTepki" id="SözelTepki" value="option1">
                                <label class="form-check-label" for="SözelTepki">
                                    <span class="checkbox-header">(5 puan)</span>
                                </label>
                            </div>
                        </div>

                        <div class="input-section d-flex" style="justify-content:space-between; padding-inline: 15% 15%;">
                            <p class="usernamelabel">Konfüze (Cümle kuruyor ancak yanıtlar yanlış):</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="SözelTepki" id="SözelTepki" value="option1">
                                <label class="form-check-label" for="SözelTepki">
                                    <span class="checkbox-header">(4 puan)</span>
                                </label>
                            </div>
                        </div>

                        <div class="input-section d-flex" style="justify-content:space-between; padding-inline: 15% 15%;">
                            <p class="usernamelabel">Uygunsuz cümleler (Bir ya da daha fazla yanlış yanıt):</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="SözelTepki" id="SözelTepki" value="option1">
                                <label class="form-check-label" for="SözelTepki">
                                    <span class="checkbox-header">(3 puan)</span>
                                </label>
                            </div>
                        </div>

                        <div class="input-section d-flex" style="justify-content:space-between; padding-inline: 15% 15%;">
                            <p class="usernamelabel">Anlamsız sesler (Hasta mırıldanıyor, inliyor):</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="SözelTepki" id="SözelTepki" value="option1">
                                <label class="form-check-label" for="SözelTepki">
                                    <span class="checkbox-header">(2 puan)</span>
                                </label>
                            </div>
                        </div>

                        <div class="input-section d-flex" style="justify-content:space-between; padding-inline: 15% 15%;">
                            <p class="usernamelabel">Tepki yok:</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="SözelTepki" id="SözelTepki" value="option1">
                                <label class="form-check-label" for="SözelTepki">
                                    <span class="checkbox-header">(1 puan)</span>
                                </label>
                            </div>
                        </div>

                        <div class="input-section d-flex" style="justify-content:space-between; padding-inline: 15% 15%;">
                            <p class="usernamelabel" style="font-weight: bold;">Toplam:</p>
                            <div class="form-check">
                                <output></output>
                            </div>
                        </div>

                        <p style="padding-inline: 15% 15%;">*GKS: 15 (Oryante), 13-14 (Konfüze), 8-13 (Stubor), 3-8 (Prekoma), 3 (Koma)</p>

                        <input type="submit" class="form-control submit" name="submit" id="submit" value="Kaydet">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(function() {
            $('#closeBtn').click(function(e) {
                $("#content").load("formlar-student.php");

            })
        });
        </script>

        <script>
        $(function() {
            $('#submit').click(function(e) {


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


                    e.preventDefault()

                    $.ajax({
                        type: 'POST',
                        url: 'student-patient.php',
                        data: {
                            id: id,
                            name: name,
                            surname: surname,
                            age: age,
                            not: not

                        },
                        success: function(data) {
                            alert("Success");
                            location.reload(true)
                        },
                        error: function(data) {
                            Swal.fire({
                                'title': 'Errors',
                                'text': 'There were errors',
                                'type': 'error'
                            })
                        }
                    })



                }
            })

        }); 
        </script>
        <script src="main.js"></script>
</body>

</html>