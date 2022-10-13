<?php
namespace Bascodefr\Cafe\API;

interface APIinterface {
    
    /**
     * getStatus
     *
     * @return string
     */
    public function getStatus(): string;
    
    /**
     * setStatus
     *
     * @param  int $status
     * @return void
     */
    public function setStatus(int $status);

}