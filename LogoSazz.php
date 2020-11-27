
<?php 
/*
بسم الله الرحمن الرحیم 
--------------------
برای دریافت کلی سورس و قالب و افزونه حتما داخل کانال عضو شوید 

حمایت کنید تا بیشتر افزونه و سورس و قالب درکانال قرار بدیم

کانال سورس خونه ! پر از سورس هاي ربات هاي تلگرامي !
لطفا در کانال ما عضو شويد 

@source_home

https://t.me/source_home
*/
ob_start();

$API_KEY = '1457300165:AAGRjcOrPCqbm76yWPqF5WCXjzF3ASSjNSs';/// توکن
##------------------------------##
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
 function sendmessage($chat_id, $text ){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 ]);
 }
 function sendphoto($chat_id, $photo, $captionl){
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>$photo,
 'caption'=>$caption,
 ]);
 }
 function sendaudio($chat_id, $audio, $caption, $title ,$performer){
 bot('sendaudio',[
 'chat_id'=>$chat_id,
 'audio'=>$audio,
 'caption'=>$caption,
 'title'=>$title,
 'performer'=>$performer
 ]);
 }
 function senddocument($chat_id, $document, $caption){
 bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>$document,
 'caption'=>$caption
 ]);
 }
 function sendsticker($chat_id, $sticker){
 bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>$sticker
 ]);
 }
 function sendvideo($chat_id, $video, $caption){
 bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>$video,
 'caption'=>$caption
 ]);
 }
 function sendvoice($chat_id, $voice, $caption){
 bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>$voice,
 'caption'=>$caption
 ]);
 }
 function sendaction($chat_id, $action){
 bot('sendchataction',[
 'chat_id'=>$chat_id,
 'action'=>$action
 ]);
 }
 function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }
//==========================================//
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$first_name = $message->from->first_name;
$text = $message->text;
$cha = "bsnsnsnsnsja"; // ایدی کانال  بدون @
$token="1457300165:AAGRjcOrPCqbm76yWPqF5WCXjzF3ASSjNSs";// توکن ربات
$truechannel = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=@$cha&user_id=".$from_id));
$tch = $truechannel->result->status;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$message_id = $update->callback_query->message->message_id;
$reply = $update->message->reply_to_message;
$devclii = file_get_contents("devclii.txt");
$ADMIN = 1204298644; // ایدی عددی ادمین
$adminst = "nimaainagh";// ایدی ادمین بدون @
$idbot = "Aplodfailbot"; // ایدی ربات بدون @
$supid = "Snakakanamammamamanbot";// ایدی ربات پشتیبانی بدون @
//==========================================//
if (strpos($banall , "$from_id") !== false) {
  }
  elseif (strpos($block , "$from_id") !== false) {
  }
  elseif ($from_id != $chat_id and $chat_id != $feed) {
  }
  elseif (strpos($banall , "$from_id") !== false  ) {
  SendMessage($chat_id,"
دسترسی شما به این سرور مسدود شده است.❌
لطفا با پشتیبانی در ارتباط باشید
➖➖➖➖➖➖➖➖
@$adminst");
  }
  elseif($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
SendMessage($chat_id,"⭐️به ربات پیکاسو خوش امدید⭐️

شما به وسیله این ربات میتوانید برای خود لوگو های زیبا بسازید یا استیکر و عکس خودتون رو تبدیل کنید😍
➖➖➖➖
برا حمایت از اسپانسر ربات و بهرمند شدن از امکانات فوق العاده ابتدا در کانال زیر عضو شوید😉

🔸 @bsnsnsnsnsja 🔹

سپس به ربات برگشته🔙

🔹/start🔸   

را دوباره ارسال کنید✔️
🎯تا از مزایای خوب ربات بهرمند شوید

با احترام😊","html","true",$button_remove);
  }
elseif($text == "/start" ){
$user = file_get_contents('Member.txt');
    $members = explode("\n",$user);
    if (!in_array($chat_id,$members)){
      $add_user = file_get_contents('Member.txt');
      $add_user .= $chat_id."\n";
     file_put_contents('Member.txt',$add_user);
    }
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"سلام😉
➖➖➖➖➖
من یه ربات ساخت لوگو ، استیکر و .‌.. هستم😦🚀

به وسیله من میتونی لوگو های مختلف😍
و جالب درست کنی یا حتی میتونی عکسات رو به استیکر تبدیل کنی 😊

با کلی امکانات جالب دیگه ...😝
➖➖➖➖
فقط کافیه از دکمه های زیر استفاده کنی🔻",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            	'keyboard'=>[
				[
				['text'=>"🌠 ساخت لوگو"]
				],
                [
                ['text'=>"🌈 ساخت استیکر"],['text'=>"🏖 ساخت عکس"]
                ],
				[
				['text'=>"📽 تبدیلگر فیلم"],['text'=>"📝تبدیل متن به ویس"],['text'=>"🎧 تبدیلگر اهنگ"]
				],
                [
                ['text'=>"🔖راهنما"],['text'=>"✅ ارسال نظر"],['text'=>"🚦 پشتیبانی"]
                ]
 	],
            	'resize_keyboard'=>true
       		])
    		]);
}

