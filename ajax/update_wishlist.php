<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>

<?if(!CModule::IncludeModule("sale") || !CModule::IncludeModule("catalog") || !CModule::IncludeModule("iblock"))
    return;

// ������� ���������� ������ � ������ $ID ������� �� 2 ����� � ������� �����
$arFields = array(
   "QUANTITY" => $_REQUEST{"newVal"},
   "DELAY" => "Y"
);
CSaleBasket::Update($_REQUEST["id"], $arFields);