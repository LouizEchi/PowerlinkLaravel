	<?php



class Helpers
{
public static $server_url = NULL;
	public static function setServerURL ($server_url)
	{
      self::$server_url =  $server_url;
	}
	public static function getServerURL ()
	{
		
      return self::$server_url;
	}
public static function doMessage() {
        $message = 'Hello';
        return $message;
    }
}

?>