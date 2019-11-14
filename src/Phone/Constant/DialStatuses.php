<?php

namespace Phrlog\Zvonok\Phone\Constant;

/**
 * Class DialStatuses
 */
class DialStatuses
{
    /**
     * Ожидание вызова (звонка еще нет)
     */
    public const CALL_WAITING = 0;

    /**
     * Ошибка при вызове абонента
     */
    public const SUBSCRIBER_CALLING_ERROR = 1;

    /**
     * Абонент сбросил звонок
     */
    public const SUBSCRIBER_DROPPED_CALL = 2;

    /**
     * Не дозвонились
     */
    public const DID_NOT_GET_THROUGH = 3;

    /**
     * Абонент занят
     */
    public const SUBSCRIBER_IS_BUSY = 4;

    /**
     * 	Абонент ответил
     */
    public const SUBSCRIBER_ANSWERED = 5;

    /**
     * Ответил автоответчик
     */
    public const ANSWERING_MACHINE_ANSWERED = 6;

    /**
     * Невалидная кнопка
     */
    public const INVALID_BUTTON = 8;

    /**
     * Неизвестный статус
     */
    public const UNKNOWN_STATUS = 9;

    /**
     * Завершен без действия клиента
     */
    public const COMPLETED_WITHOUT_CLIENT_ACTION = 10;

    /**
     * Пользовательский стоп-лист
     */
    public const CUSTOM_STOP_LIST = 11;

    /**
     * Глобальный стоп-лист
     */
    public const GLOBAL_STOP_LIST = 12;

    /**
     * Абонент ответил, но продолжительности разговора не достаточно для фиксации результата в статистике
     */
    public const NOT_ENOUGH_DURATION_OF_CONVERSATION = 13;

    /**
     * Номер абонента совпадает с CallerID
     */
    public const SAME_NUMBER_AS_CALLER_ID = 14;

    /**
     * Номер удалён из прозвона
     */
    public const NUMBER_DELETED_FROM_THE_RINGING = 15;

    /**
     * Действие без нажатия
     */
    public const ACTION_WITHOUT_PRESSING = 16;

    /**
     * По максимальной продолжительности звонка
     */
    public const MAXIMUM_CALL_DURATION = 17;

    /**
     * Внутренняя ошибка сервера
     */
    public const INTERNAL_SERVER_ERROR = 18;

    /**
     * Прослушал ролик и не нажал кнопку
     */
    public const LISTENED_MOVIE_BUTTON_NOT_PRESSED = 19;

    /**
     * Внутренняя ошибка в меню
     */
    public const INTERNAL_MENU_ERROR = 20;

    /**
     * Событие по нажатию кнопки и продолжительности разговора
     */
    public const EVENT_ON_PRESSING_BUTTON_DURATION_OF_CONVERSATION = 21;

    /**
     * Событие по продолжительности разговора
     */
    public const EVENT_ON_DURATION_OF_CONVERSATION = 22;
}
