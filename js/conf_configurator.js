//avoid jquery conflict inside website
var $jQ = jQuery.noConflict();

function modalCheckbox(){
	
	    

        $jQ('#checkboxModal').modal({
		    backdrop: 'static',
		    keyboard: false
		});

       $jQ(document).ready(function() {
		$jQ("#checkboxModal").modal('show');
 	 });

       
		 
		
		
	
}


function sendMail(name,email){



	 $jQ(document).ready(function() {
	  $jQ.ajax({
            type: "POST",
            url: "sendMail.php" ,
            data: { name: name,  email: email},
            success : function() { 



            }
        });

 });

}

 
