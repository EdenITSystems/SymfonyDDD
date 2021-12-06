<?php


namespace App\Application\Reponses;


/**
 * Class CaseResponse
 * @package App\Application\Reponses
 * @author jaures kano <ruddyjaures@mail.com>
 */
class CaseResponse
{

    public bool $type;

    public string $message;

    public array $data;

    /**
     * CaseResponse constructor.
     * @param bool $type
     * @param string $messages
     * @param array $data
     */
    public function __construct(bool $type, string $messages, array $data)
    {
        $this->type = $type;
        $this->message = $messages;
        $this->data = $data;
    }


}