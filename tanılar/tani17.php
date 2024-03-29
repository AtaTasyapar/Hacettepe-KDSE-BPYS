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

// $tanı_respiratory_rate = $_GET['tanı_respiratory_rate'];
// $tanı_heart_rate = $_GET['tanı_heart_rate'];
// $tanı_spo2_percentage = $_GET['tanı_spo2_percentage'];
// $tanı_o2_status = $_GET['tanı_o2_status'];
// $tanı_respiratory_nature = $_GET['tanı_respiratory_nature'];
$average_sleep_time = isset($_GET['average_sleep_time']) ? $_GET['average_sleep_time'] : "NaN";
$sleep_problem = isset($_GET['sleep_problem']) ? $_GET['sleep_problem'] : "NaN";
$restlessness = isset($_GET['restlessness']) ? $_GET['restlessness'] : "NaN";
$Discomfort   = isset($_GET['Discomfort  ']) ? $_GET['Discomfort '] : "NaN";
$Itching  = isset($_GET['Itching ']) ? $_GET['Itching '] : "NaN";
$feeding_problem  = isset($_GET['feeding_problem ']) ? $_GET['feeding_problem '] : "NaN";
$pain_duration  = isset($_GET['pain_duration ']) ? $_GET['pain_duration '] : "NaN";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>KDSE-BPYS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
            <h1 class="form-header">Bakım Planı</h1>
            <div class="input-section-item">
                <div class="patients-save">
                    <form action="" method="POST" class="patients-save-fields">
                        <div class="input-section d-flex">
                            <p class="usernamelabel">Sorunla İlişkili Veriler:</p>
                            <div class="matchedfields-wrapper">
                                <?php         
                                echo "<p class='matchedfields' id='average_sleep_time' style='".($average_sleep_time == 'NaN' ? 'color: red' : 'color:blue ' )."'>Ortalama uyku süresi: ".$average_sleep_time."</p>";
                                echo "<p class='matchedfields' id='sleep_problem' style='".($sleep_problem == 'NaN' ? 'color:red ' : 'color: blue' )."'>Uykuda sorun:".$sleep_problem."</p>";
                                echo "<p class='matchedfields' id='restlessness' style='".($restlessness == 'NaN' ? 'color:red ' : 'color: blue' )."'>Huzursuzluk:".$restlessness."</p>";
                                echo "<p class='matchedfields' id='Discomfort' style='".($Discomfort == 'NaN' ? 'color:red ' : 'color: blue' )."'> Rahatsızlık :".$Discomfort."</p>";
                                echo "<p class='matchedfields' id='Itching' style='".($Itching == 'NaN' ? 'color:red ' : 'color: blue' )."'>Kaşıntı :".$Itching."</p>";
                                echo "<p class='matchedfields' id='feeding_problem' style='".($feeding_problem == 'NaN' ? 'color:red ' : 'color: blue' )."'>Beslenmede Sorun:".$feeding_problem."</p>";
                                echo "<p class='matchedfields' id='pain_duration' style='".($pain_duration == 'NaN' ? 'color:red ' : 'color: blue' )."'>Ağrının süresi :".$pain_duration."</p>";
                                ?>
                            </div>

                        </div>
                        <div class="input-section d-flex">
                            <p class="usernamelabel">Hemşirelik Tanıları:</p>
                            <p class="tanıdescription">Konforda bozulma </p>
                        </div>
                        <div class="input-section d-flex">
                            <p class="usernamelabel">NOC Çıktıları:</p>
                            <p class="tanıdescription">Hastanın rahat olduğunu ifade etmesi </p>
                        </div>






                        <div class="input-section" id="o2-delivery-container">
                            <p class="usernamelabel">NOC Gösterge: </p>
                            <div class="form-check">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator" id="noc_indicator" value="1: Hastanın gece uykusunda sürekli bölünme var">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">1: Hasta sürekli rahatsız olduğunu ifade eder</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator" id="noc_indicator" value="2: Hasta sık sık rahatsız olduğunu ifade eder">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">2: Hasta sık sık rahatsız olduğunu ifade eder</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator" id="noc_indicator" value="3: Hasta bazen rahatsız olduğunu ifade eder">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">3: Hasta bazen rahatsız olduğunu ifade eder</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator" id="noc_indicator" value="4: Hastanın gece uykusunda nadiren bölünme var">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">4: Hasta nadiren rahatsız olduğunu ifade eder</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator" id="
                                        noc_indicator" value="5: Hastanın gece uykusunda bölünme yok">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">5: Hasta rahat olduğunu ifade eder
                                        </span>
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="input-section d-flex" style="flex-direction: column;">
                            <p class="usernamelabel">Hemşirelik Girişimleri:</p>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt1" value="Konforda bozulmanın nedenleri belirlenir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Konforda bozulmanın nedenleri belirlenir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt2" value="Tehlikeler nedeniyle çevre güvenlik yönünden izlenir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Tehlikeler nedeniyle çevre güvenlik yönünden izlenir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt3" value="Hastanın yeterli ve ulaşılabilir destek sistemlerinin varlığı değerlendirilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Hastanın yeterli ve ulaşılabilir destek sistemlerinin varlığı değerlendirilir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt4" value="Hastanın davranışları üzerindeki (davranış değişikliği yapma isteği, davranışlarının yararına dair düşüncesi, davranış değişikliği için algıladığı engeller vb) öz yeterliliği değerlendirilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Hastanın davranışları üzerindeki (davranış değişikliği yapma isteği, davranışlarının yararına dair düşüncesi, davranış değişikliği için algıladığı engeller vb) öz yeterliliği değerlendirilir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt5" value="Hastanın pozisyonu en az 2 saatte bir değiştirilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Hastanın pozisyonu en az 2 saatte bir değiştirilir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt6" value="Oda ısısı mümkünse ılık ya da soğuk olarak ayarlanır">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Oda ısısı mümkünse ılık ya da soğuk olarak ayarlanır</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt7" value="Mümkün oldukça çevredeki gürültü en aza indirilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Mümkün oldukça çevredeki gürültü en aza indirilir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt8" value="Hasta tercihleri doğrultusunda odanın aydınlatması ayarlanır ve hastanın gözüne direk ışık gelmesi engellenir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Hasta tercihleri doğrultusunda odanın aydınlatması ayarlanır ve hastanın gözüne direk ışık gelmesi engellenir</span>
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt9" value="Yatak içerisinde hareket edemeyen hastaların konforunu sağlamak için yardımcı araçlardan (yastık, battaniye, koruyucu araçlar) yararlanılır">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Yatak içerisinde hareket edemeyen hastaların konforunu sağlamak için yardımcı araçlardan (yastık, battaniye, koruyucu araçlar) yararlanılır</span>
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt10" value="Odanın temizliği sağlanır, gereksiz araç-gereçler ortamdan uzaklaştırılır">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Odanın temizliği sağlanır, gereksiz araç-gereçler ortamdan uzaklaştırılır</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt11" value="Ağrıyı gidermek için non farmakolojik yöntemler kullanılır">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Ağrıyı gidermek için non farmakolojik yöntemler kullanılır</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt12" value="Kaşıntı nedeniyle hastanın kendine zarar vermemesi için tırnakları kesilir ve törpülenir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Kaşıntı nedeniyle hastanın kendine zarar vermemesi için tırnakları kesilir ve törpülenir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt13" value="Uykuyu engelleyen yiyecek ve içecekleri (kahve, kola, çay gibi) yatma zamanında tüketmemesi söylenir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Kontraendike değilse hasta oral sıvı alımı konusunda desteklenir</span>
                                </label>
                            </div>

                            <p class="usernamelabel">Eğitim:</p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt14" value="Hastaya ve bakım verenlerine uygun gevşeme teknikleri öğretilip, uygulatılır">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Hastaya ve bakım verenlerine uygun gevşeme teknikleri öğretilip, uygulatılır</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt15" value="Hastaya ve bakım verenlerine, hastanın cildini kaşıyarak tahriş etmemesi konusunda bilgi verilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Hastaya ve bakım verenlerine, hastanın cildini kaşıyarak tahriş etmemesi konusunda bilgi verilir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt16" value="Hastaya ve bakım verenlerine, çamaşırlar yıkanırken 2 kez durulanması ve yumuşatıcı kullanılmaması konusunda bilgi verilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Hastaya ve bakım verenlerine, çamaşırlar yıkanırken 2 kez durulanması ve yumuşatıcı kullanılmaması konusunda bilgi verilir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt17" value="Kaşıntıyı rahatlatması için soğuk su ile banyo yapması ya da duş alması önerilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Kaşıntıyı rahatlatması için soğuk su ile banyo yapması ya da duş alması önerilir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt18" value="Kontranedike değilse, cildin nemlendirilmesi için kremler, losyonlar önerilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Kontranedike değilse, cildin nemlendirilmesi için kremler, losyonlar önerilir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt19" value="Cilde temas eden kıyafetlerin pamuklu olması önerilir ve cildi tahriş edebilecek kaba kumaşların kullanılmaması gerektiği anlatılır">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Cilde temas eden kıyafetlerin pamuklu olması önerilir ve cildi tahriş edebilecek kaba kumaşların kullanılmaması gerektiği anlatılır</span>
                                </label>
                            </div>

                            <p class="usernamelabel">İŞ BİRLİĞİ GEREKTİREN UYGULAMALAR</p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt20" value="İstemde yer alan farmakolojik yöntemler (analjezikler, kortikosteroid kremler, anksiyolitikler, antihistaminikler, antifungal ilaçlar) uygulanır">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">İstemde yer alan farmakolojik yöntemler (analjezikler, kortikosteroid kremler, anksiyolitikler, antihistaminikler, antifungal ilaçlar) uygulanır</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt21" value="Gerekirse alerji testi yaptırılması için hekimle görüşülür. ">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Gerekirse alerji testi yaptırılması için hekimle görüşülür. </span>
                                </label>
                            </div>

                        </div>
                        <div class="input-section d-flex">
                            <p class="usernamelabel">Değerlendirme:</p>
                            <div class="input-section d-flex">
                            <p class="usernamelabel">NOC Çıktıları:</p>
                            <p class="tanıdescription">Hastanın rahat olduğunu ifade etmesi </p>
                        </div>
                        

 



                        <div class="input-section" id="o2-delivery-container">
                            <p class="usernamelabel">NOC Gösterge: </p>
                            <div class="form-check">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator_after"
                                        id="noc_indicator"
                                        value="1: Hastanın gece uykusunda sürekli bölünme var">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">1: Hasta sürekli rahatsız olduğunu ifade eder</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator_after"
                                        id="noc_indicator"
                                        value="2: Hasta sık sık rahatsız olduğunu ifade eder">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">2: Hasta sık sık rahatsız olduğunu ifade eder</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator_after"
                                        id="noc_indicator"
                                        value="3: Hasta bazen rahatsız olduğunu ifade eder">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">3: Hasta bazen rahatsız olduğunu ifade eder</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator_after"
                                        id="noc_indicator"
                                        value="4: Hastanın gece uykusunda nadiren bölünme var">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">4: Hasta nadiren rahatsız olduğunu ifade eder</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator_after" id="
                                        noc_indicator" value="5: Hastanın gece uykusunda bölünme yok">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">5: Hasta rahat olduğunu ifade eder
                                        </span>
                                    </label>
                                </div>

                            </div>
                        </div>

                            <p class="tanıdescription"> Sorun devam ediyor: 1-4 gösterge seçildiyse; yeni günde bakım planında tanımlı tanı olacak.</p>
                            <p class="tanıdescription"> Sorun çözümlendi:
                                5 gösterge seçildiyse; yeni günde bakım planına bu tanıyı taşımayacak
                            </p>
                        </div>
                        <input type="submit" class="form-control submit" name="submit" id="submit" value="Kaydet">

                    </form>
                </div>
            </div>
        </div>


    </div>
    <script>
        var average_sleep_time = document.getElementById('average_sleep_time').innerText;
        var sleep_problem = document.getElementById('sleep_problem').innerText;
        var restlessness = document.getElementById('restlessness').innerText;
        var Discomfort = document.getElementById('Discomfort').innerText;
        var Itching = document.getElementById('Itching').innerText;
        var feeding_problem = document.getElementById('feeding_problem').innerText;
        var pain_duration = document.getElementById('pain_duration').innerText;
        var matchedfields_string = average_sleep_time + " / " + sleep_problem + " / " + restlessness +
            " / " + Discomfort + " / " + Itching + "/" + feeding_problem + "/" + pain_duration + "/";
    </script>

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
                console.log("submit clicked")
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
                let problem_info = matchedfields_string
                let nurse_description = "Gaz değişiminde bozulma"
                let noc_output = "Hastanın oksijen satürasyonun %95’in üzerinde olması"
                let noc_indicator = $("input[type='radio'][name='noc_indicator']:checked").val();
                let noc_indicator2 = $("input[type='radio'][name='noc_indicator2']:checked").val();
                let noc_indicator_after = $("input[type='radio'][name='noc_indicator_after']:checked").val();
                let evaluation = "";
                console.log("values init")

                if (noc_indicator == "5: Hastanın oksijen satürasyonunda bozulma yok") {
                    evaluation +=
                        "Sorun çözümlendi:5 gösterge seçildiyse;yeni günde bakım planına bu tanıyı taşımayacak"
                } else {
                    evaluation +=
                        "Sorun devam ediyor: 1-4 gösterge seçildiyse; yeni günde bakım planında tanımlı tanı olacak."
                }
                let nurse_attempt = "";
                let nurse_education = '';
                let collaborative_applications = '';

                var l1 = document.getElementById("nurse_attempt1");
                var l2 = document.getElementById("nurse_attempt2");
                var l3 = document.getElementById("nurse_attempt3");
                var l4 = document.getElementById("nurse_attempt4");
                var l5 = document.getElementById("nurse_attempt5");
                var l6 = document.getElementById("nurse_attempt6");
                var l7 = document.getElementById("nurse_attempt7");
                var l8 = document.getElementById("nurse_attempt8");
                var l9 = document.getElementById("nurse_attempt9");
                var l10 = document.getElementById("nurse_attempt10");
                var l11 = document.getElementById("nurse_attempt11");
                var l12 = document.getElementById("nurse_attempt12");
                var l13 = document.getElementById("nurse_attempt13");
                var l14 = document.getElementById("nurse_attempt14");
                var l15 = document.getElementById("nurse_attempt15");
                var l16 = document.getElementById("nurse_attempt16");
                var l17 = document.getElementById("nurse_attempt17");
                var l18 = document.getElementById("nurse_attempt18");
                var l19 = document.getElementById("nurse_attempt19");
                var l20 = document.getElementById("nurse_attempt20");
                var l21 = document.getElementById("nurse_attempt21");

                if (l1.checked == true) {
                    var pl1 = document.getElementById("nurse_attempt1").value;
                    nurse_attempt += pl1 + "/";
                }
                if (l2.checked == true) {
                    var pl2 = document.getElementById("nurse_attempt2").value;
                    nurse_attempt += pl2 + "/";
                }
                if (l3.checked == true) {
                    var pl3 = document.getElementById("nurse_attempt3").value;
                    nurse_attempt += pl3 + "/";
                }
                if (l4.checked == true) {
                    var pl4 = document.getElementById("nurse_attempt4").value;
                    nurse_attempt += pl4 + "/";
                }
                if (l5.checked == true) {
                    var pl5 = document.getElementById("nurse_attempt5").value;
                    nurse_attempt += pl5 + "/";
                }
                if (l6.checked == true) {
                    var pl6 = document.getElementById("nurse_attempt6").value;
                    nurse_attempt += pl6 + "/";
                }
                if (l7.checked == true) {
                    var pl7 = document.getElementById("nurse_attempt7").value;
                    nurse_attempt += pl7 + "/";
                }
                if (l8.checked == true) {
                    var pl8 = document.getElementById("nurse_attempt8").value;
                    nurse_attempt += pl8 + "/";
                }
                if (l9.checked == true) {
                    var pl9 = document.getElementById("nurse_attempt9").value;
                    nurse_attempt += pl9 + "/";
                }
                if (l10.checked == true) {
                    var pl10 = document.getElementById("nurse_attempt10").value;
                    nurse_attempt += pl10 + "/";
                }
                if (l11.checked == true) {
                    var pl11 = document.getElementById("nurse_attempt11").value;
                    nurse_attempt += pl11 + "/";
                }
                if (l12.checked == true) {
                    var pl12 = document.getElementById("nurse_attempt12").value;
                    nurse_attempt += pl12 + "/";
                }
                if (l13.checked == true) {
                    var pl13 = document.getElementById("nurse_attempt13").value;
                    nurse_attempt += pl13 + "/";
                }
                if (l14.checked == true) {
                    var pl14 = document.getElementById("nurse_attempt14").value;
                    nurse_education += pl14 + "/";
                }
                if (l15.checked == true) {
                    var pl15 = document.getElementById("nurse_attempt15").value;
                    nurse_education += pl15 + "/";
                }
                if (l16.checked == true) {
                    var pl16 = document.getElementById("nurse_attempt16").value;
                    nurse_education += pl16 + "/";
                }
                if (l17.checked == true) {
                    var pl17 = document.getElementById("nurse_attempt17").value;
                    nurse_education += pl17 + "/";
                }
                if (l18.checked == true) {
                    var pl18 = document.getElementById("nurse_attempt18").value;
                    nurse_education += pl18 + "/";
                }
                if (l19.checked == true) {
                    var pl19 = document.getElementById("nurse_attempt19").value;
                    nurse_education += pl19 + "/";
                }
                if (l20.checked == true) {
                    var pl20 = document.getElementById("nurse_attempt20").value;
                    collaborative_applications += pl20 + "/";
                }
                if (l21.checked == true) {
                    var pl21 = document.getElementById("nurse_attempt21").value;
                    collaborative_applications += pl21 + "/";
                }

                $.ajax({
                    type: 'POST',
                    url: '<?php echo $base_url; ?>/insertTanalar/tani17Insert.php',
                    data: {
                        name: name,
                        surname: surname,
                        age: age,
                        form_num: form_num,
                        patient_id: patient_id,
                        patient_name: patient_name,
                        creation_date: creationDate,
                        update_date: updateDate,
                        problem_info: problem_info,
                        nurse_description: nurse_description,
                        noc_output: noc_output,
                        noc_indicator: noc_indicator,
                        noc_indicator_after:noc_indicator_after,
                        nurse_attempt: nurse_attempt,
                        nurse_education: nurse_education,
                        collaborative_applications: collaborative_applications,
                        evaluation: evaluation,
                        matchedfields_string: matchedfields_string,
                    },
                    success: function(data) {
                        console.log("something happened")
                        alert(data);
                        let url =
                            "<?php echo $base_url; ?>/taniReview/tani17Review.php?patient_id=" +
                            patient_id + "&patient_name=" + encodeURIComponent(
                                patient_name);
                        $("#content").load(url);
                    },
                    error: function(data) {
                        console.log(data)
                    }
                });
            })
        });
    </script>

</body>

</html>