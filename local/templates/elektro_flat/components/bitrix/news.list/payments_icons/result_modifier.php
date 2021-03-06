<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

foreach($arResult["ITEMS"] as $key => $arItem) {
	if(is_array($arItem["PREVIEW_PICTURE"])) {
        if ($arItem["EXTERNAL_ID"] == "paykeeper_icon") {
            $arFileTmp = CFile::ResizeImageGet(
                $arItem["PREVIEW_PICTURE"],
                array("width" => 247, "height" => 30),
                BX_RESIZE_IMAGE_PROPORTIONAL,
                true
            );    
        } else {
            $arFileTmp = CFile::ResizeImageGet(
                $arItem["PREVIEW_PICTURE"],
                array("width" => 66, "height" => 30),
                BX_RESIZE_IMAGE_PROPORTIONAL,
                true
            );
        }

		$arResult["ITEMS"][$key]["PICTURE_PREVIEW"] = array(
			"SRC" => $arFileTmp["src"],
			"WIDTH" => $arFileTmp["width"],
			"HEIGHT" => $arFileTmp["height"],
		);
	}
}?>