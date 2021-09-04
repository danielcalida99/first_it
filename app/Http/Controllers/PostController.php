<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $url = "https://phambatrungthanh.github.io/sample-test/web-test/json/posts.json";

        //call api
        $json = file_get_contents($url);
        $object = json_decode($json);

        $data_posts = json_decode(json_encode($object), true);

        $authors = $this->getAuthors();

        $posts = array();
        foreach($data_posts as $post){
            
            foreach ($authors as $key => $val) {
                if ($val['id'] === $post['id']) {
                    $author_info = $val;
                }
            }

            $timestamp = strtotime($post['created_at']);
            $new_date_format = date('l, F j, Y H:i', $timestamp);

            $posts[] = array(
                'author_name' => $author_info['name'],
                'author_avatar' => $author_info['avatar_url'],
                'title' => $post['title'],
                'body' => $post['body'],
                'image_url' => $post['image_url'],
                'created_at' => $new_date_format
            );
        }
     
        return view('welcome',[
            "timezone" => date_default_timezone_get(),
            "posts" => $posts
        ]);
    }

    public function getAuthor($author_id) {
	
        $authors = $this->getAuthors();
    
        foreach ($authors as $key => $val) {
            if ($val['id'] === $author_id) {
                return $val;
            }
        }
        return array();
    }
    

    public function getAuthors() {
    
        $url = "https://phambatrungthanh.github.io/sample-test/web-test/json/authors.json";
    
        //call api
        $json = file_get_contents($url);
        $object = json_decode($json);
    
        $authors = json_decode(json_encode($object), true);
    
        return $authors;
        
     }
}
