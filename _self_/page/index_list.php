<?php
/*
/index.php
    大約在 "main_pane_right" 上方 </div> 的上方

code
    include '_self_/page/index_list.php';

*/

$queryString = '';
if (isset($_SERVER['QUERY_STRING'])) {
    $queryString = '?' . $_SERVER['QUERY_STRING'];
}

?>

<code>
<h2>常用連結</h2>
<ul>
    <li><a href="server_status_processes.php<?php echo $queryString; ?>">status &gt; processes</a></li>
</ul>
</code>