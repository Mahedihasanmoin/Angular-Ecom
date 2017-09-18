<?php
include '.././DBconnection/auth.php';
include '../cms/userPlugin.php';
$cms = new plugin();
?>


<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/img/fav1.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <!--Title Part start Here-->
        <?php echo $cms->pageTitle('User_Profile | Buy Online Ticket...'); ?>
        <!--Title Part end Here--> 

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />



        <!--CSS Part start here-->
        <?php echo $cms->headCss(array("user_profile")); ?>
        <!--CSS Part end here-->



    </head>

    <body ng-app="user" ng-controller="userProfileController">
        
        <!--page loader-->
        <div class="se-pre-con"></div>
        <!--page loader-->
        
        <!--<span id="triger" ng-click="loadData('9f9bf237a4432e12e80564ccb54f6acf')"></span>-->
       
        
        <div class="wrapper">
            <!--include sidebar-->
            <?php include ('includes/sidebar.php'); ?>
            <!--include sidebar-->

            <div class="main-panel">
                <!--top-navbar-->
                <?php include ('includes/top_navigation.php'); ?>
                <!--top-navbar-->

                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            
                            <!--Box part-->
                            <?php include ('includes/user_profile_box.php');?>
                            <!--Box part-->
                            
                        </div>
                    </div>
                </div>
                <!--fotter-->
                <?php include ('includes/footer.php'); ?>
                <!--fotter-->
            </div>
        </div>
    </body>




    <!-- Footer Js start here--->
    <?php echo $cms->footerJs(array("user_profile")); ?>
    <!-- Footer Js end here--->

    
    <!--Autoclick script'-->
<!--    <script type="text/javascript">
        $(document).ready(function(){
            $('#triger').click();
        });
    </script>-->
    <!--Autoclick script'-->


    <script type="text/javascript">
        $(document).ready(function () {
            // Init Sliders
            demo.initFormExtendedSliders();
            // Init DatetimePicker
            demo.initFormExtendedDatetimepickers();

            $('#start-date-box').click(function () {
                $('#start-date').keyup();
            });
            $('#start-time-box').click(function () {
                $('#start-time').keyup();
            });
            $('#end-date-box').click(function () {
                $('#end-date').keyup();
            });
            $('#end-time-box').click(function () {
                $('#end-time').keyup();
            });


        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            demo.initOverviewDashboard();
            demo.initCirclePercentage();

        });
    </script>
    <script type="text/javascript">
        // jQuery
        $("form#event-cover-photo").dropzone({
            url: "/file/post"
        });
        // Dropzone class:
        //var myDropzone = new Dropzone("form#event-cover-photo", { url: "/file/post"});
    </script>
    <script>
        $(function () {
            pageLoadScript();
        });


        function pageLoadScript() {

            _stepEffect = $('#stepEffect').val();
            _style = 'style12';
            _stepTransition = $('#stepTransition').is(':checked');
            _showButtons = $('#showButtons').is(':checked');
            _showStepNum = $('#showStepNum').is(':checked');


            $('.tsf-wizard-1').tsfWizard({
                stepEffect: 'basic',
                stepStyle: 'style3',
                navPosition: 'top',
                stepTransition: true,
                showButtons: true,
                showStepNum: true,
                height: 'auto'
            });
        }
    </script>

</html>