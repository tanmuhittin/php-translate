<?php

namespace Tanmuhittin\PhpTranslate\Api;


use Tanmuhittin\PhpTranslate\TranslatorInterface;

class YandexApiTranslate implements TranslatorInterface
{
    public $handle;


    public function __construct($api_key)
    {
        $this->handle = new \Yandex\Translate\Translator($api_key);

    }

    public function translate(string $text, string $locale, string $base_locale): string
    {
        try{
            $translation = $this->handle->translate($text, $base_locale.'-'.$locale);
        } catch (\Exception $e) {
            return false;
        }
        return $translation['text'][0]; //todo test if works Yandex code is old
    }
}
