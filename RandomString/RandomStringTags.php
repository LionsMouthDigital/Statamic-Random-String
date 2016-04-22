<?php

namespace Statamic\Addons\RandomString;

use Statamic\API\Helper;
use Statamic\Extend\Tags;

class RandomStringTags extends Tags
{
    /**
     * Generate a random-ish string.
     *
     * If a `key` is passed, any other instance of the tag in this request with
     * the same `key` will return the same string.
     *
     * @author Curtis Blackwell
     * @return string
     */
    public function index()
    {
        $key = $this->getParam('key');

        if ($key && $this->blink->exists($key)) {
            return $this->blink->get($key);
        }

        $str = time() . '-' . Helper::makeUuid();

        if ($key) {
            $this->blink->put($key, $str);
        }

        return $str;
    }
}
