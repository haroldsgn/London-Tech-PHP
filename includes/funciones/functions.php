<?php

function products_json(&$tickets, &$shirt = 0, &$labels = 0)
{
    $days = array(0 => 'one_day', 1 => 'full_pass', 2 => 'two_days');
    $total_tickets = array_combine($days, $tickets);
    $json = array();



    foreach ($total_tickets as $key => $tickets) :
        if ((int) $tickets > 0) :
            $json[$key] = (int) $tickets;
        endif;
    endforeach;

    $shirt = (int) $shirt;
    if ($shirt > 0) :
        $json['shirts'] = $shirt;
    endif;

    $labels = (int) $labels;
    if ($labels > 0) :
        $json['labels'] = $labels;
    endif;

    return json_encode($json);
}

function json_events(&$events)
{
    $json_events = array();
    foreach ($events as $event) :
        $json_events['events'][] = $event;

    endforeach;

    return json_encode($json_events);
}
