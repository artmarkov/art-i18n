<?php

use artsoft\db\TranslatedMessagesMigration;

class m160419_233713_i18n_ru_art_page extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'ru';
    }

    public function getCategory()
    {
        return 'art/page';
    }

    public function getTranslations()
    {
        return [
            'Page' => 'Страница',
            'Pages' => 'Страницы',
            'Create Page' => 'Cоздать Страницу',
        ];
    }
}