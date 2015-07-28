<?php

namespace Cascade\StatusStream;

interface StatusStreamInterface
{
    /**
     * Updates the current state to `active`, possibly with some context data
     *
     * @param mixed|null $context
     */
    public function active($context = null);

    /**
     * Updates the current state to `degraded`, possibly with some context data
     *
     * @param mixed|null $context
     */
    public function degraded($context = null);

    /**
     * Updates the current state to `failed`, possibly with some context data
     *
     * @param mixed|null $context
     */
    public function failed($context = null);

    /**
     * Updates the current state to `idle`, possibly with some context data
     *
     * @param mixed|null $context
     */
    public function idle($context = null);

    /**
     * Updates the current state to given state, possibly with some context data
     *
     * @param string $state
     * @param mixed|null $context
     */
    public function update($state, $context = null);
}
