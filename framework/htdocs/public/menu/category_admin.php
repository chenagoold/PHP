<?php  $parent = isset($category['childs']);
if(!$parent){
    $delete = '<a href="' . ADMIN . '/category/delete?id='. $id .'" class="delete text-danger"><i class="fa fa-fw fa-close text-danger"></i></a>';

}else{
  $delete = '<i class="fa fa-fw fa-close"></i>';
}
$delete = '<a href="'. ADMIN .'/category/delete?id='. $id .'" class="delete text-danger"><i class="fa fa-fw fa-close text-danger"></i></a>';

?>

<p class="item-p">
    <a class="list-group-item" href="<?=ADMIN;?>/category/edit?id=<?=$id;?>"><?=$category['title'];?></a>
    <span><?=$delete;?></span>

</p>
<?php if($parent):?>
<div class="list-group">
    <?= $this->getMenuHtml($category['childs']);?>
</div>
<?php endif;?>
