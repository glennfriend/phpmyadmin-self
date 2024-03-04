<?php

$cfg['blowfish_secret'] = '';
$cfg['ThemeDefault']    = 'original';
$cfg['ForceSSL']        = false;    // 4.6.0 版本後已移除

// Servers configuration
$i = 0;

// [1]
$i++;
$cfg['Servers'][$i] = getDefaultConfig();
$cfg['Servers'][$i]['host']     = '127.0.0.1';  // localhost
$cfg['Servers'][$i]['verbose']  = '[local] ' . $cfg['Servers'][$i]['host'];

// [2]
// ....




// End of servers configuration
$cfg['QueryHistoryDB']      = true;
$cfg['QueryHistoryMax']     = 25;
$cfg['BrowseMIME']          = true;
$cfg['PDFDefaultPageSize']  = 'A4';

// Directories for saving/loading files from server
$cfg['UploadDir']   = '';
$cfg['SaveDir']     = '';

# 界面上的功能, 點擊欄位後, 變成 input 框, 可以修改內容, 立即變更
# 如果不想使用, 可以將值改為 "disabled"
# $cfg['GridEditing'] = 'click';          //single-click editing
# $cfg['GridEditing'] = 'double-click';   //default value. No need to specify this except for maybe readability purposes
# $cfg['GridEditing'] = 'disabled';       //disabled cell/grid editing completely


/**
 *
 */
function getDefaultConfig()
{
    $pma = [];
    $pma['host']                = '127.0.0.1';
    $pma['auth_type']           = 'cookie';
    $pma['connect_type']        = 'tcp';
    $pma['compress']            = false;
    $pma['AllowNoPassword']     = false;
    $pma['LoginCookieValidity'] = 1 * 60 * 60;  // timeout 1440s = 24m

    // Advanced phpMyAdmin features
    // pmadb table  -> examples/config.manyhosts.inc.php
    $pma['pmadb']               = 'phpmyadmin';
    $pma['bookmarktable']       = 'pma__bookmark';
    $pma['relation']            = 'pma__relation';
    $pma['table_info']          = 'pma__table_info';
    $pma['table_coords']        = 'pma__table_coords';
    $pma['pdf_pages']           = 'pma__pdf_pages';
    $pma['column_info']         = 'pma__column_info';
    $pma['history']             = 'pma__history';
    $pma['table_uiprefs']       = 'pma__table_uiprefs';
    $pma['tracking']            = 'pma__tracking';
    $pma['userconfig']          = 'pma__userconfig';
    $pma['recent']              = 'pma__recent';
    $pma['favorite']            = 'pma__favorite';
    $pma['users']               = 'pma__users';
    $pma['usergroups']          = 'pma__usergroups';
    $pma['navigationhiding']    = 'pma__navigationhiding';
    $pma['savedsearches']       = 'pma__savedsearches';
    $pma['central_columns']     = 'pma__central_columns';
    $pma['designer_settings']   = 'pma__designer_settings';
    $pma['export_templates']    = 'pma__export_templates';
    return $pam;
}


/*

設定正式環境的背景顏色, 以提醒使用者
vi themes/original/layout.inc.php
    $GLOBALS['cfg']['NaviBackground'] = '#D0EEE0';

vi themes/pmahomme/layout.inc.php
    $GLOBALS['cfg']['NaviBackground'] = '#e3ffe3';

*/
