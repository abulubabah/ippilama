<?php 

// button add
$config['add'] = FALSE;

//status user
// $config['status'][0] = 'No Active';
// $config['status'][1] = 'Active';

// $config['statuses'][0] = '<span class="badge badge-danger"><i class="ace-icon glyphicon glyphicon-remove"></i></span>';
// $config['statuses'][1] = '<span class="badge badge-success"><i class="ace-icon glyphicon glyphicon-ok"></i></span>';

//field search
$config['field_search']['or'] = array('ws_log_name', 'ws_log_username');
$config['field_search']['and'] = array('ws_log_status');
$config['field_search']['desc'] = array('ws_log_name', 'ws_log_username');

//user access
$config['access'][0] = 'Administrator';
$config['access'][1] = 'User';


//subject email
$config['subject_email_new_user'] = 'New User CMS (nama website anda)';

?>