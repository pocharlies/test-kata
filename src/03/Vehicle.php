<?php

interface Vehicle
{
    public function startEngine();
    public function accelerate();
    public function stopEngine();
    public function brake();
    public function lightsOn();
    public function changeGear($gear);
    public function stopRadio();
    public function ejectCD();
}
