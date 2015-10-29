<?php namespace StudioBonito\Security\Extensions;

use CMSMenu;

/**
 * Simple extension to remove default security admin class from menu.
 *
 * @author       Tom Densham <tom.densham@studiobonito.co.uk>
 * @copyright    Studio Bonito Ltd.
 */
class DisableSecurityAdminExtension extends \Extension
{
    /**
     * Disable SecurityAdmin menu item.
     */
    public function init()
    {
        CMSMenu::remove_menu_item('SecurityAdmin');
    }
}
