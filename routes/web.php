<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title'=>'Home']);
});

Route::get('/posts', function () {
    return view('posts', ['title'=> 'Posts', 'posts' => Post::all()]);
});

Route::get('/jurusan', function () {
    return view('jurusan', ['title'=> 'Jurusan', 'jurusan'=> [
        [
            'ID' => 1,
            'Jurusan'=> 'DKV',
            'Kepanjangan'=> '(Desain Komunikasi Visual)',
            'Isi'=> '
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex reprehenderit voluptate, mollitia a impedit corrupti velit alias eum obcaecati debitis consequatur voluptates dolor 
            repudiandae iure magnam perferendis dignissimos fuga doloribus rem nesciunt laudantium ipsam, animi delectus. Ullam impedit ex consequuntur asperiores reiciendis. Molestias 
            laboriosam magni at id, quod minus quaerat!
            ',
        ],
        [
            'ID'=> 2,
            'Jurusan'=> 'TKJ',
            'Kepanjangan'=> '(Teknik Komputer Jaringan)',
            'Isi'=> '
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis voluptatem necessitatibus, obcaecati mollitia minima quas consequatur explicabo debitis voluptatum enim rem 
            magni id aliquam quis. Id dolorem eveniet blanditiis, voluptatem sit nisi iste placeat qui voluptatum porro ut sapiente necessitatibus maiores ex soluta commodi? Eligendi deleniti 
            nulla suscipit asperiores possimus!
            ',
        ],
        [
            'ID'=> 3,
            'Jurusan'=> 'RPL',
            'Kepanjangan'=> '(Rekayasa Perangkat Lunak)',
            'Isi'=> '
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est iusto a explicabo et possimus maiores provident veritatis numquam dolorum voluptatum, fugiat autem corporis 
            quibusdam? Ratione vitae, exercitationem voluptates necessitatibus odit blanditiis doloremque nulla maiores magnam! Quaerat voluptatem vel optio iure dolorum perferendis unde 
            adipisci ipsam eum hic dolor, inventore quod!
            '
        ]
    ]]);
});

Route::get('/profile', function () {
    return view('profile', ['title'=> 'Profile']);
});

Route::get('/contacts', function () {
    return view('contacts', ['title'=> 'Contacts']);
});

// {ID} menangkap data setelah /, dan menjadikannya ID
// (ID) = mengambil data ID supaya bisa di pakai
Route::get('/berita_satuan/{ID}', function ($ID) {
    $post = Post::all();

    // ambil 1 data yang sesuai dengan ID yang ada
    // hasilnya hanya menampilkan berita yang sesuai dengan ID yang diambil
    $post= Post::find($ID);

    return view('berita_satuan', ['title'=> 'Berita Satuan', 'posts'=>$post]);
});

Route::get('/detail_jurusan/{ID}', function ($ID){
    $jurusan = Post::all();

    $post= Arr::first($jurusan, function($post) use($ID){
        return $post['ID'] == $ID;

        // return view('detail_jurusan', ['title'=> 'Berita Satuan', 'posts'=>$post]);
    });
});