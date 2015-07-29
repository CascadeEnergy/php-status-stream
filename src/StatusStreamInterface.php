<?php

namespace CascadeEnergy\StatusStream;

interface StatusStreamInterface
{
    /**
     * Sets the unique identifier for the process. This may be as simple as an OS-level process ID, or a more complex
     * string based on combinations of information such as a machine name, a container ID, and a process ID.
     *
     * By convention a ':' is used to separate multiple elements in a process ID, but that is not enforced.
     *
     * @param string $processId A unique identifier for the process
     */
    public function setProcessId($processId);

    /**
     * Configures the name of the system (and optionally the sub-system and component) that the reporting process
     * belongs to. This is useful to divide processes which report their status information into groups based on the
     * type of processing they do.
     *
     * @param string $system The highest level categorization of the process
     * @param string $subsystem The mid-level categorization of the process
     * @param string $component The lowest level categorization of the process
     */
    public function setSystemId($system, $subsystem = '', $component = '');

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
