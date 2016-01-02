<?php if(!isset($content)){$content = null;}?>
<?php $this->load->view("dashboard-admin-template/header");?>
<?php $this->load->view("dashboard-admin-template/script");?>
<?php $this->load->view("dashboard-admin-template/content",array("content"=>$content));?>
<?php $this->load->view("dashboard-admin-template/footer");?>