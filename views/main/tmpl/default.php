

<?php


 

// No direct access to this file

defined('_JEXEC') or die('Restricted access');
//jimport('joomla.application.module.helper');
//modifico breadcumb
$mainframe = JFactory::getApplication();
$pathway =$mainframe->getPathway();
$breadcrumb = $pathway->setPathway(array());
$pathway->addItem( JText::_( 'Configurator' ),'');


require_once('functions.php');
require_once('modals/all_modals.php');

require_once('javascript_requirements.php');

$document = JFactory::getDocument();
$document->setTitle('Configurator');

$user = JFactory::getUser();
$name = $user->name;
$email = $user->email;

if(!$user->id)
{
    echo '<center><h3>Please login</h3></center><br/>';
    echo '<div class="sourcecoast sclogin-modal-links sclogin"><center><a class="btn btn-primary" href="#login-modal" role="button" data-toggle="sc-modal">Login</a></center></div>';
}
else{

   $isroot = $user->authorise('core.admin');

echo '<center><h3>Configurator</h3></center><br/>';

echo '<div class="row">';
echo '<div class="col-md-4">';
echo '<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" checked>
  <i>
    Label
  </i>&nbsp;<i class="fa fa-info-circle" onclick="modalCheckbox();"></i>
</div><br/><br/>
 

</div><br/>';

echo '</div>';

}






?>


