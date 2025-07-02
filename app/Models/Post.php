<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
            [
                'ID' => 1,
                'Judul'=> 'Perayaan HUT RI 79',
                'Isi'=> '
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque id reprehenderit at quas odio numquam ipsum inventore possimus eos, recusandae quibusdam esse debitis voluptatum 
                obcaecati sapiente a facilis quam porro delectus saepe ullam quasi deserunt? Nesciunt, qui? Amet veritatis velit impedit. Delectus est, cupiditate nobis voluptatum repudiandae 
                odio hic, porro aliquam ut omnis explicabo placeat assumenda dolorum illo molestias sapiente fugiat impedit possimus, facere veritatis! Animi fugit quia nobis temporibus officia 
                ratione aut harum voluptatem, provident praesentium corporis neque quam ut maiores nam porro repellat laborum sed dolorem dicta culpa distinctio. Sit nobis expedita facere ut 
                voluptatum unde maiores harum.
                ',
                'Author' => 'Arleyxa'
            ],
            [
                'ID'=> 2,
                'Judul'=> 'Perayaan 17 Agustusan',
                'Isi'=> '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fuga dignissimos earum et dicta temporibus unde laborum iure sit neque. Impedit reprehenderit doloribus, expedita 
                ipsam repellendus asperiores fuga id at quae hic nemo saepe nostrum! Tempore, aliquid? Ducimus voluptas unde quod ad consequuntur debitis, vitae soluta accusantium molestias 
                amet dicta expedita aliquam eos officia quidem illum iusto vel rerum excepturi est ullam magni. Eum error consectetur aperiam et molestias optio obcaecati odit, deleniti quam 
                ea odio assumenda, totam, veritatis alias dignissimos culpa. Voluptate beatae quam nam doloribus asperiores quo, odio maiores facere exercitationem repellat quisquam, debitis 
                nulla repudiandae labore soluta?
                ',
                'Author'=> 'Naufal'
            ]
    
        ];
    }

    public static function find($ID){
        return Arr::first(Post::all(), function($post) use($ID) {
            return $post['ID'] == $ID;
        });

    }
}


?>