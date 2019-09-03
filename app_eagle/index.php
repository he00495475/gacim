<?php
if (isset($_GET['update_time'])) {
    $str = 'appip_bbupup 2019-09-19 10-23-20';
    $time_array = explode(' ', $str);
    array_shift($time_array);
    $time_array[1] = str_replace('-', ':', $time_array[1]);
    $time_str = $time_array[0] . ' ' . $time_array[1];
    $time = strtotime($time_str);
    echo strtotime('-120 second', $time);

    exit;
}
?>
<?php
$agent = $_SERVER['HTTP_USER_AGENT'];
$check_brwser = false;
$flag = preg_match("/Line|FBAV|MicroMessenger/i", $agent);
//$agent = strtolower($agent);
if (strpos($agent, "Safari") && !strpos($agent, "Chrome") && !$flag) {
    $check_brwser = true;
}

if (!$check_brwser) {
//    echo '<a href="web://" style="font-size: 48px;">請使用Safari開啟</a>';
    echo '<label style="font-size: 48px;">請使用Safari開啟</label>';
    exit;
}
?>
<a onclick="download()" style="font-size: 30px;color: blue;">安裝 應用程式</a>
<script>
    function download() {
        window.location = "itms-services://?action=download-manifest&url=https://raw.githubusercontent.com/he00495475/gacim/master/company/manifest.plist";
        
//        window.location = "itms-services://?action=download-manifest&url=http://sys.qpay.demo.acubedt.com/app/ipa/appip_qpay/manifest.plist";
//        window.location = "itms-services://?action=download-manifest&url=https://demo.acubedt.com/sys_qpay/app/ipa/appip_qpay/manifest.plist";

        setTimeout("auto_close()", 1000);
    }

    function auto_close() {
        window.close();
    }
</script>
