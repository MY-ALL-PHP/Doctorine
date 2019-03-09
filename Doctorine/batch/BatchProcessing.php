<?php
/**
 * @author Subrt Palhar
 */
class BatchProcessing {
	public $PostParameter = NULL;
	public $Name = array();
	public $MobileNo = array();
	public $FinalValue = array(); //An Associative array that stores the key value pair so as it is easy to xtract

	/**
	* @param array()
	*/
	function __construct($Argument = NULL) {
		$this->PostParameter = $Argument;
	}

	public function assignParams(){
		$this->Name 	= $this->PostParameter['empno'];
		$this->MobileNo = $this->PostParameter['mobile'];
	}

	/**
	 * @return array()
	 */
	public function formatArray(){
		$Length = count($this->Name);
		for ($Count=0; $Count < $Length; $Count++) {
			$array = array('name' => $this->Name[$Count], 'phone' => $this->MobileNo[$Count]);
			array_push($this->FinalValue,$array);
		}
		return $this->FinalValue;
	}
}

?>