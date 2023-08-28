<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="news-list">
	<? foreach ($arResult["ITEMS"] as $arItem) : ?>
		<? $res = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID']);
		$ar_res = $res->GetNext(); ?>
		<div class="product-card">
			<h3 class="product-title"><?= $arItem['NAME'] ?></h3>
			<p class="product-category"><?= $ar_res['NAME'] ?></p>
		</div>
	<? endforeach; ?>
</div>