<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$arComponentParameters = [
    "PARAMETERS" => [
        "ACTIVE" => [
            "PARENT" => "BASE",
            "NAME" => GetMessage('ACTIVE_STATUS'),
            "TYPE" => "LIST",
            "VALUES" => [
                "<" => GetMessage('EXPIRED'),
                ">" => GetMessage('NOT_EXPIRED')
            ]
        ]
    ]
];
