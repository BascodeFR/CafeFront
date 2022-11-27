<?php
namespace Bascodefr\Cafe\API;

use Bascodefr\Cafe\API\APIinterface;

class CafeApi implements APIinterface {

    private $url = "http://164.132.207.91:6969";

    /**
     * getStatus
     *
     * @return string
     */
    public function getStatus(): string {
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $this->url . '/getstatus',
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => true
        ]);
        $response = utf8_encode(curl_exec($ch));
        curl_close($ch);
        return $response;
    }

    /**
     * setStatus
     *
     * @param  int $status
     * @return string
     */
    public function setStatus(int $status): string {
        $url = $this->url . "/setstatus?code=" . $status;


        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, true);


        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        $response =  curl_exec($ch);
        curl_close($ch);
        return $response;
    }

}