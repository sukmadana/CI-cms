    <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
    <script src="<?= base_url()?>assets_admin/js/core/jquery.min.js"></script>
    <script src="<?= base_url()?>assets_admin/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url()?>assets_admin/js/core/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url()?>assets_admin/js/core/jquery.scrollLock.min.js"></script>
    <script src="<?= base_url()?>assets_admin/js/core/jquery.appear.min.js"></script>
    <script src="<?= base_url()?>assets_admin/js/core/jquery.countTo.min.js"></script>
    <script src="<?= base_url()?>assets_admin/js/core/jquery.placeholder.min.js"></script>
    <script src="<?= base_url()?>assets_admin/js/core/js.cookie.min.js"></script>
    <script src="<?= base_url()?>assets_admin/js/app.js"></script>

    <?php
        if(isset($js)){
            foreach($js as $script){
                $this->load->view($script);
            }
        }
    ?>
    </body>
</html>