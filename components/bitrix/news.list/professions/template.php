<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? foreach ($arResult["ITEMS"] as $arItem): ?>
    <h2><?= $arItem['NAME'] ?></h2>
    <table class="table table-striped">
        <tbody>
        <tr>
            <th scope="row">Форма обучения</th>
            <td><?= $arItem['PROPERTY_FORM_OF_EDUCATION_VALUE'] ?></td>
        </tr>
        <tr>
            <th scope="row">Сроки обучения</th>
            <td><?= $arItem['PROPERTY_PERIOD_VALUE'] ?></td>
        </tr>
        <tr>
            <th scope="row">Срок действия гос. аккредитации</th>
            <td><?= $arItem['PROPERTY_ACCREDITATION_PERIOD_VALUE'] ?></td>
        </tr>
        <tr>
            <th scope="row">Уровень образования</th>
            <td><?= $arItem['PROPERTY_LEVEL_VALUE'] ?></td>
        </tr>
        <tr>
            <th scope="row">Код специальности, направления подготовки</th>
            <td><?= $arItem['PROPERTY_CODE_VALUE'] ?></td>
        </tr>
        <tr>
            <th scope="row">Описание образовательной программы</th>
            <td><?= $arItem['PROPERTY_DESCRIPTION_VALUE'] ?></td>
        </tr>
        <tr>
            <th scope="row">Учебный план</th>
            <td><?= \CFile::GetPath($arItem['PROPERTY_PLAN_VALUE']) ?></td>
        </tr>
        <tr>
            <th scope="row">Аннотации к рабочим программам дисциплин</th>
            <td><?= \CFile::GetPath($arItem['PROPERTY_ANNOTATIONS_VALUE']) ?></td>
        </tr>
        <tr>
            <th scope="row">Календарный учебный график</th>
            <td><?= \CFile::GetPath($arItem['PROPERTY_SCHEDULE_VALUE']) ?></td>
        </tr>
        <tr>
            <th scope="row">Методические и иные документы</th>
            <td><?= \CFile::GetPath($arItem['PROPERTY_METHODOLOGICAL_DOCUMENTS_VALUE']) ?></td>
        </tr>
        <tr>
            <th scope="row">Практики</th>
            <td><?= \CFile::GetPath($arItem['PROPERTY_PRACTICES_VALUE']) ?></td>
        </tr>
        <tr>
            <th scope="row">Численность лиц, обучающихся за счет бюджета</th>
            <td><?= $arItem['PROPERTY_BUDGET_COUNT_VALUE'] ?></td>
        </tr>
        <tr>
            <th scope="row">Численность лиц, находящихся на платном обучении</th>
            <td><?= $arItem['PROPERTY_PAYED_COUNT_VALUE'] ?></td>
        </tr>
        <tr>
            <th scope="row">Языки, на которых происходит обучение</th>
            <td><?= $arItem['PROPERTY_LANGUAGES_VALUE'] ?></td>
        </tr>
        <tr>
            <th scope="row">Научно-исследовательская работа</th>
            <td><?= \CFile::GetPath($arItem['PROPERTY_RESEARCHES_VALUE']) ?></td>
        </tr>
        <tr>
            <th scope="row">Сведения о результатах приема</th>
            <td><?= \CFile::GetPath($arItem['PROPERTY_RESULTS_VALUE']) ?></td>
        </tr>
        <tr>
            <th scope="row">Результаты перевода и отчисления</th>
            <td><?= \CFile::GetPath($arItem['PROPERTY_REPLACED_RESULTS_VALUE']) ?></td>
        </tr>
        </tbody>
    </table>
<? endforeach; ?>
