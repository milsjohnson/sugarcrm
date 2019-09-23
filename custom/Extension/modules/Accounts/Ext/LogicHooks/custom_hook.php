<?php

$hook_array['after_save'][] = Array(
    1, 
    'Account after save update contacts name', 
    'custom/modules/Accounts/custom_hook.php',
    'AccountCustomHook', 
    'UpdateRelatedContactsName'); 
