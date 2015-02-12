<!DOCTYPE html>

<html class = "no-js">

    <head>
        <title>Linux Analysis Performance</title>
        <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet" media = "screen">
        <link href = "bootstrap/css/bootstrap-responsive.min.css" rel = "stylesheet" media = "screen">
        <link href = "vendors/easypiechart/jquery.easy-pie-chart.css" rel = "stylesheet" media = "screen">
        <link href = "assets/styles.css" rel = "stylesheet" media = "screen">
        <script src = "vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Linux Performance Analysis</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active">
                            <a href="index.php"><i class="icon-chevron-right"></i> LTP Results</a>
                        </li>
                        <li class="">
                            <a href="powertop-results.php"><i class="icon-chevron-right"></i> Powertop Results</a>
                        </li>
                    </ul>
                </div>
                <div class="span9" id="content">
                    <div class="row-fluid">
                        <ul class="nav nav-tabs" role="tablist" id="myTab">
                            <li role="presentation" class="active"><a href="#javier" aria-controls="javier" role="tab" data-toggle="tab">Javier</a></li>
                            <li role="presentation"><a href="#johnny" aria-controls="johnny" role="tab" data-toggle="tab">Johnny</a></li>
                            <li role="presentation"><a href="#lucero" aria-controls="lucero" role="tab" data-toggle="tab">Lucero</a></li>
                            <li role="presentation"><a href="#ivan" aria-controls="ivan" role="tab" data-toggle="tab">Iv&aacute;n</a></li>
                            <li role="presentation"><a href="#joyce" aria-controls="joyce" role="tab" data-toggle="tab">Joyce</a></li>
                            <li role="presentation"><a href="#martin" aria-controls="martin" role="tab" data-toggle="tab">Mart&iacute;n</a></li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="javier">
                                <pre>
                                    <?php
                                    $log_javier = fopen('Javier/LTP_RUN_ON-2015_02_08-19h_51m_07s.log', 'r');
                                   echo fread($log_javier, filesize('Javier/LTP_RUN_ON-2015_02_08-19h_51m_07s.log'));
                                    ?>
                                </pre> 
                            </div>
                            <div role="tabpanel" class="tab-pane" id="johnny">Debian 6</div>
                            <div role="tabpanel" class="tab-pane" id="lucero">
                                <!--<div class="row-fluid">-->
                                <div role="tabpanel">
                                    <ul class="nav nav-tabs" role="tablist" id='df'>
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">LTP_RUN</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">LTP_RUN_ALL_TESTS_1</a></li>
                                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">LTP_RUN_ALL_TESTS_2</a></li>
                                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">LTP_RUN_ALL_TESTS_3</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                            <pre>
                                                <?php
                                                $log_lucero_0 = fopen('Lucero/LTP_RUN.log', 'r') or die('File not found');
                                                echo fread($log_lucero_0, filesize('Lucero/LTP_RUN.log'));
                                                ?>
                                            </pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="profile">
                                            <pre>
                                                <?php
                                                $log_lucero_1 = fopen('Lucero/LTP_RUN_ALL_TESTS_1.log', 'r') or die('File not found');
                                                echo fread($log_lucero_1, filesize('Lucero/LTP_RUN_ALL_TESTS_1.log'));
                                                ?>
                                            </pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="messages">
                                            <pre>
                                                <?php
                                                $log_lucero_2 = fopen('Lucero/LTP_RUN_ALL_TESTS_2.log', 'r') or die('File not found');
                                                echo fread($log_lucero_2, filesize('Lucero/LTP_RUN_ALL_TESTS_2.log'));
                                                ?>
                                            </pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="settings">
                                            <pre>
                                                <?php
                                                $log_lucero_3 = fopen('Lucero/LTP_RUN_ALL_TESTS_3.log', 'r') or die('File not found');
                                                echo fread($log_lucero_3, filesize('Lucero/LTP_RUN_ALL_TESTS_3.log'));
                                                ?>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                                <!--</div>-->
                            </div>
                            <div role="tabpanel" class="tab-pane" id="ivan">Fedora 20</div>
                            <div role="tabpanel" class="tab-pane" id="joyce">Ubuntu 14.04</div>
                            <div role="tabpanel" class="tab-pane" id="martin">Fedora 21</div>
                        </div>

                        <script>
                            $(function () {
                                $('#myTab a:last').tab('show')
                            })
                        </script>
                    </div>
                </div>
            </div>
            <hr>
            <footer>
                <p></p>
            </footer>
        </div>
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="assets/scripts.js"></script>
        <!--        <script>
                                    $(function () {
                                        $('.chart').easyPieChart({animate: 1000});
                                    });
                </script>-->
    </body>

</html>