<?php

namespace Box\Spout\Writer\Style;

class Column
{
    /** @var array  */
    private $cols;

    /**
     * @param int $from
     * @param int $to
     * @param int $width
     */
    public function setColumnWidth(int $from, int $to, int $width): void
    {
        $this->cols[] = [
            'min' => $from,
            'max' => $to,
            'width' => $width
        ];
    }

    /**
     * @return string
     */
    public function serialize(): string
    {
        $string = '<cols>';
        if (! empty($this->cols)) {
            foreach ($this->cols as $col) {
                $string .= '<col ';
                $string .= 'min="' . $col['min'] . '" ';
                $string .= 'max="' . $col['max'] . '" ';
                $string .= 'width="' . $col['width'] . '"';
                $string .= ' customWidth="1"/>';
            }
        }
        $string .= '</cols>';
        return $string;
    }

}