<?php
class BatchModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function batchInsertAction($Data = null){
		//echo 'helo.. This line is from model and action..';
		//exit;
		//pass a data array, and perform the batch insert..

		$Info = $this->db->insert_batch('batchinsert', $Data);
		if ($Info) echo '<br>Batch Insert seems to be happen sucessfull<br>';
		else echo '<br>Batch insert was failed..<br>';
	}
}





?>