//====================devcli======================//
 elseif($text == "/panel" && $from_id == $ADMIN){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"ادمین عزیز به پنل مدیریتی ربات خودش امدید",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            'keyboard'=>[
              [
              ['text'=>"آمار"],['text'=>"پیام همگانی"]
              ],
              ],'resize_keyboard'=>true
        ])
            ]);
        }
elseif($text == "آمار" && $from_id == $ADMIN){
 sendaction($chat_id,'typing');
    $user = file_get_contents("Member.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
 sendmessage($chat_id , " آمار کاربران : $member_count" , "html");
}
elseif($text == "پیام همگانی" && $from_id == $ADMIN){
    file_put_contents("devclii.txt","bc");
 sendaction($chat_id,'typing');
 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" پیام مورد نظر رو در قالب متن بفرستید:",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
   [['text'=>'/panel']],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($devclii == "bc" && $from_id == $ADMIN){
    file_put_contents("devclii.txt","none");
 SendAction($chat_id,'typing');
 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" پیام همگانی فرستاده شد.",
  ]);
 $all_member = fopen( "Member.txt", "r");
  while( !feof( $all_member)) {
    $user = fgets( $all_member);
   SendMessage($user,$text,"html");
  }
}
//=========================================//
elseif($text == "🌠 ساخت لوگو" ){
	bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"به بخش ساخت لوگو خوش اومدی❤️
➖➖➖➖➖
🔹 تو این بخس میتونی لوگو های فوق العاده درست کنی فقط کافیه طرح لوگوت رو انتخاب کنی

🔸بعدش متن لوگو خودت رو ارسال کنی😜
➖➖➖➖
طرح لوگوت رو انتخاب کن🔻",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            	'keyboard'=>[
              [
                   ['text'=>"قلبی |📍"],['text'=>"📍| ساده"],['text'=>""]
                ],
				[
				['text'=>""],['text'=>"کلاسیک |📍"],['text'=>"📍| فونت زیبا"]
				],
				[
				['text'=>""],['text'=>""],['text'=>"📍| گل گلی |📍"]
				],
				[
				['text'=>""],['text'=>"لوگو زیبا |📍"],['text'=>"📍| لوگو شیک"]
				],
				[
				['text'=>""],['text'=>"📍| لوگو هک |📍"],['text'=>""]
				],
			[
			['text'=>"برگشت"]
                ]
           ],
            	'resize_keyboard'=>true
       		])
    		]);
}
elseif($text == "برگشت" ){
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"به منوی اصلی بازگشتید
➖➖➖➖
از دکمه های زیر استفاده کنید🔻",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            	'keyboard'=>[
				[
				['text'=>"🌠 ساخت لوگو"]
				],
                 [
                   ['text'=>"🌈 ساخت استیکر"],['text'=>"🏖 ساخت عکس"]
                ],
				[
				['text'=>"📽 تبدیلگر فیلم"],['text'=>"📝تبدیل متن به ویس"],['text'=>"🎧 تبدیلگر اهنگ"]
				],
                [
                   ['text'=>"🔖راهنما"],['text'=>"✅ ارسال نظر"],['text'=>"🚦 پشتیبانی"]
                   ]
 	],
            	'resize_keyboard'=>true
       		])
    		]);
}
elseif($text == "📍| ساده"){
  file_put_contents("devclii.txt","photos");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"متن خودتون رو به لاتین وارد کنید✨🚀",
        'reply_markup'=>json_encode([
              'keyboard'=>[
      [
        ['text'=>"🔚 برگشت"]
                ]
           ],
              'resize_keyboard'=>true
           ])
  ]);   
}
elseif($devclii == "photos"){
file_put_contents("devclii.txt","none");
  bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"http://www.iloveheartstudio.com/-/p.php?t=$text&bc=FFCBDB&tc=000000&hc=ff0000&f=c&uc=true&ts=true&ff=PNG&w=500&ps=sq",
 'caption'=>"@$idbot",
 ]);}
