<?php 
 //WARNING: The contents of this file are auto-generated



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

?>