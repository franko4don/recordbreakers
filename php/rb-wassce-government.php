<?php
include 'static.php';
$views=new Views;
$views->top_view("/recordbreakers/php/");
$views->left_side_view("/recordbreakers/php/");
$views->middle_view();
body_of_middle_view();
$views->down_view();

function body_of_middle_view(){
    echo '{"servertime":1466532042,"period_last2":"first_half","period_last1":"halftime","period":"second_half","period_original":"2. Half","period_next1":"post_match_period","period_next2":"post_matchday_period","countdown":28,"season_id":123408,"season_name":"VFL Season 38258","matchday":7,"running":true,"matchdays":[],"season_end":6388,"next_season":[],"video_reload":"0","videomatchid":"1027216562","maintenance":1,"language":"en"}
        
';

}



?>
