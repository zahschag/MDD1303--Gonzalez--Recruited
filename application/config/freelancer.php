<?php

class Freelancer{
	
	const API_TRANSPORT ="http";
	const API_HOST_PROD = "api.freelancer.com";
	const API_HOST_SANDBOX = "api.sandbox.freelancer.com";
	const AUT_TOKEN_TIMEOUT = 9999999999;
	const OAUTH_DEBUG = FALSE;
	const USAGE_STATS = TRUE;
	
	public $auth;
	
	protected $oauth;
	protected $api_base;
	
	private $consumer_key;
	private $consumer_secret;
	
	public function __($consumer_key, $consumer_secret, $is_production=FALSE, $transport=self::API_TRASNPORT){
		
		$this->consumer_key = $consumer_key;
		$this->consumer_secret = $consumer_secret;
		
		if($is_production){
			$this->api_base = $transport.'://'.self::API_HOST_PROD;
			}else{
				$this->api_base = $transport.'://'.self::API_HOST_SANDBOX;
				}
				
		$this->oauth = new OAuth($consumer_key, $consumer_secret, OAUT_SIG_METHOD_HMACHA1,OAUTH_AUTH_TYPE_URI);
		
		if(self::OAUTH_DEBUG){
			$this->oauth->enableDebug();
			}
		
		}
	
	
	}


?>