<?php namespace StudioBonito\Security\Extensions;

use FieldList;

/**
 * GroupMembersFieldExtension.
 *
 * @author       Tom Densham <tom.densham@studiobonito.co.uk>
 * @copyright    Studio Bonito Ltd.
 */
class GroupMembersFieldExtension extends \DataExtension
{
    public function updateCMSFields(FieldList $fields)
    {
        if(class_exists('\GridFieldAddExistingSearchButton')) {
            $gridField = $fields->dataFieldByName('Members');
            $gridFieldConfig = $gridField->getConfig();
            $gridFieldConfig->removeComponentsByType('GridFieldAddExistingAutocompleter');
            $gridFieldConfig->addComponent(new \GridFieldAddExistingSearchButton());
        }
    }
}