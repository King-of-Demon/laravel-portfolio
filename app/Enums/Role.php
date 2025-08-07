<?php

namespace App\Enums;

enum Role: string
{
    case ADMIN = 'admin';
    case PEMILIK_HOTEL = 'pemilik_hotel';
    case PENYEWA = 'penyewa';

    public function label(): string
    {
        return match ($this) {
            self::ADMIN => 'Administrator',
            self::PEMILIK_HOTEL => 'Owner Hotel',
            self::PENYEWA => 'Tenant',
        };
    }

}
