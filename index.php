<?php
session_start();

// Check if user is not logged in
if(!isset($_SESSION['login'])) {
    header('LOCATION: /login/login.php'); // Redirect to login page
    die(); // Stop executing the script
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MHITZXG</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <style>
        @font-face {
            font-family: 'my-font';
            src: url('font.otf') format('truetype');
        }

        body {
            background-color: #000;
            font-family: 'my-font', sans-serif;
            margin: 0;
            padding: 0;
        }

        .card {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            box-shadow: inset 0 0 0 2px #fff;
        }

        .h-10, .btn-success, .btn-danger {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            border: 2px solid white;
            border-radius: 5px;
        }

        .h-10 {
            width: 100%;
            min-height: 45px;
            margin-bottom: 14px;
        }

        .btn-success, .ms-3 {
            width: 49.5%;
            min-height: 45px;
        }

        .btn-danger {
            margin-left: auto;
        }

        .form-control.text-center {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            box-shadow: inset 0 0 0 2px #fff;
        }

        .card-body {
            position: relative;
        }

        .btn-copy, .btn-trash, .btn-kapi, .btn-primary {
            position: absolute;
            right: 24px;
            top: 26px;
        }

        /* RGB Font Changing Animation */
        .rgb-animation {
            animation: rgbFontChange 1s infinite alternate; /* Faster rate */
        }

        @keyframes rgbFontChange {
            0% { color: rgb(255, 0, 0); } /* Red */
            50% { color: rgb(0, 255, 0); } /* Green */
            100% { color: rgb(0, 0, 255); } /* Blue */
        }

        /* RGB Background Animation */
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(270deg, #ff0000, #00ff00, #0000ff);
            background-size: 600% 600%;
            z-index: -1;
            animation: gradientAnimation 15s ease infinite;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <center>
        <br>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="niggahead"><strong>⌁ <span class="rgb-animation">ϟ MHITZXG ϟ </span> ⌁</strong></h4>
                                    <div class="md-form">
                                        <textarea rows="6" id="lista" class="form-control text-center form-checker mb-4" placeholder="ENTER LIMITED CARDS 10 PER REQUEST ONLY"></textarea>
                                        <!-- Removed Enter Proxy Details section -->
                                        <select class="form-control h-10" id="gate">
                                            <option value="api.php">⚙️ MONERIS CCN CHARGE GATEWAY - $0.50</option>
                                        </select>
                                        <div class="text-center">
                                            <button class="btn btn-success" id="testar" onclick="enviar()">➤ START</button>
                                            <button class="btn btn-danger ms-3" id="stop">➤ STOP</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                                            <div class="card-body">
                                    <h2 class="badge bg-dark text-white">Informations</h2>
                                    <div><span class="rgb-animation">APPROVED CARDS: <span id="cLive" class="btn btn-success">0</span></span></div>
                                    <div><span class="rgb-animation">CCN CHARGED: <span id="cWarn" class="btn btn-info">0</span></span></div>
                                    <div>Declined: <span id="cDie" class="btn btn-danger">0</span></span></div>
                                    <div>Total: <span id="carregadas" class="btn btn-dark">0</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="btn btn-success" id="mostra"><i class="fa fa-eye text-success"></i> See Approved Cards <span id="cLive2" class="badge badge-black">0</span></h6><br><br>
                            <div id="bode" style="display: none;"><span class="aprovadas"></span></div>
                                            </div>
                </div>
                <br>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="btn btn-info" id="mostra3"><i class="fa fa-eye text-info"></i> See CCN Charged <span id="cWarn2" class="badge badge-black">0</span></h6><br><br>
                            <div id="bode3" style="display: none;"><span class="edrovadas"></span></div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="btn btn-danger" id="mostra2"><i class="fa fa-eye-slash text-danger"></i> See Declined <span id="cDie2" class="badge badge-black">0</span></h6><br><br>
                            <div id="bode2" style="display: none;"><span class="reprovadas"></span></div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </center>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script type="text/javascript">
                

                $(document).ready(function(){
                    $('.btn-copy').click(function(){
                       var lista_lives = document.querySelector('.aprovadas').innerText;
                        var textarea = document.createElement("textarea");
                        textarea.value = lista_lives;
                        document.body.appendChild(textarea);
                        textarea.select();
                        document.execCommand('copy');
                        document.body.removeChild(textarea);
                    });

                    $('.btn-kapi').click(function(){
                        var lista_lives = document.querySelector('.edrovadas').innerText;
                        var textarea = document.createElement("textarea");
                        textarea.value = lista_lives;
                        document.body.appendChild(textarea);
                        textarea.select();
                        document.execCommand('copy');
                        document.body.removeChild(textarea);
                    });

                    $('.btn-trash').click(function(){
                        document.querySelector('.reprovadas').innerText = '';
                    });

                    $("#bode").hide();
                    $("#esconde").show();

                    var stopChecking = false;
                    $('#stop').click(function(){
                        stopChecking = true;
                    });

                    $('#mostra').click(function(){
                        $("#bode").slideToggle();
                    });

                    $('#mostra2').click(function(){
                        $("#bode2").slideToggle();
                    });

                    $('#mostra3').click(function(){
                        $("#bode3").slideToggle();
                    });
                });

                function enviar() {
                    var linha = $("#lista").val();
                    var proxy = $("#proxy").val();
                    var linhaenviar = linha.split("\n");
                    var total = linhaenviar.length;
                    var ap = 0;
                    var ed = 0;
                    var rp = 0;
                    var fila = 0;
                    stopChecking = false;

                    linhaenviar.forEach(function(value, index) {
                        setTimeout(
                            function() {
                                if (stopChecking) {
                                    return;
                                }
                                var e = document.getElementById("gate");
                                var gate = e.options[e.selectedIndex].value;
                                $.ajax({
                                    url: gate + '?lista=' + value + '&proxy=' + proxy,
                                    type: 'GET',
                                    async: true,
                                    success: function(resultado) {
                                        if (resultado.match("#CVV")) {
                                            removelinha();
                                            ap++;
                                            aprovadas(resultado + "");
                                        } else if(resultado.match("#CCN")) {
                                            removelinha();
                                            ed++;
                                            edrovadas(resultado + "");
                                        } else {
                                            removelinha();
                                            rp++;
                                            reprovadas(resultado + "");
                                        }
                                        $('#carregadas').html(total);
                                        fila = parseInt(ap) + parseInt(ed) + parseInt(rp);
                                        $('#cLive').html(ap);
                                        $('#cWarn').html(ed);
                                        $('#cDie').html(rp);
                                        $('#total').html(fila);
                                        $('#cLive2').html(ap);
                                        $('#cWarn2').html(ed);
                                        $('#cDie2').html(rp);
                                    }
                                });
                            }, 2500 * index);
                    });
                }

                function aprovadas(str) {
                    $(".aprovadas").append(str + "");
                }

                function reprovadas(str) {
                    $(".reprovadas").append(str + "");
                }

                function edrovadas(str) {
                    $(".edrovadas").append(str + "");
                }

                function removelinha() {
                    var lines = $("#lista").val().split('\n');
                    lines.splice(0, 1);
                    $("#lista").val(lines.join("\n"));
                }
            </script>

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
        </body>
</html>


