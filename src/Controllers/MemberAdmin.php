<?php namespace StudioBonito\Security\Controllers;

use CMSMenu;

/**
 * MemberAdmin.
 *
 * @author       Tom Densham <tom.densham@studiobonito.co.uk>
 * @copyright    Studio Bonito Ltd.
 */
class MemberAdmin extends \ModelAdmin
{
    /**
     * The current url segment. {@link LeftAndMain::$url_segment}
     *
     * @config
     * @var string
     */
    private static $url_segment = 'members';

    /**
     * The current menu title. {@link LeftAndMain::$menu_title}
     *
     * @config
     * @var string
     */
    private static $menu_title = 'Security';

    /**
     * The menu icon.
     *
     * @config
     * @var string
     */
    private static $menu_icon = 'framework/admin/images/menu-icons/16x16/community.png';

    /**
     * @config
     * @var int
     */
    private static $menu_priority = -1;

    /**
     * List of all managed {@link DataObject}s in this interface. {@link ModelAdmin::$managed_models}
     *
     * @config
     * @var array|string
     */
    private static $managed_models = [
        'Member',
        'Group',
        'PermissionRole',
    ];

    /**
     * List of all {@link DataObject}s which can be imported through a subclass of {@link BulkLoader} (mostly CSV data).
     *
     * @config
     * @var array
     */
    private static $model_importers = [
        'Member' => 'MemberCsvBulkLoader',
        'Group'  => 'GroupCsvBulkLoader',
    ];

    /**
     *
     */
    public function init()
    {
        parent::init();

        CMSMenu::remove_menu_item('SecurityAdmin');
    }

    /**
     * @return array
     */
    public function getManagedModels()
    {
        $models = parent::getManagedModels();

        if(isset($models['Member']) && isset($models['Member']['title'])) {
            $models['Member']['title'] = _t('SecurityAdmin.Users', 'Users');
        }

        if(isset($models['Group']) && isset($models['Group']['title'])) {
            $models['Group']['title'] = singleton('Group')->i18n_plural_name();
        }

        if(isset($models['PermissionRole']) && isset($models['PermissionRole']['title'])) {
            $models['PermissionRole']['title'] = _t('SecurityAdmin.TABROLES', 'Roles');
        }

        return $models;
    }
}