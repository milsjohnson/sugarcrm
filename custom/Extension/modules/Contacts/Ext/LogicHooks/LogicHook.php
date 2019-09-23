<?php

$hook_array['before_save'][] = array(
    1,
    'Custom hook for contacts before push feed',
    'custom/modules/Contacts/contact_hook.php',
    'CustomHook',
    'appendStringBeforeSaveNewContact',
);

