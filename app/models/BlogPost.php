<?php
//esta clase representa un blogpost de nuestra base de datos
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPosts extends Model{
    protected $table = 'blog_posts';
    protected $fillable = ['title', 'content'];//para que title y content se llenen automaticamente
}
//nota se crearon los registros created_at y updated_at que son atributos que eloquent llena por defeto
//se puede desactivar pero nos hace falta
?>