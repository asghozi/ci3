<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

	<!--jQuery-->
	<script src="//code.jquery.com/jquery.js"></script>
	<!--Boostrap JavaScript-->
	<script src="<?php echo base_url('') ?>assets/js/boostrap.min.js"></script>
	<script src="<?php echo base_url('') ?>assets/datatables.min.js"></script>
	<!--IE10 viewport hack for Surface/desktop Windows 8 bug-->
	<script type="text/javascript">
	$(document)ready(function(){
		$('#example').datatables()
	});
	</script>	
	</body>
</html>