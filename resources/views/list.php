<h3>Категории</h3>
<ul>

<? foreach ($menu as $item){?>
  <li><a href="/list/<?=$item['slag'];?>"><?=$item['name'];?></a> - <span>(<?=$item['count']?>)</span></li>
<?}?>


</ul>




<h3>Список</h3>

<ul>

<?php
foreach ($posts as $post) {
        echo '<li><a href="/post/'.$post->slag.'">'.$post->name.'</a> <span>'.$post->autor->author_name.'</span> - <span>'.$post->category->name.'</span></li>';
    }
?>


</ul>

<?php  echo $posts->links(); ?>

<?php


//dd($posts);


?>





