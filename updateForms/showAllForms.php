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
    <link href="../style.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->

</head>

<body style="background-color:white">
    <div class="container-fluid pt-4 px-4">
        <?php
        require_once('../config-students.php');
        $userid = $_GET['patient_id'];
        $patient_name = $_GET['patient_name'];
        //echo $userid;
        $sql = "SELECT * FROM  form2  WHERE patient_id =" . $userid;
        $smtmselect = $db->prepare($sql);
        $result = $smtmselect->execute();
        $values = [];
        if ($result) {
            $values1 = $smtmselect->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo 'error';
        };
        $sql = "SELECT * FROM  form3 WHERE patient_id =" . $userid;
        $smtmselect = $db->prepare($sql);
        $result = $smtmselect->execute();
        $values = [];
        if ($result) {
            $values2 = $smtmselect->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo 'error';
        };
        $sql = "SELECT * FROM  form4 WHERE patient_id =" . $userid;
        $smtmselect = $db->prepare($sql);
        $result = $smtmselect->execute();
        $values = [];
        if ($result) {
            $values3 = $smtmselect->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo 'error';
        };
        $sql = "SELECT * FROM  form5 WHERE patient_id =" . $userid;
        $smtmselect = $db->prepare($sql);
        $result = $smtmselect->execute();
        $values = [];
        if ($result) {
            $values4 = $smtmselect->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo 'error';
        };
        $sql = "SELECT * FROM  form6 WHERE patient_id =" . $userid;
        $smtmselect = $db->prepare($sql);
        $result = $smtmselect->execute();
        $values = [];
        if ($result) {
            $values5 = $smtmselect->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo 'error';
        };
        $sql = "SELECT * FROM  form7 WHERE patient_id =" . $userid;
        $smtmselect = $db->prepare($sql);
        $result = $smtmselect->execute();
        $values = [];
        if ($result) {
            $values6 = $smtmselect->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo 'error';
        };
        $sql = "SELECT * FROM  form8 WHERE patient_id =" . $userid;
        $smtmselect = $db->prepare($sql);
        $result = $smtmselect->execute();
        $values = [];
        if ($result) {
            $values7 = $smtmselect->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo 'error';
        };
        $sql = "SELECT * FROM  form9 WHERE patient_id =" . $userid;
        $smtmselect = $db->prepare($sql);
        $result = $smtmselect->execute();
        $values = [];
        if ($result) {
            $values8 = $smtmselect->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo 'error';
        };
        $sql = "SELECT * FROM  form10 WHERE patient_id =" . $userid;
        $smtmselect = $db->prepare($sql);
        $result = $smtmselect->execute();
        $values = [];
        if ($result) {
            $values9 = $smtmselect->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo 'error';
        };
        $sql = "SELECT * FROM  form11 WHERE patient_id =" . $userid;
        $smtmselect = $db->prepare($sql);
        $result = $smtmselect->execute();
        $values = [];
        if ($result) {
            $values10 = $smtmselect->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo 'error';
        };

        $allForms = [
            'table1_data' => $values1,
            'table2_data' => $values2,
            'table3_data' => $values3,
            'table4_data' => $values4,
            'table5_data' => $values5,
            'table6_data' => $values6,
            'table7_data' => $values7,
            'table8_data' => $values8,
            'table9_data' => $values9,
            'table10_data' => $values10,
        ];

        ?>
        <div class="send-patient">

            <div class=" patients-save">

            </div>
            <div class="patients-table text-center rounded p-4" id="patients-table">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0 darkcyan table-title">Hasta Listesi / Öneriler</h6>

                </div>

                <div class="table-responsive">
                    <h1 class='mb-5'>Submitted forms</h1>
                            <?php
                           if(isset($allForms)){
                            foreach ($allForms as $key => $currentTableAllForms) {
                                foreach( $currentTableAllForms as $currentKey => $form){
                                     
                                        if($key ===  'table1_data') {
                                            echo '<div><a class="nav-items" style="color : white;" href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar-review/Form2-review.php?form_id=' . $form["form_id"] . '"><p>Form2  Date:' .$form["update_date"].' </p></a></div>';
                                        }
                                        if($key ===  'table2_data') {

                                            echo '<div><a class="nav-items" style="color : white;"  href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar-review/Form3-review.php?form_id=' . $form["form_id"] . '"><p>form3   Date:' .$form["update_date"].'</p></a></div>';
                                        }
                                        if($key ===  'table3_data') {

                                            echo '<div><a class="nav-items" style="color : white;"  href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar-review/Form4-review.php?form_id=' . $form["form_id"] . '"><p>form4   Date:' .$form["update_date"].'</p></a></div>';
                                        }
                                        if($key ===  'table4_data') {

                                            echo '<div><a class="nav-items" style="color : white;"  href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar-review/Form5-review.php?form_id=' . $form["form_id"] . '"><p>form5   Date:' .$form["update_date"].'</p></a></div>';
                                        }
                                        if($key ===  'table5_data') {

                                            echo '<div><a class="nav-items" style="color : white;"  href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar-review/Form6-review.php?form_id=' . $form["form_id"] . '"><p>form6   Date:' .$form["update_date"].'</p></a></div>';
                                        }
                                        if($key ===  'table6_data') {

                                            echo '<div><a class="nav-items" style="color : white;"  href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar-review/Form7-review.php?form_id=' . $form["form_id"] . '"><p>form7   Date:' .$form["update_date"].'</p></a></div>';
                                        }
                                        if($key ===  'table7_data') {

                                            echo '<div><a class="nav-items" style="color : white;"  href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar-review/Form8-review.php?form_id=' . $form["form_id"] . '"><p>form8   Date:' .$form["update_date"].'</p></a></div>';
                                        }
                                        if($key ===  'table8_data') {

                                            echo '<div><a class="nav-items" style="color : white;"  href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar-review/Form9-review.php?form_id=' . $form["form_id"] . '"><p>form9  Date:' .$form["update_date"].'</p></a></div>';
                                        }
                                        if($key ===  'table9_data') {

                                            echo '<div><a class="nav-items" style="color : white;"  href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar-review/Form10-review.php?form_id=' . $form["form_id"] . '"><p>form10  Date:' .$form["update_date"].'</p></a></div>';
                                        }
                                        if($key ===  'table1-_data') {

                                            echo '<div><a class="nav-items" style="color : white;"  href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar-review/Form11-review.php?form_id=' . $form["form_id"] . '"><p>form11   Date:' .$form["update_date"].'</p></a></div>';
                                        }
                                }
                                ;
                            }
                        } 

                            ?>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <h1 class='mb-5'>Create New Form</h1>
                            <div class="mt-3"><a class="nav-items" style="color: white;" href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar/Form2.php?patient_id=<?php echo $userid; ?>&patient_name=<?php echo $patient_name; ?>">Form 2</a></div>
                           <div class="mt-3"><a class="nav-items" style="color : white;"  href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar/Form3.php?patient_id=<?php echo $userid; ?>&patient_name=<?php echo $patient_name; ?>">Form 3</a></div>
                           <div class="mt-3"><a class="nav-items" style="color : white;"  href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar/Form4.php?patient_id=<?php echo $userid; ?>&patient_name=<?php echo $patient_name; ?>">Form 4</a></div>
                           <div class="mt-3"><a class="nav-items" style="color : white;"  href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar/Form5.php?patient_id=<?php echo $userid; ?>&patient_name=<?php echo $patient_name; ?>">Form 5</a></div>
                           <div class="mt-3"><a class="nav-items" style="color : white;"  href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar/Form6.php?patient_id=<?php echo $userid; ?>&patient_name=<?php echo $patient_name; ?>">Form 6</a></div>
                           <div class="mt-3"><a class="nav-items" style="color : white;"  href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar/Form7.php?patient_id=<?php echo $userid; ?>&patient_name=<?php echo $patient_name; ?>">Form 7</a></div>
                           <div class="mt-3"><a class="nav-items" style="color : white;"  href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar/Form8.php?patient_id=<?php echo $userid; ?>&patient_name=<?php echo $patient_name; ?>">Form 8</a></div>
                           <div class="mt-3"><a class="nav-items" style="color : white;"  href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar/tetkiksonuclari_form9.php?patient_id=<?php echo $userid; ?>&patient_name=<?php echo $patient_name; ?>">Form 9</a></div>
                           <div class="mt-3"><a class="nav-items" style="color : white;"  href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar/yasamsalbulgutakibi_form10.php?patient_id=<?php echo $userid; ?>&patient_name=<?php echo $patient_name; ?>">Form 10</a></div>
                           <div class="mt-3"><a class="nav-items" style="color : white;"  href="http://18.159.134.238/Hacettepe-KDSE-BPYS/formlar/yasamsalbulgutakibi_form10.php?patient_id=<?php echo $userid; ?>&patient_name=<?php echo $patient_name; ?>">Form 10</a></div>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>          
        <script>
            $(window).on('load', function() {
                $("body").removeClass("preload");

            });
        </script>
         <script>


    </script>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/chart/chart.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src=""></script>
</body>

</html>