<?php

use artsoft\db\TranslatedMessagesMigration;

class m190416_083740_i18n_ru_art_media extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'ru';
    }

    public function getCategory()
    {
        return 'art/media';
    }

    public function getTranslations()
    {
        return [
            'To keep order' => 'Сохранить порядок',
            'Photo not found.' => 'Фото не найдено.',
            'Your photo has been removed.' => 'Ваша фотография успешно удалена.',
            'Sort data saved.' => 'Порядок сохранен.',
        ];
        
    }
}