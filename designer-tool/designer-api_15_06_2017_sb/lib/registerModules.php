<?php
/* Check Un-authorize Access */
if (!defined('accessUser')) {
    die("Error");
}

/* Initialize modules and mtthods */
$defineModules = array(

    /*textFx*/
    'getTextfxStyle' => 'textFx',
    'updateTextfxData' => 'textFx',
    'updateTextfx' => 'textFx',
    'deleteTextfxStyle' => 'textFx',
    'addBulkTextfx' => 'textFx',
    'getTextfxDetails' => 'textFx',
    'deleteTextfxCharacter' => 'textFx',

    /*wordcloud*/
    'getWordcloudDetails' => 'wordCloud',
    'updateWordcloudData' => 'wordCloud',
    'addBulkWordcloud' => 'wordCloud',
    'removeWordcloud' => 'wordCloud',
    'saveWordcloudImage' => 'wordCloud',
    /*textWithinShape*/

    /*backgroundPattern*/
    'getBackgroundPatternCategory' => 'backgroundPattern',
    'fetchBackgroundPatternsUploaded' => 'backgroundPattern',
    'saveBackGroundPatternCategory' => 'backgroundPattern',
    'updateBackgroundPatternCategory' => 'backgroundPattern',
    'removeBackgroundPatternCategory' => 'backgroundPattern',
    'addBulkBackgroundPattern' => 'backgroundPattern',
    'getBackgroundPatternDetails' => 'backgroundPattern',
    'updateBackgroundPattern' => 'backgroundPattern',
    'deleteBackgroundPatternById' => 'backgroundPattern',

    /*colorPallete*/
    'fetchPaletteCategories' => 'colorPallete',
    'getColorStatus' => 'colorPallete',
    'getPatelletByCategoryAdmin' => 'colorPallete',
    'addPaletteCategory' => 'colorPallete',
    'updatePaletteCatName' => 'colorPallete',
    'removePaletteCategory' => 'colorPallete',
    'addBulkPalette' => 'colorPallete',
    'updatePaletteData' => 'colorPallete',
    'removePalettes' => 'colorPallete',
    'getPatelletByCategory' => 'colorPallete',
    'fetchPalettes' => 'colorPallete',
    'savePaletteDetails' => 'colorPallete',
    'assignPrinttypeAndCategoryToPallet' => 'colorPallete',
    'updateMaxPalettes' => 'colorPallete',

    /*template*/
    'getTemplateCategory' => 'template',
    'getTemplateSubCategory' => 'template',
    'getTemplateList' => 'template',
    'saveTemplateCategory' => 'template',
    'updateTemplateCategory' => 'template',
    'removeTemplateCategory' => 'template',
    'getTemplate' => 'template',
    'updateTemplate' => 'template',
    'removeTemplate' => 'template',
    'saveTemplate' => 'template',
    'addTemplateToProduct' => 'template',

    /*userSlot*/
    'getUserImages' => 'userSlot',
    'saveUserImage' => 'userSlot',
    'deleteUserImages' => 'userSlot',
    'getUserSlotList' => 'userSlot',
    'getUserSlot' => 'userSlot',
    'saveUserSlot' => 'userSlot',
    'deleteUserSlot' => 'userSlot',

    /*predecorae*/
    'saveDecoratedImage' => 'predecorate',
    'getDecoratedImage' => 'predecorate',
    'removePreDecoTemplate' => 'predecorate',
    // 'saveProductTemplateData' => 'predecorate',
    'addTemplateToCartById' => 'predecorate',
    'getRefId' => 'predecorate',

    /*font*/
    'getFontCategories' => 'font',
    'fetchWebfonts' => 'font',
    'allWebFontsCatagory' => 'font',
    'searchFontForAdmin' => 'font',
    'addBulkWebfont' => 'font',
    'getFontDetails' => 'font',
    'updateWebFontsData' => 'font',
    'addWebFontCategory' => 'font',
    'updateWebFontCategory' => 'font',
    'removeWebFontCategory' => 'font',
    'updateFontCss' => 'font',
    'searchFont' => 'font',
    'fetchAllWebFontsTags' => 'font',
    'deleteWebFontById' => 'font',
    'getFontTagIdArr' => 'font',
    'mapWebfontsCategoryRel' => 'font',
    'mapWebfontsTagRel' => 'font',
    'getWebfontsId' => 'font',
    'editWebFontCategory' => 'font',
    'getFontUrl' => 'font',
    'getShapeSvgPath' => 'font',
    'getWebfontsTtfPath' => 'font',
    'addFontCategory' => 'font',

    /*design*/
    'allDesignCatagory' => 'design',
    'allDesignTags' => 'design',
    'fetchDesignsBySearch' => 'design',
    'fetchDesignsBySearchForAdmin' => 'design',
    'fetchSubCategory' => 'design',
    'addBulkDesign' => 'design',
    'getDesignDetails' => 'design',
    'updateDesign' => 'design',
    'addCategory' => 'design',
    'addSubCategoryToCategory' => 'design',
    'updateDesignCategory' => 'design',
    'updateDesignSubCategory' => 'design',
    'removeCategory' => 'design',
    'removeSubCategoryFromCategory' => 'design',
    'resize' => 'design',
    'totalDesignPresent' => 'design',
    'saveDesignDetails' => 'design',
    'mapDesign_category_subCategory_rel' => 'design',
    'getDesignId' => 'design',
    'getSubCategoryIdArr' => 'design',
    'getSubCategoryIdArr' => 'design',
    'mapDesignSubCategoryRel' => 'design',
    'mapDesignTagRel' => 'design',
    'mapCategory_subCategory_Rel' => 'design',
    'fetchDesignTags' => 'design',
    'addSubCategory' => 'design',
    'removeSubCategory' => 'design',
    'editCategory' => 'design',
    'editSubCategory' => 'design',
    'deleteDesignById' => 'design',
    'getTagIdArr' => 'design',
    'getCategoryIdArr' => 'design',
    'updateDesignData' => 'design',
    'unMapDesignFromRelTable' => 'design',
    'removeAppImage' => 'design',

    /*imageEdit*/
    'getMaskImageList' => 'imageEdit',
    'getEffectList' => 'imageEdit',
    'getRangeFromAdmin' => 'imageEdit',
    'imageUploadedPercentage' => 'imageEdit',
    'saveMaskPaths' => 'imageEdit',
    'updateMaskPaths' => 'imageEdit',
    'removeDesignMasks' => 'imageEdit',

    /*shape*/
    'allShapeCatagory' => 'shape',
    'fetchShapesBySearchForAdmin' => 'shape',
    'addBulkShape' => 'shape',
    'getShapeDetails' => 'shape',
    'updateShapeData' => 'shape',
    'addShapeCategory' => 'shape',
    'updateShapeCategory' => 'shape',
    'removeShapeCategory' => 'shape',
    'loadShapes' => 'shape',
    'getShapeCatagories' => 'shape',
    'fetchShapeTags' => 'shape',
    'deleteShapeById' => 'shape',
    'saveShapeDetails' => 'shape',
    'getShapeId' => 'shape',
    'getShapeTagIdArr' => 'shape',
    'mapShapeTagRel' => 'shape',
    'mapShapeCategoryRel' => 'shape',
    'unMapShapeFromRelTable' => 'shape',
    'editShapeCategory' => 'shape',

    /*background*/
    'getBackgroundDesignCatagory' => 'background',
    'fetchBackgroundDesignsUploaded' => 'background',
    'addBulkBackgroundDesign' => 'background',
    'getBackDesignDetails' => 'background',
    'updateBackgroundDesign' => 'background',
    'saveBackGround_Designcategory' => 'background',
    'updateBackgroundDesignCategory' => 'background',
    'removeBackground_DesignCategory' => 'background',
    'deleteBackgroundDesignById' => 'background',

    /*nameNumber*/

    /*user*/
    'userAccess' => 'user',
    'userAuthentication' => 'user',
    'validateUser' => 'user',
    'validSecurity' => 'user',
    'updatePassword' => 'user',
    'checkDesignerTool' => 'user',
    'validEmail' => 'user',
    'getUsers' => 'user',
    'getPrivileges' => 'user',
    'deleteUser' => 'user',
    'addUser' => 'user',
    'editUser_privileges' => 'user',
    'getUser_privileges' => 'user',
    'getSecurityQuestions' => 'user',
    'forgotPassword' => 'user',
    'changePassword' => 'user',	
    'userLogout' => 'user',
    'isUserLoggedIn' => 'user',

    /*distress*/
    'getDistressDetails' => 'distress',
    'addBulkDistress' => 'distress',
    'updateDistressData' => 'distress',
    'removeDistress' => 'distress',
    'getDBUniqueId' => 'distress',
    'generateUniqueId' => 'distress',
    'isValueExists' => 'distress',
    'saveDistress' => 'distress',

    /*colorSwatch*/
    'saveColorSwatch' => 'colorSwatch',
    'fetchColorSwatch' => 'colorSwatch',
    'addColorSwatch' => 'colorSwatch',
    'editSwachColor' => 'colorSwatch',

    /*productImage*/
    'setProductTempList' => 'productImage',
    'updateProductTemp' => 'productImage',
    'removeProductTemplate' => 'productImage',
    'getProductTempList' => 'productImage',
    'setDefaultProductTemp' => 'productImage',

    /* orders */
    'getOrders' => 'orders',
    'getOrdersGraph' => 'orders',
    'getOrderDetails' => 'orders',
    'downloadOrdersZipApp' => 'orders',
    'downloadOrderZipAdmin' => 'orders',
    'syncOrderAppZip' => 'orders',
    'createWithoutProductSvg' => 'orders',
    'creteNameAndNumberSeparatedSvg' => 'orders',
    'newSvgCreateByGroup' => 'orders',
    'deleteOrderAppZip' => 'orders',
    'updateOrderPrintStatus' => 'orders',
    'syncOrdersZip' => 'orders',
    'downloadOrdersZip' => 'orders',
    'getOrderIntialStatus' => 'orders',
    'getlastorderid' => 'orders',
    'syncOrders' => 'orders',
    'deleteOrders' => 'orders',
    'orderSvgChange' => 'orders',
    'changeSvg' => 'orders',
    'generatePrintPackage' => 'orders',
    'createHTMLPackage' => 'orders',
    'checkSvg' => 'orders',
    'generateSVG' => 'orders',
    'extractString' => 'orders',
    'downloadOrderDetail' => 'orders',
    'downloadSvg' => 'orders',
    'customizeOrder' => 'orders',

    /*printProfile*/
    'getAllPrintMethods' => 'printProfile',
    'addNewPrintSettingsAdmin' => 'printProfile',
    'addUpdatePrintFeature' => 'printProfile',
    'updatePrintSetting' => 'printProfile',
    'addAllCategoryByPrintId' => 'printProfile',
    'updateTextColorToPrintMethod' => 'printProfile',
    'updateQuantityRangeByPrintId' => 'printProfile',
    'getAllPrintSettings' => 'printProfile',
    'deletePrintMethod' => 'printProfile',
    'addPrintMethod' => 'printProfile',
    'addUpdatePrintMethod' => 'printProfile',
    'updateMultiplePrintMethod' => 'printProfile',
    'addUpdatePrintSettings' => 'printProfile',
    'addUpdatePrintImage' => 'printProfile',
    'updatePrintSize' => 'printProfile',
    'updateQuantityRange' => 'printProfile',
    'getPrintAreaPriceByPrintid' => 'printProfile',
    'getQuantintyrangeByPrintId' => 'printProfile',
    'getDefaultPrintMethodId' => 'printProfile',
    'updatePaletteRangePrice' => 'printProfile',
    'updateMinPrintingQuantity' => 'printProfile',
    'updateSetupPrice' => 'printProfile',
    'updateWhitebasePrice' => 'printProfile',
    'updateColorGroupPrice' => 'printProfile',
    'setProductPrintmethod' => 'printProfile',
    'addUpdateColorPriceGroup' => 'printProfile',
    'addProductToPrintMethod' => 'printProfile',
    'addFontToPrintMethod' => 'printProfile',
    'addDesignToPrintMethod' => 'printProfile',
    'addTemplateToPrintMethod' => 'printProfile',
    'addUpdatePrintAreaPrice' => 'printProfile',
    'addMaxNumberForSelectColor' => 'printProfile',
    'addNewPrintSize' => 'printProfile',
    'updatePrintSizeArea' => 'printProfile',
    'deletePrintArea' => 'printProfile',

    /*setting*/
    'fetchCustomMaskData' => 'setting',
    'getSizeInfo' => 'setting',
    'updateThemeSetting' => 'setting',
    'updateLangCurUnitSetting' => 'setting',
    'setGeneralSetting' => 'setting',
    'updateTabSetting' => 'setting',
    'updatePreloadItemSetting' => 'setting',
    'updateItemOnStageSetting' => 'setting',
    'updateFeatureSetting' => 'setting',
    'getAllAdminSettings' => 'setting',
    'getItemsPerModule' => 'setting',
    'getFeatureSettings' => 'setting',
    'getAdminSettings' => 'setting',
    'allSettingsDetails' => 'setting',
    'fetchGeneralSetting' => 'setting',
    'setBoundsGeneralSetting' => 'setting',
    'getGeneralSetting' => 'setting',
    'fetchAppCurrency' => 'setting',
    'fetchAppUnit' => 'setting',
    'updateAdminSettings' => 'setting',
    'updatePriceCalculationSetting' => 'setting',
    'updateWhitebaseConfig' => 'setting',
    'getThemeColorsDetails' => 'setting',
    'getThemes' => 'setting',
    'updateCurrency' => 'setting',
    'updateUnit' => 'setting',
    'updateAppCurrency' => 'setting',
    'updateAppUnit' => 'setting',
    'updateSettingLanguage' => 'setting',
    'updateGeneralSettingLanguageByFeatureId' => 'setting',
    'updateLanguageJson' => 'setting',
    'saveLanguage' => 'setting',
    'editLanguage' => 'setting',
    'updateLocalSettingsLanguage' => 'setting',
    'getLanguages' => 'setting',
    'setLanguages' => 'setting',
    'removeLanguage' => 'setting',
    'getThemeColors' => 'setting',
    'fetchTabDetails' => 'setting',
	'addSocialImageDetails' => 'setting',
	'updateSocialImageDetails' => 'setting',
	'getSocialImageDetails' => 'setting',


    /*upgrade*/
    'versionUpgrade' => 'upgrade',
    'curlTransfer' => 'upgrade',
    'unzipUpgradePacakge' => 'upgrade',
    'getInkxeUpdate' => 'upgrade',
    'getUpgradeZip' => 'upgrade',
    'getVersionData' => 'upgrade',

    /*storage*/
    'clearOrderZipApp' => 'storage',
    'clearPreviewImage' => 'storage',
    'rrmdir' => 'storage',
    'clearDesigns' => 'storage',
    'clearBackgroundDesign' => 'storage',
    'clearShapes' => 'storage',
    'clearDistress' => 'storage',
    'clearPattern' => 'storage',
    'clearWordcloud' => 'storage',
    'clearCustomMaskData' => 'storage',
    'clearUserSlot' => 'storage',
    'clearProductTemplate' => 'storage',
    'clearTrash' => 'storage',
    'getLiveQuoteRefIds' => 'storage',

    /*carts*/
    'capturedCustomizedImages' => 'carts',
    'saveDesignStateCart' => 'carts',
    'buildProductArray' => 'carts',
    'saveProductPreviewSvgImagesOnAddToCart' => 'carts',
    'parsePrintSVG' => 'carts',
    'saveDesignData' => 'carts',
    'previewCartImage' => 'carts',
    'savePreviewSvgImagesOnAddToCart' => 'carts',
    'savePreviewImagesOnAddToCart' => 'carts',
    'getPreviewImageArray' => 'carts',
    'addToCart' => 'carts',
    'addToCartByRefId' => 'carts',
    'getDesignState' => 'carts',
    'getTotalCartItem' => 'carts',
    'addTemplateToCart' => 'carts',

    /*products*/
    'getProductAdditionalPrice' => 'products',
    'getSimpleProduct' => 'products',
    'getSizeVariantAdditionalPriceDetails' => 'products',
    'getCustomBoundaryUnit' => 'products',
    'getMaskData' => 'products',
    'getDtgPrintSizesOfProductSides' => 'products',
    'getPrintareaType' => 'products',
    'fetchProductFeatures' => 'products',
    'getSizeVariantAdditionalPriceClient' => 'products',
    'getProductTemplateByProductId' => 'products',
    'getProductTemplatePath' => 'products',
    'getAdditionalPrintingPriceOfVariants' => 'products',
    'getSizeVariantAdditionalPriceClient' => 'products',
    'getDiscountToProduct' => 'products',
    'setSizeVariantAdditionalPrice' => 'products',
    'getSimpleProductClient' => 'products',
    'getVariants' => 'products',
    'getSizeAndQuantity' => 'products',
    'getAllProducts' => 'products',
    'getCategories' => 'products',
    'getsubCategories' => 'products',
    'getPrintMethodByProduct' => 'products',
    'getProductCount' => 'products',
    'getSimpleProductClient' => 'products',
    'getSizeArr' => 'products',
    'getColorArr' => 'products',
    'getVariantList' => 'products',
    'getProductPrintMethod' => 'products',
    'getCustomBoundaryUnit' => 'products',
    'fetchCustomMaskData' => 'products',
    'getSimpleProduct' => 'products',
    'getProductAdditionalPrice' => 'products',
    'setProductAdditionalPrice' => 'products',
    'setDtgPrintSizesOfProductSides' => 'products',
    'getSizeVariantAdditionalPriceDetails' => 'products',
    'saveMaskData' => 'products',
    'capturedCustomizedImages' => 'products',
    'checkDuplicateSku' => 'products',
    'addTemplateProducts' => 'products',
    'saveProductTemplateData' => 'products',
    'getCustomPreviewImages' => 'products',
    'checkCustomProduct' => 'products',
    'getLatestRevision' => 'products',
    'saveCustomMaskData' => 'products',
    'deleteCustomMaskData' => 'products',
    'fetchProductBycartId' => 'products',
    'checkIsCustomiseByProductId' => 'products',
    'getCmsPageId' => 'products',
    'updateCustomMaskData' => 'products',
    'addProduct' => 'products',
    'installModule' => 'products',
    'isCustomizable' => 'products',
    'getSimpleProductId' => 'products',
	
	/* Authentication */
	
	'authenticateUser' => 'authentication',
	'authorizeUser' => 'authentication',
);

/* Initialize restricted modules and mtthods */
$restrictedModules = array(
	'getOrders' => 'orders',
    'getOrdersGraph' => 'orders',
    'getOrderDetails' => 'orders',
    'downloadOrdersZipApp' => 'orders',
    'downloadSvg' => 'orders'
);

$defineArray = array_unique($defineModules);

/* Register all modules */
foreach ($defineArray as $func => $moduleName) {
    $className = ucfirst($moduleName); // Set Class name of the file //

    /* Register Store Modules */
    if (file_exists('modules/store/' . STORE_TYPE . '/' . STORE_VERSION . '/' . $moduleName . '/' . $moduleName . 'Store.php')) {
        require_once 'modules/store/' . STORE_TYPE . '/' . STORE_VERSION . '/' . $moduleName . '/' . $moduleName . 'Store.php';
        Flight::register($moduleName . "Store", $className . "Store");
    }

    /* Register Common Modules */
    require_once 'modules/' . $moduleName . '/' . $moduleName . '.php';
    Flight::register($moduleName, $className);
}
