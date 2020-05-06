<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Calculadora WS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--Formulario-->
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/menu_suspenso.css">


        <!--Formulario-->




    </head>
    <body>


        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
           
        }
        ?>




        <div class="limiter">

            <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
                <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

                    <form class="login100-form validate-form" method="POST" action="processa.php">
                        <span class="login100-form-title p-b-49">
                            <li <a href="sair.php">Calculadora WS!</a></li>	
                        </span>

                        <div class="wrap-input100 validate-input m-b-23" data-validate = "Por favor Prencha o Campo!">
                            <span class="label-input100">PRIMEIRO NUMERO</span>
                            <input class="input100" type="text" name="NUM1" placeholder="PREENCHA COM UM NUMERO"  > 
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-23" data-validate = "Por favor Prencha o Campo!">
                            <span class="label-input100">SEGUNDO NUMERO</span>
                            <input class="input100" type="text" name="NUM2"  placeholder="PREENCHA COM UM NUMERO">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>

                        </div>




                        <div class="text-right p-t-8 p-b-31">
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" type="submit" name="operacao" value="+" >
                                    SOMAR + 
                                </button>
                            </div>
                        </div>

                        <div class="text-right p-t-8 p-b-31">
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" type="submit" name="operacao" value="-" >
                                    SUBTRAIR - 
                                </button>
                            </div>
                        </div>

                        <div class="text-right p-t-8 p-b-31">
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" type="submit" name="operacao" value="*" >
                                    MULTIPLICAR * 
                                </button>
                            </div>
                        </div>

                        <div class="text-right p-t-8 p-b-31">
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" type="submit" name="operacao" value="/" >
                                    DIVIDIR / 
                                </button>
                            </div>
                        </div>


                        <div class="text-right p-t-8 p-b-31"></div>
                    </form>


                </div>
            </div>
        </div>







        <div id="dropDownSelect1"></div>
        <!--Formulario-->
        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>
        <!--formulario-->


    </body>
</html>


