<?php 
use yii\helpers\Url;

?>

<form method="get" class="search-form" id="search-formhybrid-search" action="<?= Url::to(['search/index']) ?>">
    <div class="search-input">
        <input class="search-text" placeholder="客官常来啊？" type="text" name="title" id="search-texthybrid-search"
        value="" onfocus="if(this.value==this.defaultValue)this.value=&#39;&#39;;"
        onblur="if(this.value==&#39;&#39;)this.value=this.defaultValue;">
        <input type="submit" value="　" class="search-button">
    </div>
</form>