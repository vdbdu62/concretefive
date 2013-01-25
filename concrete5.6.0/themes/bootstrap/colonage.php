<?php $this->inc('elements/header.php');?>


	<div class="row">
		<div class="span4">
			<?php
				$a=new Area('colone 1');
				$a->display($c);
			?>
		</div>	
		
		<div class="span4">
			<?php
				$a=new Area('colone 2');
				$a->display($c);
			?>
		</div>	
		
		<div class="span4">
			<?php
				$a=new Area('colone 3');
				$a->display($c);
				?>
		</div>
	
	</div>
 
		<div class="row">
			<div class="span12">
				<?php
					$a=new Area('contenue');
					$a->display($c);
				?>
			</div>
		</div>
		    
	   
	  





<?php $this->inc('elements/footer.php');?>


