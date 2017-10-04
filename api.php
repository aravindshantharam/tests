<?php 

require_once('TwitterAPIExchange.php');

$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=imVkohli';
$requestMethod = 'GET';

$settings = array(
    'oauth_access_token' => "338201546-rRS2GHmGet4cEMrex18NFGf4Yo3WnBdbF4KGTdAZ",
    'oauth_access_token_secret' => "wNuWfggQ1hc1ugzwGKjDQYlVSvLm6hNfQ9twNiu6Ht0MX",
    'consumer_key' => "2zig9r2D9lDl5opM0KzRa4XMT",
    'consumer_secret' => "MoeJBt2DdQWgwLIvsRCakPqzsQZehVkv5ydJ3bOkORdbogXnlt"
);

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

print_r(json_decode($response));

?>