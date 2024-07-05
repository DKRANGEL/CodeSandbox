<?php

if (!function_exists('getCentralDomain')) {
    function getCentralDomain()
    {
        return config('tenancy.central_domains')[0];
    }
}