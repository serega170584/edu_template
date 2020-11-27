<?php
/**
 * @var CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О ВУЗе");
$server = \Bitrix\Main\Application::getInstance()->getContext()->getServer();
LocalRedirect(sprintf('%s/local/templates/edu_template/main/news/', $server->getHttpHost()));
exit;
?>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>