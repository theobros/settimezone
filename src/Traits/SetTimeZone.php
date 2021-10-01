<?php

namespace Theobros\SetTimezone\Traits;

use Carbon\Carbon;
use Carbon\CarbonTimeZone;

trait SetTimeZone
{

    /**
     * getReadAtAttribute
     *
     * @param [timestamp] $value
     * @return time
     */
    public function getReadAtAttribute($value)
    {
        if (is_null($value)) {
            return NULL;
        }
        try {
            return (new Carbon($value))->setTimezone(new CarbonTimeZone(request()->timezone))->format('Y-m-d h:i A');
        } catch (\Exception $e) {
            return NULL;
        }
    }
    /**
     * getCreatedAtAttribute
     *
     * @param [timestamp] $value
     * @return time
     */
    public function getCreatedAtAttribute($value)
    {
        if (is_null($value)) {
            return NULL;
        }

        try {
            return (new Carbon($value))->setTimezone(new CarbonTimeZone(request()->timezone))->format('Y-m-d h:i A');
        } catch (\Exception $e) {
            return NULL;
        }
    }
    /**
     * getReadAtAttribute
     *
     * @param [timestamp] $value
     * @return time
     */
    public function getUpdatedAtAttribute($value)
    {
        if (is_null($value)) {
            return NULL;
        }
        try {
            return (new Carbon($value))->setTimezone(new CarbonTimeZone(request()->timezone))->format('Y-m-d h:i A');
        } catch (\Exception $e) {
            return NULL;
        }
    }
    /**
     * convertToUser
     *
     * @param [timestamp] $value
     * @return time
     */
    public function convertToUser($value, $format = 'Y-m-d H:i:s')
    {
        if (is_null($value)) {
            return NULL;
        }
        try {
            return (new Carbon($value))->setTimezone(new CarbonTimeZone(request()->timezone))->format($format);
        } catch (\Exception $e) {
            return NULL;
        }
    }
    /**
     * convertToUTC
     *
     * @param [timestamp] $value
     * @return time
     */
    public function convertToUTC($value, $format = 'Y-m-d H:i:s')
    {
        if (is_null($value)) {
            return NULL;
        }
        try {
            return (new Carbon($value))->setTimezone(new CarbonTimeZone('UTC'))->format($format);
        } catch (\Exception $e) {
            return NULL;
        }
    }
}
