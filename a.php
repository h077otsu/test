#!/usr/bin/php
<?php
  $x = "abc";
  foreach(file('/usr/share/dict/linux.words') as $line){
    // strpos() 関数を使って、文字列 "abc" が含まれる単語を echo "$line"; で表示しなさい。
    if(strpos($line, $x) !== false){
      echo $line;
    }
  }
?>
