<?php namespace Belt;

class Objects extends Toolset {

    /**
     * Determine whether the given value is null
     *
     * @param  mixed $value
     * @return boolean
     */
    public function isNull($value)
    {
        return \is_null($value);
    }

    /**
     * Determine whether the given value is traversable
     *
     * @param  mixed $value
     * @return boolean
     */
    public function isTraversable($value)
    {
        return \is_array($value) or ($value instanceof \Traversable);
    }

    /**
     * Determine whether the given value is an array
     *
     * @param  mixed $value
     * @return boolean
     */
    public function isArray($value)
    {
        return \is_array($value);
    }

    /**
     * Determine whether the given value is an instance of \DateTime
     *
     * @param  mixed $value
     * @return boolean
     */
    public function isDate($value)
    {
        return $value instanceof \DateTime;
    }

    /**
     * Determine whether the given value is a float or an integer
     *
     * @param  mixed $value
     * @return boolean
     */
    public function isNumber($value)
    {
        return \is_integer($value) or \is_float($value);
    }

}

