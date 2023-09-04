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
        $today_date = date('d.m.Y H:i:s');
        $arSelect = ["ID", "NAME", "DATE_ACTIVE_TO"];
        $arFilter = [
            "IBLOCK_CODE" => 'closed-section-access',
            $this->arParams['~ACTIVE'] . "DATE_ACTIVE_TO" => $today_date, "ACTIVE" => "Y"
        ];
        $res = CIBlockElement::GetList([], $arFilter, false, [], $arSelect);
        $this->arResult = [];
        while ($resItem = $res->Fetch()) {
            $this->arResult['ITEMS'][] = $resItem;
        }
        $this->includeComponentTemplate();
    }
}
