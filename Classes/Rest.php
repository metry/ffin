<?php
namespace Classes;

class Rest extends Div
{
    const NOT_FOUND_TEXT = 'not found';

    public function getAll()
    {
        return json_encode($this->parse());
    }

    public function search($ticker)
    {
        $result = array_filter(
            $this->parse(),
            function ($item) use ($ticker) {
                return $item['ticker'] == $ticker;
            }
        );

        if (empty($result)) {
            return json_encode([
                'error' => self::NOT_FOUND_TEXT
            ]);
        }

        return json_encode($result);
    }
}
