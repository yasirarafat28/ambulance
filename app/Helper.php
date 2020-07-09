<?php

use App\Setting;
use Illuminate\Support\Facades\DB;


    function setting()
    {
        $setting = DB::table('setting')->where('status','active')->first();
        return $setting;
    }

?>
