<?php  $this->load->view('admin/_partial/header');?>
<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">

    <?php $this->load->view('admin/_partial/sidebar');?>
    <?php $this->load->view('admin/_partial/navbar');?>

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Header -->
        <div class="content bg-gray-lighter">
            <div class="row items-push">
                <div class="col-sm-7">
                    <h1 class="page-heading">
                        <?=isset($title)?$title:''?>
                    </h1>
                </div>
                <!-- <div class="col-sm-5 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li>Category</li>
                        <li><a class="link-effect" href="">Page</a></li>
                    </ol>
                </div> -->

            </div>
        </div>
        <!-- END Page Header -->
        <div class="row">
            <?php if($this->session->flashdata('success')) : ?>
            <div class="col-sm-10 col-sm-offset-1 push-10">
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h3 class="font-w300">Success</h3>
                    <p><?=$this->session->flashdata('success')?></p>
                </div>
            </div>
            <?php endif;?>
            <?php if($this->session->flashdata('error')) : ?>
            <div class="col-sm-10 col-sm-offset-1 push-10">
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h3 class="font-w300">Error</h3>
                    <p><?=$this->session->flashdata('error')?></p>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <!-- Page Content -->
        <div class="content">

            <!-- My Block -->
            <?php
                if(isset($content)) {
                    $this->load->view($content);
                }else {
                    $this->load->view('admin/home');
                }
            ?>
                <!-- END My Block -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
        <div class="pull-right">
            Original created by <a class="font-w600" href="#" target="_blank">Local Guide Support</a>
        </div>
        <div class="pull-left">
            <a class="font-w600" href="<?=base_url();?>" target="_blank">My Travel CMS</a> &copy; <span class="js-year-copy"></span>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->
<?php $this->load->view('admin/_partial/footer'); ?>