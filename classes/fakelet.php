<?php

class Fakelet {
  static function words($min_count = 1, $max_count) {
    $ascii_min = 33; // Start of printable ASCII characters
    $ascii_max = 126; // End of printable ASCII characters

    $count = isset($max_count) ? mt_rand($min_count, $max_count) : $min_count;

    $words = [];
    for ($i = 0; $i < $count; $i++) {
      $word_length = random_int(1, 10);
      $word = "";
      for ($j = 0; $j < $word_length; $j++) {
        $word = $word . chr(mt_rand($ascii_min, $ascii_max));
      }
      array_push($words, $word);
    }

    return implode($words, ' ');
  }
}
