<?php

namespace Phrlog\Zvonok\Phone\Constant;

/**
 * Class StatusCodes
 */
class StatusCodes
{
    /**
     * Попытки закончились
     */
    public const ATTEMPTS_EXPIRED = 'attempts_exc';

    /**
     * Пользовательский IVR
     */
    public const USER = 'user';

    /**
     * Невалидная кнопка
     */
    public const NOVALID_BUTTON = 'novalid_button';

    /**
     * Закончен удачно
     */
    public const COMPLETE_FINISHED = 'compl_finished';

    /**
     * Закончен удачно
     */
    public const COMPLETE_UNFINISHED = 'compl_finished';

    /**
     * Удален из прозвона
     */
    public const DELETED = 'deleted';

    /**
     * Пинкод верный
     */
    public const PINCODE_OK = 'pincode_ok';

    /**
     * Пинкод неверный
     */
    public const PINCODE_NOOK = 'ipincode_nook';

    /**
     * Прерван по настройкам
     */
    public const INTERRUPTED = 'interrupted';

    /**
     * Некорректная максимальная продолжительность звонка
     */
    public const DURATION_ERROR = 'duration_error';

    /**
     * В процессе
     */
    public const IN_PROCESS = 'in_process';
}
