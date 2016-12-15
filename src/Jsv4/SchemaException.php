<?php

namespace Jsv4;


/**
 * the given schema is not proper
 */
class SchemaException extends \RuntimeException
{
    public $schemaPath;
    public $message;

    public function __construct($schemaPath, $errorMessage)
    {
        parent::__construct($errorMessage);
        $this->schemaPath     = $schemaPath;
        $this->message        = $errorMessage;
    }

    public function prefix($schemaPrefix)
    {
        return new SchemaException(
            $schemaPrefix . $this->schemaPath, $this->message);
    }
}
