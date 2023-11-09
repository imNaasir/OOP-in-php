<?php

trait HasComment
{
    public function comments()
    {
        return "<h5>return all " . get_called_class() . " comments</h5>";
    }
}
