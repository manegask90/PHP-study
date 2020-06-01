<?php

namespace  Services;

class Calculator
{
    const ACTION_PLUS           = 'plus';
    const ACTION_MINUS          = 'minus';
    const ACTION_MULTIPLICATION = 'multiplication';
    const ACTION_DIVISION       = 'division';

    CONST POSSIBLE_ACTION = [
        self::ACTION_PLUS,
        self::ACTION_MINUS,
        self::ACTION_MULTIPLICATION,
        self::ACTION_DIVISION
    ];

    CONST POSSIBLE_KEYS = ['x', 'y', 'action'];

    private $x = 0;
    private $y = 0;
    private $action;

    /**
     * Calculator constructor.
     *
     * @param array $data
     * @throws \Exception
     */
    public function __construct(array $data)
    {
        $this->validate($data);
        $this->setData($data);
    }

    /**
     * Calculate two values
     *
     * @return float
     */
    public function calculate(): float
    {
        switch ($this->action) {
            case self::ACTION_PLUS:
                $result = $this->x + $this->y;
                break;
            case self::ACTION_MINUS:
                $result = $this->x - $this->y;
                break;
            case self::ACTION_MULTIPLICATION:
                $result = $this->x * $this->y;
                break;
            case self::ACTION_DIVISION:
                $result = $this->x / $this->y;
                break;
        }

        return $result;
    }

    /**
     * Simple setter of data
     *
     * @param array $data
     */
    private function setData(array $data): void
    {
        $this->x      = $data['x'];
        $this->y      = $data['y'];
        $this->action = $data['action'];
    }

    /**
     * Validate incoming data
     *
     * @param array $data
     * @throws \Exception
     */
    private function validate(array $data): void
    {
        if (count($data) < 3) {
            throw new \Exception('Wrong length of current array');
        }

        foreach ($data as $key => $value) {
            if (!in_array($key, self::POSSIBLE_KEYS)) {
                throw new \Exception('Current key : '.$key.' does not exist!');
            }
            if (!isset($data[$key])) {
                throw new \Exception($key.' is empty!');
            }
        }

        if (!in_array($data['action'], self::POSSIBLE_ACTION)) {
            throw new \Exception('Current action '.$data['action'].' does not exist!');
        }

        if ($data['action'] === self::ACTION_DIVISION && $data['y'] == 0) {
            throw new \Exception('Cannot be divided by zero.');
        }
    }
}