elseif($text == "🔹رنگی"){
  file_put_contents("devclii.txt","photo");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"متن خودتون رو به لاتین وارد کنید✨🚀",
        'reply_markup'=>json_encode([
              'keyboard'=>[
      [
        ['text'=>"🔚 برگشت"]
                ]
           ],
              'resize_keyboard'=>true
           ])
  ]);   
}
elseif($devclii == "photo"){
file_put_contents("devclii.txt","none");
  bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"http://api.monsterbot.ir/pic/?text=$text&color=white&font=trashco",
 'caption'=>"@$idbot",
 ]);}
 elseif($text == "📍| گل گلی |📍"){
  file_put_contents("devclii.txt","photoa");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"متن خود را به فارسی ارسال نمیاد",
        'reply_markup'=>json_encode([
              'keyboard'=>[
      [
        ['text'=>"🔚 برگشت"]
                ]
           ],
              'resize_keyboard'=>true
           ])
  ]);   
}
elseif($devclii == "photoa"){
file_put_contents("devclii.txt","none");
  bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://devcliighserver3.000webhostapp.com/1/image.php?text=$text",
 'caption'=>"@$idbot",
 ]);}
  elseif($text == "🔹زندگی بدون من[پسرانه]"){
  file_put_contents("devclii.txt","photob");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"متن خودتون رو وارد کنید✨🚀",
        'reply_markup'=>json_encode([
              'keyboard'=>[
      [
        ['text'=>"🔚 برگشت"]
                ]
           ],
              'resize_keyboard'=>true
           ])
  ]);   
}
elseif($devclii == "photob"){
file_put_contents("devclii.txt","none");
  bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"http://api.monsterbot.ir/pic/?text=$text&y=-100&x=-80&color=black&font=fa&fsize=100&bg=esm2",
 'caption'=>"@$idbot",
 ]);}
   elseif($text == "📍| لوگو شیک"){
  file_put_contents("devclii.txt","photoc");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"متن خودتون رو وارد کنید✨🚀",
        'reply_markup'=>json_encode([
              'keyboard'=>[
      [
        ['text'=>"🔚 برگشت"]
                ]
           ],
              'resize_keyboard'=>true
           ])
  ]);   
}
elseif($devclii == "photoc"){
file_put_contents("devclii.txt","none");
  bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"http://www.iloveheartstudio.com/-/p.php?t=$text&bc=FFD814&tc=000000&hc=FF0000&f=n&uc=true&ts=true&ff=PNG&w=500&ps=sq",
 'caption'=>"@$idbot",
 ]);}
   elseif($text == "قلبی |📍"){
  file_put_contents("devclii.txt","photod");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"متن خودتون رو به لاتین وارد کنید✨🚀",
        'reply_markup'=>json_encode([
              'keyboard'=>[
      [
        ['text'=>"🔚 برگشت"]
                ]
           ],
              'resize_keyboard'=>true
           ])
  ]);   
}
elseif($devclii == "photod"){
file_put_contents("devclii.txt","none");
  bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"http://api.monsterbot.ir/pic/?text=$text&color=red&font=ANGEL&fsize=200&bg=logo34&angel=0&y=0&x=-20",
 'caption'=>"@$idbot",
 ]);}
    elseif($text == "📍| فونت زیبا"){
  file_put_contents("devclii.txt","photoe");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"متن خودتون رو به فارسی وارد کنید✨🚀",
        'reply_markup'=>json_encode([
              'keyboard'=>[
      [
        ['text'=>"🔚 برگشت"]
                ]
           ],
              'resize_keyboard'=>true
           ])
  ]);   
}
elseif($devclii == "photoe"){
file_put_contents("devclii.txt","none");
  bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"http://api.monsterbot.ir/pic/?color=white&font=AGhasem&text=$text",
 'caption'=>"@$idbot",
 ]);}

     elseif($text == "لوگو زیبا |📍"){
  file_put_contents("devclii.txt","photof");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"متن خودتون رو به لاتین وارد کنید✨🚀",
        'reply_markup'=>json_encode([
              'keyboard'=>[
      [
        ['text'=>"🔚 برگشت"]
                ]
           ],
              'resize_keyboard'=>true
           ])
  ]);   
}
elseif($devclii == "photof"){
file_put_contents("devclii.txt","none");
  bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"http://www.iloveheartstudio.com/-/p.php?t=$text&bc=ffffff&tc=000000&hc=FF0000&f=i&uc=true&ts=true&ff=PNG&w=500&ps=sq",
 'caption'=>"@$idbot",
 ]);}
      elseif($text == "📍| لوگو هک |📍"){
  file_put_contents("devclii.txt","photog");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"متن خودتون رو به لاتین وارد کنید✨🚀",
        'reply_markup'=>json_encode([
              'keyboard'=>[
      [
        ['text'=>"🔚 برگشت"]
                ]
           ],
              'resize_keyboard'=>true
           ])
  ]);   
}
elseif($devclii == "photog"){
file_put_contents("devclii.txt","none");
  bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"http://www.keepcalmstudio.com/-/p.php?t=$text&bc=0D0201&tc=ffffff&cc=ffffff&uc=true&ts=true&ff=PNG&w=500&ps=sq",
 'caption'=>"@$idbot",
 ]);}
       elseif($text == "🔸ماه و ستاره"){
  file_put_contents("devclii.txt","photoh");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"متن خودتون رو به فارسی وارد کنید✨🚀",
        'reply_markup'=>json_encode([
              'keyboard'=>[
      [
        ['text'=>"🔚 برگشت"]
                ]
           ],
              'resize_keyboard'=>true
           ])
  ]);   
}
elseif($devclii == "photoh"){
file_put_contents("devclii.txt","none");
  bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"http://api.monsterbot.ir/pic/?text=$text&y=-30&x=20&color=Burly+Wood&font=Holool&fsize=120&bg=logo16",
 'caption'=>"@$idbot",
 ]);}
       elseif($text == "🔹طرح دریا"){
  file_put_contents("devclii.txt","photoi");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"متن خودتون رو به لاتین وارد کنید✨🚀",
        'reply_markup'=>json_encode([
              'keyboard'=>[
      [
        ['text'=>"🔚 برگشت"]
                ]
           ],
              'resize_keyboard'=>true
           ])
  ]);   
}
elseif($devclii == "photoi"){
file_put_contents("devclii.txt","none");
  bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"http://api.monsterbot.ir/pic/?text=$text&color=black&y=0&x=10&font=28&fsize=60&bg=logo11",
 'caption'=>"@$idbot",
 ]);}
        elseif($text == "کلاسیک |📍"){
  file_put_contents("devclii.txt","photoj");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"متن خودتون رو به لاتین وارد کنید✨🚀",
        'reply_markup'=>json_encode([
              'keyboard'=>[
      [
        ['text'=>"🔚 برگشت"]
                ]
           ],
              'resize_keyboard'=>true
           ])
  ]);   
}
elseif($devclii == "photoj"){
file_put_contents("devclii.txt","none");
  bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"http://api.monsterbot.ir/pic/?text=$text&y=15&font=Steamy&fsize=90&bg=logo8",
 'caption'=>"@$idbot",
 ]);}
 elseif($text == "🔚 برگشت" ){
	bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"به منوی لوگو برگشتید✔️
➖➖➖➖
از دکمه های زیر استفاده کنید🔻",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            	'keyboard'=>[
              [
                   ['text'=>"قلبی |📍"],['text'=>"📍| ساده"],['text'=>""]
                ],
				[
				['text'=>""],['text'=>"کلاسیک |📍"],['text'=>"📍| فونت زیبا"]
				],
				[
			['text'=>""],['text'=>"لوگو زیبا |📍"],['text'=>"📍| لوگو شیک"]
				],
				[
				['text'=>""],['text'=>"📍| لوگو هک |📍"],['text'=>""]
				],
			[
			['text'=>"برگشت"]
                ]
           ],
            	'resize_keyboard'=>true
       		])
    		]);
}
elseif($text == "🌈 ساخت استیکر" ){
	bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"به بخش ساخت استیکر خوش اومدی❤️
➖➖➖➖➖
🔹 تو این بخش میتونی هر عکسیو به استیکر تبدیل کنیی

🔸 یا میتونی با ارسال عکس اون رو به فایل برای ربات ساخت استیکر استفاده کنی
➖➖➖➖
فقط کافیه از دکمه های زیر استفاده کنی🔻",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            	'keyboard'=>[
              [
                   ['text'=>"🏖تبدیل عکس به استیکر"],['text'=>"📂تبدیل فایل به استیکر"]
                ],
			[  
				['text'=>"💾تبدیل استیکر به فایل"]
			],
			[
				['text'=>"برگشت"]
                ]
           ],
            	'resize_keyboard'=>true
       		])
    		]);
}
elseif($text == "🏖 ساخت عکس" ){
	bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"به بخش ساخت استیکر خوش اومدی❤️
➖➖➖➖➖
🔹 تو این بخش میتونی هر عکسیو به استیکر تبدیل کنیی

🔸 یا میتونی با ارسال عکس اون رو به فایل برای ربات ساخت استیکر استفاده کنی
➖➖➖➖
فقط کافیه از دکمه های زیر استفاده کنی🔻",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            	'keyboard'=>[
              [
                   ['text'=>"🌠 تبدیل‌استیکر ‌به ‌عکس"],['text'=>"💾تبدیل عکس‌به ‌فایل"]
                ],
			[  
				['text'=>"🖼تبدیل‌ فایل‌ به‌ عکس"]
			],
			[
				['text'=>"برگشت"]
                ]
           ],
            	'resize_keyboard'=>true
       		])
    		]);
}

