<?php

array_push($job_strings, 'custom_job');

/**
 * @desc Inserting string into log file
 * @return boolval
 */
function custom_job()
{

    $GLOBALS['log']->fatal("I'm a ScheduledTask");

    return true;
}
