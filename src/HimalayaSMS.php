<?php
namespace techhimalayasoft\HimalayaSMS;

use GuzzleHttp\Client;

class HimalayaSMS {
	public static function getKey() { return config('himalayasms.key'); }
	public static function getSender() { return config('himalayasms.senderid'); }
	public static function getCampaign() { return config('himalayasms.campaign'); }
	public static function getRouteId() { return config('himalayasms.routeid'); }
	public static function getType() { return config('himalayasms.type'); }
	public static function getApiUrl() { return config('HimalayaSMS.api_endpoint'); }
	public static function getSendUrl() { return HimalayaSMS::getApiUrl().config('himalayasms.methods.send'); }

	public static function send( $to = Null, $text = Null)
	{
		if ( is_null($to) || is_null($text) ) return json_encode(['response_code' => 404, 'response' => 'Required Fields Missing.']);
		$senderid = HimalayaSMS::getSender();
		$key = HimalayaSMS::getKey();
		$campaign = HimalayaSMS::getCampaign();
		$routeid = HimalayaSMS::getRouteId();
		$type = HimalayaSMS::getType();

		$client = new Client();
		$request = $client->get( HimalayaSMS::getSendUrl(), [
			'query' => [
				'key' => $key,
				'senderid' => $senderid,
				'campaign' => $campaign,
				'routeid' => $routeid,
				'contacts' => $to,
				'msg' => $text,
				'type' => $type
			],
			'http_errors' => false
		]);

		$response = $request->getBody();
		return $response;
	}

}