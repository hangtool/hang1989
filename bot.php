$a1 = "content-type:application/json;charset=utf-8";
$a2 = "t:VFZSamVVNUVVWGhPUkVFeVRWRTlQUT09";

function clear() {system("clear");}
function mothai () {$er="                                                   \r";cc($er);}






function tong(){global $authu, $ser, $nana, $xyxy;
file_put_contents('tong.txt',"$authu|$ser|$nana|PROXY=$xyxy\n", FILE_APPEND);}



function DNGLK() {global $tsm99, $proxy;
$link= "https://gateway.golike.net/api/users/me";
if ($proxy == false) {$result = GOIGET($link, $tsm99, null, null);}
if ($proxy == true) {$result  = GOIGET($link, $tsm99, null, $proxy);}
return $result;}




function chekxy () {global $proxy;
$date = "ip_proxy=".$proxy."&selected_proxy=https";
$tet = GOIPOST("https://proxy.mkvn.net/checkproxy/Checkproxy.php", null, $date, null);
$met = $tet['combinedResponse'];
return $met;}




















while (true) {
echo "THOAT TOOL BAM ENTER\n";
echo "NHAP AUTHOZATION (GOLIKE) : ";
$authu = trim(fgets(STDIN));system('clear');
if ($authu == false) {break;}
echo "THOAT TOOL BAM ENTER\n";
echo "NHAP USER_ANGET : ";
$ser = trim(fgets(STDIN));system('clear');
if ($ser == false) {break;}
while (true) {
while (true) {
echo "NHAP PROXY ( KHONG NHAP BAM ENTER BO QUA ) : ";
$proxy = trim(fgets(STDIN));system('clear');
if ($proxy == false) {break;}
$met = chekxy();
if (strpos($met, 'DIE') == true) {echo "PROXY KHONG HOAT DONG HOAC LOI\n";sleep(2);@system('clear');continue;}
elseif (strpos($met, 'LIVE') == true) {echo "PROXY NAY HOAT DONG TOT\r";sleep(2);mothai();break;}continue;}


$a3 = "authorization: $authu";
$a4 = "user-agent: $ser";
$tsm99 = array($a1, $a2, $a3, $a4);
$result   = DNGLK();


if ($proxy == true) {
$chemi = $result['error'];
if ($chemi == false) {break;}
echo "PROXY CO THE BI SEVE CHAN\r";sleep(2);mothai();continue;}break;}




$ponse = $result['jsonData'];
$kqua  = $ponse['status'];
if ($kqua == 200) {} else {echo "SAI AUTHUZATION HOAC USER_AMGENT\r";sleep(2);mothai();continue;}
$nana = $ponse['data']['username'];
echo "DA LUU TAI KHOAN GOLIKE $nana VAO FILE\r";sleep(2);mothai();
tong();


continue;} ///// while











































function cc($vanban){$str = strlen($vanban);
for($ii=0;$ii<=$str;$ii++){echo $vanban[$ii]; usleep(10000);}
return 1;}









function GOIGET($host, $tsm = null, $data = null, $proxy = null, $requestType = "GET") {
return HAMTONG($host, $tsm, $data, $proxy, $requestType, false);}
function GOIPOST($host, $tsm = null, $data = null, $proxy = null, $requestType = "POST") {
return HAMTONG($host, $tsm, $data, $proxy, $requestType, false);}
function KHONGCOOKIE($host, $tsm = null, $data = null, $proxy = null, $requestType = "POST") {
return HAMTONG($host, $tsm, $data, $proxy, $requestType, false);}
function LAYCOOKIE($host, $tsm = null, $data = null, $proxy = null, $requestType = "POST", $cookieFile = 'cookie.txt') {
return HAMTONG($host, $tsm, $data, $proxy, $requestType, true, $cookieFile);}
















function HAMTONG($host, $tsm = null, $data = null, $proxy = null, $requestType = "POST", $useCookies = false, $cookieFile = "cookie.txt") {
$ch = curl_init($host);
$options = [
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HEADER => true,
CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_TIMEOUT => 30,
CURLOPT_CUSTOMREQUEST => $requestType,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTPHEADER => $tsm ?? [],
CURLOPT_POSTFIELDS => $data ?? ''];
if ($proxy) {
$parts = explode(':', $proxy);
$options[CURLOPT_PROXY] = "{$parts[0]}:{$parts[1]}";
if (isset($parts[2], $parts[3])) {
$options[CURLOPT_PROXYUSERPWD] = "{$parts[2]}:{$parts[3]}";}}

if ($useCookies) {
$options[CURLOPT_COOKIEJAR] = $cookieFile;
$options[CURLOPT_COOKIEFILE] = $cookieFile;}

curl_setopt_array($ch, $options);
$response = curl_exec($ch);
$error = curl_error($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
curl_close($ch);
$header = substr($response, 0, $headerSize);
$body = substr($response, $headerSize);
$jsonData = json_decode($body, true);
if (json_last_error() !== JSON_ERROR_NONE) $jsonData = null;
return [
'combinedResponse' => $header . "\n" . $body,
'jsonData' => $jsonData,
'html' => $body,
'error' => $error,
'httpCode' => $httpCode];}

