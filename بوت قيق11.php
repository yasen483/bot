<?php 

// تخمط اذكر اسمي حبي #كلاوجي #ABBAS
// قناتي @NONBBN
//معرفي @ll8III

ob_start();
$dev_a = '1568302696:AAG02L39sRWhnNFkp0RyO3zf5SrK-FRRNkY';
define('API_KEY',$dev_a);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$aws_c9 = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$aws_c9";
$aws_c9 = file_get_contents($url);
return json_decode($aws_c9);
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$from_id = $message->from->id;
$text = $message->text;




$XN1 = "سرسريه روحو نام 😹😹";







$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$name = $message->from->first_name;
$user = $message->from->username;
$admin = 1189284654; //ايديك>
$tws = file_get_contents("tw.txt");
$de = file_get_contents("admin2.txt");
$ad = array("$admin","$de");
$list = file_get_contents("blocklist.txt");
$ebu = explode("\n",$list);
$type       = $update->message->chat->type;
if(in_array($from_id,$ebu)){
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⛳| عزيزي انت محظور من البوت",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);    
}
mkdir('alsh');
include "php.php";
#التخزين ايديات
$from_id = $message->from->id;
$type       = $update->message->chat->type;
$gp = explode("\n",file_get_contents("group.txt"));
$pv = explode("\n",file_get_contents("alsh/Alsh.txt"));
$sta = file_get_contents("start.txt");
#شتراك اجباري خاصه
$all = file_get_contents("id.txt");
$rabt = file_get_contents("rabt.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$all&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لستخدام البوت عليك اشتراك في قنوات البوت 🎁.
بعد الاشتراك في القنوات اضغط - /start 📦.",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
          'inline_keyboard'=>[
[['text'=>"📦. اشترك -",'url'=>"$rabt"]],
]])]);return false;}
#شتراك اجباري1
$op = file_get_contents("ch.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$op&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لستخدام البوت عليك اشتراك في قنوات البوت 🎁.
بعد الاشتراك في القنوات اضغط - /start 📦.
قناة البوت : @$op",
'reply_to_message_id'=>$message->message_id,
]);return false;}
#شتراك اجباري2
$oop = file_get_contents("chc.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$oop&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لستخدام البوت عليك اشتراك في قنوات البوت 🎁.
بعد الاشتراك في القنوات اضغط - /start 📦.
قناة البوت : @$oop",
'reply_to_message_id'=>$message->message_id,
]);return false;}
if($text and $text != "/start"){
file_put_contents("text.txt", "$text\n",FILE_APPEND);}
if($text and $type == "private" and !in_array($from_id, $pv)){
file_put_contents("alsh/Alsh.txt", "$from_id\n",FILE_APPEND);}
if($text and $type == "supergroup" and !in_array($chat_id, $gp)) {
file_put_contents("group.txt", "$chat_id\n",FILE_APPEND);}
if($text == "/start" and !in_array($from_id,$ebu) and !in_array($chat_id,$ad) and $chat_id != $admin and $sta == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
مرحبا بك. ، $name ،

اهلا بك في بوت الانحراف الاول ع العراق 
يحتوي البوت ع افلام ومتحركات يوميه 😻
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"$name","url"=>"t.me/$user"]],
]])
]);   
}
if($text == "/start" and !in_array($from_id,$ebu) and !in_array($chat_id,$ad) and $chat_id != $admin and $sta != null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"مـرحبا بك عزيزي 🎁. ، $name ،
$sta
",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"$name","url"=>"t.me/$user"]],
]])
]);   
}

