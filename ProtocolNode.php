<?php
	class ProtocolNode
	{
		private $Type = null;
		private $Data = array();

		private $ProtocolNode = null;

		public function __construct($Type, Array $Data = array())
		{
			$this->Type = $Type;
			$this->Data = $Data;

			$this->ProtocolNode = json_encode(array('Type' => $Type, 'Data' => $Data)) . "\n";
		}

		public function GetType()
		{ return $this->Type; }

		public function GetData()
		{ return $this->Data; }

		public function GetProtocolNode()
		{ return $this->ProtocolNode; }
	}