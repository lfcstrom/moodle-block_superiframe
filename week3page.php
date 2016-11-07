// File: /mod/superiframe/view.php

<?php
 
require('config.php');

$cmid = required_param('id', PARAM_INT);
$cm = get_coursemodule_from_id('superiframe', $cmid, 0, false, MUST_EXIST);
$course = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
 
require_login($course, true, $cm);
$PAGE->set_url('/mod/superiframe/view.php', array('id' => $cm->id));
$PAGE->set_title('My modules page title');
$PAGE->set_heading('My modules page heading');