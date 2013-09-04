<?php
// своё событие для хранения обоих моделей - Material и Comment
class ApproveCommentEvent extends CModelEvent {
		// просто добавляем 2 свойства
		public $comment;
}