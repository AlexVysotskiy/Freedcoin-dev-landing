<?php

require_once dirname(__FILE__) . '/vendor/autoload.php';

use SparkPost\SparkPost;
use GuzzleHttp\Client;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {

        $apiKey = 'b9a7e18ebe59d9d3d8e741a20e01d305c6f96f5a';
        $fromEmail = 'partners@freedcoin.io';
        $toEmail = 'alex_v2008@mail.ru';

        $postData = $_POST;

        $message = '<html><body><p>Новая заявка на получение FREED SDK:</p>';

        $message .= '<p>Название компании: ' . $postData['company-name'] . '</p>';
        $message .= '<p>Веб-сайт: ' . $postData['site'] . '</p>';
        $message .= '<p>Название игры для использования FREED: ' . $postData['game-list'] . '</p>';
        $message .= '<p>Веб-сайт игры: ' . $postData['game-site'] . '</p>';
        $message .= '<p>Тип игры: ' . $postData['game-type'] . '</p>';
        $message .= '    <p>MAU: ' . $postData['mau'] . '</p>';
        $message .= '<p>Имя контактного лица: ' . $postData['contact-name'] . '</p>';
        $message .= '<p>Профиль контактного лица: ' . $postData['profile-type'] . '</p>';
        $message .= '<p>E-mail или телефон: ' . $postData['contact-info'] . '</p>';

        $message .= '</body></html>';

        $httpClient = new GuzzleAdapter(new Client());
        $sparky = new SparkPost($httpClient, ['key' => $apiKey]);

        $sparky->setOptions([
            'async' => false,
        ]);

        $results = $sparky->transmissions->post([
            'options' => [
                'sandbox' => false
            ],
            'content' => [
                'from' => $fromEmail,
                'subject' => 'Новая заявка на SDK',
                'html' => $message
            ],
            'recipients' => [
                ['address' => ['email' => $toEmail]]
            ]
        ]);
    } catch (Exception $e) {

        echo '{success: 0}';
        exit;
    }

}

echo '{success: 1}';