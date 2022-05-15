<?php
declare(strict_types=1);
class Authorization {
    /* Observer so that mock object can work. */
    public function attach(Curl $observer)
    {
        $this->observers = $observer;
    }

    /* Method for which we will create test */
    public  function postAuthorization($url, $method) {

        return $this->observers->callAPI($url, $method);
    }

}
