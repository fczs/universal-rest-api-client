<?php
// get client classes
require_once dirname(__DIR__) . '/client/autoload.php';
// create client instance for VK API
$vk = new \URAC\Client('vk');
// request user info
$response = $vk->request('GET', 'users.get', [
    'user_id' => 0,
    'fields' => $vk->config('FIELDS'),
    'v' => $vk->config('VERSION'),
    'access_token' => $vk->config('ACCESS_TOKEN')
]);

// display response
echo '<pre>';
print_r($response);
echo '</pre>';

// get php stdClass object with user info
$user = $response->response[0];
// display image
echo sprintf('<img src="%s">', $user->photo_400_orig);

// request user friends info
$friends = $vk->request('GET', 'friends.get', [
    'user_id' => 0,
    'fields' => $vk->config('FIELDS'),
    'v' => $vk->config('VERSION'),
    'access_token' => $vk->config('ACCESS_TOKEN')
]);

// display response
echo '<pre>';
print_r($friends);
echo '</pre>';