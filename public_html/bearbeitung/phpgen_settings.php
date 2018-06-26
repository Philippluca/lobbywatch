<?php
// Processed by afterburner.sh

require_once dirname(__FILE__) . "/../settings/settings.php";
require_once dirname(__FILE__) . "/../custom/custom.php";
require_once dirname(__FILE__) . "/../common/build_date.php";
require_once dirname(__FILE__) . "/../common/utils.php";
// Processed by afterburner.sh



//  define('SHOW_VARIABLES', 1);
//  define('DEBUG_LEVEL', 1);

//  error_reporting(E_ALL ^ E_NOTICE);
//  ini_set('display_errors', 'On');

set_include_path('.' . PATH_SEPARATOR . get_include_path());


include_once dirname(__FILE__) . '/' . 'components/utils/system_utils.php';

//  SystemUtils::DisableMagicQuotesRuntime();

SystemUtils::SetTimeZoneIfNeed('Europe/Zurich');

function GetGlobalConnectionOptions(){
    // Custom modification: Use $db_connection from settings.php
    global $db_connection;
    return $db_connection;
}

function HasAdminPage()
{
    return true;
}

function HasHomePage()
{
    return true;
}

function GetHomeURL()
{
    return 'index.php';
}

function GetPageGroups()
{
    $result = array('<span class="entity-menu important-entity-menu">Subjekte</span>', '<span class="releation-menu important-relation-menu">Verbindungen</span>', 'Stammdaten', 'Meta');
    return $result;
}

function GetPageInfos() { // Afterburned
    $pageInfos = generatedGetPageInfos(); // Afterburned
    $pageInfos = customGetPageInfos($pageInfos); // Afterburned
    return $pageInfos; // Afterburned
}

