<?

class IncrementDeltaBehavior extends CActiveRecordBehavior
{
	public $model;
	
	public function afterSave($event)
	{	
		
		$max = Yii::app()->db->createCommand()
			->select('MAX(delta) ')
			->from($event->sender->tableName())
			->queryColumn();
		//var_dump($max);die;
		
		Yii::app()->db->createCommand()
			->update($event->sender->tableName(), array('delta' => ++$max[0]), 'id = ' . $event->sender->id);
		
	}
}
