<?php use_helper('I18N') ?>
<?php include_partial('customer/dashboard_header', array('customer'=> null, 'section'=>__('Aktivera Resenummer')) ) ?>
<div class="left-col">
    <?php include_partial('navigation', array('selected'=>__('dashboard'), 'customer_id'=>$customer->getId())) ?>
  
	<div align="center" style="margin:50px auto">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
	<p><?php
		echo __("Thank you for making a purchase at VoIP. You will receive a confirmation email along with invoice in few moments.");
		echo '</p>';
		echo '<p>';
		echo __("For any questions please feel free to contact us at");
		echo '</p>';
	?>
	<a href="mailto:support@zapna.no">support@zapna.no</a>.
	</div>
  </div> <!-- end left-col -->
  <?php include_partial('customer/sidebar') ?>