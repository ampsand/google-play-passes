<?php

namespace Ampsand\GooglePlayPasses;

/*******************************
 *  See all the verticals: https://developers.google.com/pay/passes/guides/overview/basics/about-google-pay-api-for-passes
 *******************************/
abstract class VerticalType
{
    const OFFER = 1;
    const EVENTTICKET = 2;
    const FLIGHT = 3;         // also referred to as Boarding Passes
    const GIFTCARD = 4;
    const LOYALTY = 5;
    const TRANSIT = 6;
}