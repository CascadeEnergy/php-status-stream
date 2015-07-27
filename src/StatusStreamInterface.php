<?php

namespace Cascade\StatusStream;

interface StatusStreamInterface
{
    public function update($state, $context = null);

    public function active($context = null);
    public function degraded($context = null);
    public function failed($context = null);
    public function idle($context = null);
}
