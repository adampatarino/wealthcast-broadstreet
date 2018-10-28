# Theme Tags
**Header**
After `</header>`
```
<?php if(function_exists('wc_zone')) : ?>
    <div class="wc_leaderboard">
        <?php echo wc_zone('leaderboard'); ?>
    </div>
<?php endif; ?>
```

**Single**
After comments:
```
<?php if(function_exists('wc_zone')) : ?>
    <div class="wc_footer">
        <?php echo wc_zone('footer'); ?>
    </div>
<?php endif; ?>
```

After related:
```
<?php if(function_exists('wc_zone')) : ?>
    <div class="wc_related">
        <?php echo wc_zone('related'); ?>
    </div>
<?php endif; ?>
```