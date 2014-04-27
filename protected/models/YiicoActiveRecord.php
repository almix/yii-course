<?php
abstract class YiicoActiveRecord extends CActiveRecord
{
	 /**
	 * Prepares create_time, create_user_id, update_time and update_user_id attributes before performing validation.
	 */
	protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			if($this->isNewRecord)
			{
				$this->create_time=$this->update_time=time();
				$this->author_id=Yii::app()->user->id;
			}
			else
				$this->update_time=time();
			return true;
		}
		else
			return false;	
	}
	
}
