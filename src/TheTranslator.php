<?php

namespace Tanmuhittin\PhpTranslate;


class TheTranslator
{

    public $translator;

    public function __construct($api, $api_key = null)
    {
        $this->translator = TranslatorFactory::create($api, $api_key);
    }

    /**
     * @param $base_locale
     * @param $locale
     * @param $text
     * @return string
     * @throws \Exception
     */
    public function translate($text, $locale, $base_locale)
    {
        $translated = $this->translator->translate($text, $locale, $base_locale);

        return $translated;
    }
}
