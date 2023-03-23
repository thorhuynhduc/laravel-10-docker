<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Grade6()
 * @method static static Grade7()
 * @method static static Grade8()
 * @method static static Grade9()
 */
final class StudentGrade extends Enum
{
    const Grade6 = 6;
    const Grade7 = 7;
    const Grade8 = 8;
    const Grade9 = 9;
}
