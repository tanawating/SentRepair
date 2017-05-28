	<div class="iBannerFix">
		<p align="center">All right reserved © 2017 <a href="http://www.tanawating.com" target="_blank">www.tanawating.com</a></p>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="<?php echo base_url();?>assets/form_validator/jquery.form.validator.min.js"></script>
    <script src="<?php echo base_url();?>assets/form_validator/security.js"></script>
    <script src="<?php echo base_url();?>assets/form_validator/file.js"></script>
    <script>
        $.validate({
        modules: 'security, file',
        onModulesLoaded: function () {
        $('input[name="pass_confirmation"]').displayPasswordStrength();}});
    </script> 
	</body>
</html>