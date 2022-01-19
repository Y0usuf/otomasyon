<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('partials/head'); ?>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed">



    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">

            <?php $this->load->view("partials/aside"); ?>

            <?php $this->load->view("partials/rightAside"); ?>

            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                <?php $this->load->view("partials/navbar"); ?>

                <!-- Content -->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <div id="kt_content_container" class="container-xxl">
                            <div class="row g-5 g-xl-8">
                                <?php $this->load->view("{$viewFolder}/{$subViewFolder}/content"); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content -->

                <?php $this->load->view('partials/footer'); ?>

            </div>
        </div>
    </div>


    <?php $this->load->view('partials/scrollTop'); ?>

    <?php $this->load->view('partials/scripts'); ?>

</body>

</html>