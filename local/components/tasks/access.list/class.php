<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class AccessList extends \CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        return $arParams;
    }

    public function executeComponent()
    {
        CModule::IncludeModule("iblock");
        $arSelect = ["ID", "NAME", "PROPERTY_NAME", "DATE_ACTIVE_TO"];
        $arFilter = ["IBLOCK_CODE" => 'closed-section-access', "ACTIVE" => $this->arParams["ACTIVE"]];
        $res = CIBlockElement::GetList([], $arFilter, false, [], $arSelect);
        $this->arResult = [];
        while ($resItem = $res->Fetch()) {
            $this->arResult['ITEMS'][] = $resItem;
        }
        $this->includeComponentTemplate();
    }
}
