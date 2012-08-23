<?php

class NoCache extends Plugin imlements Cache
{
	
	public function action_update_check()
	{
		Update::add( $this->info->name, '75552684-95ee-45d9-bcd9-5e83f093b35b', $this->info->version );
	}
	
}

?>