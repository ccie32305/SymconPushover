<?
// Pushover Push Notification Service
class Pushover extends IPSModule
{
	private $PushoverUserToken = "";
	private $PushoverApplicationToken = "";
	    
	 public function Create()
	 {
	//Never delete this line!

        parent::Create();
		
	//These lines are parsed on Symcon Startup or Instance creation
        //You cannot use variables here. Just static values.
		
   	$this->RegisterPropertyString("PushoverUserToken", ""); 
	$this->RegisterPropertyString("PushoverApplicationToken", ""); 
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
		if ($this->ReadPropertyString("PushoverUserToken") == "" || $this->ReadPropertyString("PushoverApplicationToken") == "" ) {
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
