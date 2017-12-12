<?php
// esta clase representa un blogpost de nuestra base de datos
namespace app\models;

use Illuminate\Database\Eloquent\Model;

class BlogPosts extends Model{
    protected $table = 'blog_posts';
    //para que title img_url y content se llenen automaticamente
    protected $fillable = ['title', 'content', 'img_url'];
    

}
// nota se crearon los registros created_at y updated_at que 
// son atributos que eloquent llena por defecto
// se puede desactivar pero nos hace falta
?>