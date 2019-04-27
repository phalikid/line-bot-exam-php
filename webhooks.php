<?php 
require "vendor/autoload.php";
    $accessToken = "0HUfhEpwxhQlLcnvwXZilBCEOq3BJU2ZrodN/ltYlm+dCVNo7splyhLElpeIJwwPLyb+WaU7rCU1JQj1EH8Qi0zbiH3f500hFIli4iad1jxiyh2jqTHctdU0Fq4yYVG/XPsxQB5J1GfXpcSYpQFiVQdB04t89/1O/w1cDnyilFU=";//copy Channel access token ตอนที่ตั้งค่ามาใส่
    
    $content = file_get_contents('php://input');
    $arrayJson = json_decode($content, true);
    
    $arrayHeader = array();
    $arrayHeader[] = "Content-Type: application/json";
    $arrayHeader[] = "Authorization: Bearer {$accessToken}";

    //รับ id ของผู้ใช้
    $id = $arrayJson['events'][0]['source']['userId'];
    //รับข้อความจากผู้ใช้
    $message = $arrayJson['events'][0]['message']['text'];



if(trim($message)=="id"){
	$text = "http://psis.in.th/reg_linebot.php?idpush=".$id." ";
	$arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = $text;
        replyMsg($arrayHeader,$arrayPostData);
}elseif(trim($message)=="sid"){
	$text = "http://psis.in.th/reg_linebot2.php?idpush=".$id." ";
	$arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = $text;
        replyMsg($arrayHeader,$arrayPostData);
}elseif(trim($message)=="รายงานการสแกนบัตร"){
	$text = "http://www.psis.in.th/report_print/std_ma.php?idpush=".$id."";
	$arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = $text;
        replyMsg($arrayHeader,$arrayPostData);
}elseif(trim($message)=="ตรวจพฤติกรรมนักเรียน"){
	$text = "http://www.psis.in.th/report_print/std_detail.php?idpush=".$id."";
	$arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = $text;
        replyMsg($arrayHeader,$arrayPostData);	
}elseif(trim($message)=="สอบถามผลการเรียน"){
	$text = "http://www.psis.in.th/report_print/std_Ttest.php?idpush=".$id."";
	$arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = $text;
        replyMsg($arrayHeader,$arrayPostData);		
}elseif(trim($message)=="เบอร์โทรติดต่อ"){
	$text = "เบอร์โทรศัพท์ภายใน 044-081071 ติดต่อช่วงเวลาทำการนะครับ";
	$arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = $text;
        replyMsg($arrayHeader,$arrayPostData);	
}elseif(trim($message)=="เว็บไซต์โรงเรียน"){
	$text = "คลิ๊กเพื่อเข้าเว็บไซต์โรงเรียน  http://www.nyp.ac.th";
	$arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = $text;
        replyMsg($arrayHeader,$arrayPostData);
}else{
	$textReplyMessage = new BubbleContainerBuilder(
	    "ltr",  // กำหนด NULL หรือ "ltr" หรือ "rtl"
	    new BoxComponentBuilder(
		"vertical",
		array(
		    new TextComponentBuilder("This is Header")
		)
	    ),
	    new ImageComponentBuilder(
		"https://www.ninenik.com/images/ninenik_page_logo.png",NULL,NULL,NULL,NULL,"full","20:13","cover"),
	    new BoxComponentBuilder(
		"vertical",
		array(
		    new TextComponentBuilder("This is Body")
		)
	    ),
	    new BoxComponentBuilder(
		"vertical",
		array(
		    new TextComponentBuilder("This is Footer")
		)
	    ),
	    new BubbleStylesBuilder( // style ทั้งหมดของ bubble
		new BlockStyleBuilder("#FFC90E"),  // style สำหรับ header block
		new BlockStyleBuilder("#EFE4B0"), // style สำหรับ hero block
		new BlockStyleBuilder("#B5E61D"), // style สำหรับ body block
		new BlockStyleBuilder("#FFF200") // style สำหรับ footer block
	    )
	);
	$replyData = new FlexMessageBuilder("Flex",$textReplyMessage);
}

function replyMsg($arrayHeader,$arrayPostData){
        $strUrl = "https://api.line.me/v2/bot/message/reply";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$strUrl);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);    
        curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($arrayPostData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close ($ch);
    }
   exit;
?>
