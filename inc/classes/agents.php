<?php
class Agents
{
    public function __construct($agentData)
    {
        // Loop through the array and save each column as a variable/property
        foreach($agentData as $key => $value) {
            $this->$key = $value;
        }
    }

    public function setData($name)
    {
    }

    public function getData($name)
    {
        return $this->$name;
    }

    public function toString()
    {
        global $agentData;
        return implode(',', $agentData);
    }
}
