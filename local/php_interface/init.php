<?php

AddEventHandler("iblock", "OnStartIBlockElementAdd", "generateCode");
AddEventHandler("iblock", "OnStartIBlockElementUpdate", "generateCode");


function generateCode(&$arFields)
{
    $iblock = CIBlock::GetByID($arFields['IBLOCK_ID'])->GetNext();
    if ($iblock["CODE"] == 'closed-section-access') {
        $arFields['CODE'] = \Bitrix\Main\Security\Random::getString(12) . $arFields['ID'];
    }
}

function accessCleaner()
{
    CModule::IncludeModule("iblock");
    $today_date = date('d.m.Y H:i:s');
    $arSelect = array("ID", "NAME", "DATE_ACTIVE_FROM");
    $arFilter = array("IBLOCK_CODE" => 'closed-section-access', "<DATE_ACTIVE_TO" => $today_date, "ACTIVE" => "Y");
    $res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
    while ($resItem = $res->GetNext()) {
        $el = new CIBlockElement;
        $ElementArray = array("ACTIVE" => "N",);
        $el->Update($resItem['ID'], $ElementArray);
    }
    return __METHOD__ . "();";
}
