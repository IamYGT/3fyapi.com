<?php
//Install Information
$install_modul_name = "Koleksiyonlar";
$install_modul_icon = "ti-palette";
$table_category = "koleksiyon" . "_category";
$table_items = "koleksiyon" . "_items";

$install_sql = "
CREATE TABLE `" . $table_category . "` (
  `id` int(11) NOT NULL,
  `row` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `" . $table_category . "` ADD PRIMARY KEY (`id`);

ALTER TABLE `" . $table_category . "` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

CREATE TABLE `" . $table_items . "` (
  `id` int(11) NOT NULL,
  `row` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `" . $table_items . "` ADD PRIMARY KEY (`id`);

ALTER TABLE `" . $table_items . "` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
";
$uninstall_sql = "
RENAME TABLE " . $table_category . " TO b" . time() . "_" . $table_category . ";
RENAME TABLE " . $table_items . " TO b" . time() . "_" . $table_items . ";
";
?>