   <!-- jQuery -->
    <script src="<?php echo base_url("assets/startbootstrap-sb-admin");?>/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url("assets/startbootstrap-sb-admin");?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <!-- Bootstrap Core JavaScript -->
    <?php /*<script src="<?php echo base_url("assets/bootstrap-datepicker");?>/js/bootstrap-datetimepicker.min.js"></script>
    */ ?>
    <script src="<?php echo base_url("assets/JQuery");?>/Jquery-1.11.3.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    
    <script src="<?php echo base_url("assets/startbootstrap-sb-admin");?>/bower_components/metisMenu/dist/metisMenu.min.js"></script>
	<script src="<?php echo base_url()?>assets/datatables.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <?php /*
    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url("assets/startbootstrap-sb-admin");?>/bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url("assets/startbootstrap-sb-admin");?>/bower_components/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url("assets/startbootstrap-sb-admin");?>/js/morris-data.js"></script>
*/?>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url("assets/startbootstrap-sb-admin");?>/dist/js/sb-admin-2.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        
        if ( $( ".mytable" ).length ) 
        {
            $(".mytable").DataTable();
        }
        /**
        $(".mytable").DataTable();
        console.log("mytable");
        */
    });
    </script>