<div class="footer">
    <div class="footer-inner">
        <div class="container">
            <div class="row">
                <div class="span12"> 
                    &copy; 2017 <a href="#">Desenvolvido por Danilo Goulart</a>. 
                </div>
                <!-- /span12 --> 
            </div>
            <!-- /row --> 
        </div>
        <!-- /container --> 
    </div>
    <!-- /footer-inner --> 
</div>
<!-- /footer --> 

<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?=base_url()?>assets/js/jquery-1.7.2.min.js"></script> 
<script src="<?=base_url()?>assets/js/excanvas.min.js"></script> 
<script src="<?=base_url()?>assets/js/chart.min.js" type="text/javascript"></script> 
<script src="<?=base_url()?>assets/js/bootstrap.js"></script>
<script src="<?=base_url()?>assets/js/base.js"></script> 
<script type="text/javascript">
    $(document).ready(function() {
        $('.mainnav li a').click(function(){
            $(this).addClass('active');
        });
    });
</script>

</body>

</html>