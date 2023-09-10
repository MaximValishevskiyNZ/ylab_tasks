<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
    foreach($arResult['ITEMS'] as $item): ?>
        <div class="product-card">
			<h3 class="product-title">
				<?= $item["NAME"] ?>
			</h3>
			<p class="product-category">
				Действителен до <?= $item["DATE_ACTIVE_TO"] ?>
			</p>
		</div>
    <? endforeach ?>
