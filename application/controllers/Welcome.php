
<?php

class Welcome extends MY_Controller
{
    public function index()
    {
        $this->load->model('post_model', 'post');

        // $this->post->get_all();

        // $this->post->get(1);
        // $this->post->get_by('title', 'Pigs CAN Fly!');
        // $this->post->get_many_by('status', 'open');

        // $this->post->insert(array(
        // 	'status' => 'open',
        // 	'title' => "I'm too sexy for my shirt"
        // ));

        // $this->post->update(1, array( 'status' => 'closed' ));

        // $this->post->delete(1);

        // $post = $this->post_model->with('author')
        //                  ->with('comments')
        //                  ->get(1);

        // echo $post->author->name;

        // foreach ($post->comments as $comment)
        // {
        //     echo $message;
        // }

        // For `belongs_to` calls, the related key is on the current object, not the foriegn one
        // SELECT * FROM authors WHERE id = $post->author_id
        // ..and for a `has_many` call:
        // SELECT * FROM comments WHERE post_id = $post->id


        // $this->book_model->as_array()
        //          ->get(1);
        // $this->book_model->as_object()
        //          ->get_by('column', 'value');

        $this->load->view('welcome_message');
    }
}
