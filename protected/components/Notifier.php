<?php
// Класс-оповещатель, рассылает почту при различных событиях
class Notifier {
	function comment($event){
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= "From: Yiico <".Yii::app()->params['adminEmail'].">\r\nReply-To: ".Yii::app()->params['adminEmail'];
		$text = "Ваш комментарий на Yiico одобрен модератором.<br />
				 	<blockquote>
					Комментарий: <b>{$event->comment->content}</b><br />
					Автор: <b>{$event->comment->author}</b><br />
					Email: <b>{$event->comment->email}</b><br />
					Url: <b>{$event->comment->url}</b><br />
					
					Вы можете комментарий <a href=\"".Yii::app()->request->getBaseUrl(true)."{$event->comment->url}\">{$event->comment->url}</a><br /><br />
					Best Regards, Yiico<br />
				";
		mail($event->comment->email,'Ваш комментарий на Yiico',$text,$headers);
		//$material = $event->sender;
		//foreach($material->comments as $comment){
		//		if($comment->notify === "1") mail($comment->email, 'Новый комментарий на сайте yiico', $text,$headers);
		//}
	}
}