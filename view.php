<?php

require('../../config.php');
require_once('../../lib/moodlelib.php');

require_login();

//get our config
$def_config = get_config('block_superiframe');

$usercontext = context_user::instance($USER->id);
$PAGE->set_course($COURSE);
$PAGE->set_url('/blocks/superiframe/view.php');
$PAGE->set_heading($SITE->fullname);

$PAGE->set_pagelayout($def_config->pagelayout);

$PAGE->set_title(get_string('pluginname', 'block_superiframe'));
$PAGE->navbar->add(get_string('pluginname', 'block_superiframe'));


// start output to browser
echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('pluginname', 'block_superiframe'),2);

// Some content goes here
echo "There is no such thing as stupid content. But you can get rid of me later!";

// Option 1: (shortcut for simple cases, preferred way)
// $user has come from the DB and has fields id, picture, imagealt, firstname and lastname
echo '<br>' . $OUTPUT->user_picture($USER);

echo '<br>' . fullname($USER);

$src = $def_config->url;
$width = $def_config->width;
$height = $def_config->height;

echo '<p>' . "<iframe src='$src' height='$height' width='$width'></iframe>";

//echo '<iframe src="https://quizlet.com/132695231/scatter/embed" 
//height="410" width="100%" style="border:0"></iframe>';

//echo help_icon('superiframe block', $component = 'superiframe', $linktext = 'help');



//send footer out to browser
echo $OUTPUT->footer();
return;
	