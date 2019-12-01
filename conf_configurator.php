<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Configurator
 * @author     Matteo <matteo.crc@gmail.com>
 * @copyright  2018 Matteo
 * @license    GNU General Public License versione 2 o successiva; vedi LICENSE.txt
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Conf_robot', JPATH_COMPONENT);
JLoader::register('Conf_configuratorController', JPATH_COMPONENT . '/controller.php');


// Execute the task.
$controller = JControllerLegacy::getInstance('Com_Configurator');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
