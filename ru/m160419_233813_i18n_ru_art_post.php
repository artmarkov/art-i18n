<?php

use artsoft\db\TranslatedMessagesMigration;

class m160419_233813_i18n_ru_art_post extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'ru';
    }

    public function getCategory()
    {
        return 'art/post';
    }

    public function getTranslations()
    {
        return [
            'No posts found. ' => 'Записи не найдены.',
            'Post' => 'Запись',
            'Posted in' => 'Опубликировано в категории',
            'Posts Activity' => 'Активность Записей',
            'Posts' => 'Записи',
            'Thumbnail' => 'Эскиз',
        ];
    }
}