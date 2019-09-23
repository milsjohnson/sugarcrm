<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class AccountCustomHook
{
    
    /**
     * @desc Appending a string to related contacts of the account
     * after saving account record to db. Append string only once
     * @param object $beam, string $event, string $arguments
     * @return void
     */
    public function UpdateRelatedContactsName($bean, $event, $arguments)
    {

        $relatedContacts = $bean->get_contacts();

        foreach ($relatedContacts as $contact) {
            if (!strpos($contact->first_name, '(this is related)')) {
                $contact->first_name .= "(this is related)";
                $contact->save();
            }
        }

    }
}
