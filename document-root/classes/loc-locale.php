<?php
class LocLocale {
  static function getLocale() {
    // allow getText usage (_ function)
    if (isSet($_SERVER["HTTP_ACCEPT_LANGUAGE"])) {
      $locale = locale_accept_from_http($_SERVER["HTTP_ACCEPT_LANGUAGE"]);
      // get only the language part, works even if there is nothing more than 2-letter language code
      $locale = explode('_', $locale);
      $locale = $locale[0];
    } else {
      $locale = "en";
    }
    return $locale;
  }


  static function prepareGettext($locale) {
    putenv("LC_ALL=$locale");
    setlocale(LC_ALL, $locale);

    bindtextdomain("messages", "locales");
    bind_textdomain_codeset("messages", "UTF-8");
    textdomain("messages");
  }
}
