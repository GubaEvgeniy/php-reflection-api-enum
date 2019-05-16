<?php


namespace App;


final class DeliveryStatus extends AbstractEnum
{
    public const IN_STOCK   = 1;
    public const IN_ROAD    = 2;
    public const DELIVERED  = 3;
}