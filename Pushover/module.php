<?
// Pushover Push Notification Service
class Pushover extends IPSModule
{
	private $NeohubIP = "";
	private $NeohubPort = "";
	private $NeohubUpdateInterval = "";
	    
	 public function Create()
	 {
	//Never delete this line!

        parent::Create();
		
	//These lines are parsed on Symcon Startup or Instance creation
        //You cannot use variables here. Just static values.
		
   	$this->RegisterPropertyString("NeohubIP", ""); 
	$this->RegisterPropertyString("NeohubPort", "4242"); 
	$this->RegisterPropertyInteger("NeohubUpdateInterval", "60");
    	}
	
	public function ApplyChanges() 
	{
        // Diese Zeile nicht löschen
        parent::ApplyChanges();
		
	$this->validatePushoverConfiguration();
	
	}



	########## private functions ##########
	/**
	 *		validates the configuration
	 */
	private function validatePushoverConfiguration()
	{
		if ($this->ReadPropertyString("PushoverUser") == "" || $this->ReadPropertyString("PushoverApplication") == "" ) {
			$this->SetStatus(201);
		}
		else
		{
			/* throws error while validate
			$this->SetStatus(101);
			*/
		}
	}
	########## public functions ##########
	/**
	 * 	Pushover_TestMessage()
	 *		send Test message
	 */
	public function TestMessage() 
	{	
		if(!$Pushover == NULL)
		{
			$this->SetStatus(102);
		}
		else
		{
			$this->SetStatus(202);
		}
	}
	
}
?>
