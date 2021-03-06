<?php

namespace Support\Contracts;


interface RenderableInterface
{
    /**
     * Get the evaluated contents of the object.
     *
     * @return string
     */
    public function fetch();
    
    /**
     * Get the evaluated contents of the object.
     *
     * @return string
     */
    public function render();
}
