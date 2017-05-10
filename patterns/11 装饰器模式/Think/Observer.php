<?php
namespace Think;

interface Observer
{
    function update($event_info = null);
}
