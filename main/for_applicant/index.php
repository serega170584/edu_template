<?php
/**
 * @var CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О ВУЗе");
$server = \Bitrix\Main\Application::getInstance()->getContext()->getServer();
LocalRedirect('/local/templates/edu_template/main/for_applicant/admission_committee/');
exit;
?>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>