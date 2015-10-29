<?php namespace StudioBonito\Security\Extensions;

use FieldList;
use GridField;
use GridFieldAddExistingSearchButton;

/**
 * Data extension used to override the members gridfield config on group data-objects.
 *
 * @author       Tom Densham <tom.densham@studiobonito.co.uk>
 * @copyright    Studio Bonito Ltd.
 */
class GroupMembersFieldExtension extends \DataExtension
{
    /**
     * Override default GridField config to use GridFieldAddExistingAutocompleter.
     *
     * @param FieldList $fields
     */
    public function updateCMSFields(FieldList $fields)
    {
        if (class_exists('GridFieldAddExistingSearchButton')) {
            $gridField = $fields->dataFieldByName('Members');
            if ($gridField instanceof GridField) {
                $gridFieldConfig = $gridField->getConfig();
                $gridFieldConfig->removeComponentsByType('GridFieldAddExistingAutocompleter');
                $gridFieldConfig->addComponent(new GridFieldAddExistingSearchButton());
            }
        }
    }
}
