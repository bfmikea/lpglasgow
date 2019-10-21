<footer>
	<div class="container enlacesf">
		<div class="row">
	        
	        <div class="col-lg-4 col-md-12">
		        <div class="cfooter textp">
		        	<?php the_field( 'columna1' ); ?>
		        </div>
	    	</div>

	        <div class="col-lg-3 col-sm-3">
		    	<div class="">
		    		 <?php the_field( 'columna2' ); ?>	        	
		    	</div>
	    	</div>
	        <div class="col-lg-3 col-sm-3">
	        	    <?php the_field( 'columna3' ); ?>	    	
	    	</div>
	        
	        </div>

	    </div>
	    <div class="container">
	    <div class="container-fluid lineafooter"></div>
	    </div>
    </div>

    <div class="container-fluid colorf">
	    	
	
        <?php the_field( 'footer_texto' ); ?>
                 
    </div>
  
</footer>

 

    <?php

    // wp_footer action hook
    wp_footer();

    ?>

</body>

<!-- ModalReservarEspañol -->
   <div class="modal fade" id="modalReservar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                    <h5>Reserve un Free Tour de Glasgow</h5>
                    
                </div>
                <div class="modal-body">
				
				<div style="width: 100%; text-align: left;">
					<iframe allowtransparency="true" frameborder="0" height="275" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" src=" https://eventbrite.co.uk/tickets-external?eid=50292551375&ref=etckt" vspace="0" width="100%">
					</iframe>
				</div>

				<div style="font-family:Helvetica, Arial; font-size:12px; padding:10px 0 5px; margin:2px; width:100%; text-align:left;" ><a class="powered-by-eb" style="color: #ADB0B6; text-decoration: none;" target="_blank" href="https://www.eventbrite.co.uk/">Powered by Eventbrite</a>
				</div>
 
			</div>

                </div>
            </div>
        </div>
<!-- EndModalReservarEspañol -->

<!-- ModalReservarIngles -->
<div class="modal fade" id="modalReservarIN" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                    <h5>Book Free Tour Glasgow</h5>
                    
                </div>
                <div class="modal-body">
				
				<div style="width: 100%; text-align: left;">
					<iframe src="https://eventbrite.co.uk/tickets-external?eid=50292551375&ref=etckt" frameborder="0" height="275" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true">
					</iframe>

					<div style="font-family:Helvetica, Arial; font-size:12px; padding:10px 0 5px; margin:2px; width:100%; text-align:left;" ><a class="powered-by-eb" style="color: #ADB0B6; text-decoration: none;" target="_blank" href="https://www.eventbrite.co.uk/">Powered by Eventbrite</a>
					</div>
				</div>
 
			</div>

                </div>
            </div>
        </div>
<!-- EndModalReservarIngles -->

</div>
</html>
