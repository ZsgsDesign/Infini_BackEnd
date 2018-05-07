<?php

class ERR {
	
	/**
	 * An old-fashioned error catcher mainly to provide error description
	 * existed here only to avoid direct SQL database access
	 * return a hundred present pure string
	 *
	 * @author John Zhang
	 * @param string $ERR_CODE
	 */

	public static function Catcher($ERR_CODE)
	{
		if(($ERR_CODE<1000)) $ERR_CODE=1000;
		$output=array(
			 'ret' => $ERR_CODE,
			'desc' => self::Desc($ERR_CODE),
			'data' => null
		);
		exit(json_encode($output));
	}
	 
	private static function Desc($ERR_CODE)
	{
		$ERR_DESC=array(
			'1000' => "Unspecified Error",
			'1001' => "Internal Sever Error : SECURE_VALUE invalid",
			'1002' => "Internal Database Error : Attemption unsuccessful",
			'1003' => "Internal Sever Error : Param deflection",
			'2000' => "Account-Related Error",
			'2001' => "Wechat account not binded yet",
			'2002' => "Password incorrect",
			'2003' => "Email address already taken",
			'2004' => "Password identical",
			'2005' => "Email profile empty",
			'2006' => "Email Domain illegal",
			'2007' => "Login illegal",
			'2008' => "Already binded",
			'3000' => "Diary-Related Error",
			'3001' => "No Diary involved",
			'3002' => "Diary Not Found",
			'3003' => "Diary Not Authoried",
			'4000' => "Reminder-Related Error",
			'4001' => "No Countdown involved",
			'4002' => "Countdown Not Found",
			'4003' => "Countdown Not Authoried",
		);
		return isset($ERR_DESC[$ERR_CODE])?$ERR_DESC[$ERR_CODE]:$ERR_DESC['1000'];
	}

}
