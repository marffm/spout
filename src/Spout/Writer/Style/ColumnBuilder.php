<?php

namespace Box\Spout\Writer\Style;

class ColumnBuilder
{

    /**
     * @var Column
     */
    private $column;

    public function __construct()
    {
        $this->column = new Column();
    }

    /**
     * @param int $from
     * @param int $to
     * @param int $width
     * @return ColumnBuilder
     */
    public function setColumnWidth(int $from, int $to, int $width): self
    {
        $this->column->setColumnWidth($from, $to, $width);
        return $this;
    }

    /**
     * @return string
     */
    public function build(): string
    {
        return $this->column->serialize();
    }

}