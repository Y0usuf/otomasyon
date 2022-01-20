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

<script>
    $("#kt_datatable_example_5").DataTable({
        "language": {
            "lengthMenu": "Show _MENU_",
        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +

            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });
</script>