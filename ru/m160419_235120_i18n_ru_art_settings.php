<?php

use artsoft\db\TranslatedMessagesMigration;

class m160419_235120_i18n_ru_art_settings extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'ru';
    }

    public function getCategory()
    {
        return 'art/settings';
    }

    public function getTranslations()
    {
        return [
            'General Settings' => 'Общие Настройки',
            'Reading Settings' => 'Настройки Чтения',
            'Site Title' => 'Название Сайт',
            'Site Description' => 'Описание Сайта',
            'Admin Email' => 'E-mail Администратора',
            'Timezone' => 'Часовой Пояс',
            'Date Format' => 'Формат Даты',
            'Time Format' => 'Формат Времени',
            'Page Size' => 'Записей на странице',
            'Admin Phone' => 'Телефон Администратора',
            'Admin Facebook' => 'Facebook Администратора',
            'Admin Instagram' => 'Instagram Администратора',
            'Phone Mask' => 'Маска Телефона',
            'Date Mask' => 'Маска Даты',
            'Time Mask' => 'Маска Времени',
            'Date & Time Mask' => 'Маска Даты и Времени',
            'Your settings have been saved.' => 'Настройки сохранены.',
        ];
    }
}