if($text == "/start" and in_array($chat_id,$ad)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"آهلا بك $name 🍟.
🎺| يمكنك استخدام الاوامر الموجوده في اسفل.
📌| لعرض احصائيات البوت ارسل : /mem.
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"تغير رساله ال/start ،📎.","callback_data"=>"start"]],
[["text"=>"تفعيل التواصل ،📯.","callback_data"=>"utws"],["text"=>"تعطيل التواصل ،📌.","callback_data"=>"ntws"]],
[["text"=>"حظـر عضو ،📤.","callback_data"=>"bn"],["text"=>"الغاء حظر العضو ،📦.","callback_data"=>"unbn"]],
[["text"=>"آضـآفهہ‏‏ آدمـن للبوت ،📚.","callback_data"=>"admin"],["text"=>"حذف آدمـن آلبوت ،🍟.","callback_data"=>"unadmin"]],
[["text"=>"مـعلومـآت العضو بالايدي ،🎺.","callback_data"=>"info"],["text"=>"مـعلومـآت عضو بالمعرف ،🎄.","callback_data"=>"infous"]],
[["text"=>"قسم شتراك اجباري ،🎯.","callback_data"=>"chh"],["text"=>"قسم الاذاعه ،🏆.","callback_data"=>"bcc"]],
[["text"=>"تجربه كود ،💧.","callback_data"=>"setphp"],["text"=>"حذف لكود ،🚿.","callback_data"=>"delphp"]],
[["text"=>"تفعيل اشعار الدخول ،🔖.","callback_data"=>"on"],["text"=>"تعطيل اشعار الدخول ،🎵.","callback_data"=>"off"]],
[["text"=>"نسـخهہ‏‏ احتياطيه ،💛.","callback_data"=>"get"],["text"=>"نسـخهہ‏‏ من اعضا ،🔦.","callback_data"=>"upmem"]],
[["text"=>" رفع نسخه من اعضا ،📮.","callback_data"=>"puo"]],
[["text"=>"حذف جميع احصائيات البوت ،🌻.","callback_data"=>"delbot"]],
]])
]);   
unlink("com.txt");
}
#رجوع
if($data == "bk" and in_array($chat_id2,$ad)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"آهلا بك $name 🍟.
🎺| يمكنك استخدام الاوامر الموجوده في اسفل.
📌| لعرض احصائيات البوت ارسل : /mem.
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"تغير رساله ال/start ،📎.","callback_data"=>"start"]],
[["text"=>"تفعيل التواصل ،📯.","callback_data"=>"utws"],["text"=>"تعطيل التواصل ،📌.","callback_data"=>"ntws"]],
[["text"=>"حظـر عضو ،📤.","callback_data"=>"bn"],["text"=>"الغاء حظر العضو ،📦.","callback_data"=>"unbn"]],
[["text"=>"آضـآفهہ‏‏ آدمـن للبوت ،📚.","callback_data"=>"admin"],["text"=>"حذف آدمـن آلبوت ،🍟.","callback_data"=>"unadmin"]],
[["text"=>"مـعلومـآت العضو بالايدي ،🎺.","callback_data"=>"info"],["text"=>"مـعلومـآت عضو بالمعرف ،🎄.","callback_data"=>"infous"]],
[["text"=>"قسم شتراك اجباري ،🎯.","callback_data"=>"chh"],["text"=>"قسم الاذاعه ،🏆.","callback_data"=>"bcc"]],
[["text"=>"تجربه كود ،💧.","callback_data"=>"setphp"],["text"=>"حذف لكود ،🚿.","callback_data"=>"delphp"]],
[["text"=>"تفعيل اشعار الدخول ،🔖.","callback_data"=>"on"],["text"=>"تعطيل اشعار الدخول ،🎵.","callback_data"=>"off"]],
[["text"=>"نسـخهہ‏‏ احتياطيه ،💛.","callback_data"=>"get"],["text"=>"نسـخهہ‏‏ من اعضا ،🔦.","callback_data"=>"upmem"]],
[["text"=>" رفع نسخه من اعضا ،📮.","callback_data"=>"puo"]],
[["text"=>"حذف جميع احصائيات البوت ،🌻.","callback_data"=>"delbot"]],
]])
]);   
unlink("com.txt");
}
#تفعيل اشعار دخول
if($data == "on" and in_array($chat_id2,$ad)){
file_put_contents("onn.txt","on");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"💘| تم تفعيل اشعار الدخول،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
#تعطيل اشعار دخول
if($data == "off" and in_array($chat_id2,$ad)){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🔖| تم تعطيل الاشعار الدخول،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
unlink('onn.txt');
}
#حذف آدمن
if($data == "unadmin" and $chat_id2 == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تم حذف الادمن.",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،📌.","callback_data"=>"bk"]],
]])
]);   
unlink('admin2.txt');
}
#قسم حذف كل
if($data == "delbot" and in_array($chat_id2,$ad)  ){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📮| عزيزي هل انت متاكد من انك تريد حذف جميع احصائيات البوت،
🎄| #مـلآحظـهہ‏‏ سيتم حذف جميع ايديات الاعضا،الاشتراك الاجباري،اعضا المحظورين،عدد رسائل داخل لبوت و....،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"نعم ،📌.","callback_data"=>"dell"],["text"=>"لآ ،📌.","callback_data"=>"bk"]],
]])
]);   
}
if($data == "dell" and in_array($chat_id2,$ad)  ){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📮| تم حذف جميع احصائيات البوت اصبح الان جديد",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،📌.","callback_data"=>"bk"]],
]])
]);   
unlink("start.txt");
unlink("tw.txt");
unlink("blocklist.txt");
unlink("admin2.txt");
unlink("alsh/Alsh.txt");
unlink("rabt.txt");
unlink("id.txt");
unlink("ch.txt");
unlink("chc.txt");
unlink("text.txt");
unlink("php.php");
}
#قسم الاذاعه
if($data == "bcc" and in_array($chat_id2,$ad)  ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"💛| حسننا الان قم بختيار الاذاعه من فضلك،",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"آذآعهہ‏‏ رسـآلهہ‏‏ ،🌻.","callback_data"=>"bc"],["text"=>"آذآعهہ‏‏ بآلتوجيهہ‏‏ ،🌻.","callback_data"=>"for"]],
[["text"=>"آذآعهہ‏‏ شـفآف ،🌻.","callback_data"=>"inln"],["text"=>"آذآعهہ‏‏ بآلمـيديآ ،🌻.","callback_data"=>"med"]],
[["text"=>"آذآعهہ‏‏ HTML ،🌻.","callback_data"=>"HTML"],["text"=>"آذآعهہ‏‏ MarkDown ،🌻.","callback_data"=>"MarkDown"]],
[["text"=>"آذآعهہ‏‏ للمجموعات ،🌻.","callback_data"=>"sndgp"],["text"=>"آذآعهہ‏‏ للكل مجموعات و اعضا ،🌻.","callback_data"=>"MarkDown"]],
[["text"=>"رجوع ،🌻.","callback_data"=>"bk"]],
]])
]);   
}
#قسم شتراك اجباري
if($data == "chh" and in_array($chat_id2,$ad)  ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🌻| حسننا عزيزي قم بلختيار من الاسفل لوضع شتراك اجباري،",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"قناة عامه 1 ،🎺.","callback_data"=>"add2"],["text"=>"قناة عامه 2 ،🎺.","callback_data"=>"add1"]],
[["text"=>"قناة خاصه ،🎺.","callback_data"=>"add"]],
[["text"=>"حذف جميع القنوات من شتراك ،🎺.","callback_data"=>"remch"]],
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
#الاحصائيات
$tkzk = explode("\n",file_get_contents("text.txt"));
$meb = explode("\n",file_get_contents("alsh/Alsh.txt"));
$band = explode("\n",file_get_contents("blocklist.txt"));
$tx = explode("\n",file_get_contents("text.txt"));
$admn = file_get_contents("admin2.txt");
$gpp = explode("\n",file_get_contents("group.txt"));
$mem = count($meb)-1;
$zktex = count($tkzk)-1;
$bnn = count($band)-1;
$ts = count($tx)-1;
$grup = count($gpp)-1;
$oop = file_get_contents("chc.txt");
$op = file_get_contents("ch.txt");
$all = file_get_contents("id.txt");
$rabt = file_get_contents("rabt.txt");
if($text == "/mem" and in_array($chat_id,$ad)  ){
 date_default_timezone_set("Asia/Baghdad");
$getMe = bot('getMe')->result;
$date = $message->date;
$gettime = time();
$sppedtime = $gettime - $date;
$time = date('h:i');
$date = date('y/m/d');
$userbot = "{$getMe->username}";
$userb = strtoupper($userbot);
if ($sppedtime == 3  or $sppedtime < 3) {
$f = "ممتازة 👏🏻";}
if ($sppedtime == 9 or $sppedtime > 9 ) {
$f = "لا بأس 👍🏻";}
if ($sppedtime == 10 or $sppedtime > 10) {
$f = " سئ جدا 👎🏻"; }
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🌻| عدد العضاء : *$mem*،
🌻| عدد الاعضا المحظورين : *$bnn*،
🌻| سرعهہ‏‏ البوت : *$f*،
🌻|  عدد رسائل داخل البوت : *$ts*،
🌻|  عدد المجموعات : *$grup*،
🌻| الوقت و التاريخ : *20$date - $time*،
🌻|   آدمن الثاني : *$admn*،
🌻| قنوات الاشتراك الاجباري العام،
@$op ، @$oop
🌻| قناة الاشتراك الاجباري الخاص،
`$all` ، `$rabt`
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
#رساله ستارت
if($data == "start" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","start");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🌻| حسننا الان قم برسال النص،
🐞| يمكنك ايضا استخدام الماركدوان كمثال،
[اضغط هنا وتابع جديدنا](t.me/alshh)",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "start" and $text != "/h" and $text != "/start" and in_array($chat_id,$ad)  ){
file_put_contents("start.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🎯| تم حفظ نص الاستارت،",
'reply_to_message_id'=>$message->message_id,
]);
unlink("com.txt");
}
#تفعيل تواصل
if($data == "utws" and in_array($chat_id2,$ad)  ){
file_put_contents("tw.txt","on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📦|تم تفعيل التواصل ،",
]); 
}
#تعطيل تواصل
if($data == "ntws" and in_array($chat_id2,$ad)  ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📮|تم تعطيل التواصل ،",
]); 
unlink("tw.txt");
}
if($text and !in_array($from_id,$ebu) and !in_array($chat_id,$ad) and $chat_id != $admin and $tws == "on"){
bot('forwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}
if($text and $message->reply_to_message && $text!="/info" && $text!="/ban" && $text!="/unban" && $text!="/forward" and !$data ){
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,
]);
}
#اضافه ادمن
if($data == "admin" and $chat_id2 == $admin){
file_put_contents("com.txt","ad");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📮| حسننا الان قم برسال ايدي العضو،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "ad" and $text != "/start" and $chat_id == $admin){
file_put_contents("admin2.txt",$text);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📮| تم حفظ ايدي العضو،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
bot('sendMessage',[
'chat_id'=>$text,
'text'=>"🌻| تم رفعك ادمن بواسط صاحب البوت،",
'parse_mode'=>'MarkDown',
]);
unlink("com.txt");
}
#حظر
if($data == "bn" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","bn");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"💘| حسننا الان قم برسال ايدي العضو،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "bn" and $text != "/start" and in_array($chat_id,$ad)  ){
$myfile2 = fopen("blocklist.txt", "a") or die("Unable to open file!");	
fwrite($myfile2, "$text\n");
fclose($myfile2);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📨| تم حظر العضو بنجاح،",
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"📨| عذرا عزيزي تم حظرك،",
]);
unlink("com.txt");
}
#الغاء حظر
$listt = file_get_contents("blocklist.txt");
if($data == "unbn" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","unbn");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📮| حسننا الان قم برسال ايدي العضو،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "unbn" and $text != "/start" and in_array($chat_id,$ad)  ){
$newlist = str_replace($text,"",$listt);
file_put_contents("blocklist.txt",$newlist);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🌻| تم آلغآء حظر العضو بنجاح،",
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"🌻| عزيزي تم آلغآء آلحظر عنك،",
]);
unlink("com.txt");
}
#معلومات
if($data == "info" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","info");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🎁| حسننا الان قم برسال ايدي العضو،
🌻| #ملاحظه يجب العضو يكون مشترك في لبوت مسبقا،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "info" and $text != "/start"and in_array($chat_id,$ad)  ){
$ine = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$text"));
$infe4 =$ine->result->first_name;
$infe2 =$ine->result->id;
$infe3 =$ine->result->username;
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*🎯| INFO MEMBER*
🔖| Name 💬 : *$infe4* \n 🎧| User 💌 : [@$infe3] \n 📚| Id 🎄 : `$infe2`",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>'MarkDown', 
]);
unlink("com.txt");
}
#معلومات بالمعرف
if($data == "infous" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","infus");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حسسنا الان ارسل معرف العضو الذي تريد استخراج معلوماته",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}

