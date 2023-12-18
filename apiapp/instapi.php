<?php
	require_once('defines.php');

	
	Class instapi{
		private $_appId = Instagram_App_ID;
		private $_appSecret = Instagram_App_Secret ;
		private $_redirectURL= Instagram_APP_Redirect_URI ;
		private $_getCode = '';
		private $_apiBaseURL='https://api.instagram.com/';
		private $_UseraccessToken = '';
		
		public $AuthorizationURL='';

		function __construct ($params) {
		
			$this -> _getCode = $params['get_code'];
			$this->_setUserinstaaccessToken($params);
			$this->_setAuthorizationURL();
			
		}	
		
		private function _setAuthorizationURL () {
		
			$getVars = array (

				'app_id' => $this-> _appId,
				'redirect_uri' => $this->_redirectURL,
				'scope' => 'user_profile,user_media',
				'response_type' => 'code'
				
			
			);
			

			$this->AuthorizationURL=$this->_apiBaseURL .  'oauth/authorize?'  . http_build_query($getVars);
			


		}
		private function _setUserinstaaccessToken($params)
		{
			if($params['get_code'])
			{
				$UseraccessTokenResponse=$this-> _getUserAccessToken();
			}
		}
		
		
		private function _getUserAccessToken()
		{
			$params=array(
				'endpoint_url' => $this ->_apiBaseURL . 'oauth/access_token' ,
				'type' => 'post',
				'url_params' => array (
					'app_id' => $this ->_appId
				)
			);
		}

}