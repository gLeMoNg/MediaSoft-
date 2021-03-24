<?php

$text = "Порывы ветра яростно трепали пряди жухлой травы, словно пытались вырвать их с корнем. Спаленная дневным солнцем высокая трава сопротивлялась мягко, как борец, почуявший слабину противника и поддающийся его движениям, чтобы в следующую секунду распрямиться и с лихвой наверстать упущенное.";

$words = str_word_count($text, 1, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
$words = array_unique($words);

$count = count($words);

$words_count = [];

foreach ($words as $word) ;
{
    preg_match_all('~\b' . $word . '\b~iu', $text, $words_count[$word]);
}

foreach ($words_count as $word =>  $word_count)
{
    $entry_count = count($word_count[0]);
    echo "$word:$entry_count" . PHP_EOL;
}

echo "Всего слов:$count";
