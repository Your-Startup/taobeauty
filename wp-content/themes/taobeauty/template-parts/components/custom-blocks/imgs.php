<?php
/**
 * @var $this->data
 */
$data = $this->data;
$class = 'category__image';
?>
<?php switch (count($data)) {
    case 2: 
        $class .= ' double';
        break;
    case 3: 
        $class .= ' tripple';
         break;
}?>

<li class="<?= $class ?>">
    <?php foreach ($data as $item) : ?>
        <img src="<?= $item['img'] ?>" alt="">
    <?php endforeach; ?>
</li>

