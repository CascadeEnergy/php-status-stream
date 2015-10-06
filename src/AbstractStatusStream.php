<?php

namespace CascadeEnergy\StatusStream;

abstract class AbstractStatusStream implements StatusStreamInterface
{
    /** @var string The lowest level identifier for the system the process belongs to */
    protected $component = '';

    /** @var string The unique ID for this particular instance of a process */
    protected $processId = '';

    /** @var string The mid-level identifier for the system the process belongs to */
    protected $subsystem = '';

    /** @var string The highest level identifier for the system the process belongs to */
    protected $system = '';

    /** @var string The current version of the system -> subsystem -> component this process represents */
    protected $version = '';

    /**
     * Sets the unique identifier for the process. This may be as simple as an OS-level process ID, or a more complex
     * string based on combinations of information such as a machine name, a container ID, and a process ID.
     *
     * By convention a ':' is used to separate multiple elements in a process ID, but that is not enforced.
     *
     * @param string $processId A unique identifier for the process
     */
    public function setProcessId($processId)
    {
        $this->processId = $processId;
    }

    /**
     * Configures the name of the system (and optionally the sub-system and component) that the reporting process
     * belongs to. This is useful to divide processes which report their status information into groups based on the
     * type of processing they do.
     *
     * @param string $system The highest level categorization of the process
     * @param string $subsystem The mid-level categorization of the process
     * @param string $component The lowest level categorization of the process
     */
    public function setSystemId($system, $subsystem = '', $component = '')
    {
        $this->system = $system;
        $this->subsystem = $subsystem;
        $this->component = $component;
    }

    /**
     * Sets the version number / version string to be included with all status updates.
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }
}
