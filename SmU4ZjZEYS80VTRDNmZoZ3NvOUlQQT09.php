$meta = file_get_contents("https://raw.githubusercontent.com/gdrivex/random/main/VkcvbW9URHdtUjI3amo3SFZoZ214QT09.json");
$channel_meta = json_decode($meta);
$a1 = $channel_meta->a1;
$a2 = $channel_meta->a2;
$a3 = $channel_meta->a3;
$a4 = $channel_meta->a4;

$de_a1 = = my_simple_encrypt($a1, 'd');
$de_a2 = = my_simple_encrypt($a2, 'd');
$de_a3 = = my_simple_encrypt($a3, 'd');
$de_a4 = = my_simple_encrypt($a4, 'd');
