<div class="list-group">
                <a href="" class="list-group-item  list-group-item-action bg-dark text-light disabled rounded-0 text-center">category</a>
            <?php foreach($category as $cat): ?>
                <a href="" class="list-group-item list-group-item-action rounded-0 "><?= $cat->title; ?></a>
                <?php endforeach; ?>
            </div>