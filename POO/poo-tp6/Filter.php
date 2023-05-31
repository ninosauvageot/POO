<?php

interface Filter
{
    public function accept(Event $event): bool;


}