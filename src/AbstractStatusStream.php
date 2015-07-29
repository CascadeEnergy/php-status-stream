<?php

namespace CascadeEnergy\StatusStream;

abstract class AbstractStatusStream implements StatusStreamInterface
{
    protected $component;
    protected $processId;
    protected $subsystem;
    protected $system;

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
}