if($bot == "infus" and $text != "/start"and in_array($chat_id,$ad)){
$get = json_decode(file_get_contents("https://mohammed-api.000webhostapp.com/Madeline?UserName=$text"));
$getinfo = $get->info;
$getId           =  $getinfo->UserId;
$getname           = $getinfo->FirstName;
$getuser           = $getinfo->UserName;
$getabout          = $getinfo->About;
$getDate           = $getinfo->Date;
$getTime           = $getinfo->Time;
$getChannel        = $getinfo->Channel;
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
الايدي : $getId
اليوزر : @$getuser     
الاسم : $getname     
النبذه : $getabout     
التاريخ الان [ توقيت بغداد ] : $getDate
الوقت الان [توقيت بغداد ] : $getTime        ",
]);
unlink('com.txt');
}
#شتراك اجباري1
if($data == "add2" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","ab");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📦| حسـننا عزيزي قم برسال معرف قناتك مـندون ل @
📥| كمثال : `I8F8I`",
'parse_mode'=>"Markdown",
]);
}
if($bot == "ab" and $text != "/h" and $text != "/start" and in_array($chat_id,$ad)  ){
file_put_contents("chc.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🎯| حسننا عزيزي تم حفظ قناتك الان قم برفعي مشرف في قناتك .
📮| قناتك : @$text.
لرجوع اضغط /start.",
'reply_to_message_id'=>$message->message_id,
]);
unlink("com.txt");
}
#شـترآك اجباري1
if($data == "add1" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","al");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📦| حسـننا عزيزي قم برسال معرف قناتك مـندون ل @
📚| كمثال : `I8F8I`",
'parse_mode'=>"Markdown",
]);
}