//====================Photo======================//
elseif($text == "🏖تبدیل عکس به استیکر" ){               
file_put_contents("devclii.txt","c4");    
SendMessage($chat_id, "خوب حالا کافیه عکس خودتون را بفرستید تا تبدیل به استیکر کنم😉✨");
}
elseif($text == "📂تبدیل فایل به استیکر" ){               
file_put_contents("devclii.txt","c6");    
SendMessage($chat_id, "خوب حالا کافیه فایل خودتون را بفرستید تا تبدیل به استیکر کنم😉✨");
}
elseif($text == "💾تبدیل استیکر به فایل" ){               
file_put_contents("devclii.txt","c5");    
SendMessage($chat_id, "خوب حالا کافیه استیکر خودتون را بفرستید تا تبدیل به فایل کنم😉✨");
}
elseif($text == "🌠 تبدیل‌استیکر ‌به ‌عکس" ){               
file_put_contents("devclii.txt","c3");    
SendMessage($chat_id, "خوب حالا کافیه استیکر خودتون را بفرستید تا تبدیل به عکس کنم😉✨");
}
elseif($text == "💾تبدیل عکس‌به ‌فایل" ){               
file_put_contents("devclii.txt","c1");    
SendMessage($chat_id, "خوب حالا کافیه عکس خودتون را بفرستید تا تبدیل به فایل کنم😉✨");
}
elseif($text == "🖼تبدیل‌ فایل‌ به‌ عکس" ){               
file_put_contents("devclii.txt","c1");    
SendMessage($chat_id, "خوب حالا کافیه  فایل خودتون را بفرستید تا تبدیل به عکس کنم😉✨");
}
elseif($devclii == "c1"){
file_put_contents("devclii.txt","none");
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('devcli.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>new CURLFile('devcli.png'),
 'Caption' => 'hi'
 ]);
