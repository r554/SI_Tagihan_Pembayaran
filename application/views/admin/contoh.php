<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/Template/head') ?>
</head>

<body class="">

    <!-- [ Pre-loader ] start -->
    <!-- <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div> -->
    <!-- [ Pre-loader ] End -->

    <!-- [ navigation menu ] start -->
    <?php $this->load->view('admin/Template/sidebar') ?>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <?php $this->load->view('admin/Template/header') ?>
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Dashboard Analytics</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <!-- support-section start -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card support-bar overflow-hidden">
                                <div class="card-body pb-0">
                                    <h2 class="m-0">350</h2>
                                    <span class="text-c-blue">Support Requests</span>
                                    <p class="mb-3 mt-3">Total number of support requests that come in.</p>
                                </div>
                                <div id="support-chart"></div>
                                <div class="card-footer bg-primary text-white">
                                    <div class="row text-center">
                                        <div class="col">
                                            <h4 class="m-0 text-white">10</h4>
                                            <span>Open</span>
                                        </div>
                                        <div class="col">
                                            <h4 class="m-0 text-white">5</h4>
                                            <span>Running</span>
                                        </div>
                                        <div class="col">
                                            <h4 class="m-0 text-white">3</h4>
                                            <span>Solved</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card support-bar overflow-hidden">
                                <div class="card-body pb-0">
                                    <h2 class="m-0">350</h2>
                                    <span class="text-c-green">Support Requests</span>
                                    <p class="mb-3 mt-3">Total number of support requests that come in.</p>
                                </div>
                                <div id="support-chart1"></div>
                                <div class="card-footer bg-success text-white">
                                    <div class="row text-center">
                                        <div class="col">
                                            <h4 class="m-0 text-white">10</h4>
                                            <span>Open</span>
                                        </div>
                                        <div class="col">
                                            <h4 class="m-0 text-white">5</h4>
                                            <span>Running</span>
                                        </div>
                                        <div class="col">
                                            <h4 class="m-0 text-white">3</h4>
                                            <span>Solved</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- support-section end -->
                </div>

            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="text-center">
                            <h3 class="mt-3">Welcome To <span class="text-primary">Able pro</span><sup>v8.0</sup></h3>
                        </div>
                        <div class="carousel-inner text-center">
                            <div class="carousel-item active" data-interval="50000">
                                <img src="<?= base_url() ?>assets/dist/assets/images/model/welcome.svg" class="wid-250 my-4" alt="images">
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <p class="f-16"><strong>Able pro v8.0</strong> will come with new Structure.</p>
                                        <p class="f-16"> it include <strong>Gulp / npm support, UI kit, Live customizer improved version, New improved layouts with RTL support, 8+ New Admin Panels</strong></p>
                                        <div class="row justify-content-center text-left">
                                            <div class="col-md-10">
                                                <h4 class="mb-3">Feature</h4>
                                                <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i> Gulp / npm support</p>
                                                <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i> UI kit</p>
                                                <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i> Live customizer improved version</p>
                                                <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i> New improved layouts with RTL support</p>
                                                <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i> 8+ New Admin Panels</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-interval="50000">
                                <img src="<?= base_url() ?>assets/dist/assets/images/model/able-admin.jpg" class="img-fluid mt-0" alt="images">
                            </div>
                            <!-- <div class="carousel-item" data-interval="50000">
                            <img src="<?= base_url() ?>assets/dist/assets/images/model/welcome.svg" class="wid-250 my-4" alt="images">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <p class="f-16"><strong>Able pro v8.0</strong> will come with new Structure.</p>
                                    <p class="f-16"> it include  <strong>Gulp / npm support, UI kit, Live customizer improved version, New improved layouts with RTL support, 8+ New Admin Panels</strong></p>
                                </div>
                            </div>
                        </div> -->
                        </div>

                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" style="transform:rotate(180deg);margin-bottom:-1px">
                        <path class="elementor-shape-fill" fill="#4680ff" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z">
                        </path>
                        <path class="elementor-shape-fill" fill="#4680ff" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
                        <path class="elementor-shape-fill" fill="#4680ff" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
                    </svg>
                    <div class="modal-body text-center bg-primary py-4">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
                        </ol>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="ml-2">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="mr-2">Next</span>
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <!-- Required Js -->
    <?php $this->load->view('admin/Template/js') ?>

    <script>
        $(document).ready(function() {
            checkCookie();
        });

        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function checkCookie() {
            var ticks = getCookie("modelopen");
            if (ticks != "") {
                ticks++;
                setCookie("modelopen", ticks, 1);
                if (ticks == "2" || ticks == "1" || ticks == "0") {
                    $('#exampleModalCenter').modal();
                }
            } else {
                // user = prompt("Please enter your name:", "");
                $('#exampleModalCenter').modal();
                ticks = 1;
                setCookie("modelopen", ticks, 1);
            }
        }
    </script>


</body>

</html>