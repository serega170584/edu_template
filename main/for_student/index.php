<?php
/**
 * @var CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Студенту");
$server = \Bitrix\Main\Application::getInstance()->getContext()->getServer();
LocalRedirect('/local/templates/edu_template/main/for_student/training_information/');
exit;
?>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>