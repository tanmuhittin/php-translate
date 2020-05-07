<?php

namespace Tanmuhittin\PhpTranslate\Api;


use Stichoza\GoogleTranslate\GoogleTranslate;
use Tanmuhittin\PhpTranslate\TranslatorInterface;

class StichozaApiTranslate implements TranslatorInterface
{
    public $handle;

    /**
     * No need for an api_key
     * @param null $api_key
     */
    public function __construct($api_key)
    {
        $this->handle = new GoogleTranslate();
    }

    public function translate(string $text, string $locale, string $base_locale): string
    {
        if(is_null($base_locale))
            $this->handle->setSource();
        else
            $this->handle->setSource($base_locale);
        $this->handle->setTarget($locale);
        try {
            return $this->handle->translate($text);
        } catch (\ErrorException $e) {
            return false;
        }
    }
}