if($bot == "al" and $text != "/h" and $text != "/start" and in_array($chat_id,$ad)  ){
file_put_contents("ch.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🎯| حسننا عزيزي تم حفظ قناتك الان قم برفعي مشرف في قناتك .
📮| قناتك : @$text.
لرجوع اضغط /start.",
'reply_to_message_id'=>$message->message_id,
]);
unlink("com.txt");
}
#شتراك خاص
if($data == "add"  and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","vv");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📌| حسننا عزيزي قم برسال ايدي قناتك !
📮| كمثال : `-1001416392355` !
📎| آن لم تعرف كيفه استخراج ايدي قناتك كل ماعليك قم برسال توجيه من قناتك لهاذ البوت ! @X59BoT !
لرجوع اضغط /start.",
'parse_mode'=>"Markdown",
]);
}

if($bot == "vv" and $text != "/o" and $text != "/start" and in_array($chat_id,$ad)  ){
file_put_contents("com.txt","alo");
file_put_contents("id.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✂| تم حفظ ايدي قناتك !
📛| حسننا الان قم برسال رابط قناتك !
لرجوع اضغط /start.",
'reply_to_message_id'=>$message->message_id,
]);
}
if($bot == "alo" and $text != "/o" and $text != "/start" and in_array($chat_id,$ad)  ){
file_put_contents("rabt.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💛| تم حفظ رابط القناة .
📚| رابط قناتك : `[$text]`
🔖| آيدي قناتك : `$all`
🔖| آلآن قم برفع لبوت مشرفي في قناتك
لرجوع اضغط /start.",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
unlink("com.txt");
}
#حذف قنوات
if($data == "remch" and in_array($chat_id2,$ad)  ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📦| تم حذف جميع القنوات،",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
unlink("rabt.txt");
unlink("id.txt");
unlink("ch.txt");
unlink("chc.txt");
}
#آذآعه MarkDown
if($data == "MarkDown" and in_array($chat_id2,$ad) ){
file_put_contents("com.txt","sendm");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حسننا يمكنك يمكنك ارسال رساله و استخدام MarkDown .",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);
}
$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$alshh3 = fgets($ali);
if($bot == "sendm" and in_array($chat_id,$ad) ){
bot('sendMessage', [
'chat_id' =>$alshh3,
'text'=>$text,
'parse_mode'=>"html",
'disable_web_page_preview' =>"true"
]);
unlink("com.txt");
}
}

