<?php

/**
 * User: Junade Ali
 * Date: 23/05/2016
 * Time: 13:08
 */
class Feed implements SplSubject
{
    private $name;
    private $observers = array();
    private $content;

    /**
     * Feed constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Add observer to Feed.
     * @param SplObserver $observer
     * @return null
     */
    public function attach(SplObserver $observer)
    {
        $observerHash = spl_object_hash($observer);
        $this->observers[$observerHash] = $observer;
    }

    /**
     * Detach observer from Feed.
     * @param SplObserver $observer
     */
    public function detach(SplObserver $observer)
    {
        $observerHash = spl_object_hash($observer);
        unset($this->observers[$observerHash]);
    }

    /**
     * Send a news alert and then run the notify method.
     * @param $content
     */
    public function breakOutNews($content)
    {
        $this->content = $content;
        $this->notify();
    }

    /**
     * Get contents of the feed.
     * @return string
     */
    public function getContent()
    {
        return $this->content . " on ". $this->name . ".";
    }

    /**
     * Iterate through observers and run their update methods.
     */
    public function notify()
    {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }
}