unlink('devcli.png');
}
elseif($devclii == "c2"){
$document = $message->document;
$file = $document->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('devcli.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>new CURLFile('devcli.png'),
 ]);
unlink('devcli.png');
 }
elseif($devclii == "c3"){
file_put_contents("devclii.txt","none");
$sticker = $message->sticker;
$file = $sticker->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('devcli.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>new CURLFile('devcli.png'),
 'Caption' => 'hi'
 ]);
unlink('devcli.png');
 }
elseif($devclii == "c4"){
file_put_contents("devclii.txt","none");
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('devcli.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>new CURLFile('devcli.png'),
 ]);
unlink('devcli.png');
}
elseif($devclii == "c5"){
file_put_contents("devclii.txt","none");
$sticker = $message->sticker;
$file = $sticker->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('devcli.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>new CURLFile('devcli.png'),
 ]);
unlink('devcli.png');
 }
 elseif($devclii == "c6"){
 file_put_contents("devclii.txt","none");
$document = $message->document;
$file = $document->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('devcli.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>new CURLFile('devcli.png'),
 ]);
unlink('devcli.png');
 }
//====================video======================//
elseif($text == "📽 تبدیلگر فیلم" ){
	bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"ه بخش تبدیلگر فیلم خوش امدید❤️
➖➖➖➖➖
🔹در این بخش میتونید فیلم های خودتون رو تبدیل کنید
➖➖➖
فقط کافیه از دکمه های زیر استفاده کنید🔻",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            	'keyboard'=>[
              [
                   ['text'=>"🎤تبدیل فیلم به اهنگ"],['text'=>"🏜تبدیل فیلم به گیف"]
                ],
			[
				['text'=>"برگشت"]
                ]
           ],
            	'resize_keyboard'=>true
       		])
    		]);
}
elseif($text == "🎤تبدیل فیلم به اهنگ" ){               
file_put_contents("devclii.txt","d1");    
SendMessage($chat_id, "خوب حالا کافیه فیلم خودتون را بفرستید تا تبدیل به  اهنگ کنم😉✨");
}
elseif($text == "🏜تبدیل فیلم به گیف" ){               
file_put_contents("devclii.txt","d3");    
SendMessage($chat_id, "خوب حالا کافیه فیلم خودتون را بفرستید تا تبدیل به  گیف کنم😉✨");
}
elseif($devclii == "d1"){
 file_put_contents("devclii.txt","none");
$video = $message->video;
$file = $video->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('devcli.mp3',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendaudio',[
 'chat_id'=>$chat_id,
 'audio'=>new CURLFile('devcli.mp3'),
 ]);
 }
 elseif($devclii == "d2"){
 file_put_contents("devclii.txt","none");
$video = $message->video;
$file = $video->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('devcli.gif',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>new CURLFile('devcli.gif'),
 ]);
