<?php

namespace Toruse\bsg\Models;

use Toruse\bsg\Parameters\Body;
use Toruse\bsg\Parameters\Destination;
use Toruse\bsg\Parameters\Originator;
use Toruse\bsg\Parameters\Phone;
use Toruse\bsg\Parameters\Reference;
use Toruse\bsg\Parameters\Tariff;
use Toruse\bsg\Parameters\TwoWay;
use Toruse\bsg\Parameters\Validity;

class Sms
{
    public Destination $destination;
    public Originator $originatar;

    public Body $body;

    public Phone $phone;

    public Reference $reference;

    public Validity $validity;

    public Tariff $tariff;

    public TwoWay $twoway;

}