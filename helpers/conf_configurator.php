<?php

/**
 * @version    CVS: 1.0.0
 * @package    Com_Configurator
 * @author     Matteo <matteo.crc@gmail.com>
 * @copyright  2018 Matteo
 * @license    GNU General Public License versione 2 o successiva; vedi LICENSE.txt
 */
defined('_JEXEC') or die;

JLoader::register('Conf_configuratorHelper', JPATH_ADMINISTRATOR . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'com_configurator' . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . 'conf_configurator.php');

/**
 * Class Conf_robotFrontendHelper
 *
 * @since  1.6
 */
class Conf_configuratorHelpersConf
{
	/**
	 * Get an instance of the named model
	 *
	 * @param   string  $name  Model name
	 *
	 * @return null|object
	 */
	public static function getModel($name)
	{
		$model = null;

		// If the file exists, let's
		if (file_exists(JPATH_SITE . '/components/com_configurator/models/' . strtolower($name) . '.php'))
		{
			require_once JPATH_SITE . '/components/com_configurator/models/' . strtolower($name) . '.php';
			$model = JModelLegacy::getInstance($name, 'Conf_configuratorModel');
		}

		return $model;
	}

	/**
	 * Gets the files attached to an item
	 *
	 * @param   int     $pk     The item's id
	 *
	 * @param   string  $table  The table's name
	 *
	 * @param   string  $field  The field's name
	 *
	 * @return  array  The files
	 */
	public static function getFiles($pk, $table, $field)
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);

		$query
			->select($field)
			->from($table)
			->where('id = ' . (int) $pk);

		$db->setQuery($query);

		return explode(',', $db->loadResult());
	}

    /**
     * Gets the edit permission for an user
     *
     * @param   mixed  $item  The item
     *
     * @return  bool
     */
    public static function canUserEdit($item)
    {
        $permission = false;
        $user       = JFactory::getUser();

        if ($user->authorise('core.edit', 'com_configurator'))
        {
            $permission = true;
        }
        else
        {
            if (isset($item->created_by))
            {
                if ($user->authorise('core.edit.own', 'com_configurator') && $item->created_by == $user->id)
                {
                    $permission = true;
                }
            }
            else
            {
                $permission = true;
            }
        }

        return $permission;
    }
}