unlink('devcli.gif');
 }
//====================audio======================//
elseif($text == "🎧 تبدیلگر اهنگ"){
	bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"به بخش تبدیلگر آهنگ خوش امدید❤️
➖➖➖➖➖
🔹در این بخش میتونید آهنگ های خودتون رو تبدیل کنید
➖➖➖
فقط کافیه از دکمه های زیر استفاده کنید🔻",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            	'keyboard'=>[
              [
                   ['text'=>"🎹تبدیل ‌ویس ‌به ‌آهنگ"],['text'=>"🎻تبدیل ‌آهنگ ‌به ‌ویس"]
                ],
			[
				['text'=>"برگشت"]
                ]
           ],
            	'resize_keyboard'=>true
       		])
    		]);
}
elseif($text == "🎹تبدیل ‌ویس ‌به ‌آهنگ"){               
file_put_contents("devclii.txt","e1");    
SendMessage($chat_id, "خوب حالا کافیه ویس خودتون را بفرستید تا تبدیل به  اهنگ کنم😉✨");
}
elseif($text == "🎻تبدیل ‌آهنگ ‌به ‌ویس"){               
file_put_contents("devclii.txt","e2");    
SendMessage($chat_id, "خوب حالا کافیه اهنگ خودتون را بفرستید تا تبدیل به  ویس کنم😉✨");
}
elseif($devclii == "e1"){
 file_put_contents("devclii.txt","none");
$voice = $message->voice;
$file = $voice->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('devcli.mp3',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendaudio',[
 'chat_id'=>$chat_id,
 'audio'=>new CURLFile('devcli.mp3'),
 ]);
unlink('devcli.mp3');
 }
elseif($devclii == "e2"){
 file_put_contents("devclii.txt","none");
$audio = $message->audio;
$file = $audio->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('devcli.ogg',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>new CURLFile('devcli.ogg'),
 ]);
unlink('devcli.ogg');
 }
