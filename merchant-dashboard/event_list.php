<?php
include './DBconnection/auth.php';
include '../cms/merchantPlugin.php';
$cms = new plugin();
?>



<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/img/fav1.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <!--Title Part start Here-->
        <?php echo $cms->pageTitle("Event List| Buy Online Ticket... "); ?>
        <!--./Title Part end Here-->



        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!--CSS Part start here-->
        <?php echo $cms->headCss(array("eventList")); ?>
        <!--./CSS Part end here-->

    </head>

    <body ng-app="merchantaj" ng-controller="EventListController">
        <!--page loader-->
        <div class="se-pre-con"></div>
        <!--page loader-->
        
        <!--modal From Date Wise Order Report Start-->


    <from class="modal fade" id="myModal" tabindex="-1" ng-model="modelData" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Step 2 -->
                    <div class="row">
                        <div class="col-md-12">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><legend><span class="ti-timer"></span> Event Date</legend></h4>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Start Date</label>
                                    <div class="clearfix"></div>
                                    <input id="start-date" type="text" date-format='yyyy-MM-dd' class="form-control datepicker" placeholder="Date Picker Here"/>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">End Date</label>
                                    <input id="end-date" type="text" date-format='yyyy-MM-dd' class="form-control datepicker" placeholder="Date Picker Here"/>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="row-fluid" style="margin-top: 20px;">
                                <div class="col-md-4"><br>

                                    <button type="button" ng-click="ModelDataReportDateWise(modelData)" value="save" class="btn btn-fill btn-info btn-block">Generate Report</button>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- ./Step 2 -->
                </div>

                
            </div>
        </div>
    </from>
    <!--modal From Date Wise Order Report  End-->
     
        <div class="wrapper">
            <?php include ('includes/sidebar.php'); ?>

            <div class="main-panel">
                <?php include ('includes/top_navigation.php'); ?> 
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <!-- Wizard Sarts Here -->
                                 <?php include ('includes/box_event_list.php'); ?> 
                                <!--./ Wizard Ends Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php include ('includes/footer.php'); ?> 
            </div>
        </div>
    </body>

    <!--   Core JS Files. Extra: PerfectScrollbar + TouchPunch libraries inside jquery-ui.min.js   -->

    <!-- Footer Js start here--->
    
    
    
    <?php
    echo $cms->footerJs(array("eventList"));
    ?>
    <script>
    // Init DatetimePicker
    demo.initFormExtendedDatetimepickers();
    </script>
    <!--Footer Js End Here-->
</html>
