<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(Bitrix\Main\Loader::includeModule('iblock')){

	$iblockId = 1;
	$arSelect = ['ID'];
	$arFilter = ['IBLOCK_ID' => $iblockId];
	$dbItem = \Bitrix\Iblock\ElementTable::getList([
		'select' => $arSelect,
		'filter' => $arFilter,
		'cache' => [
			'ttl' => 3600,
			'cache_joins' => true
		],
	]);

	while ($arItem = $dbItem->fetch()) {
		echo $arItem['ID'] . "<br>";
	}

}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>