//====================text======================//
elseif($text == "📝تبدیل متن به ویس"){               
file_put_contents("devclii.txt","g3");    
SendMessage($chat_id, "به بخش تبدیل متن به ویس خوش امدید❤️
➖➖➖➖➖
🔹در این بخش میتونید متن خود را به ویس تبدیل کنید

⚠️توجه داشته باشید فقط باید متن خود را به صورت لاتین [فینگلیش] وارد کنید
➖➖➖");
}
elseif($devclii == "g3"){
 file_put_contents("devclii.txt","none");
	$vo = file_get_contents('http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text='.urlencode($text));
 file_put_contents('vo.ogg',$vo);
 bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>new CURLFile('vo.ogg'),
 ]);
unlink('vo.ogg');
 }
 elseif($text == "🚦 پشتیبانی" ){                 
SendMessage($chat_id, "به بخش پشتیبانی خوش امدید❤️
➖➖➖➖➖
درصورت وجود هر نوع مشکل در ربات فقط کافیست به ربات زیر پیام دهید✔️
پشتیبانی ربات در خدمت شماست
➖➖➖
@$supid
");
}
 elseif($text == "✅ ارسال نظر" ){                 
SendMessage($chat_id, "نظرات شما باعث دلگرمی ماست❤️
➖➖➖➖➖
انتفادات پیشنهادات و نظرات خود را برای ما ارسال کنید
برای ارسال کافیست به ربات زیر پیام دهید✔️
➖➖➖
@$supid
");
}
 elseif($text == "🔖راهنما"){                 
SendMessage($chat_id, "به بخش راهنما خوش امدید
➖➖➖➖
در این بخش میتوانید توضیحات در مورد دکمه ها بخوانید☺️
1⃣ساخت لوگو :

🔹با استفاده از این دکمه میتونی لوگو طراحی کنی برای خودت بدون نیاز به دانش گرافیکی خاصی😊
کافیه پس از انتخاب دکمه طراحی لوگو 
از دکمه های طرح لوگو استفاده کنی و بعد از اون باتوجه به دستوری که ربات میده
مثلا متن خود را به لاتین وارد کنید
متن مورد نظر رو ارسال کنید و لوگو خودتون رو دریافت و لذت ببرید😍
➖➖➖➖
2⃣ساخت عکس :
در این بخش میتونی عکسات رو به استیکر و چیزاری دیگه تبدیل کنی یا میتونی فایل اون رو دریافت و در ربات تلگرامی
@stickers
که برای ساخت استیکر هست استفاده کنی😉
➖➖➖➖
3⃣ساخت استیکر :
این بخش جذاب میتونه برای شما عکس هارو به استیکر تبدیل کنه فقط کافیه عکس رو بفرستی تا فایل یا استیکر اون رو دریافت کنی🎈
➖➖➖➖➖
3⃣تبدیل گر ها :
هر کودوم از تبدیل گر ها میتونن فایل های شما مثل اهنگ یا فیلم و حتی متن رو به چیزای دیگه مثل گیف ویس یا اهنگ تبدیل کنن😍
این بخش واقعا عالیه😜
➖➖➖
4⃣پشتبانی و ارسال نظر
تو این بخش هم میتونی با ما در ارتباط باشید و نظرات پیشنهاداتتون رو برای ما ارسال کنید
پشتیبانی ربات اماده دریافت نظرات شمات❤️
➖➖➖
با احترام
ربات پیکاسو");
}
//==========================================//
unlink("error_log");

   ?>
رستی تا فایل یا استیکر اون رو دریافت کنی🎈
➖➖➖➖➖
3⃣تبدیل گر ها :
هر کودوم از تبدیل گر ها میتونن فایل های شما مثل اهنگ یا فیلم و حتی متن رو به چیزای دیگه مثل گیف ویس یا اهنگ تبدیل کنن😍
این بخش واقعا عالیه😜
➖➖➖
4⃣پشتبانی و ارسال نظر
تو این بخش هم میتونی با ما در ارتباط باشید و نظرات پیشنهاداتتون رو برای ما ارسال کنید
پشتیبانی ربات اماده دریافت نظرات شمات❤️
➖➖➖
با احترام
ربات پیکاسو");
}
//==========================================//
unlink("error_log");

   ?>
