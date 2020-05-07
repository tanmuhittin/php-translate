<?php

namespace Tanmuhittin\PhpTranslate;


use Tanmuhittin\PhpTranslate\Api\GoogleApiTranslate;
use Tanmuhittin\PhpTranslate\Api\StichozaApiTranslate;
use Tanmuhittin\PhpTranslate\Api\YandexApiTranslate;

class TranslatorFactory
{
    public static function create($api, $api_key = null) : TranslatorInterface
    {
        switch ($api) {
            case 'google':
                return new GoogleApiTranslate($api_key);
                break;
            case 'yandex':
                return new YandexApiTranslate($api_key);
                break;
            case 'stichoza':
                return new StichozaApiTranslate(null);
                break;
            default:
                return new StichozaApiTranslate(null);
        }
    }
}
