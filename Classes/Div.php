<?php
namespace Classes;

class Div
{
    protected function get()
    {
        $data = file_get_contents(__DIR__.'/../src/div.csv');

        $data = explode("\r", $data);

        return $data;
    }

    public function parse()
    {
        $data = $this->get();

        if (!$data) {
            return false;
        }

        $result = [];

        foreach ($data as $key => $value) {
            $param = explode(";", $value);
            $result[$key]['ticker'] = $param[0];
            $result[$key]['date_pay'] = $param[1];
            $result[$key]['amount'] = $param[2];
            $result[$key]['date_ex'] = $param[3];
        }

        return $result;
    }
}
