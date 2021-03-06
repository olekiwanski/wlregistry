<?php

namespace WLRegistryAPI;

class ResultEntries extends Result
{
    protected array $entries;

    public function __construct(array $data)
    {
        $this->requestDateTime = $data['requestDateTime'];
        $this->requestId = $data['requestId'];
        if (!empty($data['entries'])) {
            foreach ($data['entries'] as $entry) {
                $this->entries[] = new Entry($entry);
            }
        }
        return $this;
    }

    public function getEntries(): array
    {
        return $this->entries;
    }


}