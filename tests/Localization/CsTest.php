<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\Localization;

class CsTest extends LocalizationTestCase
{
    const LOCALE = 'cs'; // Czech

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Tomorrow at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Sobota at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Neděle at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Pondělí at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Úterý at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Středa at 00:00',
        // Carbon::parse('2018-01-05 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-05 00:00:00'))
        'Čtvrtek at 00:00',
        // Carbon::parse('2018-01-06 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-06 00:00:00'))
        'Pátek at 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Úterý at 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Středa at 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Čtvrtek at 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Pátek at 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Sobota at 00:00',
        // Carbon::now()->subDays(2)->calendar()
        'Last Neděle at 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Yesterday at 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'Today at 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Today at 02:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'Tomorrow at 01:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Úterý at 00:00',
        // Carbon::parse('2018-01-08 00:00:00')->subDay()->calendar(Carbon::parse('2018-01-08 00:00:00'))
        'Yesterday at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Yesterday at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Úterý at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Pondělí at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Neděle at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Sobota at 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Pátek at 00:00',
        // Carbon::parse('2018-01-03 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-03 00:00:00'))
        'Last Čtvrtek at 00:00',
        // Carbon::parse('2018-01-02 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-02 00:00:00'))
        'Last Středa at 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Last Pátek at 00:00',
        // Carbon::parse('2018-01-01 00:00:00')->isoFormat('Qo Mo Do Wo wo')
        '1 1 1 1 1',
        // Carbon::parse('2018-01-02 00:00:00')->isoFormat('Do wo')
        '2 1',
        // Carbon::parse('2018-01-03 00:00:00')->isoFormat('Do wo')
        '3 1',
        // Carbon::parse('2018-01-04 00:00:00')->isoFormat('Do wo')
        '4 1',
        // Carbon::parse('2018-01-05 00:00:00')->isoFormat('Do wo')
        '5 1',
        // Carbon::parse('2018-01-06 00:00:00')->isoFormat('Do wo')
        '6 1',
        // Carbon::parse('2018-01-07 00:00:00')->isoFormat('Do wo')
        '7 1',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        '11 2',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        '40',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        '41',
        // Carbon::parse('2018-04-10 00:00:00')->isoFormat('DDDo')
        '100',
        // Carbon::parse('2018-02-10 00:00:00', 'Europe/Paris')->isoFormat('h:mm a z')
        '12:00 dopoledne cet',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 dopoledne, 12:00 dopoledne',
        // Carbon::parse('2018-02-10 01:30:00')->isoFormat('h:mm A, h:mm a')
        '1:30 dopoledne, 1:30 dopoledne',
        // Carbon::parse('2018-02-10 02:00:00')->isoFormat('h:mm A, h:mm a')
        '2:00 dopoledne, 2:00 dopoledne',
        // Carbon::parse('2018-02-10 06:00:00')->isoFormat('h:mm A, h:mm a')
        '6:00 dopoledne, 6:00 dopoledne',
        // Carbon::parse('2018-02-10 10:00:00')->isoFormat('h:mm A, h:mm a')
        '10:00 dopoledne, 10:00 dopoledne',
        // Carbon::parse('2018-02-10 12:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 odpoledne, 12:00 odpoledne',
        // Carbon::parse('2018-02-10 17:00:00')->isoFormat('h:mm A, h:mm a')
        '5:00 odpoledne, 5:00 odpoledne',
        // Carbon::parse('2018-02-10 21:30:00')->isoFormat('h:mm A, h:mm a')
        '9:30 odpoledne, 9:30 odpoledne',
        // Carbon::parse('2018-02-10 23:00:00')->isoFormat('h:mm A, h:mm a')
        '11:00 odpoledne, 11:00 odpoledne',
        // Carbon::parse('2018-01-01 00:00:00')->ordinal('hour')
        '0',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        '1 sekundu nazpět',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        '1 sek. nazpět',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        '2 sekundy nazpět',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        '2 sek. nazpět',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        '1 minutu nazpět',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        '1 min. nazpět',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        '2 minuty nazpět',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        '2 min. nazpět',
        // Carbon::now()->subHours(1)->diffForHumans()
        '1 hodinu nazpět',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        '1 hod. nazpět',
        // Carbon::now()->subHours(2)->diffForHumans()
        '2 hodiny nazpět',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        '2 hod. nazpět',
        // Carbon::now()->subDays(1)->diffForHumans()
        '1 den nazpět',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        '1 den nazpět',
        // Carbon::now()->subDays(2)->diffForHumans()
        '2 dny nazpět',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        '2 dny nazpět',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        '1 týden nazpět',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        '1 týd. nazpět',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        '2 týdny nazpět',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        '2 týd. nazpět',
        // Carbon::now()->subMonths(1)->diffForHumans()
        '1 měsíc nazpět',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        '1 měs. nazpět',
        // Carbon::now()->subMonths(2)->diffForHumans()
        '2 měsíce nazpět',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        '2 měs. nazpět',
        // Carbon::now()->subYears(1)->diffForHumans()
        '1 rok nazpět',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        '1 rok nazpět',
        // Carbon::now()->subYears(2)->diffForHumans()
        '2 roky nazpět',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        '2 roky nazpět',
        // Carbon::now()->addSecond()->diffForHumans()
        'za 1 sekundu',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'za 1 sek.',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        '1 sekundu později',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        '1 sek. později',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        '1 sekundu předtím',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        '1 sek. předtím',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        '1 sekundu',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        '1 sek.',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 sekundy',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2 sek.',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'za 1 sek.',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        '1 minutu 1 sekundu',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2 roky 3 měs. 1 den 1 sek.',
        // Carbon::now()->addYears(3)->diffForHumans(null, null, false, 4)
        'za 3 roky',
        // Carbon::now()->subMonths(5)->diffForHumans(null, null, true, 4)
        '5 měs. nazpět',
        // Carbon::now()->subYears(2)->subMonths(3)->subDay()->subSecond()->diffForHumans(null, null, true, 4)
        '2 roky 3 měs. 1 den 1 sek. nazpět',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        '1 týden 10 hodin',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 týden 6 dní',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 týden 6 dní',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(["join" => true, "parts" => 2])
        'za 1 týden a 6 dní',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 týdny 1 hodinu',
        // Carbon::now()->addHour()->diffForHumans(["aUnit" => true])
        'za 1 hodinu',
        // CarbonInterval::days(2)->forHumans()
        '2 dny',
        // CarbonInterval::create('P1DT3H')->forHumans(true)
        '1 den 3 hod.',
    ];
}
