<?php
//retrieve user data from Joomla
$user = JFactory::getUser();
$name = $user->name;
$email = $user->email;

echo '<div id="checkboxModal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="myModalLabel" >
  

      <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="goodbye();">&times;</button>
        <h4 class="modal-title">Modal</h4>
      </div>
      <div class="modal-body">
       
       

      </div>
     
      <div class="modal-footer">
      <p style="float: left;" id="resultTest"></p>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="sendMail(\''.$name.'\',\''.$email.'\');">Ok</button>
      </div>
   
</div>
</div>
  
</div>';

























?>