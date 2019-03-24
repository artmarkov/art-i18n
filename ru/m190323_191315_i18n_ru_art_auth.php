<?php

use artsoft\db\TranslatedMessagesMigration;

class m190323_191315_i18n_ru_art_auth extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'ru';
    }

    public function getCategory()
    {
        return 'art/auth';
    }

    public function getTranslations()
    {
        return [
            'Are you sure you want to delete your profile picture?' => 'Вы уверены, что хотите удалить фотографию?',
            'Are you sure you want to unlink this authorization?' => 'Вы уверены, что хотите отменить это разрешение?',
            'Authentication error occurred.' => 'Произошла ошибка аутентификации.',
            'Authorization' => 'Авторизация',
            'Authorized Services' => 'Услуги Авторизации',
            'Captcha' => 'Captcha',
            'Change profile picture' => 'Изменить изображение профиля',
            'Check your E-mail for further instructions' => 'Проверьте свою электронную почту для получения дальнейших инструкций',
            'Check your e-mail {email} for instructions to activate account' => 'Проверьте свой e-mail {email} для получения инструкций по активации аккаунта',
            'Click to connect with service' => 'Нажмите, чтобы подключиться к службе',
            'Click to unlink service' => 'Нажмите, чтобы отключить службу',
            'Confirm E-mail' => 'Подтвердите E-mail',
            'Confirm' => 'Подтвердите',
            'Could not send confirmation email' => 'Не удалось отправить подтверждение по электронной почте',
            'Current password' => 'Текущий пароль',
            'E-mail confirmation for' => 'E-mail подтверждение для',
            'E-mail confirmed' => 'E-mail подтвержден',
            'E-mail is invalid' => 'E-mail недействителен',
            'E-mail with activation link has been sent to <b>{email}</b>. This link will expire in {minutes} min.' => 'E-mail со ссылкой активации был отправлен на < b>{email}< / b>. Срок действия этой ссылки истекает через {minutes} мин.',
            'E-mail' => 'E-mail',
            'Forgot password?' => 'Забыли пароль?',
            'Incorrect username or password' => 'Неверное имя пользователя или пароль',
            'Login has been taken' => 'Логин был использован',
            'Login' => 'Вход',
            'Logout' => 'Выход',
            'Non Authorized Services' => '',
            'Password has been updated' => 'Пароль был обновлен',
            'Password recovery' => '',
            'Password reset for' => '',
            'Password' => 'Пароль',
            'Registration - confirm your e-mail' => 'Регистрация - подтвердите ваш e-mail',
            'Registration' => 'Регистрация',
            'Remember me' => 'Запомнить меня',
            'Remove profile picture' => 'Удалить изображение профиля',
            'Repeat password' => 'Повторить пароль',
            'Reset Password' => 'Сбросить пароль',
            'Reset' => 'Сбросить',
            'Save Profile' => 'Сохранить профиль',
            'Save profile picture' => 'Сохранить изображение профиля',
            'Set Password' => 'Заполнить пароль',
            'Set Username' => 'Заполнить Имя пользователя',
            'Signup' => 'Регистрация',
            'This E-mail already exists' => 'Этот E-mail уже существует',
            'Token not found. It may be expired' => 'Токен не найден. Возможно он истек',
            'Token not found. It may be expired. Try reset password once more' => 'Токен не найден. Срок его действия может истечь. Попробуйте сбросить пароль еще раз',
            'Too many attempts' => 'Слишком много попыток',
            'Unable to send message for email provided' => 'Невозможно отправить сообщение по электронной почте',
            'Update Password' => 'Обновить пароль',
            'User Profile' => 'Профиль Пользователя',
            "User with the same email as in {client} account already exists but isn't linked to it. Login using email first to link it." => 'Пользователь с той же электронной почтой, что и в учетной записи {client}, уже существует, но не связан с ней. Войти с помощью электронной почты, чтобы связать его.',
            'The username should contain only Latin letters, numbers and the following characters: "-" and "_".' => 'Имя пользователя должно содержать только латинские буквы, цифры и следующие символы: "-" и "_".',
            'Username contains not allowed characters or words.' => 'Имя пользователя содержит недопустимые символы или слова.',
            'Wrong password' => 'Неверный пароль',
            'You could not login from this IP' => 'Вы не можете войти с этого IP',
        ];

    }
}