function generatedGetPageInfos() // Afterburned
{
    $result = array();
    $result[] = array('caption' => '<span class="entity important-entity">Organisation</span>', 'short_caption' => 'Organisation', 'filename' => 'organisation.php', 'name' => 'organisation', 'group_name' => '<span class="entity-menu important-entity-menu">Subjekte</span>', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="entity important-entity">Parlamentarier</span>', 'short_caption' => 'Parlamentarier', 'filename' => 'parlamentarier.php', 'name' => 'parlamentarier', 'group_name' => '<span class="entity-menu important-entity-menu">Subjekte</span>', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="entity important-entity">Person</span>', 'short_caption' => 'Person', 'filename' => 'person.php', 'name' => 'person', 'group_name' => '<span class="entity-menu important-entity-menu">Subjekte</span>', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="relation" title="Interessenbindungen der Parlamentarier">Intereressenbindungen von NR/SR</span>', 'short_caption' => 'Interessenbindung', 'filename' => 'interessenbindung.php', 'name' => 'interessenbindung', 'group_name' => '<span class="releation-menu important-relation-menu">Verbindungen</span>', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="relation" title="Zutrittsberechtigungen f�r G�se ins Bundeshaus">Zutrittsberechtigung</span>', 'short_caption' => 'Zutrittsberechtigung', 'filename' => 'zutrittsberechtigung.php', 'name' => 'zutrittsberechtigung', 'group_name' => '<span class="releation-menu important-relation-menu">Verbindungen</span>', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="relation" title="Mandate der Zutrittsberechtigten">Mandate von Personen</span>', 'short_caption' => 'Mandat', 'filename' => 'mandat.php', 'name' => 'mandat', 'group_name' => '<span class="releation-menu important-relation-menu">Verbindungen</span>', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="relation">In Kommission</span>', 'short_caption' => 'In Kommission', 'filename' => 'in_kommission.php', 'name' => 'in_kommission', 'group_name' => '<span class="releation-menu important-relation-menu">Verbindungen</span>', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="relation">Organisation Beziehung</span>', 'short_caption' => 'Organisation Beziehung', 'filename' => 'organisation_beziehung.php', 'name' => 'organisation_beziehung', 'group_name' => '<span class="releation-menu important-relation-menu">Verbindungen</span>', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="entity">Branche</span>', 'short_caption' => 'Branche', 'filename' => 'branche.php', 'name' => 'branche', 'group_name' => 'Stammdaten', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="entity">Lobbygruppe</span>', 'short_caption' => 'Lobbygruppe', 'filename' => 'interessengruppe.php', 'name' => 'interessengruppe', 'group_name' => 'Stammdaten', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="entity">Kommission</span>', 'short_caption' => 'Kommission', 'filename' => 'kommission.php', 'name' => 'kommission', 'group_name' => 'Stammdaten', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="entity">Partei</span>', 'short_caption' => 'Partei', 'filename' => 'partei.php', 'name' => 'partei', 'group_name' => 'Stammdaten', 'add_separator' => false, 'description' => 'Tabelle der Parteien');
    $result[] = array('caption' => '<span class="entity">Fraktion</span>', 'short_caption' => 'Fraktion', 'filename' => 'fraktion.php', 'name' => 'fraktion', 'group_name' => 'Stammdaten', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="entity">Kanton</span>', 'short_caption' => 'Kanton', 'filename' => 'kanton.php', 'name' => 'kanton', 'group_name' => 'Stammdaten', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="view">Tabellenstand</span>', 'short_caption' => 'Tabellenstand', 'filename' => 'tabellenstand.php', 'name' => 'q_last_updated_tables', 'group_name' => 'Meta', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="view">Unvollst�ndige Parlamentarier</span>', 'short_caption' => 'Unvollst�ndige Parlamentarier', 'filename' => 'q_unvollstaendige_parlamentarier.php', 'name' => 'q_unvollstaendige_parlamentarier', 'group_name' => 'Meta', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="view">Unvollst�ndige Zutrittsberechtigte</span>', 'short_caption' => 'Unvollst�ndige Zutrittsberechtigte', 'filename' => 'q_unvollstaendige_zutrittsberechtigte.php', 'name' => 'q_unvollstaendige_zutrittsberechtigte', 'group_name' => 'Meta', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="view">Unvollst�ndige Organisationen</span>', 'short_caption' => 'Unvollst�ndige Organisationen', 'filename' => 'q_unvollstaendige_organisationen.php', 'name' => 'q_unvollstaendige_organisationen', 'group_name' => 'Meta', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="settings">Settings</span>', 'short_caption' => 'Settings', 'filename' => 'settings.php', 'name' => 'settings', 'group_name' => 'Meta', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="settings">Settings Category</span>', 'short_caption' => 'Settings Category', 'filename' => 'settings_category.php', 'name' => 'settings_category', 'group_name' => 'Meta', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="settings">Translation Source</span>', 'short_caption' => 'Translation Source', 'filename' => 'translation_source.php', 'name' => 'translation_source', 'group_name' => 'Meta', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="settings">Translation Target</span>', 'short_caption' => 'Translation Target', 'filename' => 'translation_target.php', 'name' => 'translation_target', 'group_name' => 'Meta', 'add_separator' => false, 'description' => '');
    $result[] = array('caption' => '<span class="settings">User</span>', 'short_caption' => 'User', 'filename' => 'user.php', 'name' => 'user', 'group_name' => 'Meta', 'add_separator' => false, 'description' => '');
    return $result;
}

function GetPagesHeader()
{
    return
        getCustomPagesHeader();
}

function GetPagesFooter()
{
    return
        getCustomPagesFooter(); 
}

function ApplyCommonPageSettings(Page $page, Grid $grid)
{
    $page->SetShowUserAuthBar(true);
    $page->setShowNavigation(true);
    $page->OnCustomHTMLHeader->AddListener('Global_CustomHTMLHeaderHandler');
    $page->OnGetCustomTemplate->AddListener('Global_GetCustomTemplateHandler');
    $page->OnGetCustomExportOptions->AddListener('Global_OnGetCustomExportOptions');
    $page->getDataset()->OnGetFieldValue->AddListener('Global_OnGetFieldValue');
    $page->getDataset()->OnGetFieldValue->AddListener('OnGetFieldValue', $page);
    $grid->BeforeUpdateRecord->AddListener('Global_BeforeUpdateHandler');
    $grid->BeforeDeleteRecord->AddListener('Global_BeforeDeleteHandler');
    $grid->BeforeInsertRecord->AddListener('Global_BeforeInsertHandler');
    $grid->AfterUpdateRecord->AddListener('Global_AfterUpdateHandler');
    $grid->AfterDeleteRecord->AddListener('Global_AfterDeleteHandler');
    $grid->AfterInsertRecord->AddListener('Global_AfterInsertHandler');
}

/*
  Default code page: 1252
*/
function GetAnsiEncoding() { return 'windows-1252'; }

function Global_CustomHTMLHeaderHandler($page, &$customHtmlHeaderText)
{
globalOnCustomHTMLHeader($page, $customHtmlHeaderText);
}

function Global_GetCustomTemplateHandler($type, $part, $mode, &$result, &$params, CommonPage $page = null)
{
globalOnGetCustomTemplate($type, $part, $mode, $result, $params, $page);
}

function Global_OnGetCustomExportOptions($page, $exportType, $rowData, &$options)
{

}

function Global_OnGetFieldValue($fieldName, &$value, $tableName)
{

}

function Global_GetCustomPageList(CommonPage $page, PageList $pageList)
{
globalOnCustomizePageList($page, $pageList);
}

function Global_BeforeUpdateHandler($page, &$rowData, &$cancel, &$message, &$messageDisplayTime, $tableName)
{
globalOnBeforeUpdate($page, $rowData, $cancel, $message, $tableName);
}

function Global_BeforeDeleteHandler($page, &$rowData, &$cancel, &$message, &$messageDisplayTime, $tableName)
{
globalOnBeforeDelete($page, $rowData, $cancel, $message, $tableName);
}

function Global_BeforeInsertHandler($page, &$rowData, &$cancel, &$message, &$messageDisplayTime, $tableName)
{
globalOnBeforeInsert($page, $rowData, $cancel, $message, $tableName);
}

function Global_AfterUpdateHandler($page, $rowData, $tableName, &$success, &$message, &$messageDisplayTime)
{
globalOnAfterUpdateRecord($page, $rowData, $tableName, $success, $message, $messageDisplayTime);
}

function Global_AfterDeleteHandler($page, $rowData, $tableName, &$success, &$message, &$messageDisplayTime)
{
globalOnAfterDeleteRecord($page, $rowData, $tableName, $success, $message, $messageDisplayTime);
}

function Global_AfterInsertHandler($page, $rowData, $tableName, &$success, &$message, &$messageDisplayTime)
{
globalOnAfterInsertRecord($page, $rowData, $tableName, $success, $message, $messageDisplayTime);
}

function GetDefaultDateFormat()
{
    return 'd.m.Y';
}

function GetFirstDayOfWeek()
{
    return 1;
}

function GetPageListType()
{
    return PageList::TYPE_MENU;
}

function GetNullLabel()
{
    return '-';
}

function UseMinifiedJS()
{
    return true;
}
