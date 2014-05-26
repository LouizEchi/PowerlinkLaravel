<?php
// file: app/models/Post.php
class Post extends Eloquent {
 
    public function comments()
    {
        return $this->hasMany('Comment');
    }
 
}