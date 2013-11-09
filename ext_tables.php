<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Msbergrouten',
	'msbergrouten'
);

$extensionName = t3lib_div::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_msbergrouten';

 // Flexform
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/flexform.xml');


Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'MsbergroutenGebirge',
	'msbergroutengebirge'
);


Tx_Extbase_Utility_Extension::registerPlugin(
		$_EXTKEY,
		'MsbergroutenShow',
		'msbergroutenshow'
);


$pluginSignature = strtolower($extensionName) . '_msbergroutengebirge';

 // Flexform
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/flexform.xml');


t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'MS Routen');

t3lib_extMgm::addLLrefForTCAdescr('tx_msrouten_domain_model_routes', 'EXT:msrouten/Resources/Private/Language/locallang_csh_tx_msrouten_domain_model_routes.xml');


t3lib_extMgm::allowTableOnStandardPages('tx_msrouten_domain_model_routes');


$TCA['tx_msrouten_domain_model_routes'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_routes',
		'label' => 'routen_name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'routen_name,level_short,erstbegeher,level,elevel,climbtime,climbdistance,exposition,wandhoehe,material,beauty,frequenz,route_description,level_long,absicherung,zustieg,einstieg,huette,hints,abstieg,verlauf,erstbegeher_lang,quelle,topo,topo_bu,topo_alt,topo_title,wandbild,wandbild_bu,wandbild_alt,wandbild_title,action_bild1,action_bild1_bu,action_bild1_alt,actionbild1_title,action_bild2,action_bild2_bu,action_bild2_alt,action_bild2_title,action_bild3,action_bild3_bu,action_bild3_alt,action_bild3_title,galerie,pdf,linkextern,walls,guide,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Routes.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_msrouten_domain_model_routes.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_msrouten_domain_model_mounts', 'EXT:msrouten/Resources/Private/Language/locallang_csh_tx_msrouten_domain_model_mounts.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_msrouten_domain_model_mounts');
$TCA['tx_msrouten_domain_model_mounts'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_mounts',
		'label' => 'mount_name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'mount_name,mount_description,height,mount_location_n,mount_location_o,mount_way_to_top,mount_way_to_bot,gebirge,karte,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Mounts.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_msrouten_domain_model_mounts.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_msrouten_domain_model_walls', 'EXT:msrouten/Resources/Private/Language/locallang_csh_tx_msrouten_domain_model_walls.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_msrouten_domain_model_walls');
$TCA['tx_msrouten_domain_model_walls'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_walls',
		'label' => 'mounts',
		'label_alt' => 'wall_name,mounts',
                'label_alt_force' => 1,
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'wall_name,wall_description,wall_height,wall_pictures,mounts,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Walls.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_msrouten_domain_model_walls.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_msrouten_domain_model_pictures', 'EXT:msrouten/Resources/Private/Language/locallang_csh_tx_msrouten_domain_model_pictures.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_msrouten_domain_model_pictures');
$TCA['tx_msrouten_domain_model_pictures'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_pictures',
		'label' => 'picture_wall',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'picture_wall,wall_pic_bu,wall_pic_alt,wall_pic_title,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Pictures.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_msrouten_domain_model_pictures.gif'
	),
);

$tmp_msrouten_columns = array(

	'guide_name' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_guide.guide_name',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim,required'
		),
	),
	'guide_description' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_guide.guide_description',
		'config' => array(
			'type' => 'text',
			'cols' => 40,
			'rows' => 15,
			'eval' => 'trim,required'
		),
	),
	'guide_author' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_guide.guide_author',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim,required'
		),
	),
	'guide_i_s_b_n' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_guide.guide_i_s_b_n',
		'config' => array(
			'type' => 'input',
			'size' => 4,
			'eval' => 'int'
		),
	),
	'guide_price' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_guide.guide_price',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
);

t3lib_extMgm::addTCAcolumns('tt_news',$tmp_msrouten_columns);

$TCA['tt_news']['columns'][$TCA['tt_news']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tt_news.tx_extbase_type.Tx_Msrouten_Guide','Tx_Msrouten_Guide');

$TCA['tt_news']['types']['Tx_Msrouten_Guide']['showitem'] = $TCA['tt_news']['types']['1']['showitem'];
$TCA['tt_news']['types']['Tx_Msrouten_Guide']['showitem'] .= ',--div--;LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_guide,';
$TCA['tt_news']['types']['Tx_Msrouten_Guide']['showitem'] .= 'guide_name, guide_description, guide_author, guide_i_s_b_n, guide_price';

t3lib_extMgm::addLLrefForTCAdescr('tx_msrouten_domain_model_karten', 'EXT:msrouten/Resources/Private/Language/locallang_csh_tx_msrouten_domain_model_karten.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_msrouten_domain_model_karten');
$TCA['tx_msrouten_domain_model_karten'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten',
		'label' => 'karten_name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'karten_name,nummer,massstab,land,isbn13,asin,stand,zone,li_unten_utm_rechts,uli_unten_utm_hoch,li_oben_utm_rechts,li_oben_utm_hoch,re_oben_utm_rechts,re_oben_utm_hoch,re_unten_utm_rechts,re_unten_utm_hoch,zone2,li_unten_utm_rechts2,li_unten_utm_hoch2,li_oben_utm_rechts2,li_oben_utm_hoch2,re_oben_utm_rechts2,re_oben_utm_hoch2,re_unten_utm_rechts2,re_unten_utm_hoch2,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Karten.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_msrouten_domain_model_karten.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_msrouten_domain_model_gebirge', 'EXT:msrouten/Resources/Private/Language/locallang_csh_tx_msrouten_domain_model_gebirge.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_msrouten_domain_model_gebirge');
$TCA['tx_msrouten_domain_model_gebirge'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_gebirge',
		'label' => 'gebirge',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'gebirge,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Gebirge.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_msrouten_domain_model_gebirge.gif'
	),
);


?>