#اذاعه HTML
if($data == "HTML" and in_array($chat_id2,$ad) ){
file_put_contents("com.txt","sendh");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حسننا عزيزي يمكنك ارسال رساله و استخدام HTML .",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);
}
$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$alshh3 = fgets($ali);
if($bot == "sendh" and in_array($chat_id,$ad) ){
bot('sendMessage', [
'chat_id' =>$alshh3,
'text'=>$text,
'parse_mode'=>"html",
'disable_web_page_preview' =>"true"
]);
unlink("com.txt");
}
}
#اذاعه مجموعات
$gy = explode("\n",file_get_contents("group.txt"));
if($data == "sndgp" and in_array($chat_id2,$ad) ){
file_put_contents("com.txt","sendap");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حسننا ارسل رسالتك لكي اقوم برساله لل جميع مجموعات.",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);
}
if($bot == "send" and in_array($chat_id,$ad)  ){
foreach ($gy as $id){
bot('sendmessage',[
'chat_id'=>$id,
'text'=>$text,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
unlink('com.txt');
}
#اذاعه للكل
$mee = explode("\n",file_get_contents("alsh/Alsh.txt"));
if($data == "sendall" and in_array($chat_id2,$ad) ){
file_put_contents("com.txt","sendap");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حسننا ارسل رسالتك لكي اقوم برساله لل جميع مجموعات و اعضاء.",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);
}
if($bot == "sendap" and in_array($chat_id,$ad)  ){
foreach ($gy as $id){
bot('sendmessage',[
'chat_id'=>$id,
'text'=>$text,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
foreach ($mee as $idd){
bot('sendmessage',[
'chat_id'=>$id,
'text'=>$text,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
unlink('com.txt');
}
}
#اذاعه
if($data == "bc" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","send");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>" ارسل رسالتك الان عزيزي 🎯.",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);
}
$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$alshh3 = fgets($ali);
if($bot == "send" and in_array($chat_id,$ad)  ){
bot('sendMessage', [
'chat_id' =>$alshh3,
'text'=>$text,
'disable_web_page_preview' =>"true"
]);
unlink("com.txt");
}
}
$tx = file_get_contents("alh.txt");
if($data == "inln" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","sn");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حسـننآ آلآن ارسل نص تريد نشرة ك منشور شفاف 🎁. #ملاحظه يمكنك استخدام الماركدوان ايضا",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);
}
if($bot == "sn" and $text != "/start" and in_array($chat_id,$ad)  ){
file_put_contents("alh.txt","$text");
file_put_contents("com.txt","snn");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"حسننا الان استخدم🎄.
text = link
text = link + text = link
نص = رابط
نص = رابط + نص = رابط",
'reply_to_message_id'=>$message->message_id,
]);
}
$i=0;
$keyboard = [];
$keyboard["inline_keyboard"] = [];
$rows = explode("\n",$text);
foreach($rows as $row){
$j=0;
$keyboard["inline_keyboard"][$i]=[];
$bottons = explode("+",$row);
foreach($bottons as $botton){
$alsh = explode("=",$botton."=");
$Ibotton = ["text" => trim($alsh[0]), "url" => trim($alsh[1])];
$keyboard["inline_keyboard"][$i][$j] = $Ibotton;
$j++;                }                $i++;            }
$reply_markup=json_encode($keyboard);
if($bot == "snn" and $text != "/start" and in_array($chat_id,$ad)  ){
$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$alshh = fgets($ali);
bot('sendmessage',[
'chat_id'=>$alshh,
'text'=>$tx,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>($reply_markup)
]);
}
unlink("com.txt");
unlink("alh.txt");
}
if($data == "for" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","fd");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>" ارسل توجيهك الان عزيزي 📌.",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);
}
if($bot == "fd" and $text != "/start" and in_array($chat_id,$ad)  ){
$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$ali2 = fgets($ali);
bot('forwardMessage',[
 'chat_id'=>$ali2,
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("com.txt");
 }
 }
 if($data == "med" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","mide");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🔖| حسـننآ الان ارسل احد ميديا،
📌| مثلا : صور،فيديو،ملف،اغنيه،ملصق،ملف صوتي،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);
}
#اذاعه ب ميديا
 if($message->video and $bot == "mide" and in_array($chat_id,$ad)   and $text != "/start"){
 $ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
bot('sendvideo',['chat_id'=>$aly,'video'=>$message->video->file_id,'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,]);
bot('sendmessage',[ 
'chat_id'=>$chat_id, 'text'=>"تم نشر الفيديو '📚!",]); }unlink("com.txt"); }
if($message->document and $bot == "mide" and in_array($chat_id,$ad)   and $text != "/start"){
$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
bot('Senddocument',['chat_id'=>$aly,'document'=>$message->document->file_id,'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
]);bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"تم نشر الملف او متحركه '🎻!", ]); } unlink("com.txt");}
 if($message->audio and $bot == "mide" and in_array($chat_id,$ad)   and $text != "/start"){
 	$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
 bot('sendaudio',[    'chat_id'=>$aly,    'audio'=>$message->audio->file_id,    'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
 ]); bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"تم نشر الاغنيه '🎺!", ]); } unlink("com.txt");}
if($message->photo and $bot == "mide" and in_array($chat_id,$ad)   and $text != "/start"){
	$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
    bot('sendPhoto',[      'chat_id'=>$aly,      'photo'=>$message->photo[0]->file_id,      'caption'=>$message->caption,      'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
    ]);bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"تم نشر الصورة '📇!", ]); } unlink("com.txt");}
