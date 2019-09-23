<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class CustomHook
{

    /**
     * @desc Appending a string to a name before new contact is save to db
     * @param object $beam, string $event, string $arguments
     * @return void
     */
    public function appendStringBeforeSaveNewContact($bean, $event, $arguments)
    {
        if (empty($bean->fetched_row)) {
            $stringToBeAppendedOnFirstName = "(this is appended)";
            $bean->first_name .= $stringToBeAppendedOnFirstName;
        }

    }
}
