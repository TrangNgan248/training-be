<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository {
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }



    public function save($data) {
        $post = new $this->post;
        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->save();
        return $post->fresh();
    }

    public function edit($data, $post) {
        // $post = $this->find();
        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->save();
        return $post->fresh();
    }
}