if($message->voice and $bot == "mide" and in_array($chat_id,$ad)   and $text != "/start"){
	$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
    bot('sendvoice',[     'chat_id'=>$aly,      'voice'=>$message->voice->file_id,     'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
      ]);      bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"تم نشر الاغنيه '📜!", ]); } unlink("com.txt");}
      if($message->sticker and $bot == "mide" and in_array($chat_id,$ad)   and $text != "/start"){
      	$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
bot('sendsticker',['chat_id'=>$aly,'sticker'=>$message->sticker->file_id
]);bot('sendmessage',['chat_id'=>$chat_id, 'text'=>"تم نشر الملصق '📂!", ]); }unlink("com.txt"); }
if($data == "get"  and in_array($chat_id2,$ad)){
$AliZip14 = "/alixnxx"; //مسار استضافتك
date_default_timezone_set("Asia/Baghdad");
$AliZip13 = date("{h-i-s}");
AliZip('../', "Backup-$AliZip13.zip");
bot('senddocument',[
'chat_id'=>$chat_id2,
'document'=>"https://$AliZip14/Backup-$AliZip13.zip",
'caption'=>"Backup. 📦
Today's date : ".date('Y/m/d')." 📆
The Time is : ".date('h:i A')." ⏰
File size : ".AliZip1(filesize("Backup-$AliZip13.zip"))." 🏷",
'reply_to_message_id'=>$AliZip18,
]);
unlink("Backup-$AliZip13.zip");
}
if($data == "upmem" and in_array($chat_id2,$ad)){
$memZip14 = "/alixnxx"; //مسار استضافتك
date_default_timezone_set("Asia/Baghdad");
$memZip13 = date("{h-i-s}");
AliZip('alsh', "Mem-$memZip13.zip");
bot('senddocument',[
'chat_id'=>$chat_id2,
'document'=>"https://$memZip14/Mem-$memZip13.zip",
'caption'=>"Mem. 📦
Today's date : ".date('Y/m/d')." 📆
The Time is : ".date('h:i A')." ⏰
File size : ".AliZip1(filesize("Mem-$memZip13.zip"))." 🏷",
]);
unlink("Mem-$memZip13.zip");
}
#رفع نسخه
if($data == "puo" and in_array($chat_id2,$ad) ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حسـننآ ارسل ملف الان لاكن ارسل صيغ ملف بل txt.",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);
}
$repad = $message->reply_to_message->document;
$aduo = $repad->file_id;
if(isset($repad) and in_array($chat_id,$ad)){
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getFile?file_id='.$aduo),true);
$path = $url['result']['file_path'];
$file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;
$okey = file_put_contents("alsh/Alsh.txt",file_get_contents($file));
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم رفع نسخه بنجاح.",
]);
}
#الاشعار
$gg = file_get_contents("onn.txt");
if($gg == "on" and $chat_id != $admin and !$data){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"- عضو جديد قام بالدخول الى البوت ، 🛡
- الاسم ، [$chat_id](tg://user?id=$chat_id) ، 🦕
- المعرف ، [@$user](tg://user?id=$chat_id) ، 🐢
- الايدي ، [$chat_id](tg://user?id=$chat_id) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
#حفظ كود
if($data == "setphp" and in_array($chat_id2,$ad) ){
file_put_contents("com.txt","set");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حسـننآ ارسل الكود الان.",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);
}
if($bot == "set" and in_array($chat_id,$ad)  ){
file_put_contents("php.php","<?php $text ?>");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم حفظ الكود." ,
'parse_mode'=>"Markdown",
]);
unlink('com.txt');
}
if($data == "delphp" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","set");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تم حذف الكود..",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);
unlink("php.php");
}

$Dev = array("820130595,1010918290"); //ايديك
$abbas = "NONBBN"; // معرف  قناتك بدون @   //
$token = API_KEY;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$text = $message->text;
$firstname = $update->callback_query->from->first_name;
$usernames = $update->callback_query->from->username;
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->from->id;
$membercall = $update->callback_query->id;
$reply = $update->message->reply_to_message->forward_from->id;
$data = $update->callback_query->data;
$messageid = $update->callback_query->message->message_id;
$tc = $update->message->chat->type;
$gpname = $update->callback_query->message->chat->title;
$namegroup = $update->message->chat->title;
$text = $update->inline_qurey->qurey;
$newchatmemberid = $update->message->new_chat_member->id;
$newchatmemberu = $update->message->new_chat_member->username;
$rt = $update->message->reply_to_message;
$replyid = $update->message->reply_to_message->message_id;
$tedadmsg = $update->message->message_id;
$edit = $update->edited_message->text;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$re_msgid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
$edit_for_id = $update->edited_message->from->id;
$edit_chatid = $update->callback_query->edited_message->chat->id;
$caption = $update->message->caption;
$chatid3=$update->message->chat->id;
$fromid3=$update->message->from->id;
$text=$update->message->text;
$mid=$update->message->message_id;
$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
$status = $statjson['result']['status'];
$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
$statusrt = $statjsonrt['result']['status'];
$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
$statusq = $statjsonq['result']['status'];
$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
$you = $info['result']['status'];
$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
$tch = $forchannel->result->status;
$title =$message->chat->title;
$rep = $message->reply_to_message;
$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
$user = json_decode(file_get_contents("data/user.json"),true);
$filterget = $settings["filterlist"];

if ($text == "/start"){
file_put_contents("ali.txt",""); 
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"- اهلا بك مرة اخرى ؛ ♥️ [$name](tg://user?id=$chat_id)
• - في بوت الانحراف الاول على منصه التلكرام 🔞؛
- • البوت يحتوي على الكثير من الافلام 🔞؛
 • - يتم تحديث البوت يوميآ واضافه الكثير من الافلام 🤫؛
اضغط على الافلام لعرض قائمه الافلام 😉🔞 ;,
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔞¦ قسم الافلام والمتحركة"]],
]
])
]);
}
if($text == '🔞¦ قسم الافلام والمتحركة'){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"☑¦  آهہ‏‏لآ عزيزي $name📌•
😉¦ آليك قائمـهہ‏‏ 🔞 الافلام والصور المتحركة
...
👙¦ اختر القسم الذي يعجبك √ 

",
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[['text'=>'🔞¦ قسم المتحركهه'],['text'=>'🔞¦ قسم الافلام']],
] 
]) 
]); 
}
if($text == '🔞¦ قسم المتحركهه'){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"🔞¦  آهہ‏‏لآ عزيزي $name😉•
😉¦ آليك قائمـهہ‏‏ 🔞 المتحركات السكسيه
...
🤭¦ اختر التحركه الذي يعجبك وسأقوم بأرساله لك √
",

'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[['text'=>'😉¦ xxx - 1'],['text'=>'😉¦ xxx - 2']],
[['text'=>'😉¦ xxx - 3'],['text'=>'😉¦ xxx - 4']],
[['text'=>'😉¦ xxx - 5'],['text'=>'😉¦ xxx - 6']],
[['text'=>'😉¦ xxx - 7'],['text'=>'😉¦ xxx - 8']],
[['text'=>'😉¦ xxx - 9'],['text'=>'😉¦ xxx - 10']],
[['text'=>'😉¦ xxx - 11'],['text'=>'😉¦ xxx - 12']],
[['text'=>'😉¦ xxx - 13'],['text'=>'😉¦ xxx - 14']],
[['text'=>'😉¦ xxx - 15'],['text'=>'😉¦ xxx - 16']],
[['text'=>'😉¦ xxx - 17'],['text'=>'😉¦ xxx - 18']],
[['text'=>'😉¦ xxx - 19'],['text'=>'😉¦ xxx - 20']],
[['text'=>'😉¦ xxx - 21'],['text'=>'😉¦ xxx - 22']],
[['text'=>'😉¦ xxx - 23'],['text'=>'😉¦ xxx - 24']],
[['text'=>'😉¦ xxx - 25'],['text'=>'😉¦ xxx - 26']],
[['text'=>'😉¦ xxx - 27'],['text'=>'😉¦ xxx - 8']],
[['text'=>'😉¦ xxx - 29'],['text'=>'😉¦ xxx - 30']],
[['text'=>'😉¦ xxx - 31'],['text'=>'😉¦ xxx - 32']],
[['text'=>'😉¦ xxx - 33'],['text'=>'😉¦ xxx - 34']],
[['text'=>'😉¦ xxx - 35'],['text'=>'😉¦ xxx - 36']],
[['text'=>'😉¦ xxx - 37'],['text'=>'😉¦ xxx - 38']],
[['text'=>'😉¦ xxx - 39'],['text'=>'😉¦ xxx - 40']],
[['text'=>'😉¦ xxx - 41'],['text'=>'😉¦ xxx - 42']],
[['text'=>'😉¦ xxx - 43'],['text'=>'😉¦ xxx - 44']],
[['text'=>'😉¦ xxx - 45'],['text'=>'😉¦ xxx - 46']],
[['text'=>'😉¦ xxx - 47'],['text'=>'😉¦ xxx - 48']],
[['text'=>'😉¦ xxx - 49'],['text'=>'😉¦ xxx - 50']],
[['text'=>'😉¦ xxx - 51'],['text'=>'😉¦ xxx - 52']],
[['text'=>'😉¦ xxx - 53'],['text'=>'😉¦ xxx - 54']],
[['text'=>'😉¦ xxx - 55'],['text'=>'😉¦ xxx - 56']],
[['text'=>'😉¦ xxx - 57'],['text'=>'😉¦ xxx - 58']],
[['text'=>'😉¦ xxx - 59'],['text'=>'😉¦ xxx - 60']],
[['text'=>'😉¦ xxx - 61'],['text'=>'😉¦ xxx - 62']],
[['text'=>'😉¦ xxx - 63'],['text'=>'😉¦ xxx - 64']],
[['text'=>'😉¦ xxx - 65'],['text'=>'😉¦ xxx - 66']],
[['text'=>'😉¦ xxx - 67'],['text'=>'😉¦ xxx - 68']],
[['text'=>'😉¦ xxx - 69'],['text'=>'😉¦ xxx - 70']],
[['text'=>'😉¦ xxx - 71'],['text'=>'😉¦ xxx - 72']],
[['text'=>'😉¦ xxx - 73'],['text'=>'😉¦ xxx - 74']],
[['text'=>'😉¦ xxx - 75'],['text'=>'😉¦ xxx - 76']],
[['text'=>'😉¦ xxx - 77'],['text'=>'😉¦ xxx - 78']],
[['text'=>'😉¦ xxx - 79'],['text'=>'😉¦ xxx - 80']],
[['text'=>'🔞¦ قسم الافلام والمتحركة']],
] 
]) 
]); 
}
if($text == '😉¦ xxx - 1'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/24",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 2'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/26",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 3'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/27",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 4'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/28",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 5'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/29",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 6'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/30",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 7'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/31",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 8'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/32",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 9'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/33",
'caption'=>" Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 10'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/34",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 11'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/35",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 12'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/36",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 13'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/37",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 14'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/38",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 15'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/39",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 16'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/40",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 17'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/41",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 18'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/42",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 19'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/43",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 20'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/44",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 21'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/69",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 22'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/70",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 23'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/71",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 24'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/72",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 25'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/73",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 26'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/74",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 27'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/76",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 28'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/77",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 29'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/78",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 30'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/79",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 31'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/80",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 32'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/81",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 33'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/82",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 34'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/83",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 35'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/84",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 36'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/86",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 37'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/87",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 38'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/88",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 39'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/89",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 40'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/90",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 41'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/112",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 42'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/113",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 43'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/114",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 44'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/115",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 45'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/116«",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 46'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/117",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 47'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/118",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 48'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/119",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 49'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/120",
'caption'=>" Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 50'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/121",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 51'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/122",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 52'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/123",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 53'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/124",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 54'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/125",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 55'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/126",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 56'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/127",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 57'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/128",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 58'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/129",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 59'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/130",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 60'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/131",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 61'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/132",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 62'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/133",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 63'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/134",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 64'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/135",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 65'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/136",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 66'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/137",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 67'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/138",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 68'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/139",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 69'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/140",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 70'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/141",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 71'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/142",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 72'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/143",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 73'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/144",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 74'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/145",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 75'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/146",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 76'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/147",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 77'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/148",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 78'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/149",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 79'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/150",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '😉¦ xxx - 80'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/151",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
#قسم صور
if($text == '🔞¦ قسم الافلام'){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"💌¦  آهہ‏‏لآ عزيزي $name📌•
🔞¦ آليك قائمـهہ‏‏ الافلام
...
😉¦ اختر الفلم الذي يعجبك√ 
🔞  وسأقوم بإرساله لك  °
",
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[['text'=>'🔞¦ xnxx - 1'],['text'=>'🔞¦ xnxx - 2']],
[['text'=>'🔞¦ xnxx - 3'],['text'=>'🔞¦ xnxx - 4']],
[['text'=>'🔞¦ xnxx - 5'],['text'=>'🔞¦ xnxx - 6']],
[['text'=>'🔞¦ xnxx - 7'],['text'=>'🔞¦ xnxx - 8']],
[['text'=>'🔞¦ xnxx - 9'],['text'=>'🔞¦ xnxx - 10']],
[['text'=>'🔞¦ xnxx - 11'],['text'=>'🔞¦ xnxx - 12']],
[['text'=>'🔞¦ xnxx - 13'],['text'=>'🔞¦ xnxx - 14']],
[['text'=>'🔞¦ xnxx - 15'],['text'=>'🔞¦ xnxx - 16']],
[['text'=>'🔞¦ xnxx - 17'],['text'=>'🔞¦ xnxx - 18']],
[['text'=>'🔞¦ xnxx - 19'],['text'=>'🔞¦ xnxx - 20']],
[['text'=>'🔞¦ xnxx - 21'],['text'=>'🔞¦ xnxx - 22']],
[['text'=>'🔞¦ xnxx - 23'],['text'=>'🔞¦ xnxx - 24']],
[['text'=>'🔞¦ xnxx - 25'],['text'=>'🔞¦ xnxx - 26']],
[['text'=>'🔞¦ xnxx - 27'],['text'=>'🔞¦ xnxx - 28']],
[['text'=>'🔞¦ xnxx - 29'],['text'=>'🔞¦ xnxx - 30']],
[['text'=>'🔞¦ xnxx - 31'],['text'=>'🔞¦ xnxx - 32']],
[['text'=>'🔞¦ xnxx - 33'],['text'=>'🔞¦ xnxx - 34']],
[['text'=>'🔞¦ xnxx - 35'],['text'=>'🔞¦ xnxx - 36']],
[['text'=>'🔞¦ xnxx - 37'],['text'=>'🔞¦ xnxx - 38']],
[['text'=>'🔞¦ xnxx - 39'],['text'=>'🔞¦ xnxx - 40']],
[['text'=>'🔞¦ xnxx - 41'],['text'=>'🔞¦ xnxx - 42']],
[['text'=>'🔞¦ xnxx - 43'],['text'=>'🔞¦ xnxx - 44']],
[['text'=>'🔞¦ xnxx - 45'],['text'=>'🔞¦ xnxx - 46']],
[['text'=>'🔞¦ xnxx - 47'],['text'=>'🔞¦ xnxx - 48']],
[['text'=>'🔞¦ xnxx - 49'],['text'=>'🔞¦ xnxx - 50']],
[['text'=>'🔞¦ xnxx - 51'],['text'=>'🔞¦ xnxx - 52']],
[['text'=>'🔞¦ xnxx - 53'],['text'=>'🔞¦ xnxx - 54']],
[['text'=>'🔞¦ xnxx - 55'],['text'=>'🔞¦ xnxx - 56']],
[['text'=>'🔞¦ xnxx - 57'],['text'=>'🔞¦ xnxx - 58']],
[['text'=>'🔞¦ xnxx - 59'],['text'=>'🔞¦ xnxx - 60']],
[['text'=>'🔞¦ xnxx - 61'],['text'=>'🔞¦ xnxx - 62']],
[['text'=>'🔞¦ xnxx - 63'],['text'=>'🔞¦ xnxx - 64']],
[['text'=>'🔞¦ xnxx - 65'],['text'=>'🔞¦ xnxx - 66']],
[['text'=>'🔞¦ xnxx - 67'],['text'=>'🔞¦ xnxx - 68']],
[['text'=>'🔞¦ xnxx - 69'],['text'=>'🔞¦ xnxx - 70']],
[['text'=>'🔞¦ xnxx - 71'],['text'=>'🔞¦ xnxx - 72']],
[['text'=>'🔞¦ xnxx - 73'],['text'=>'🔞¦ xnxx - 74']],
[['text'=>'🔞¦ xnxx - 75'],['text'=>'🔞¦ xnxx - 76']],
[['text'=>'🔞¦ xnxx - 77'],['text'=>'🔞¦ xnxx - 78']],
[['text'=>'🔞¦ xnxx - 79'],['text'=>'🔞¦ xnxx - 80']],
[['text'=>'🔞¦ قسم الافلام والمتحركة']],
] 
]) 
]); 
}
if($text == '🔞¦ xnxx - 1'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/2",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 2'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/3",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 3'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/4",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 4'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/5",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '??¦ xnxx - 5'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/6",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 6'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/7",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 7'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/8",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 8'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/9",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 9'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/10",
'caption'=>" Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 10'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/11",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 11'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/12",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 12'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/13",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 13'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/14",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 14'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/15",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 15'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/16",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 16'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/17",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 17'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/18",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 18'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/19",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 19'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/20",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 20'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/21",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 21'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/91",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 22'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/92",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 23'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/93",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 24'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/94",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 25'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/95",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 26'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/96",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 27'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/97",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 28'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/98",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 29'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/99",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 30'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/100",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 31'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/101",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 32'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/102",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 33'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/103",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 34'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/104",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 35'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/105",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 36'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/106",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 37'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/107",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 38'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/108",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 39'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/109",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 40'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/110",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 41'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/152",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 42'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/153",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 43'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/154",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 44'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/155",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '??¦ xnxx - 45'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/156",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 46'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/157",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 47'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/158",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 48'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/159",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 49'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/160",
'caption'=>" Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 50'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/161",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 51'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/162",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 52'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/163",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 53'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/164",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 54'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/165",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 55'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/166",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 56'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/167",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 57'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/168",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 58'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/169",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 59'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/170",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 60'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/171",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 61'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/172",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 62'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/173",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 63'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/174",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 64'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/175",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 65'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/176",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 66'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/177",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 67'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/178",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 68'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/179",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 69'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/180",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 70'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/181",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 71'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/182",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 72'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/183",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 73'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/184",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 74'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/185",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 75'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/186",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 76'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/187",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 77'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/188",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 78'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/189",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 79'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/LQQBA/190",
'caption'=>"Me channel 🔞 - @$abbas",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '🔞¦ xnxx - 80'){ 
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"$XN1",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

// تخمط اذكر اسمي حبي #كلاوجي #ABBAS
// قناتي @NONBBN
//معرفي @ll8III