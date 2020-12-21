<?php

// class Achievment_type extends CI_Model
// {
//     public function name()
//     {
//         // you might read the classname
//         // hunt down every capital letter
//         // an replace it with a space
//         // class_basename()
//         //

//         $class = (new ReflectionClass($this))->getShortName();

//         // FirstThousandPoints => First Thousand Points
//         return trim(preg_replace('/[A-Z]/', ' $0', $class));
//     }

//     public function difficulty()
//     {
//         return 'intermediate';
//     }

//     public function icon()
//     {
//         // return '/images/' . 'name converted to lowercase' . '.png';
//         return strtolower(str_replace(' ', '-', $this->name())) . '.png';
//     }
// }
abstract class Achievment_type extends CI_Model
{
    public function name()
    {
        // you might read the classname
        // hunt down every capital letter
        // an replace it with a space
        // class_basename()
        //

        $class = (new ReflectionClass($this))->getShortName();

        // FirstThousandPoints => First Thousand Points
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function difficulty()
    {
        return 'intermediate';
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())) . '.png';
    }
    abstract public function qualifier($user);
}

class First_best_answer extends Achievment_type
{
    public function qualifier($user)
    {
    }
}
class First_thousand_points extends Achievment_type
{
    public function qualifier($user)
    {
    }
}

class Reach_top_50 extends Achievment_type
{
    public function qualifier($user)
    {
    }
}
