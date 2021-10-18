<?php

class Cow
{
    private string $eyes = 'oO';
    private string $tongue = 'U';
    private string $poop = '@@@';
    private string $udder = 'W';

    public function say()
    {

    }

    /**
     * @return string
     */
    public function getEyes()
    {
        return $this->eyes;
    }

    /**
     * @param string $eyes
     */
    public function setEyes($eyes)
    {
        $this->eyes = $eyes;
    }

    /**
     * @return string
     */
    public function getTongue()
    {
        return $this->tongue;
    }

    /**
     * @param string $tongue
     */
    public function setTongue($tongue)
    {
        $this->tongue = $tongue;
    }

    /**
     * @return string
     */
    public function getPoop()
    {
        return $this->poop;
    }

    /**
     * @param string $poop
     */
    public function setPoop($poop)
    {
        $this->poop = $poop;
    }

    /**
     * @return string
     */
    public function getUdder()
    {
        return $this->udder;
    }

    /**
     * @param string $udder
     */
    public function setUdder($udder)
    {
        $this->udder = $udder;
    }



}